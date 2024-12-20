<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\ValidationTestCase;
use VanCodX\Data\Validation\Validation as V;

class ArrTraitTest extends ValidationTestCase
{
    /**
     * @return list<array{mixed, bool}>
     */
    public static function isArrDataProvider(): array
    {
        return static::buildDataSet([
            [null],
            [true, false],
            [0, 1, -1],
            [0.0, 1.0, -1.0],
            ['0', '1', '-1'],
            [''],
            []
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isArrDataProvider')]
    public function testIsArr(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isArr($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isArrLenDataProvider(): array
    {
        return static::buildDataSet([
            [null],
            [true, false],
            [0, 1, -1],
            [0.0, 1.0, -1.0],
            ['0', '1', '-1'],
            ['']
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isArrLenDataProvider')]
    public function testIsArrLen(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isArrLen($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isEmptyArrDataProvider(): array
    {
        return static::buildDataSet([
            []
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isEmptyArrDataProvider')]
    public function testIsEmptyArr(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isEmptyArr($value));
    }
}
