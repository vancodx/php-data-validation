<?php declare(strict_types=1);

namespace Tests\Unit\Exceptions\Traits;

use InvalidArgumentException;
use Mockery;
use ReflectionMethod;
use VanCodX\Data\Validation\Exceptions\Traits\PrepareMessageTrait;
use VanCodX\Testing\PHPUnit\MockeryTestCase;

class PrepareMessageTraitTest extends MockeryTestCase
{
    /**
     * @return void
     */
    public function testPrepareMessage1(): void
    {
        $mock = Mockery::mock(PrepareMessageTraitObject::class)->makePartial();
        $method = new ReflectionMethod($mock, 'prepareMessage');

        $mock->expects('prepareNames')->once()->with('name1')->andReturn(['NAME1']);
        $mock->expects('prepareNames')->once()->with(['name2'])->andReturn(['NAME2']);
        $mock->expects('prepareNames')->once()->with(['first_name3', 'second_name3'])
            ->andReturn(['FIRST_NAME3', 'SECOND_NAME3']);
        $mock->expects('prepareNames')->once()->with(['name4' => 'Sailor Moon'])->andReturn(['NAME4']);
        $mock->expects('prepareNames')->once()->with(['first_name5' => 'Sailor', 'second_name5' => 'Moon'])
            ->andReturn(['FIRST_NAME5', 'SECOND_NAME5']);
        $mock->expects('prepareNames')->never();

        $singularFormat = 'Value "%s" is ...';
        $pluralFormat = 'Values (%s) are ...';

        $this->assertSame('Value "NAME1" is ...', $method->invoke(null, $singularFormat, $pluralFormat, 'name1'));
        $this->assertSame('Value "NAME2" is ...', $method->invoke(null, $singularFormat, $pluralFormat, ['name2']));
        $this->assertSame(
            'Values (FIRST_NAME3 + SECOND_NAME3) are ...',
            $method->invoke(null, $singularFormat, $pluralFormat, ['first_name3', 'second_name3'], ' + ')
        );
        $this->assertSame(
            'Value "NAME4" is ...',
            $method->invoke(null, $singularFormat, $pluralFormat, ['name4' => 'Sailor Moon'])
        );
        $this->assertSame(
            'Values (FIRST_NAME5, SECOND_NAME5) are ...',
            $method->invoke(null, $singularFormat, $pluralFormat, ['first_name5' => 'Sailor', 'second_name5' => 'Moon'])
        );
    }

    /**
     * @return void
     */
    public function testPrepareMessage2(): void
    {
        $mock = Mockery::mock(PrepareMessageTrait::class);
        $mock->makePartial();
        $method = new ReflectionMethod($mock, 'prepareMessage');

        $singularFormat = 'Value "%s" is ...';
        $pluralFormat = 'Values (%s) are ...';

        $this->expectExceptionObjectOnCall(
            new InvalidArgumentException('Argument "singularFormat" is invalid.'),
            static function () use ($method, $pluralFormat): void {
                $method->invoke(null, '', $pluralFormat, 'name1');
            }
        );

        $this->expectExceptionObjectOnCall(
            new InvalidArgumentException('Argument "pluralFormat" is invalid.'),
            static function () use ($method, $singularFormat): void {
                $method->invoke(null, $singularFormat, '', ['first_name2', 'second_name2']);
            }
        );

        $this->expectExceptionObjectOnCall(
            new InvalidArgumentException('Argument "nameSeparator" is invalid.'),
            static function () use ($method, $singularFormat, $pluralFormat): void {
                $method->invoke(null, $singularFormat, $pluralFormat, ['name3' => 'Sailor Moon'], '');
            }
        );
    }

    /**
     * @return void
     */
    public function testPrepareNames1(): void
    {
        $mock = Mockery::mock(PrepareMessageTrait::class);
        $mock->makePartial();
        $method = new ReflectionMethod($mock, 'prepareNames');

        $this->assertSame(['name1'], $method->invoke(null, 'name1'));
        $this->assertSame(['name2'], $method->invoke(null, ['name2']));
        $this->assertSame(['first_name3', 'second_name3'], $method->invoke(null, ['first_name3', 'second_name3']));
        $this->assertSame(['name4'], $method->invoke(null, ['name4' => 'Sailor Moon']));
        $this->assertSame(
            ['first_name5', 'second_name5'],
            $method->invoke(null, ['first_name5' => 'Sailor', 'second_name5' => 'Moon'])
        );
    }

    /**
     * @return void
     */
    public function testPrepareNames2(): void
    {
        $mock = Mockery::mock(PrepareMessageTrait::class);
        $mock->makePartial();
        $method = new ReflectionMethod($mock, 'prepareNames');

        $this->expectExceptionObjectOnCall(
            new InvalidArgumentException('Argument "valueInfo" is invalid.'),
            static function () use ($method): void {
                $method->invoke(null, '');
            }
        );

        $this->expectExceptionObjectOnCall(
            new InvalidArgumentException('Argument "valueInfo" is invalid.'),
            static function () use ($method): void {
                $method->invoke(null, []);
            }
        );

        $this->expectExceptionObjectOnCall(
            new InvalidArgumentException('Argument "valueInfo" is invalid.'),
            static function () use ($method): void {
                $method->invoke(null, ['']);
            }
        );

        $this->expectExceptionObjectOnCall(
            new InvalidArgumentException('Argument "valueInfo" is invalid.'),
            static function () use ($method): void {
                $method->invoke(null, ['' => 'Sailor Moon']);
            }
        );
    }
}
