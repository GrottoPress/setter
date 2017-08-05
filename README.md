# Setter

* Author: [@GrottoPress](https://github.com/grottopress)
* Author Website: [https://www.grottopress.com](https://www.grottopress.com)
* Contributor(s): [@akadusei](https://github.com/akadusei)
* License: [GNU General Public License v2.0 or later](http://www.gnu.org/licenses/gpl-2.0.html)

## Description

*Setter* is a simple library to set/update object attributes.

## Usage

Install via composer:

`composer require grottopress/setter`

*Setter* is a trait, so you need to import into your class to use it:

    <?php

    use GrottoPress\WordPress\Setter\Setter;

    class My_Class {
        // Import setter
        use Setter;

        protected $att_1;
        protected $att_2;
        protected $att_3;

        // Set your settable attributes here
        protected function settables() {
            return [ 'att_1', 'att_2' ];
        }

        // Output attributes
        public function output( $attribute ) {
            var_dump( $attribute );
        }

        ...
    }

    // Instantiate
    $object = new My_Class();

    // Try to set attributes
    $object->set( 'att_1', 'World' )->output( 'att_1' ); // World
    $object->set( 'att_2', '33', 'intval' )->output( 'att_2' ); // 33
    $object->set( 'att_3' )->output( 'att_3' ); // Error: not settable