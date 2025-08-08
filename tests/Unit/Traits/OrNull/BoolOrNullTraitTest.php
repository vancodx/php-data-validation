<?php declare(strict_types=1);

namespace Tests\Unit\Traits\OrNull;

use Tests\Unit\Traits\OrNullTraitsTestCase;

class BoolOrNullTraitTest extends OrNullTraitsTestCase
{
    /**
     * @return void
     */
    public function testIsBoolOrNull(): void
    {
        $this->checkIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsTrueOrNull(): void
    {
        $this->checkIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsFalseOrNull(): void
    {
        $this->checkIsSthOrNullFunction(__FUNCTION__);
    }
}
