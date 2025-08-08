<?php declare(strict_types=1);

namespace Tests\Unit\Exceptions;

use InvalidArgumentException;
use VanCodX\Data\Validation\Exceptions\ArgumentException;
use VanCodX\Testing\PHPUnit\TestCase;

class ArgumentExceptionTest extends TestCase
{
    /**
     * @return void
     */
    public function testArgumentException1(): void
    {
        $exception = new ArgumentException('name1');

        $this->assertSame('Argument "name1" is invalid.', $exception->getMessage());
        $this->assertSame(0, $exception->getCode());
        $this->assertNull($exception->getPrevious());

        $this->assertSame('name1', $exception->getValueInfo());
    }

    /**
     * @return void
     */
    public function testArgumentException2(): void
    {
        $exception = new ArgumentException(['name2'], 2);

        $this->assertSame('Argument "name2" is invalid.', $exception->getMessage());
        $this->assertSame(2, $exception->getCode());
        $this->assertNull($exception->getPrevious());

        $this->assertSame(['name2'], $exception->getValueInfo());
    }

    /**
     * @return void
     */
    public function testArgumentException3(): void
    {
        $previous = new InvalidArgumentException();
        $exception = new ArgumentException(['first_name3', 'second_name3'], previous: $previous);

        $this->assertSame('One or more arguments (first_name3, second_name3) are invalid.', $exception->getMessage());
        $this->assertSame(0, $exception->getCode());
        $this->assertSame($previous, $exception->getPrevious());

        $this->assertSame(['first_name3', 'second_name3'], $exception->getValueInfo());
    }

    /**
     * @return void
     */
    public function testArgumentException4(): void
    {
        $exception = new ArgumentException(['name4' => 'Sailor Moon'], 4);

        $this->assertSame('Argument "name4" is invalid.', $exception->getMessage());
        $this->assertSame(4, $exception->getCode());
        $this->assertNull($exception->getPrevious());

        $this->assertSame(['name4' => 'Sailor Moon'], $exception->getValueInfo());
    }

    /**
     * @return void
     */
    public function testArgumentException5(): void
    {
        $previous = new InvalidArgumentException();
        $exception = new ArgumentException(['first_name5' => 'Sailor', 'second_name5' => 'Moon'], previous: $previous);

        $this->assertSame('One or more arguments (first_name5, second_name5) are invalid.', $exception->getMessage());
        $this->assertSame(0, $exception->getCode());
        $this->assertSame($previous, $exception->getPrevious());

        $this->assertSame(['first_name5' => 'Sailor', 'second_name5' => 'Moon'], $exception->getValueInfo());
    }

    /**
     * @return void
     */
    public function testArgumentException6(): void
    {
        $this->expectExceptionObjectOnCall(
            new InvalidArgumentException('Argument "valueInfo" is invalid.'),
            static function (): void {
                /** @phpstan-ignore new.resultUnused */
                new ArgumentException('');
            }
        );

        $this->expectExceptionObjectOnCall(
            new InvalidArgumentException('Argument "valueInfo" is invalid.'),
            static function (): void {
                /** @phpstan-ignore new.resultUnused */
                new ArgumentException([]);
            }
        );

        $this->expectExceptionObjectOnCall(
            new InvalidArgumentException('Argument "valueInfo" is invalid.'),
            static function (): void {
                /** @phpstan-ignore new.resultUnused */
                new ArgumentException(['']);
            }
        );

        $this->expectExceptionObjectOnCall(
            new InvalidArgumentException('Argument "valueInfo" is invalid.'),
            static function (): void {
                /** @phpstan-ignore new.resultUnused */
                new ArgumentException(['' => 'Sailor Moon']);
            }
        );
    }
}
