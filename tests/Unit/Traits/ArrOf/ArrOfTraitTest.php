<?php declare(strict_types=1);

namespace Tests\Unit\Traits\ArrOf;

use InvalidArgumentException;
use Mockery;
use Tests\Unit\ArrOfTestCase;
use VanCodX\Data\Validation\Validation as V;

class ArrOfTraitTest extends ArrOfTestCase
{
    /**
     * @param string $name
     * @return void
     */
    protected function checkArrOfFunction(string $name): void
    {
        if (!preg_match('~^test((Is[[:alpha:]]+)Of)$~', $name, $match) || !method_exists(V::class, $match[1])) {
            throw new InvalidArgumentException('Argument "name" is invalid.');
        }
        $checkArrOfFuncName = lcfirst($match[1]);

        $mock = Mockery::mock(V::class)->makePartial();
    }

    /**
     * @return void
     */
    public function testIsArrOf(): void
    {
        $this->checkArrOfFunction(__FUNCTION__);
    }

    // ========== BOOL ========================================================== //

    /**
     * @return void
     */
    public function testIsArrOfBool(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    // ========== INT =========================================================== //

    /**
     * @return void
     */
    public function testIsArrOfInt(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrOfUInt(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrOfPosInt(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrOfNegInt(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrOfIntId(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @return void
     */
    public function testIsArrOfFloat(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrOfUFloat(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrOfPosFloat(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrOfNegFloat(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    // ========== NUM =========================================================== //

    /**
     * @return void
     */
    public function testIsArrOfNum(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrOfUNum(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrOfPosNum(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrOfNegNum(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    // ========== STR =========================================================== //

    /**
     * @return void
     */
    public function testIsArrOfStr(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsArrOfStrLen(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }

    // ========== MISC ========================================================== //

    /**
     * @return void
     */
    public function testIsArrOfRes(): void
    {
        $this->checkArrOfSthFunction(__FUNCTION__);
    }
}
