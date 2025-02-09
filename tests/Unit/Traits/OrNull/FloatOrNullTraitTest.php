<?php declare(strict_types=1);

namespace Tests\Unit\Traits\OrNull;

use Tests\Unit\Traits\OrNullTestCase;

class FloatOrNullTraitTest extends OrNullTestCase
{
    /**
     * @return void
     */
    public function testIsFloatOrNull(): void
    {
        $this->checkSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsUFloatOrNull(): void
    {
        $this->checkSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsPosFloatOrNull(): void
    {
        $this->checkSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsNegFloatOrNull(): void
    {
        $this->checkSthOrNullFunction(__FUNCTION__);
    }
}
