<?php declare(strict_types=1);

namespace Tests\Unit\Traits\OrNull;

use Tests\Unit\Traits\OrNullTestCase;

class BoolOrNullTraitTest extends OrNullTestCase
{
    /**
     * @return void
     */
    public function testIsBoolOrNull(): void
    {
        $this->checkSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsTrueOrNull(): void
    {
        $this->checkSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsFalseOrNull(): void
    {
        $this->checkSthOrNullFunction(__FUNCTION__);
    }
}
