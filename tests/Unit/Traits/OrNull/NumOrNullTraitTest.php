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
        $this->checkIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsUNumOrNull(): void
    {
        $this->checkIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsPosNumOrNull(): void
    {
        $this->checkIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsNegNumOrNull(): void
    {
        $this->checkIsSthOrNullFunction(__FUNCTION__);
    }
}
