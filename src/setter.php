<?php

/**
 * Setter.
 *
 * Set attributes of an object.
 *
 * @package GrottoPress\Setter
 * @since 0.1.0
 *
 * @author GrottoPress (https://www.grottopress.com)
 * @author N Atta Kus Adusei (https://twitter.com/akadusei)
 */

namespace GrottoPress\Setter;

/**
 * Setter
 *
 * @since 0.1.0
 */
trait Setter {
    /**
     * Get attribute
     *
     * @var string $attribute Name of attribute to set.
     * @var mixed $value Value to set.
     * @var callable $sanitize_callback Callback function to sanitize value.
     *
     * @since 0.1.0
     * @access public
     *
     * @return mixed Attribute
     */
    final public function set( $attribute, $value, $sanitize_callback = '' ) {
        if ( ! \property_exists( \get_called_class(), $attribute ) ) {
            throw new \Exception( "$attribute attribute does not exist." );
        }

        if ( ! \in_array( $attribute, $this->settables() ) ) {
            throw new \Exception( "Setting $attribute attribute is not allowed." );
        }

        if ( ! $sanitize_callback ) {
            $this->$attribute = $value;

            return $this;
        }

        if ( ! \is_callable( $sanitize_callback ) ) {
            throw new \Exception( "$sanitize_callback is not a callable." );
        }

        $this->$attribute = \call_user_func( $sanitize_callback, $value );

        return $this;
    }

    /**
     * Settables
     *
     * Defines the attributes that can be updated
     * with our setter.
     *
     * @since 0.1.0
     * @access protected
     *
     * @return array Attributes.
     */
    protected function settables() {
        return [];
    }
}
