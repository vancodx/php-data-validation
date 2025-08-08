<?php declare(strict_types=1);

namespace Tests\Unit\Traits\OrNull;

use Tests\Unit\Traits\OrNullTraitsTestCase;

class StrOrNullTraitTest extends OrNullTraitsTestCase
{
    /**
     * @return void
     */
    public function testIsStrOrNull(): void
    {
        $this->checkIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsStrLenOrNull(): void
    {
        $this->checkIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsEmptyStrOrNull(): void
    {
        $this->checkIsSthOrNullFunction(__FUNCTION__);
    }
}
