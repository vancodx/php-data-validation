<?php declare(strict_types=1);

namespace Tests\Unit\Traits\OrNull;

use Tests\Unit\Traits\OrNullTraitsTestCase;

class MiscOrNullTraitTest extends OrNullTraitsTestCase
{
    /**
     * @return void
     */
    public function testIsResOrNull(): void
    {
        $this->checkIsSthOrNullFunction(__FUNCTION__);
    }
}
