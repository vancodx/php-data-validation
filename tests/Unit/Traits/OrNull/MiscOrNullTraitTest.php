<?php declare(strict_types=1);

namespace Tests\Unit\Traits\OrNull;

use Tests\Unit\Traits\OrNullTestCase;

class MiscOrNullTraitTest extends OrNullTestCase
{
    /**
     * @return void
     */
    public function testIsResOrNull(): void
    {
        $this->checkSthOrNullFunction(__FUNCTION__);
    }
}
