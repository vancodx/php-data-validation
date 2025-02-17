<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Basic;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\Traits\BasicTraitsTestCase;
use VanCodX\Data\Validation\Validation as V;

class NumTraitTest extends BasicTraitsTestCase
{
    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isNumDataProvider(): array
    {
        return static::buildDataSet([
            0,
            1,
            1000000,
            -1,
            -1000000,
            0.0,
            1.0,
            1000000.1,
            -1.0,
            -1000000.1
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isNumDataProvider')]
    public function testIsNum(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isNum($value));
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isUNumDataProvider(): array
    {
        return static::buildDataSet([
            0,
            1,
            1000000,
            0.0,
            1.0,
            1000000.1
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isUNumDataProvider')]
    public function testIsUNum(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isUNum($value));
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isPosNumDataProvider(): array
    {
        return static::buildDataSet([
            1,
            1000000,
            1.0,
            1000000.1
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isPosNumDataProvider')]
    public function testIsPosNum(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isPosNum($value));
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isNegNumDataProvider(): array
    {
        return static::buildDataSet([
            -1,
            -1000000,
            -1.0,
            -1000000.1
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isNegNumDataProvider')]
    public function testIsNegNum(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isNegNum($value));
    }
}
