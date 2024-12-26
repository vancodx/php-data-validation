<?php declare(strict_types=1);

namespace Tests\Unit\Traits\OrNull;

use Tests\Unit\OrNullTestCase;

class NumOrNullTraitTest extends OrNullTestCase
{
    /**
     * @return void
     */
    public function testIsNumOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsUNumOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsPosNumOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsNegNumOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }
}
