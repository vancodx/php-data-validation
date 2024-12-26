<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Basic;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\BasicTestCase;
use VanCodX\Data\Validation\Validation as V;

class ListTraitTest extends BasicTestCase
{
    /**
     * @return list<array{mixed, bool}>
     */
    public static function isListDataProvider(): array
    {
        return static::buildDataSet([
            [null],
            [true, false],
            [0.0, 1.0, -1.0],
            [null, false, -1.0, ['empty-string' => '']],
            [''],
            []
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isListDataProvider')]
    public function testIsList(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isList($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isListLenDataProvider(): array
    {
        return static::buildDataSet([
            [null],
            [true, false],
            [0.0, 1.0, -1.0],
            [null, false, -1.0, ['empty-string' => '']],
            ['']
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isListLenDataProvider')]
    public function testIsListLen(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isListLen($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isEmptyListDataProvider(): array
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
    #[DataProvider('isEmptyListDataProvider')]
    public function testIsEmptyList(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isEmptyList($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isListSoloDataProvider(): array
    {
        return static::buildDataSet([
            [null],
            ['']
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isListSoloDataProvider')]
    public function testIsListSolo(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isListSolo($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isListDuoDataProvider(): array
    {
        return static::buildDataSet([
            [true, false]
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isListDuoDataProvider')]
    public function testIsListDuo(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isListDuo($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isListTrioDataProvider(): array
    {
        return static::buildDataSet([
            [0.0, 1.0, -1.0]
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isListTrioDataProvider')]
    public function testIsListTrio(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isListTrio($value));
    }

    /**
     * @return list<array{mixed, bool}>
     */
    public static function isListQuadDataProvider(): array
    {
        return static::buildDataSet([
            [null, false, -1.0, ['empty-string' => '']]
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isListQuadDataProvider')]
    public function testIsListQuad(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isListQuad($value));
    }
}
