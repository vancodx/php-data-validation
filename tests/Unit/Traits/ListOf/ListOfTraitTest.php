<?php declare(strict_types=1);

namespace Tests\Unit\Traits\ListOf;

use Tests\Unit\ArrOfTestCase;

class ListOfTraitTest extends ArrOfTestCase
{
    /**
     * @return void
     */
    public function testIsListOf(): void
    {
        $this->checkArrOfFunction(__FUNCTION__);
    }

    // ========== BOOL ========================================================== //

    /**
     * @return void
     */
    public function testIsListOfBool(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    // ========== INT =========================================================== //

    /**
     * @return void
     */
    public function testIsListOfInt(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfUInt(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfPosInt(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfNegInt(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfIntId(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @return void
     */
    public function testIsListOfFloat(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfUFloat(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfPosFloat(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfNegFloat(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    // ========== NUM =========================================================== //

    /**
     * @return void
     */
    public function testIsListOfNum(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfUNum(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfPosNum(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfNegNum(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    // ========== STR =========================================================== //

    /**
     * @return void
     */
    public function testIsListOfStr(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfStrLen(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    // ========== MISC ========================================================== //

    /**
     * @return void
     */
    public function testIsListOfRes(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    // ========== OBJ =========================================================== //

    /**
     * @return void
     */
    public function testIsListOfObj(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfCls(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfIfc(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfObjOf(): void
    {
        $this->checkArrOfSthOfFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListOfClsOf(): void
    {
        $this->checkArrOfSthOfFunction(__FUNCTION__);
    }
}
