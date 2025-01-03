<?php declare(strict_types=1);

namespace Tests\Unit;

use ArrayAccess;
use ArrayObject;
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
            ArrayObject::class,
            ArrayAccess::class
        ];
    }

    /**
     * @return ArrayObject<non-empty-string, mixed>
     */
    protected static function getArrayObjectInstance(): ArrayObject
    {
        /** @var ArrayObject<non-empty-string, mixed> $instance */
        static $instance = new ArrayObject();
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
