<?php declare(strict_types=1);

namespace Tests\Unit\Exceptions;

use InvalidArgumentException;
use UnexpectedValueException;
use VanCodX\Data\Validation\Exceptions\ValueException;
use VanCodX\Testing\PHPUnit\TestCase;

class ValueExceptionTest extends TestCase
{
    /**
     * @return void
     */
    public function testValueException1(): void
    {
        $exception = new ValueException('name1');

        $this->assertSame('Value "name1" is invalid.', $exception->getMessage());
        $this->assertSame(0, $exception->getCode());
        $this->assertNull($exception->getPrevious());

        $this->assertSame('name1', $exception->getValueInfo());
    }

    /**
     * @return void
     */
    public function testValueException2(): void
    {
        $exception = new ValueException(['name2'], 2);

        $this->assertSame('Value "name2" is invalid.', $exception->getMessage());
        $this->assertSame(2, $exception->getCode());
        $this->assertNull($exception->getPrevious());

        $this->assertSame(['name2'], $exception->getValueInfo());
    }

    /**
     * @return void
     */
    public function testValueException3(): void
    {
        $previous = new UnexpectedValueException();
        $exception = new ValueException(['first_name3', 'second_name3'], previous: $previous);

        $this->assertSame('One or more values (first_name3, second_name3) are invalid.', $exception->getMessage());
        $this->assertSame(0, $exception->getCode());
        $this->assertSame($previous, $exception->getPrevious());

        $this->assertSame(['first_name3', 'second_name3'], $exception->getValueInfo());
    }

    /**
     * @return void
     */
    public function testValueException4(): void
    {
        $exception = new ValueException(['name4' => 'Sailor Moon'], 4);

        $this->assertSame('Value "name4" is invalid.', $exception->getMessage());
        $this->assertSame(4, $exception->getCode());
        $this->assertNull($exception->getPrevious());

        $this->assertSame(['name4' => 'Sailor Moon'], $exception->getValueInfo());
    }

    /**
     * @return void
     */
    public function testValueException5(): void
    {
        $previous = new UnexpectedValueException();
        $exception = new ValueException(['first_name5' => 'Sailor', 'second_name5' => 'Moon'], previous: $previous);

        $this->assertSame('One or more values (first_name5, second_name5) are invalid.', $exception->getMessage());
        $this->assertSame(0, $exception->getCode());
        $this->assertSame($previous, $exception->getPrevious());

        $this->assertSame(['first_name5' => 'Sailor', 'second_name5' => 'Moon'], $exception->getValueInfo());
    }

    /**
     * @return void
     */
    public function testValueException6(): void
    {
        $this->expectExceptionObjectOnCall(
            new InvalidArgumentException('Argument "valueInfo" is invalid.'),
            static function (): void {
                new ValueException('');
            }
        );

        $this->expectExceptionObjectOnCall(
            new InvalidArgumentException('Argument "valueInfo" is invalid.'),
            static function (): void {
                new ValueException([]);
            }
        );

        $this->expectExceptionObjectOnCall(
            new InvalidArgumentException('Argument "valueInfo" is invalid.'),
            static function (): void {
                new ValueException(['']);
            }
        );

        $this->expectExceptionObjectOnCall(
            new InvalidArgumentException('Argument "valueInfo" is invalid.'),
            static function (): void {
                new ValueException(['' => 'Sailor Moon']);
            }
        );
    }
}
