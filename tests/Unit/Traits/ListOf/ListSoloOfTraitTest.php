<?php declare(strict_types=1);

namespace Tests\Unit\Traits\ListOf;

use Tests\Unit\Traits\ArrOfTraitsTestCase;

class ListSoloOfTraitTest extends ArrOfTraitsTestCase
{
    /**
     * @return void
     */
    public function testIsListSoloOf(): void
    {
        $this->checkIsArrOfFunction(__FUNCTION__);
    }

    // ========== BOOL ========================================================== //

    /**
     * @return void
     */
    public function testIsListSoloOfBool(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== INT =========================================================== //

    /**
     * @return void
     */
    public function testIsListSoloOfInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListSoloOfUInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListSoloOfPosInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListSoloOfNegInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListSoloOfIntId(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @return void
     */
    public function testIsListSoloOfFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListSoloOfUFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListSoloOfPosFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListSoloOfNegFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== NUM =========================================================== //

    /**
     * @return void
     */
    public function testIsListSoloOfNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListSoloOfUNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListSoloOfPosNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListSoloOfNegNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== STR =========================================================== //

    /**
     * @return void
     */
    public function testIsListSoloOfStr(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListSoloOfStrLen(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== MISC ========================================================== //

    /**
     * @return void
     */
    public function testIsListSoloOfRes(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== OBJ =========================================================== //

    /**
     * @return void
     */
    public function testIsListSoloOfObj(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListSoloOfCls(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListSoloOfIfc(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListSoloOfObjOf(): void
    {
        $this->checkIsArrOfSthOfFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListSoloOfClsOf(): void
    {
        $this->checkIsArrOfSthOfFunction(__FUNCTION__);
    }
}
