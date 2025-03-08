<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use InvalidArgumentException;
use Mockery;
use ReflectionClass;
use ReflectionMethod;
use UnexpectedValueException;
use VanCodX\Data\Validation\Exceptions\ArgumentException;
use VanCodX\Data\Validation\Exceptions\ValueException;
use VanCodX\Data\Validation\Traits\ExceptionTrait;
use VanCodX\Data\Validation\Validation as V;
use VanCodX\Testing\PHPUnit\MockeryTestCase;

class ExceptionTraitTest extends MockeryTestCase
{
    /**
     * @return void
     */
    public function testNewValueException1(): void
    {
        $exception = V::newValueException('name1');
        $expectedLine = __LINE__ - 1;
        $this->assertInstanceOf(ValueException::class, $exception);

        $this->assertSame('Value "name1" is invalid.', $exception->getMessage());
        $this->assertSame(0, $exception->getCode());
        $this->assertSame(__FILE__, $exception->getFile());
        $this->assertSame($expectedLine, $exception->getLine());
        $this->assertNull($exception->getPrevious());

        $this->assertSame('name1', $exception->getValueInfo());
    }

    /**
     * @return void
     */
    public function testNewValueException2(): void
    {
        $exception = V::newValueException(['first_name2', 'second_name2'], 32);
        $expectedLine = __LINE__ - 1;
        $this->assertInstanceOf(ValueException::class, $exception);

        $this->assertSame('One or more values (first_name2, second_name2) are invalid.', $exception->getMessage());
        $this->assertSame(32, $exception->getCode());
        $this->assertSame(__FILE__, $exception->getFile());
        $this->assertSame($expectedLine, $exception->getLine());
        $this->assertNull($exception->getPrevious());

        $this->assertSame(['first_name2', 'second_name2'], $exception->getValueInfo());
    }

    /**
     * @return void
     */
    public function testNewValueException3(): void
    {
        $mock = Mockery::mock(ExceptionTraitObject::class)->makePartial();

        $previous = new UnexpectedValueException();
        $mock->expects('fixExceptionFileAndLine')->once()->withArgs(static function (mixed $arg) use ($previous): bool {
            return ($arg instanceof ValueException)
                && ($arg->getMessage() === 'Value "name3" is invalid.')
                && ($arg->getCode() === 0)
                && ($arg->getPrevious() === $previous)
                && ($arg->getValueInfo() === ['name3' => 'Sailor Moon']);
        });
        $mock->expects('fixExceptionFileAndLine')->never();

        $mock::newValueException(['name3' => 'Sailor Moon'], previous: $previous);
    }

    /**
     * @return void
     */
    public function testNewArgumentException1(): void
    {
        $exception = V::newArgumentException('name1');
        $expectedLine = __LINE__ - 1;
        $this->assertInstanceOf(ArgumentException::class, $exception);

        $this->assertSame('Argument "name1" is invalid.', $exception->getMessage());
        $this->assertSame(0, $exception->getCode());
        $this->assertSame(__FILE__, $exception->getFile());
        $this->assertSame($expectedLine, $exception->getLine());
        $this->assertNull($exception->getPrevious());

        $this->assertSame('name1', $exception->getValueInfo());
    }

    /**
     * @return void
     */
    public function testNewArgumentException2(): void
    {
        $exception = V::newArgumentException(['first_name2', 'second_name2'], 32);
        $expectedLine = __LINE__ - 1;
        $this->assertInstanceOf(ArgumentException::class, $exception);

        $this->assertSame('One or more arguments (first_name2, second_name2) are invalid.', $exception->getMessage());
        $this->assertSame(32, $exception->getCode());
        $this->assertSame(__FILE__, $exception->getFile());
        $this->assertSame($expectedLine, $exception->getLine());
        $this->assertNull($exception->getPrevious());

        $this->assertSame(['first_name2', 'second_name2'], $exception->getValueInfo());
    }

    /**
     * @return void
     */
    public function testNewArgumentException3(): void
    {
        $mock = Mockery::mock(ExceptionTraitObject::class)->makePartial();

        $previous = new InvalidArgumentException();
        $mock->expects('fixExceptionFileAndLine')->once()->withArgs(static function (mixed $arg) use ($previous): bool {
            return ($arg instanceof ArgumentException)
                && ($arg->getMessage() === 'Argument "name3" is invalid.')
                && ($arg->getCode() === 0)
                && ($arg->getPrevious() === $previous)
                && ($arg->getValueInfo() === ['name3' => 'Sailor Moon']);
        });
        $mock->expects('fixExceptionFileAndLine')->never();

        $mock::newArgumentException(['name3' => 'Sailor Moon'], previous: $previous);
    }

    /**
     * @return void
     */
    public function testFixExceptionFileAndLine(): void
    {
        $mock = Mockery::mock(ExceptionTrait::class);
        $mock->makePartial();
        $method = new ReflectionMethod($mock, 'fixExceptionFileAndLine');

        $exception = ExceptionTraitObject::newException();
        $expectedLine = __LINE__ - 1;

        $this->assertSame((new ReflectionClass(ExceptionTraitObject::class))->getFileName(), $exception->getFile());
        $this->assertSame(23, $exception->getLine());

        $method->invoke(null, $exception);

        $this->assertSame(__FILE__, $exception->getFile());
        $this->assertSame($expectedLine, $exception->getLine());
    }
}
