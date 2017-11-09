<?php
declare (strict_types = 1);

namespace GrottoPress\Setter;

use Codeception\Test\Unit;
use Exception;
use Error;

class SetterTest extends Unit
{
    /**
     * @var ExampleClass
     */
    private $example;

    protected function _before()
    {
        $this->example = new ExampleClass();
    }

    public function testSetPrivateAttributeWithPrivateSetterMethodWorks()
    {
        $this->example->canSet = 'hello';
        $this->assertSame($this->example->canSet, 'hello');
    }

    public function testSetPrivateAttributeWithNoSetterMethodReturnsError()
    {
        $this->expectException(Error::class);
        $this->example->cannotSet;
    }

    public function testSetNonExistentAtrributeReturnsException()
    {
        $this->expectException(Exception::class);
        $this->example->nonExistent;
    }
}
