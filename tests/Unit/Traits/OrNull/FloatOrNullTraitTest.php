<?php declare(strict_types=1);

namespace Tests\Unit\Traits\OrNull;

use Tests\Unit\OrNullTestCase;

class FloatOrNullTraitTest extends OrNullTestCase
{
    /**
     * @return void
     */
    public function testIsFloatOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsUFloatOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsPosFloatOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsNegFloatOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }
}
