<?php declare(strict_types=1);

namespace Tests\Unit;

use VanCodX\Testing\PHPUnit\TestCase;

abstract class ValidationTestCase extends TestCase
{
    /**
     * @return mixed[]
     */
    protected static function getAnyValues(): array
    {
        return [
            true,
            false,
            1,
            0,
            'true',
            'false',
            '',
            null
        ];
    }

    /**
     * @param mixed[] $passingValues
     * @return mixed[]
     */
    protected static function buildFallingValues(array $passingValues): array
    {
        return array_diff(static::getAnyValues(), $passingValues);
    }

    /**
     * @param mixed[] $passingValues
     * @return mixed[][]
     * @phpstan-return array<int, array{0: mixed, 1: bool}>
     */
    protected static function buildDataProvider(array $passingValues): array
    {
        $fallingValues = static::buildFallingValues($passingValues);
        return array_merge(
            array_map(fn (mixed $value) => [$value, true], $passingValues),
            array_map(fn (mixed $value) => [$value, false], $fallingValues)
        );
    }
}
