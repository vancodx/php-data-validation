<?php declare(strict_types=1);

namespace Tests\Unit\Exceptions\Traits;

use Mockery;
use ReflectionProperty;
use VanCodX\Data\Validation\Exceptions\Traits\ValueInfoTrait;
use VanCodX\Testing\PHPUnit\MockeryTestCase;

class ValueInfoTraitTest extends MockeryTestCase
{
    /**
     * @return void
     */
    public function testGetValueInfo(): void
    {
        $mock = Mockery::mock(ValueInfoTrait::class);
        $mock->makePartial();
        $property = new ReflectionProperty($mock, 'valueInfo');

        $property->setValue($mock, 'name1');
        $this->assertSame('name1', $mock->getValueInfo());

        $property->setValue($mock, ['first_name2', 'second_name2']);
        $this->assertSame(['first_name2', 'second_name2'], $mock->getValueInfo());

        $property->setValue($mock, ['name3' => 'Sailor Moon']);
        $this->assertSame(['name3' => 'Sailor Moon'], $mock->getValueInfo());
    }
}
