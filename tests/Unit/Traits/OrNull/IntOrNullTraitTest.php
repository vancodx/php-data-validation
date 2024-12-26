<?php declare(strict_types=1);

namespace Tests\Unit\Traits\OrNull;

use Tests\Unit\OrNullTestCase;

class IntOrNullTraitTest extends OrNullTestCase
{
    /**
     * @return void
     */
    public function testIsIntOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsUIntOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsPosIntOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsNegIntOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsIntIdOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }
}
