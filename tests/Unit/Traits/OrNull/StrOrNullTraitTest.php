<?php declare(strict_types=1);

namespace Tests\Unit\Traits\OrNull;

use Tests\Unit\OrNullTestCase;

class StrOrNullTraitTest extends OrNullTestCase
{
    /**
     * @return void
     */
    public function testIsStrOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsStrLenOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsEmptyStrOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }
}
