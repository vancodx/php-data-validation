<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use Closure;
use InvalidArgumentException;
use Mockery;
use ReflectionFunction;
use VanCodX\Data\Validation\Validation as V;
use VanCodX\Testing\PHPUnit\MockeryTestCase;

abstract class ArrOfTraitsTestCase extends MockeryTestCase
{
    /**
     * @param string $name
     * @return void
     */
    protected function checkIsArrOfFunction(string $name): void
    {
        if (!preg_match('~^test((Is[[:alpha:]]+)Of)$~', $name, $match) || !method_exists(V::class, $match[1])) {
            throw new InvalidArgumentException('Argument "name" is invalid.');
        }
        $isArrOfFuncName = lcfirst($match[1]);
        $isArrFuncName = lcfirst($match[2]);
        $isNullFuncName = 'isNull';

        $mock = Mockery::mock(V::class)->makePartial();

        $value1 = 'value-1';
        $mock->expects($isArrFuncName)->once()->with($value1)->andReturnFalse();

        $value2 = [];
        $mock->expects($isArrFuncName)->once()->with($value2)->andReturnTrue();

        $value3 = ['value-3'];
        $mock->expects($isArrFuncName)->once()->with($value3)->andReturnTrue();
        $mock->expects($isNullFuncName)->once()->with($value3[0])->andReturnFalse();

        $value4 = ['value-4(0)', 'value-4(1)', 'value-4(2)'];
        $mock->expects($isArrFuncName)->once()->with($value4)->andReturnTrue();
        $mock->expects($isNullFuncName)->once()->with($value4[0])->andReturnTrue();
        $mock->expects($isNullFuncName)->once()->with($value4[1])->andReturnFalse();

        $value5 = ['value-5(0)', 'value-5(1)', 'value-5(2)'];
        $mock->expects($isArrFuncName)->once()->with($value5)->andReturnTrue();
        $mock->expects($isNullFuncName)->once()->with($value5[0])->andReturnTrue();
        $mock->expects($isNullFuncName)->once()->with($value5[1])->andReturnTrue();
        $mock->expects($isNullFuncName)->once()->with($value5[2])->andReturnTrue();

        $mock->expects($isArrFuncName)->never();
        $mock->expects($isNullFuncName)->never();

        $validator = $mock::$isNullFuncName(...);
        $this->assertFalse($mock::$isArrOfFuncName($value1, $validator));
        $this->assertTrue($mock::$isArrOfFuncName($value2, $validator));
        $this->assertFalse($mock::$isArrOfFuncName($value3, $validator));
        $this->assertFalse($mock::$isArrOfFuncName($value4, $validator));
        $this->assertTrue($mock::$isArrOfFuncName($value5, $validator));
    }

    /**
     * @param string $name
     * @return void
     */
    protected function checkIsArrOfSthFunction(string $name): void
    {
        if (
            !preg_match('~^test((Is[[:alpha:]]+Of)([[:alpha:]]+))$~', $name, $match)
            || !method_exists(V::class, $match[1])
        ) {
            throw new InvalidArgumentException('Argument "name" is invalid.');
        }
        $isArrOfSthFuncName = lcfirst($match[1]);
        $isArrOfFuncName = lcfirst($match[2]);
        $isSthFuncName = 'is' . $match[3];

        $mock = Mockery::mock(V::class)->makePartial();

        $isSthFuncClosure = $mock::$isSthFuncName(...);
        $validatorMatcher = Mockery::on(static fn (Closure $validator): bool => $validator == $isSthFuncClosure);

        $value1 = 'value-1';
        $mock->expects($isArrOfFuncName)->once()->with($value1, $validatorMatcher)->andReturnFalse();

        $value2 = 'value-2';
        $mock->expects($isArrOfFuncName)->once()->with($value2, $validatorMatcher)->andReturnTrue();

        $mock->expects($isArrOfFuncName)->never();
        $mock->expects($isSthFuncName)->never();

        $this->assertFalse($mock::$isArrOfSthFuncName($value1));
        $this->assertTrue($mock::$isArrOfSthFuncName($value2));
    }

    /**
     * @param string $name
     * @return void
     */
    protected function checkIsArrOfSthOfFunction(string $name): void
    {
        if (
            !preg_match('~^test((Is[[:alpha:]]+Of)([[:alpha:]]+Of))$~', $name, $match)
            || !method_exists(V::class, $match[1])
        ) {
            throw new InvalidArgumentException('Argument "name" is invalid.');
        }
        $isArrOfSthOfFuncName = lcfirst($match[1]);
        $isArrOfFuncName = lcfirst($match[2]);
        $isSthOfFuncName = 'is' . $match[3];

        $mock = Mockery::mock(V::class)->makePartial();

        $value1 = 'value-1';
        $arg1 = 'arg-1';
        $validatorMatcher1 = Mockery::on(static function (Closure $validator) use ($value1, $arg1): bool {
            $staticVariables = (new ReflectionFunction($validator))->getStaticVariables();
            return array_key_exists('class', $staticVariables) && ($staticVariables['class'] === $arg1)
                && ($validator($value1) === false);
        });
        $mock->expects($isArrOfFuncName)->once()->with($value1, $validatorMatcher1)->andReturnFalse();
        $mock->expects($isSthOfFuncName)->once()->with($value1, $arg1)->andReturnFalse();

        $value2 = 'value-2';
        $arg2 = 'arg-2';
        $validatorMatcher2 = Mockery::on(static function (Closure $validator) use ($value2, $arg2): bool {
            $staticVariables = (new ReflectionFunction($validator))->getStaticVariables();
            return array_key_exists('class', $staticVariables) && ($staticVariables['class'] === $arg2)
                && ($validator($value2) === true);
        });
        $mock->expects($isArrOfFuncName)->once()->with($value2, $validatorMatcher2)->andReturnTrue();
        $mock->expects($isSthOfFuncName)->once()->with($value2, $arg2)->andReturnTrue();

        $mock->expects($isArrOfFuncName)->never();
        $mock->expects($isSthOfFuncName)->never();

        $this->assertFalse($mock::$isArrOfSthOfFuncName($value1, $arg1));
        $this->assertTrue($mock::$isArrOfSthOfFuncName($value2, $arg2));
    }
}
