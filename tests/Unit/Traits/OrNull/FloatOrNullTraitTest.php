<?php declare(strict_types=1);

namespace Tests\Unit\Traits\OrNull;

use Tests\Unit\Traits\OrNullTraitsTestCase;

class FloatOrNullTraitTest extends OrNullTraitsTestCase
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
