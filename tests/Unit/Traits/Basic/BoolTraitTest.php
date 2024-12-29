<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Basic;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\BasicTestCase;
use VanCodX\Data\Validation\Validation as V;

class BoolTraitTest extends BasicTestCase
{
    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isBoolDataProvider(): array
    {
        return static::buildDataSet([
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

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isTrueDataProvider(): array
    {
        return static::buildDataSet([
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

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isFalseDataProvider(): array
    {
        return static::buildDataSet([
            false
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isFalseDataProvider')]
    public function testIsFalse(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isFalse($value));
    }
}
