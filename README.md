# Setter

## Description

*Setter* allows you to set **private** object attributes directly, without calling setter methods.

For example, instead of calling `$myObject->setMyAttr($newValue)`, you can just do `$myObject->myAttr = $newValue`. Under the hood, *Setter* sets your attribute by calling a private `setMyAttr()` method that you define in your class.

This way, you get the benefit of syntactic sugar, while maintaining encapsulation.

## Usage

Install via composer:

`composer require grottopress/setter`

Import trait into your class, and use thus:

```php
<?php
declare (strict_types = 1);

namespace Vendor;

use GrottoPress\Setter\SetterTrait;

class MyClass {
    /**
     * Import trait
     */
    use SetterTrait;

    private $changeMe;
    private $leaveMeAlone;

    /**
     * Define your private setter method
     * Method name should be of the format "set{$attrName}"
     */
    private function setChangeMe($newValue)
    {
        $this->changeMe = $newValue;
    }

    // ...
}

// Instantiate
$object = new MyClass();

// Try to set attributes
$object->changeMe = 'New Me!'; // Works!
$object->leaveMeAlone = 'xyz'; // Error: 'setLeaveMeAlone()' not defined
```
