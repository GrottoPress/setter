# Setter

## Description

*Setter* allows you to set **private** object attributes directly, without calling setter methods.

For example, instead of calling `$myObject->setMyAttr($newValue)`, you can just do `$myObject->myAttr = $newValue`. Under the hood, *Setter* sets your attribute by calling a private `setMyAttr()` method that you define in your class.

This way, you get the benefit of syntactic sugar, while maintaining encapsulation.

## Installation

Install via composer:

```bash
composer require grottopress/setter
```

## Usage

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
$object = new Vendor\MyClass();

// Try to set attributes
$object->changeMe = 'New Me!'; // => Works!
$object->leaveMeAlone = 'xyz'; // => Error: 'setLeaveMeAlone()' not defined
```

## Development

Run tests with `composer run test`.

## Contributing

1. [Fork it](https://github.com/GrottoPress/setter/fork)
1. Switch to the `master` branch: `git checkout master`
1. Create your feature branch: `git checkout -b my-new-feature`
1. Make your changes, updating changelog and documentation as appropriate.
1. Commit your changes: `git commit`
1. Push to the branch: `git push origin my-new-feature`
1. Submit a new *Pull Request* against the `GrottoPress:master` branch.
