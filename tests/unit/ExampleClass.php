<?php

/**
 * Example class
 *
 * We're importing our Setter trait into this class
 * and setting attributes for use by our actual tests.
 *
 * @package GrottoPress\Setter
 *
 * @since 0.1.0
 *
 * @author GrottoPress (https://www.grottopress.com)
 * @author N Atta Kus Adusei (https://twitter.com/akadusei)
 */

declare (strict_types = 1);

namespace GrottoPress\Setter;

use GrottoPress\Getter\Getter;

/**
 * Example Class
 *
 * @since 0.1.0
 */
class ExampleClass
{
    use Setter, Getter;

    private $canSet;
    private $cannotSet;

    private function setCanSet($value)
    {
        $this->canSet = $value;
    }

    private function getCanSet()
    {
        return $this->canSet;
    }
}
