<?php declare(strict_types=1);

namespace Tests\Unit\Traits\ValueOrNull;

use Tests\Unit\ValueOrNullTestCase;

class FloatOrNullTraitTest extends ValueOrNullTestCase
{
    /**
     * @return void
     */
    public function testIsFloatOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsUFloatOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsPosFloatOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsNegFloatOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }
}
