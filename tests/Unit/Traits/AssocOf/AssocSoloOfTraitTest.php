<?php declare(strict_types=1);

namespace Tests\Unit\Traits\AssocOf;

use Tests\Unit\Traits\ArrOfTraitsTestCase;

class AssocSoloOfTraitTest extends ArrOfTraitsTestCase
{
    /**
     * @return void
     */
    public function testIsAssocSoloOf(): void
    {
        $this->checkIsArrOfFunction(__FUNCTION__);
    }

    // ========== BOOL ========================================================== //

    /**
     * @return void
     */
    public function testIsAssocSoloOfBool(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== INT =========================================================== //

    /**
     * @return void
     */
    public function testIsAssocSoloOfInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocSoloOfUInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocSoloOfPosInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocSoloOfNegInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocSoloOfIntId(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @return void
     */
    public function testIsAssocSoloOfFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocSoloOfUFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocSoloOfPosFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocSoloOfNegFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== NUM =========================================================== //

    /**
     * @return void
     */
    public function testIsAssocSoloOfNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocSoloOfUNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocSoloOfPosNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocSoloOfNegNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== STR =========================================================== //

    /**
     * @return void
     */
    public function testIsAssocSoloOfStr(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocSoloOfStrLen(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== MISC ========================================================== //

    /**
     * @return void
     */
    public function testIsAssocSoloOfRes(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== OBJ =========================================================== //

    /**
     * @return void
     */
    public function testIsAssocSoloOfObj(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocSoloOfCls(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocSoloOfIfc(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocSoloOfObjOf(): void
    {
        $this->checkIsArrOfSthOfFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsAssocSoloOfClsOf(): void
    {
        $this->checkIsArrOfSthOfFunction(__FUNCTION__);
    }
}
