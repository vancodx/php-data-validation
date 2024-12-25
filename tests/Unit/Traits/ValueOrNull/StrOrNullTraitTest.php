<?php declare(strict_types=1);

namespace Tests\Unit\Traits\ValueOrNull;

use Tests\Unit\ValueOrNullTestCase;

class StrOrNullTraitTest extends ValueOrNullTestCase
{
    /**
     * @return void
     */
    public function testIsStrOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsStrLenOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsEmptyStrOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }
}
