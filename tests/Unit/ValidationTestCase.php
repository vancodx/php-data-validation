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
     * @param list<mixed> $passingValues
     * @return list<mixed>
     */
    protected static function buildFallingValues(array $passingValues): array
    {
        /** @phpstan-ignore return.type */
        return array_diff(static::getAnyValues(), $passingValues);
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
