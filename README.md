# Setter

## Description

*Setter* allows you to set **private** object attributes directly, without calling setter methods.

For example, instead of calling `$myObject->setMyAttr($newValue)`, you can just do `$myObject->myAttr = $newValue`. Under the hood, *Setter* sets your attribute by calling a private `setMyAttr()` method that you define in your class.

This way, you get the benefit of syntactic sugar, while still maintaining encapsulation.

## Usage

Install via composer:

`composer require grottopress/setter`

*Setter* is a trait, so you need to import into your class to use it:

    <?php

    use GrottoPress\Setter\Setter;

    class MyClass {
        /**
         * Import setter
         */
        use Setter;

        private $changeMe;
        private $leaveMeAlone;

        public function __construct()
        {

        }

        /**
         * Define your private setter method
         * Method name should be of the format "set{$attrName}"
         */
        private function setChangeMe($newValue)
        {
            $this->changeMe = $newValue;
        }

        // Output attributes
        public function output( string $attribute ) {
            var_dump( $attribute );
        }

        ...
    }

    // Instantiate
    $object = new MyClass();

    // Try to set attributes
    $object->changeMe = 'New Me!'; // Works!
    $object->leaveMeAlone = 'xyz'; // Error: setLeaveMeAlone() not defined
