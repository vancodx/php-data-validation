<?php declare(strict_types=1);

namespace Tests\Unit\Traits\OrNull;

use Tests\Unit\Traits\OrNullTraitsTestCase;

class ObjOrNullTraitTest extends OrNullTraitsTestCase
{
    /**
     * @return void
     */
    public function testIsObjOrNull(): void
    {
        $this->checkIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsClsOrNull(): void
    {
        $this->checkIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsIfcOrNull(): void
    {
        $this->checkIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsObjOfOrNull(): void
    {
        $this->checkIsSthOfOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsClsOfOrNull(): void
    {
        $this->checkIsSthOfOrNullFunction(__FUNCTION__);
    }
}
