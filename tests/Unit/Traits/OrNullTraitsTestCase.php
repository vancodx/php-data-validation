<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use InvalidArgumentException;
use Mockery;
use VanCodX\Data\Validation\Validation as V;
use VanCodX\Testing\PHPUnit\MockeryTestCase;

abstract class OrNullTraitsTestCase extends MockeryTestCase
{
    /**
     * @param string $name
     * @return void
     */
    protected function checkIsSthOrNullFunction(string $name): void
    {
        if (!preg_match('~^test((Is[[:alpha:]]+)OrNull)$~', $name, $match) || !method_exists(V::class, $match[1])) {
            throw new InvalidArgumentException('Argument "name" is invalid.');
        }
        $isSthOrNullFuncName = lcfirst($match[1]);
        $isSthFuncName = lcfirst($match[2]);
        $isNullFuncName = 'isNull';

        $mock = Mockery::mock(V::class)->makePartial();

        $value1 = 'value-1';
        $mock->expects($isNullFuncName)->once()->with($value1)->andReturnFalse();
        $mock->expects($isSthFuncName)->once()->with($value1)->andReturnFalse();

        $value2 = 'value-2';
        $mock->expects($isNullFuncName)->once()->with($value2)->andReturnFalse();
        $mock->expects($isSthFuncName)->once()->with($value2)->andReturnTrue();

        $value3 = 'value-3';
        $mock->expects($isNullFuncName)->once()->with($value3)->andReturnTrue();

        $mock->expects($isSthFuncName)->never();
        $mock->expects($isNullFuncName)->never();

        $this->assertFalse($mock::$isSthOrNullFuncName($value1));
        $this->assertTrue($mock::$isSthOrNullFuncName($value2));
        $this->assertTrue($mock::$isSthOrNullFuncName($value3));
    }

    /**
     * @param string $name
     * @return void
     */
    protected function checkIsSthOfOrNullFunction(string $name): void
    {
        if (!preg_match('~^test((Is[[:alpha:]]+Of)OrNull)$~', $name, $match) || !method_exists(V::class, $match[1])) {
            throw new InvalidArgumentException('Argument "name" is invalid.');
        }
        $isSthOfOrNullFuncName = lcfirst($match[1]);
        $isSthOfFuncName = lcfirst($match[2]);
        $isNullFuncName = 'isNull';

        $mock = Mockery::mock(V::class)->makePartial();

        $value1 = 'value-1';
        $arg1 = 'arg-1';
        $mock->expects($isNullFuncName)->once()->with($value1)->andReturnFalse();
        $mock->expects($isSthOfFuncName)->once()->with($value1, $arg1)->andReturnFalse();

        $value2 = 'value-2';
        $arg2 = 'arg-2';
        $mock->expects($isNullFuncName)->once()->with($value2)->andReturnFalse();
        $mock->expects($isSthOfFuncName)->once()->with($value2, $arg2)->andReturnTrue();

        $value3 = 'value-3';
        $arg3 = 'arg-3';
        $mock->expects($isNullFuncName)->once()->with($value3)->andReturnTrue();

        $mock->expects($isSthOfFuncName)->never();
        $mock->expects($isNullFuncName)->never();

        $this->assertFalse($mock::$isSthOfOrNullFuncName($value1, $arg1));
        $this->assertTrue($mock::$isSthOfOrNullFuncName($value2, $arg2));
        $this->assertTrue($mock::$isSthOfOrNullFuncName($value3, $arg3));
    }
}
