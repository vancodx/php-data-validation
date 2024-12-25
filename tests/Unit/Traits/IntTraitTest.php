<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\ValueTestCase;
use VanCodX\Data\Validation\Validation as V;

class IntTraitTest extends ValueTestCase
{
    /**
     * @return list<array{mixed, bool}>
     */
    public static function isIntDataProvider(): array
    {
        return static::buildDataSet([
            0,
            1,
            1000000,
            -1,
            -1000000
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isIntDataProvider')]
    public function testIsInt(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isInt($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isUIntDataProvider(): array
    {
        return static::buildDataSet([
            0,
            1,
            1000000
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isUIntDataProvider')]
    public function testIsUInt(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isUInt($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isPosIntDataProvider(): array
    {
        return static::buildDataSet([
            1,
            1000000
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isPosIntDataProvider')]
    public function testIsPosInt(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isPosInt($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isNegIntDataProvider(): array
    {
        return static::buildDataSet([
            -1,
            -1000000
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isNegIntDataProvider')]
    public function testIsNegInt(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isNegInt($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isIntIdDataProvider(): array
    {
        return static::buildDataSet([
            1,
            1000000
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isIntIdDataProvider')]
    public function testIsIntId(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isIntId($value));
    }
}
