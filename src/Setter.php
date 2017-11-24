<?php

/**
 * Setter.
 *
 * Set private object attributes directly,
 * without calling setter methods.
 *
 * @package GrottoPress\Setter
 * @since 0.1.0
 *
 * @author GrottoPress (https://www.grottopress.com)
 * @author N Atta Kus Adusei (https://twitter.com/akadusei)
 */

declare (strict_types = 1);

namespace GrottoPress\Setter;

use Exception;

/**
 * Setter
 *
 * @since 0.1.0
 */
trait Setter
{
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
    final public function __set(string $attribute, $value)
    {
        if (!\property_exists(static::class, $attribute)) {
            throw new Exception("'{$attribute}' attribute does not exist.");
        }

        $this->{"set{$attribute}"}($value);
    }
}
