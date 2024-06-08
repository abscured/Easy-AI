<?php
/**
 * Integration tests for Foo
 *
 * @package      Easy_AI\Tests\Integration
 * @author       Kasra Sabet
 * @license      GPL-2.0+
 */

declare( strict_types = 1 );

namespace Easy_AI\Tests\Integration;

use Easy_AI\Foo as Testee;
use WP_UnitTestCase;

/**
 * Foo test case.
 */
class FooTest extends WP_UnitTestCase {
	/**
	 * A single example test.
	 */
	public function test_foo(): void {
		// Replace this with some actual integration testing code.
		static::assertTrue( ( new Testee() )->is_true() );
	}
}
