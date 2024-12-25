<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\ValueTestCase;
use VanCodX\Data\Validation\Validation as V;

class ArrTraitTest extends ValueTestCase
{
    /**
     * @return list<array{mixed, bool}>
     */
    public static function isArrDataProvider(): array
    {
        return static::buildDataSet([
            [null],
            ['true' => true, 'false' => false],
            ['x' => 0, 'y' => 1, 'z' => -1],
            [0.0, 1.0, -1.0],
            ['0', '1', '-1.0'],
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
            ['true' => true, 'false' => false],
            ['x' => 0, 'y' => 1, 'z' => -1],
            [0.0, 1.0, -1.0],
            ['0', '1', '-1.0'],
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
