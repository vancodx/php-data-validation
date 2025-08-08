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
        $this->checkIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsUFloatOrNull(): void
    {
        $this->checkIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsPosFloatOrNull(): void
    {
        $this->checkIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsNegFloatOrNull(): void
    {
        $this->checkIsSthOrNullFunction(__FUNCTION__);
    }
}
