<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\ValueTestCase;
use VanCodX\Data\Validation\Validation as V;

class BoolTraitTest extends ValueTestCase
{
    /**
     * @return list<array{mixed, bool}>
     */
    public static function isBoolDataProvider(): array
    {
        return static::buildDataSet([
            true,
            false
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isBoolDataProvider')]
    public function testIsBool(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isBool($value));
    }
}
