<?php declare(strict_types=1);

namespace Tests\Unit\Traits\ArrOf;

use Tests\Unit\Traits\ArrOfTraitsTestCase;

class ArrSoloOfTraitTest extends ArrOfTraitsTestCase
{
    /**
     * @return void
     */
    public function testIsArrSoloOf(): void
    {
        $this->checkIsArrOfFunction(__FUNCTION__);
    }

    // ========== BOOL ========================================================== //

    /**
     * @return void
     */
    public function testIsArrSoloOfBool(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== INT =========================================================== //

    /**
     * @return void
     */
    public function testIsArrSoloOfInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrSoloOfUInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrSoloOfPosInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrSoloOfNegInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrSoloOfIntId(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @return void
     */
    public function testIsArrSoloOfFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrSoloOfUFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrSoloOfPosFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrSoloOfNegFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== NUM =========================================================== //

    /**
     * @return void
     */
    public function testIsArrSoloOfNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrSoloOfUNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrSoloOfPosNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrSoloOfNegNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== STR =========================================================== //

    /**
     * @return void
     */
    public function testIsArrSoloOfStr(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrSoloOfStrLen(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== MISC ========================================================== //

    /**
     * @return void
     */
    public function testIsArrSoloOfRes(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== OBJ =========================================================== //

    /**
     * @return void
     */
    public function testIsArrSoloOfObj(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrSoloOfCls(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrSoloOfIfc(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrSoloOfObjOf(): void
    {
        $this->checkIsArrOfSthOfFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrSoloOfClsOf(): void
    {
        $this->checkIsArrOfSthOfFunction(__FUNCTION__);
    }
}
