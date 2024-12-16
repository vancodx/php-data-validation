<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\ValidationTestCase;
use VanCodX\Data\Validation\Validation as V;

class MiscTraitTest extends ValidationTestCase
{
    /**
     * @return mixed[][]
     * @phpstan-return array<int, array{0: mixed, 1: bool}>
     */
    public static function isNullDataProvider(): array
    {
        return static::buildDataProvider([
            null
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isNullDataProvider')]
    public function testIsNull(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isNull($value));
    }

    /**
     * @return mixed[][]
     * @phpstan-return array<int, array{0: mixed, 1: bool}>
     */
    public static function isTrueDataProvider(): array
    {
        return static::buildDataProvider([
            true
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isTrueDataProvider')]
    public function testIsTrue(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isTrue($value));
    }
}
