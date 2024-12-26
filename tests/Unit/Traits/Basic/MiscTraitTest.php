<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Basic;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\BasicTestCase;
use VanCodX\Data\Validation\Validation as V;

class MiscTraitTest extends BasicTestCase
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
    public static function isResDataProvider(): array
    {
        return static::buildDataSet([
            STDOUT
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isResDataProvider')]
    public function testIsRes(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isRes($value));
    }
}
