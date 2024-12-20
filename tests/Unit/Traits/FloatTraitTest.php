<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\ValidationTestCase;
use VanCodX\Data\Validation\Validation as V;

class FloatTraitTest extends ValidationTestCase
{
    /**
     * @return list<array{mixed, bool}>
     */
    public static function isFloatDataProvider(): array
    {
        return static::buildDataSet([
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
    #[DataProvider('isFloatDataProvider')]
    public function testIsFloat(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isFloat($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isUFloatDataProvider(): array
    {
        return static::buildDataSet([
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
    #[DataProvider('isUFloatDataProvider')]
    public function testIsUFloat(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isUFloat($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isPosFloatDataProvider(): array
    {
        return static::buildDataSet([
            1.0,
            1000000.1
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isPosFloatDataProvider')]
    public function testIsPosFloat(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isPosFloat($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isNegFloatDataProvider(): array
    {
        return static::buildDataSet([
            -1.0,
            -1000000.1
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isNegFloatDataProvider')]
    public function testIsNegFloat(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isNegFloat($value));
    }
}
