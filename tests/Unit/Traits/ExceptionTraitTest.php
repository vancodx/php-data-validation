<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use InvalidArgumentException;
use UnexpectedValueException;
use VanCodX\Data\Validation\Exceptions\ArgumentException;
use VanCodX\Data\Validation\Exceptions\ValueException;
use VanCodX\Data\Validation\Validation as V;
use VanCodX\Testing\PHPUnit\TestCase;

class ExceptionTraitTest extends TestCase
{
    /**
     * @return void
     */
    public function testNewValueException1(): void
    {
        $exception = V::newValueException('name1');
        $this->assertInstanceOf(ValueException::class, $exception);

        $this->assertSame('Value "name1" is invalid.', $exception->getMessage());
        $this->assertSame(0, $exception->getCode());
        $this->assertNull($exception->getPrevious());

        $this->assertSame('name1', $exception->getValueInfo());
    }

    /**
     * @return void
     */
    public function testNewValueException2(): void
    {
        $exception = V::newValueException(['first_name2', 'second_name2'], 32);
        $this->assertInstanceOf(ValueException::class, $exception);

        $this->assertSame('One or more values (first_name2, second_name2) are invalid.', $exception->getMessage());
        $this->assertSame(32, $exception->getCode());
        $this->assertNull($exception->getPrevious());

        $this->assertSame(['first_name2', 'second_name2'], $exception->getValueInfo());
    }

    /**
     * @return void
     */
    public function testNewValueException3(): void
    {
        $previous = new UnexpectedValueException();
        $exception = V::newValueException(['name3' => 'Sailor Moon'], previous: $previous);
        $this->assertInstanceOf(ValueException::class, $exception);

        $this->assertSame('Value "name3" is invalid.', $exception->getMessage());
        $this->assertSame(0, $exception->getCode());
        $this->assertSame($previous, $exception->getPrevious());

        $this->assertSame(['name3' => 'Sailor Moon'], $exception->getValueInfo());
    }

    /**
     * @return void
     */
    public function testNewArgumentException1(): void
    {
        $exception = V::newArgumentException('name1');
        $this->assertInstanceOf(ArgumentException::class, $exception);

        $this->assertSame('Argument "name1" is invalid.', $exception->getMessage());
        $this->assertSame(0, $exception->getCode());
        $this->assertNull($exception->getPrevious());

        $this->assertSame('name1', $exception->getValueInfo());
    }

    /**
     * @return void
     */
    public function testNewArgumentException2(): void
    {
        $exception = V::newArgumentException(['first_name2', 'second_name2'], 32);
        $this->assertInstanceOf(ArgumentException::class, $exception);

        $this->assertSame('One or more arguments (first_name2, second_name2) are invalid.', $exception->getMessage());
        $this->assertSame(32, $exception->getCode());
        $this->assertNull($exception->getPrevious());

        $this->assertSame(['first_name2', 'second_name2'], $exception->getValueInfo());
    }

    /**
     * @return void
     */
    public function testNewArgumentException3(): void
    {
        $previous = new InvalidArgumentException();
        $exception = V::newArgumentException(['name3' => 'Sailor Moon'], previous: $previous);
        $this->assertInstanceOf(ArgumentException::class, $exception);

        $this->assertSame('Argument "name3" is invalid.', $exception->getMessage());
        $this->assertSame(0, $exception->getCode());
        $this->assertSame($previous, $exception->getPrevious());

        $this->assertSame(['name3' => 'Sailor Moon'], $exception->getValueInfo());
    }
}
