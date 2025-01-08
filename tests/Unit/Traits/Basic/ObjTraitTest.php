<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Basic;

use ArrayAccess;
use ArrayObject;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Support\MyArrayObject1;
use Tests\Support\MyArrayObject2;
use Tests\Unit\BasicTestCase;
use VanCodX\Data\Validation\Validation as V;

class ObjTraitTest extends BasicTestCase
{
    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isObjDataProvider(): array
    {
        return static::buildDataSet([
            static::getArrayObjectInstance(),
            static::getMyArrayObject1Instance(),
            static::getMyArrayObject2Instance()
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isObjDataProvider')]
    public function testIsObj(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isObj($value));
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isClsDataProvider(): array
    {
        return static::buildDataSet([
            ArrayObject::class,
            MyArrayObject1::class,
            MyArrayObject2::class
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isClsDataProvider')]
    public function testIsCls(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isCls($value));
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isIfcDataProvider(): array
    {
        return static::buildDataSet([
            ArrayAccess::class
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $expected
     * @return void
     */
    #[DataProvider('isIfcDataProvider')]
    public function testIsIfc(mixed $value, bool $expected): void
    {
        $this->assertSame($expected, V::isIfc($value));
    }
}
