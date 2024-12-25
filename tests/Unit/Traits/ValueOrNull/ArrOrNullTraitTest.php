<?php declare(strict_types=1);

namespace Tests\Unit\Traits\ValueOrNull;

use Tests\Unit\ValueOrNullTestCase;

class ArrOrNullTraitTest extends ValueOrNullTestCase
{
    /**
     * @return void
     */
    public function testIsArrOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrLenOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsEmptyArrOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }
}
