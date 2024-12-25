<?php declare(strict_types=1);

namespace Tests\Unit\Traits\ValueOrNull;

use Tests\Unit\ValueOrNullTestCase;

class BoolOrNullTraitTest extends ValueOrNullTestCase
{
    /**
     * @return void
     */
    public function testIsBoolOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }
}
