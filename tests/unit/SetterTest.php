<?php
declare (strict_types = 1);

namespace GrottoPress\Setter;

use Codeception\Test\Unit;
use Exception;
use Error;

class SetterTest extends Unit
{
    /**
     * @var objectClass
     */
    private $object;

    protected function _before()
    {
        $this->object = new class {
            use SetterTrait;

            private $canSet;
            private $cannotSet;

            private function setCanSet($value)
            {
                $this->canSet = $value;
            }

            public function getCanSet()
            {
                return $this->canSet;
            }
        };
    }

    public function testSetPrivateAttributeWithPrivateSetterMethodWorks()
    {
        $this->object->canSet = 'hello';
        $this->assertSame($this->object->getCanSet(), 'hello');
    }

    public function testSetPrivateAttributeWithNoSetterMethodReturnsError()
    {
        $this->expectException(Error::class);
        $this->object->cannotSet = 'Howdy!';
    }

    public function testSetNonExistentAtrributeReturnsException()
    {
        $this->expectException(Exception::class);
        $this->object->nonExistent = 'Hi!';
    }
}
