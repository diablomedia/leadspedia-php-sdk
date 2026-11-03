<?php

declare(strict_types=1);

namespace Leadspedia\Test\Support;

use InvalidArgumentException;

final class ContractValues
{
    public static function forSchema(array $schema): mixed
    {
        if (isset($schema['enum'])) {
            return $schema['enum'][0];
        }

        return match ($schema['format'] ?? '') {
            'date'      => '2026-01-02',
            'date-time' => '2026-01-02T03:04:05+00:00',
            'time'      => '03:04:05',
            'email'     => 'contract@example.test',
            'uri'       => 'https://example.test/path?a=1&b=2',
            default     => self::forType($schema['type']),
        };
    }

    public static function forType(string $type, bool $alternate = false): mixed
    {
        return match ($type) {
            'bool', 'boolean'           => !$alternate,
            'int', 'integer'            => $alternate ? 0 : 42,
            'number', 'float', 'double' => $alternate ? 0.0 : 12.5,
            'string'                    => $alternate ? '' : 'Sample & + / ? value',
            'object'                    => $alternate ? [] : ['recordID' => 42],
            default                     => throw new InvalidArgumentException('Add a contract fixture for type ' . $type),
        };
    }
}
