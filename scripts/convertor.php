<?php

$source = json_decode(file_get_contents(__DIR__ . '/../schema/api-docs.json'));

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
        "https"
    ],
    "consumes" => [
        "application/json"
    ],
    "produces" => [
        "application/json"
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

    $pathParams = json_decode($endpoint->request->pathParams, true);

    if (!empty($pathParams['properties'])) {
        //var_dump($pathParams);
    }

    $queryParams = json_decode($endpoint->request->queryString, true);

    if (!empty($queryParams['properties'])) {
        //var_dump($queryParams);
    }

    if (isset($endpoint->request->headers)) {
        $headerParams = json_decode($endpoint->request->headers, true);
        //var_dump($headerParams);
        if (!empty($headerParams['properties'])) {
            //var_dump($headerParams);
        }
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
                    ]
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
            'format'      => $queryParam['format'] ?? '',
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
