<?php
declare (strict_types = 1);

namespace GrottoPress\Setter;

use Exception;

trait SetterTrait
{
    /**
     * @param mixed $value
     */
    public function __set(string $attribute, $value)
    {
        if (!\property_exists(static::class, $attribute)) {
            throw new Exception("'{$attribute}' attribute does not exist.");
        }

        $this->{"set{$attribute}"}($value);
    }
}
