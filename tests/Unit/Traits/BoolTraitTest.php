<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use VanCodX\Data\Validation\Validation as V;
use VanCodX\Testing\PHPUnit\TestCase;

class BoolTraitTest extends TestCase
{
    /**
     * @return void
     */
    public function testIsBool(): void
    {
        $this->assertTrue(V::isBool(true));
        $this->assertTrue(V::isBool(false));

        $this->assertFalse(V::isBool(1));
        $this->assertFalse(V::isBool(0));
        $this->assertFalse(V::isBool('true'));
        $this->assertFalse(V::isBool(''));
        $this->assertFalse(V::isBool(null));
    }
}
