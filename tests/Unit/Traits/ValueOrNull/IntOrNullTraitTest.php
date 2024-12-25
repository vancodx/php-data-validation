<?php declare(strict_types=1);

namespace Tests\Unit\Traits\ValueOrNull;

use Tests\Unit\ValueOrNullTestCase;

class IntOrNullTraitTest extends ValueOrNullTestCase
{
    /**
     * @return void
     */
    public function testIsIntOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsUIntOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsPosIntOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsNegIntOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsIntIdOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }
}
