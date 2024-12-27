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
