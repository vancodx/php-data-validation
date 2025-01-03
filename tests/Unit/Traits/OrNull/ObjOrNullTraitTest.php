<?php declare(strict_types=1);

namespace Tests\Unit\Traits\OrNull;

use Tests\Unit\OrNullTestCase;

class ObjOrNullTraitTest extends OrNullTestCase
{
    /**
     * @return void
     */
    public function testIsObjOrNull(): void
    {
        $this->checkSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsClsOrNull(): void
    {
        $this->checkSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsIfcOrNull(): void
    {
        $this->checkSthOrNullFunction(__FUNCTION__);
    }
}
