<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use PHPUnit\Framework\Attributes\DataProvider;
use VanCodX\Data\Validation\Validation as V;
use VanCodX\Testing\PHPUnit\TestCase;

class BoolTraitTest extends TestCase
{
    /**
     * @return mixed[][]
     */
    public static function isBoolTrueProvider(): array
    {
        return array_map(fn (mixed $value) => [$value], [
            true,
            false
        ]);
    }

    /**
     * @param mixed $value
     * @return void
     */
    #[DataProvider('isBoolTrueProvider')]
    public function testIsBool(mixed $value): void
    {
        $this->assertTrue(V::isBool($value));
    }
}
