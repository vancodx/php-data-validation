<?php declare(strict_types=1);

namespace Tests\Unit;

use VanCodX\Testing\PHPUnit\TestCase;

abstract class ValidationTestCase extends TestCase
{
    /**
     * @return list<mixed>
     */
    protected static function getAnyValues(): array
    {
        return [
            null,
            true, false,
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
            [true, false],
            [0, 1, -1],
            [0.0, 1.0, -1.0],
            ['0', '1', '-1'],
            [''],
            []
        ];
    }

    /**
     * @param list<mixed> $passingValues
     * @return list<mixed>
     */
    protected static function buildFallingValues(array $passingValues): array
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
     * @return list<array{mixed, bool}>
     */
    protected static function buildDataSet(array $passingValues): array
    {
        $fallingValues = static::buildFallingValues($passingValues);
        return array_merge(
            array_map(fn (mixed $value) => [$value, true], $passingValues),
            array_map(fn (mixed $value) => [$value, false], $fallingValues)
        );
    }
}
