<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use PHPUnit\Framework\Attributes\DataProvider;
use VanCodX\Data\Validation\Validation as V;
use VanCodX\Testing\PHPUnit\TestCase;

class BoolTraitTest extends TestCase
{
    /**
     * @return mixed[][]
     * @phpstan-return array<int, array{0: mixed, 1: bool}>
     */
    public static function isBoolDataProvider(): array
    {
        $passingValues = [
            true,
            false
        ];
        $fallingValues = [
            'true',
            'false'
        ];
        return array_merge(
            array_map(fn (mixed $value) => [$value, true], $passingValues),
            array_map(fn (mixed $value) => [$value, false], $fallingValues)
        );
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isBoolDataProvider')]
    public function testIsBool(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isBool($value));
    }
}
