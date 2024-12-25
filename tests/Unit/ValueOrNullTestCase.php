<?php declare(strict_types=1);

namespace Tests\Unit;

use InvalidArgumentException;
use Mockery;
use VanCodX\Data\Validation\Validation as V;
use VanCodX\Testing\PHPUnit\MockeryTestCase;

abstract class ValueOrNullTestCase extends MockeryTestCase
{
    /**
     * @param non-empty-string $name
     * @return void
     */
    protected function checkValueOrNullFunction(string $name): void
    {
        if (!preg_match('~^test((Is[[:alpha:]]+)OrNull)$~', $name, $match) || !method_exists(V::class, $match[1])) {
            throw new InvalidArgumentException('Invalid "name" argument.');
        }
        $checkValueOrNullFuncName = lcfirst($match[1]);
        $checkValueFuncName = lcfirst($match[2]);
        $isNullFuncName = 'isNull';

        $mock = Mockery::mock(V::class)->makePartial();

        $call1 = 'call-1';
        $mock->expects($isNullFuncName)->once()->with($call1)->andReturnFalse();
        $mock->expects($checkValueFuncName)->once()->with($call1)->andReturnFalse();

        $call2 = 'call-2';
        $mock->expects($isNullFuncName)->once()->with($call2)->andReturnFalse();
        $mock->expects($checkValueFuncName)->once()->with($call2)->andReturnTrue();

        $call3 = 'call-3';
        $mock->expects($isNullFuncName)->once()->with($call3)->andReturnTrue();

        $mock->expects($isNullFuncName)->never();
        $mock->expects($checkValueFuncName)->never();

        $this->assertFalse($mock::$checkValueOrNullFuncName($call1));
        $this->assertTrue($mock::$checkValueOrNullFuncName($call2));
        $this->assertTrue($mock::$checkValueOrNullFuncName($call3));
    }
}
