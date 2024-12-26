<?php declare(strict_types=1);

namespace Tests\Unit\Traits\OrNull;

use Tests\Unit\OrNullTestCase;

class MiscOrNullTraitTest extends OrNullTestCase
{
    /**
     * @return void
     */
    public function testIsResOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }
}
