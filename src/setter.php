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
     *
     * @since 0.1.0
     * @access public
     *
     * @return mixed Attribute
     */
    final public function set( $attribute, $value ) {
        if ( ! \property_exists( \get_called_class(), $attribute ) ) {
            throw new \Exception( "$attribute attribute does not exist." );
        }

        if ( ! \in_array( $attribute, ( array ) $this->settables() ) ) {
            throw new \Exception( "Setting $attribute attribute is not allowed." );
        }

        $this->$attribute = $this->sanitize_attr( $attribute, $value );

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
    abstract protected function settables();

    /**
     * Sanitize attribute
     *
     * Use this to sanitize attribute before setting them
     * when `set` is called from outside.
     *
     * @var string $attribute Attribute whose value to sanitize.
     * @var mixed $value Value to sanitize.
     *
     * @since 0.2.0
     * @access protected
     *
     * @return mixed Sanitnized attributes.
     */
    abstract protected function sanitize_attr( $attribute, $value );
}
