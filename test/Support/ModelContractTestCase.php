<?php

declare(strict_types=1);

namespace Leadspedia\Test\Support;

use Leadspedia\ObjectSerializer;
use PHPUnit\Framework\TestCase;

abstract class ModelContractTestCase extends TestCase
{
    protected function assertModelProperty(string $modelClass, string $name, string $getter, string $setter, string $type): void
    {
        $model = new $modelClass();
        $value = ContractValues::forType($type);
        self::assertSame($model, $model->$setter($value));
        self::assertSame($value, $model->$getter());
        self::assertSame($value, $model[$name]);
        self::assertArrayHasKey($name, $model);

        $alternate    = ContractValues::forType($type, true);
        $model[$name] = $alternate;
        self::assertSame($alternate, $model->$getter());
        self::assertSame($alternate, $model[$name]);
        self::assertTrue(isset($model[$name]));
        unset($model[$name]);
        self::assertFalse(isset($model[$name]));
    }

    protected function assertModelRoundTrip(string $modelClass, array $propertyTypes): void
    {
        $data = [];
        foreach ($propertyTypes as $name => $type) {
            $data[$name] = ContractValues::forType($type);
        }
        $model = new $modelClass($data);
        self::assertSame([], $model->listInvalidProperties());
        self::assertTrue($model->valid());
        self::assertSame($data, json_decode(json_encode($model, JSON_THROW_ON_ERROR), true, 512, JSON_THROW_ON_ERROR));
        $decoded = ObjectSerializer::deserialize(json_encode($data, JSON_THROW_ON_ERROR), $modelClass);
        self::assertInstanceOf($modelClass, $decoded);
        self::assertEquals($model, $decoded);
        self::assertSame($data, json_decode((string) $model, true, 512, JSON_THROW_ON_ERROR));
    }
}
