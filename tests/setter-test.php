<?php

/**
 * Setter tests
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

use PHPUnit\Framework\TestCase;
use GrottoPress\Setter\Setter;

/**
 * Setter test case
 *
 * @since 0.1.0
 */
class Setter_Test extends TestCase {
    private $example_class;

    public function setUp() {
        $this->example_class = new Example_Class();

        parent::setUp();
    }

    public function test_setting_allowed_atts_works() {
		$this->example_class->set( 'att_1', 'World' );
        $this->example_class->set( 'att_2', 555 );

        $this->assertEquals( $this->example_class->get( 'att_1' ), 'World' );
        $this->assertEquals( $this->example_class->get( 'att_2' ), 555 );
	}

    public function test_setting_disallowed_atts_returns_exception() {
        $this->expectException( \Exception::class );
        $this->example_class->set( 'att_3', 'Exception' );
    }

    public function test_setting_invalid_atts_returns_exception() {
        $this->expectException( \Exception::class );
        $this->example_class->set( 'att 22', '233three' );
    }

    public function test_sanitization_works() {
        $this->example_class->set( 'att_2', '403berreta' );

        $this->assertEquals( $this->example_class->get( 'att_2' ), \intval( '403berreta' ) );
    }
}
