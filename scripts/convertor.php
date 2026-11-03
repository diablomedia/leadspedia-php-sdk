<?php

$source = json_decode(file_get_contents(__DIR__ . '/../schema/api-docs.json'), false, 512, JSON_THROW_ON_ERROR);

if (isset($source->openapi)) {
    $output = convertOfficialDocument($source);
    file_put_contents(__DIR__ . '/../schema/openapi.json', json_encode($output, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR));
    exit(0);
}

$securityDefinitions = [];
$securityArray       = [];

foreach ($source->securitySchemes as $name => $security) {
    $i = 0;
    foreach ($security as $location => $params) {
        foreach ($params as $param) {
            $securityDefinitions[$name . $i] = [
                'type' => $name,
                'in'   => str_replace(['queryString'], ['query'], $location),
                'name' => $param->name,
            ];
            $i++;
        }
    }
}

foreach (array_keys($securityDefinitions) as $name) {
    $securityArray[] = [$name => []];
}

$output = [
    "swagger" => "2.0",
    "info"    => [
        "version"     => $source->version,
        "title"       => $source->publishSettings->title,
        "description" => "",
        "contact"     => new stdClass(),
    ],
    "host"                => str_replace('https://', '', $source->forwardHost),
    "basePath"            => $source->basePath,
    "securityDefinitions" => $securityDefinitions,
    "schemes"             => [
        "https",
    ],
    "consumes" => [
        "application/json",
    ],
    "produces" => [
        "application/json",
    ],
    "paths"       => [],
    "definitions" => new stdClass(),
    "tags"        => [],
    "security"    => $securityArray,
    "responses"   => new stdClass(),
    "parameters"  => new stdClass(),
];

foreach ($source->resources->endpoints as $endpoint) {
    $path = $endpoint->request->path;

    // As of this writing it seems the LeadsPedia docs added a "Get Delivered" endpoint, but left the path
    // as "getSold.do", so forcing this to "getDelivered.do" to prevent duplicate issues
    if ($path === '/leads/getSold.do' && $endpoint->name === 'Get Delivered') {
        $path = '/leads/getDelivered.do';
    }

    $pathParams = json_decode($endpoint->request->pathParams, true);

    $queryParams = json_decode($endpoint->request->queryString, true);

    if (isset($endpoint->request->headers)) {
        $headerParams = json_decode($endpoint->request->headers, true);
    }

    if (isset($output['paths'][$path])) {
        throw new Exception('Duplicate path: ' . $path);
    } else {
        $output['paths'][$path] = [];
    }

    $request = [
        "description" => "",
        "summary"     => $endpoint->name,
        // This will cause the OpenAPI Generator to group endpoints into the path prefix
        // rather than putting them all in one file
        "tags"        => [explode('/', $path)[1]],
        "operationId" => str_replace(['/', '.'], '', $path),
        "deprecated"  => false,
        "consumes"    => $endpoint->consumes,
        "produces"    => ['application/json'],
        "parameters"  => [],
        "responses"   => $endpoint->responses,
    ];

    if (empty($request['responses'])) {
        if ($endpoint->request->method === 'get') {
            // Leadspedia doesn't have responses in its API docs, faking this so we can get a return from the
            // SDK generators. Just doing for GET requests for now.
            $request['responses']['200'] = [
                "description" => '',
                'schema'      => [
                    'type'       => 'object',
                    'properties' => [
                        'success' => [
                            'type' => 'boolean',
                        ],
                        'message' => [
                            'type' => 'string',
                        ],
                        'response' => [
                            'type' => 'object',
                        ],
                        'data' => [
                            'type' => 'object',
                        ],
                    ],
                ],
            ];
        } elseif ($endpoint->request->method === 'post') {
            $request['responses']['200'] = [
                "description" => 'post-response',
                'schema'      => [
                    'type'       => 'object',
                    'properties' => [
                        'success' => [
                            'type' => 'boolean',
                        ],
                        'message' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ];
        } else {
            $request['responses']['200'] = [
                "description" => '',
            ];
        }
    }

    foreach ($queryParams['properties'] as $name => $queryParam) {
        $param = [
            'name'        => $name,
            'in'          => 'query',
            'required'    => in_array($name, $queryParams['required'] ?? []),
            'type'        => is_array($queryParam['type']) ? $queryParam['type'][0] : ($queryParam['type'] ?? ''),
            'description' => '',
            'format'      => $queryParam['format']  ?? '',
            'default'     => $queryParam['default'] ?? '',
        ];

        if (isset($queryParam['enum'])) {
            $param['enum'] = $queryParam['enum'];
        }

        $request['parameters'][] = $param;
    }

    $output['paths'][$path][$endpoint->request->method] = $request;
}

file_put_contents(__DIR__ . '/../schema/openapi.json', json_encode($output, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

/**
 * Normalize the published OpenAPI 3 Core contract for the existing PHP generator.
 * The official document currently has no response schemas, so retain the SDK's
 * generic response envelopes rather than generating methods that return void.
 */
function convertOfficialDocument(stdClass $source): array
{
    if (!str_starts_with($source->openapi, '3.')) {
        throw new RuntimeException('Unsupported OpenAPI version: ' . $source->openapi);
    }
    $server = parse_url($source->servers[0]->url ?? '');
    if (($server['scheme'] ?? '') !== 'https' || empty($server['host']) || !empty(trim($server['path'] ?? '', '/'))) {
        throw new RuntimeException('Expected an HTTPS server URL without a path.');
    }
    $definitions = [];
    foreach (['inline_response_200' => ['success', 'message'], 'inline_response_200_1' => ['success', 'message', 'response', 'data']] as $name => $properties) {
        $definitions[$name] = ['type' => 'object', 'properties' => []];
        foreach ($properties as $property) {
            $definitions[$name]['properties'][$property] = ['type' => match ($property) {
                'success' => 'boolean',
                'message' => 'string',
                default   => 'object',
            }];
        }
    }
    $securityDefinitions = [];
    foreach ($source->components->securitySchemes as $name => $scheme) {
        if ($scheme->type !== 'http' || $scheme->scheme !== 'basic') {
            throw new RuntimeException('Unsupported security scheme: ' . $name);
        }
        $securityDefinitions[$name] = ['type' => 'basic'];
    }
    $output = [
        'swagger'             => '2.0',
        'info'                => $source->info,
        'host'                => $server['host'] . (isset($server['port']) ? ':' . $server['port'] : ''),
        'basePath'            => '/core/v2',
        'schemes'             => ['https'],
        'consumes'            => ['application/json'],
        'produces'            => ['application/json'],
        'securityDefinitions' => $securityDefinitions,
        'paths'               => [],
        'definitions'         => $definitions,
    ];
    foreach ($source->paths as $fullPath => $methods) {
        if (!str_starts_with($fullPath, '/core/v2/')) {
            continue;
        }
        $path = substr($fullPath, strlen('/core/v2'));
        foreach ($methods as $method => $operation) {
            if (!in_array($method, ['get', 'post', 'put', 'patch', 'delete', 'head', 'options', 'trace'], true)) {
                throw new RuntimeException('Unsupported path entry: ' . $fullPath . ' ' . $method);
            }
            if (isset($operation->requestBody)) {
                throw new RuntimeException('Request bodies need explicit conversion: ' . $fullPath);
            }
            $request = [
                'summary'     => $operation->summary     ?? '',
                'description' => $operation->description ?? '',
                'tags'        => [explode('/', $path)[1]],
                'operationId' => str_replace(['/', '.'], '', $path),
                'deprecated'  => $operation->deprecated ?? false,
                'security'    => $operation->security   ?? $source->security ?? [],
                'parameters'  => [],
                'responses'   => [],
            ];
            foreach ($operation->parameters ?? [] as $parameter) {
                if ($parameter->in !== 'query' || !isset($parameter->schema->type)) {
                    throw new RuntimeException('Unsupported parameter: ' . $fullPath);
                }
                $schema                  = (array) $parameter->schema;
                $request['parameters'][] = array_merge($schema, [
                    'name'        => $parameter->name,
                    'in'          => $parameter->in,
                    'required'    => $parameter->required    ?? false,
                    'description' => $parameter->description ?? '',
                ]);
            }
            foreach ($operation->responses as $status => $response) {
                $normalized = ['description' => $response->description ?? ''];
                if (isset($response->content->{'application/json'}->schema)) {
                    $normalized['schema'] = $response->content->{'application/json'}->schema;
                }
                $request['responses'][$status] = $normalized;
            }
            // Preserve documented responses, supplementing only an undocumented success body.
            if (!isset($request['responses']['200']['schema'])) {
                $model                       = $method === 'get' ? 'inline_response_200_1' : 'inline_response_200';
                $request['responses']['200'] = array_merge($request['responses']['200'] ?? ['description' => 'SDK response envelope (not specified upstream)'], [
                    'schema' => ['$ref' => '#/definitions/' . $model],
                ]);
            }
            $output['paths'][$path][$method] = $request;
        }
    }
    if ($output['paths'] === []) {
        throw new RuntimeException('The official document contains no Core API paths.');
    }
    return $output;
}
