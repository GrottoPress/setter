# Setter

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

        // Define the sanitize method
        protected function sanitize( $attribute, $value ) {
            if ( 'att_2' == $attribute ) {
                return \intval( $value );
            }

            return \strval( $value );
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
    $object->set( 'att_2', '33int' )->output( 'att_2' ); // 33
    $object->set( 'att_3' )->output( 'att_3' ); // Error: not settable
