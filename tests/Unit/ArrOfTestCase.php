<?php declare(strict_types=1);

namespace Tests\Unit;

use Closure;
use InvalidArgumentException;
use Mockery;
use VanCodX\Data\Validation\Validation as V;
use VanCodX\Testing\PHPUnit\MockeryTestCase;

abstract class ArrOfTestCase extends MockeryTestCase
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
        $checkArrFuncName = lcfirst($match[2]);
        $isNullFuncName = 'isNull';

        $mock = Mockery::mock(V::class)->makePartial();

        $value1 = 'value-1';
        $mock->expects($checkArrFuncName)->once()->with($value1)->andReturnFalse();

        $value2 = [];
        $mock->expects($checkArrFuncName)->once()->with($value2)->andReturnTrue();

        $value3 = ['value-3'];
        $mock->expects($checkArrFuncName)->once()->with($value3)->andReturnTrue();
        $mock->expects($isNullFuncName)->once()->with($value3[0])->andReturnFalse();

        $value4 = ['value-4(0)', 'value-4(1)', 'value-4(2)'];
        $mock->expects($checkArrFuncName)->once()->with($value4)->andReturnTrue();
        $mock->expects($isNullFuncName)->once()->with($value4[0])->andReturnTrue();
        $mock->expects($isNullFuncName)->once()->with($value4[1])->andReturnFalse();

        $value5 = ['value-5(0)', 'value-5(1)', 'value-5(2)'];
        $mock->expects($checkArrFuncName)->once()->with($value5)->andReturnTrue();
        $mock->expects($isNullFuncName)->once()->with($value5[0])->andReturnTrue();
        $mock->expects($isNullFuncName)->once()->with($value5[1])->andReturnTrue();
        $mock->expects($isNullFuncName)->once()->with($value5[2])->andReturnTrue();

        $mock->expects($checkArrFuncName)->never();
        $mock->expects($isNullFuncName)->never();

        $validator = $mock::$isNullFuncName(...);
        $this->assertFalse($mock::$checkArrOfFuncName($value1, $validator));
        $this->assertTrue($mock::$checkArrOfFuncName($value2, $validator));
        $this->assertFalse($mock::$checkArrOfFuncName($value3, $validator));
        $this->assertFalse($mock::$checkArrOfFuncName($value4, $validator));
        $this->assertTrue($mock::$checkArrOfFuncName($value5, $validator));
    }

    /**
     * @param string $name
     * @return void
     */
    protected function checkArrOfSthFunction(string $name): void
    {
        if (
            !preg_match('~^test((Is[[:alpha:]]+Of)([[:alpha:]]+))$~', $name, $match)
            || !method_exists(V::class, $match[1])
        ) {
            throw new InvalidArgumentException('Argument "name" is invalid.');
        }
        $checkArrOfSthFuncName = lcfirst($match[1]);
        $checkArrOfFuncName = lcfirst($match[2]);
        $checkSthFuncName = 'is' . $match[3];

        $mock = Mockery::mock(V::class)->makePartial();

        $checkSthFuncClosure = $mock::$checkSthFuncName(...);
        $validatorMatcher = Mockery::on(static fn (Closure $validator): bool => $validator == $checkSthFuncClosure);

        $value1 = 'value-1';
        $mock->expects($checkArrOfFuncName)->once()->with($value1, $validatorMatcher)->andReturnFalse();

        $value2 = 'value-2';
        $mock->expects($checkArrOfFuncName)->once()->with($value2, $validatorMatcher)->andReturnTrue();

        $mock->expects($checkArrOfFuncName)->never();
        $mock->expects($checkSthFuncName)->never();

        $this->assertFalse($mock::$checkArrOfSthFuncName($value1));
        $this->assertTrue($mock::$checkArrOfSthFuncName($value2));
    }
}
