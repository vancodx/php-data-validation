<?php declare(strict_types=1);

namespace Tests\Unit\Traits\OrNull;

use Tests\Unit\OrNullTestCase;

class BoolOrNullTraitTest extends OrNullTestCase
{
    /**
     * @return void
     */
    public function testIsBoolOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsTrueOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsFalseOrNull(): void
    {
        $this->checkOrNullFunction(__FUNCTION__);
    }
}
