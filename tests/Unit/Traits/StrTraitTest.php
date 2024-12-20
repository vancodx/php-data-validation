<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\ValidationTestCase;
use VanCodX\Data\Validation\Validation as V;

class StrTraitTest extends ValidationTestCase
{
    /**
     * @return list<array{mixed, bool}>
     */
    public static function isStrDataProvider(): array
    {
        return static::buildDataSet([
            'true',
            'false',
            '0',
            '1',
            '-1',
            '0.0',
            '1.0',
            '-1.0',
            ''
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isStrDataProvider')]
    public function testIsStr(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isStr($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isStrLenDataProvider(): array
    {
        return static::buildDataSet([
            'true',
            'false',
            '0',
            '1',
            '-1',
            '0.0',
            '1.0',
            '-1.0'
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isStrLenDataProvider')]
    public function testIsStrLen(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isStrLen($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isEmptyStrDataProvider(): array
    {
        return static::buildDataSet([
            ''
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isEmptyStrDataProvider')]
    public function testIsEmptyStr(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isEmptyStr($value));
    }
}
