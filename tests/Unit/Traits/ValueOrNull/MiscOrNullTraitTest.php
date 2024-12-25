<?php declare(strict_types=1);

namespace Tests\Unit\Traits\ValueOrNull;

use Tests\Unit\ValueOrNullTestCase;

class MiscOrNullTraitTest extends ValueOrNullTestCase
{
    /**
     * @return void
     */
    public function testIsResOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }
}
