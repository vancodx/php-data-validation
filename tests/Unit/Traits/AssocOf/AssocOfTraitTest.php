<?php declare(strict_types=1);

namespace Tests\Unit\Traits\AssocOf;

use Tests\Unit\Traits\ArrOfTraitsTestCase;

class AssocOfTraitTest extends ArrOfTraitsTestCase
{
    /**
     * @return void
     */
    public function testIsAssocOf(): void
    {
        $this->checkIsArrOfFunction(__FUNCTION__);
    }

    // ========== BOOL ========================================================== //

    /**
     * @return void
     */
    public function testIsAssocOfBool(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== INT =========================================================== //

    /**
     * @return void
     */
    public function testIsAssocOfInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocOfUInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocOfPosInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocOfNegInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocOfIntId(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @return void
     */
    public function testIsAssocOfFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocOfUFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocOfPosFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocOfNegFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== NUM =========================================================== //

    /**
     * @return void
     */
    public function testIsAssocOfNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocOfUNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocOfPosNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocOfNegNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== STR =========================================================== //

    /**
     * @return void
     */
    public function testIsAssocOfStr(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocOfStrLen(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== MISC ========================================================== //

    /**
     * @return void
     */
    public function testIsAssocOfRes(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== OBJ =========================================================== //

    /**
     * @return void
     */
    public function testIsAssocOfObj(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocOfCls(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocOfIfc(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocOfObjOf(): void
    {
        $this->checkIsArrOfSthOfFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocOfClsOf(): void
    {
        $this->checkIsArrOfSthOfFunction(__FUNCTION__);
    }
}
