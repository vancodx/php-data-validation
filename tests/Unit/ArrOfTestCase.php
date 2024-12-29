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

        $call1 = 'call-1';
        $mock->expects($checkArrFuncName)->once()->with($call1)->andReturnFalse();

        $call2 = [];
        $mock->expects($checkArrFuncName)->once()->with($call2)->andReturnTrue();

        $call3 = ['call-3'];
        $mock->expects($checkArrFuncName)->once()->with($call3)->andReturnTrue();
        $mock->expects($isNullFuncName)->once()->with($call3[0])->andReturnFalse();

        $call4 = ['call-4(0)', 'call-4(1)', 'call-4(2)'];
        $mock->expects($checkArrFuncName)->once()->with($call4)->andReturnTrue();
        $mock->expects($isNullFuncName)->once()->with($call4[0])->andReturnTrue();
        $mock->expects($isNullFuncName)->once()->with($call4[1])->andReturnFalse();

        $call5 = ['call-5(0)', 'call-5(1)', 'call-5(2)'];
        $mock->expects($checkArrFuncName)->once()->with($call5)->andReturnTrue();
        $mock->expects($isNullFuncName)->once()->with($call5[0])->andReturnTrue();
        $mock->expects($isNullFuncName)->once()->with($call5[1])->andReturnTrue();
        $mock->expects($isNullFuncName)->once()->with($call5[2])->andReturnTrue();

        $mock->expects($checkArrFuncName)->never();
        $mock->expects($isNullFuncName)->never();

        $validator = $mock::$isNullFuncName(...);
        $this->assertFalse($mock::$checkArrOfFuncName($call1, $validator));
        $this->assertTrue($mock::$checkArrOfFuncName($call2, $validator));
        $this->assertFalse($mock::$checkArrOfFuncName($call3, $validator));
        $this->assertFalse($mock::$checkArrOfFuncName($call4, $validator));
        $this->assertTrue($mock::$checkArrOfFuncName($call5, $validator));
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

        $call1 = 'call-1';
        $mock->expects($checkArrOfFuncName)->once()->with($call1, $validatorMatcher)->andReturnFalse();

        $call2 = 'call-2';
        $mock->expects($checkArrOfFuncName)->once()->with($call2, $validatorMatcher)->andReturnTrue();

        $mock->expects($checkArrOfFuncName)->never();
        $mock->expects($checkSthFuncName)->never();

        $this->assertFalse($mock::$checkArrOfSthFuncName($call1));
        $this->assertTrue($mock::$checkArrOfSthFuncName($call2));
    }
}
