<?php declare(strict_types=1);

namespace Tests\Unit\Traits\OrNull;

use Tests\Unit\Traits\OrNullTestCase;

class StrOrNullTraitTest extends OrNullTestCase
{
    /**
     * @return void
     */
    public function testIsStrOrNull(): void
    {
        $this->checkSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsStrLenOrNull(): void
    {
        $this->checkSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsEmptyStrOrNull(): void
    {
        $this->checkSthOrNullFunction(__FUNCTION__);
    }
}
