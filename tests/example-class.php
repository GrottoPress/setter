<?php

/**
 * Example class
 *
 * We're importing our Setter trait into this class
 * and setting attributes for use by our actual tests.
 *
 * @package GrottoPress\Setter
 * @subpackage GrottoPress\Setter\Tests
 *
 * @since 0.1.0
 *
 * @author GrottoPress (https://www.grottopress.com)
 * @author N Atta Kus Adusei (https://twitter.com/akadusei)
 */

namespace GrottoPress\Setter\Tests;

use GrottoPress\Setter\Setter;
use GrottoPress\Getter\Getter;

/**
 * Example Class
 *
 * @since 0.1.0
 */
class Example_Class {
    use Setter, Getter;

    protected $att_1;
    protected $att_2;
    protected $att_3;

    public function __construct() {
        $this->att_1 = 'Hello';
        $this->att_2 = '44street';
        $this->att_3 = 'Hey!';
    }

    protected function settables() {
        return [ 'att_1', 'att_2' ];
    }

    protected function gettables() {
        return [ 'att_1', 'att_2', 'att_3' ];
    }
}
