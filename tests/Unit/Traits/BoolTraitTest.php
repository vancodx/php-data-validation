<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\ValidationTestCase;
use VanCodX\Data\Validation\Validation as V;

class BoolTraitTest extends ValidationTestCase
{
    /**
     * @return mixed[][]
     * @phpstan-return array<int, array{0: mixed, 1: bool}>
     */
    public static function isBoolDataProvider(): array
    {
        return static::buildDataProvider([
            true,
            false
        ]);
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
