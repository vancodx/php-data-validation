<?php declare(strict_types=1);

namespace Tests\Unit\Traits\OrNull;

use Tests\Unit\Traits\OrNullTraitsTestCase;

class NumOrNullTraitTest extends OrNullTraitsTestCase
{
    /**
     * @return void
     */
    public function testIsNumOrNull(): void
    {
        $this->checkSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsUNumOrNull(): void
    {
        $this->checkSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsPosNumOrNull(): void
    {
        $this->checkSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsNegNumOrNull(): void
    {
        $this->checkSthOrNullFunction(__FUNCTION__);
    }
}
