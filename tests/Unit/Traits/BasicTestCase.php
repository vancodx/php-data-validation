<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use ArrayAccess;
use ArrayObject;
use Tests\Support\MyArrayObject1;
use Tests\Support\MyArrayObject2;
use VanCodX\Testing\PHPUnit\TestCase;

abstract class BasicTestCase extends TestCase
{
    /**
     * @return list<mixed>
     */
    protected static function getAnyValues(): array
    {
        return [
            null,
            STDOUT,
            true,
            false,
            0,
            1,
            1000000,
            -1,
            -1000000,
            0.0,
            1.0,
            1000000.1,
            -1.0,
            -1000000.1,
            'true',
            'false',
            '0',
            '1',
            '-1',
            '0.0',
            '1.0',
            '-1.0',
            '',
            [null],
            ['STDOUT' => STDOUT],
            [true, false],
            ['a' => 0, 'b' => 1],
            [0.0, 1.0, -1.0],
            ['x' => '0.0', 'y' => '1.0', 'z' => '-1.0'],
            [null, false, -1.0, ['empty-string' => '']],
            ['STDOUT' => STDOUT, 'b' => 1, 'z' => '-1.0', 'empty-array' => []],
            [''],
            [],
            static::getArrayObjectInstance(),
            static::getMyArrayObject1Instance(),
            static::getMyArrayObject2Instance(),
            ArrayObject::class,
            MyArrayObject1::class,
            MyArrayObject2::class,
            ArrayAccess::class
        ];
    }

    /**
     * @return ArrayObject<int|string, mixed>
     */
    protected static function getArrayObjectInstance(): ArrayObject
    {
        /** @var ArrayObject<int|string, mixed> $instance */
        static $instance = new ArrayObject();
        return $instance;
    }

    /**
     * @return MyArrayObject1<int|string, mixed>
     */
    protected static function getMyArrayObject1Instance(): MyArrayObject1
    {
        /** @var MyArrayObject1<int|string, mixed> $instance */
        static $instance = new MyArrayObject1();
        return $instance;
    }

    /**
     * @return MyArrayObject2<int|string, mixed>
     */
    protected static function getMyArrayObject2Instance(): MyArrayObject2
    {
        /** @var MyArrayObject2<int|string, mixed> $instance */
        static $instance = new MyArrayObject2();
        return $instance;
    }

    /**
     * @param list<mixed> $passingValues
     * @return list<mixed>
     */
    protected static function getFallingValues(array $passingValues): array
    {
        $fallingValues = [];
        foreach (static::getAnyValues() as $value) {
            if (!in_array($value, $passingValues, true)) {
                $fallingValues[] = $value;
            }
        }
        return $fallingValues;
    }

    /**
     * @param list<mixed> $passingValues
     * @return list<array{0: mixed, 1: bool}>
     */
    protected static function buildDataSet(array $passingValues): array
    {
        $fallingValues = static::getFallingValues($passingValues);
        return array_merge(
            array_map(static fn (mixed $value): array => [$value, true], $passingValues),
            array_map(static fn (mixed $value): array => [$value, false], $fallingValues)
        );
    }
}
