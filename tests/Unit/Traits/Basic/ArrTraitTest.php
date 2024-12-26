<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Basic;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\BasicTestCase;
use VanCodX\Data\Validation\Validation as V;

class ArrTraitTest extends BasicTestCase
{
    /**
     * @return list<array{mixed, bool}>
     */
    public static function isArrDataProvider(): array
    {
        return static::buildDataSet([
            [null],
            ['STDOUT' => STDOUT],
            [true, false],
            ['a' => 0, 'b' => 1],
            [0.0, 1.0, -1.0],
            ['x' => '0.0', 'y' => '1.0', 'z' => '-1.0'],
            [null, false, -1.0, ['empty-string' => '']],
            ['STDOUT' => STDOUT, 'b' => 1, 'z' => '-1.0', 'empty-array' => []],
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
            ['STDOUT' => STDOUT],
            [true, false],
            ['a' => 0, 'b' => 1],
            [0.0, 1.0, -1.0],
            ['x' => '0.0', 'y' => '1.0', 'z' => '-1.0'],
            [null, false, -1.0, ['empty-string' => '']],
            ['STDOUT' => STDOUT, 'b' => 1, 'z' => '-1.0', 'empty-array' => []],
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

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isArrSoloDataProvider(): array
    {
        return static::buildDataSet([
            [null],
            ['STDOUT' => STDOUT],
            ['']
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isArrSoloDataProvider')]
    public function testIsArrSolo(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isArrSolo($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isArrDuoDataProvider(): array
    {
        return static::buildDataSet([
            [true, false],
            ['a' => 0, 'b' => 1]
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isArrDuoDataProvider')]
    public function testIsArrDuo(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isArrDuo($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isArrTrioDataProvider(): array
    {
        return static::buildDataSet([
            [0.0, 1.0, -1.0],
            ['x' => '0.0', 'y' => '1.0', 'z' => '-1.0']
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isArrTrioDataProvider')]
    public function testIsArrTrio(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isArrTrio($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isArrQuadDataProvider(): array
    {
        return static::buildDataSet([
            [null, false, -1.0, ['empty-string' => '']],
            ['STDOUT' => STDOUT, 'b' => 1, 'z' => '-1.0', 'empty-array' => []]
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isArrQuadDataProvider')]
    public function testIsArrQuad(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isArrQuad($value));
    }
}
