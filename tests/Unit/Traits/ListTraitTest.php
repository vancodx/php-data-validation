<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\ValueTestCase;
use VanCodX\Data\Validation\Validation as V;

class ListTraitTest extends ValueTestCase
{
    /**
     * @return list<array{mixed, bool}>
     */
    public static function isListDataProvider(): array
    {
        return static::buildDataSet([
            [null],
            [STDOUT],
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
            [STDOUT],
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
}
