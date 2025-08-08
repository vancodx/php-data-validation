<?php declare(strict_types=1);

namespace Tests\Unit\Traits\ListOf;

use Tests\Unit\Traits\ArrOfTraitsTestCase;

class ListOfTraitTest extends ArrOfTraitsTestCase
{
    /**
     * @return void
     */
    public function testIsListOf(): void
    {
        $this->checkIsArrOfFunction(__FUNCTION__);
    }

    // ========== BOOL ========================================================== //

    /**
     * @return void
     */
    public function testIsListOfBool(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== INT =========================================================== //

    /**
     * @return void
     */
    public function testIsListOfInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfUInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfPosInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfNegInt(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfIntId(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @return void
     */
    public function testIsListOfFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfUFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfPosFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfNegFloat(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== NUM =========================================================== //

    /**
     * @return void
     */
    public function testIsListOfNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfUNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfPosNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfNegNum(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== STR =========================================================== //

    /**
     * @return void
     */
    public function testIsListOfStr(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfStrLen(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== MISC ========================================================== //

    /**
     * @return void
     */
    public function testIsListOfRes(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== OBJ =========================================================== //

    /**
     * @return void
     */
    public function testIsListOfObj(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfCls(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfIfc(): void
    {
        $this->checkIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfObjOf(): void
    {
        $this->checkIsArrOfSthOfFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfClsOf(): void
    {
        $this->checkIsArrOfSthOfFunction(__FUNCTION__);
    }
}
