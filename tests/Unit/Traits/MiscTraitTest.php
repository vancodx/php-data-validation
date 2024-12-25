<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\ValueTestCase;
use VanCodX\Data\Validation\Validation as V;

class MiscTraitTest extends ValueTestCase
{
    /**
     * @return list<array{mixed, bool}>
     */
    public static function isNullDataProvider(): array
    {
        return static::buildDataSet([
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
     * @return list<array{mixed, bool}>
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
     * @return list<array{mixed, bool}>
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
