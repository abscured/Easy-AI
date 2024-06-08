<?php
/**
 * Unit tests for Foo
 *
 * @package      Easy_AI\Tests\Unit
 * @author       Kasra Sabet
 * @license      GPL-2.0+
 */

declare( strict_types = 1 );

namespace Easy_AI\Tests\Unit;

use Easy_AI\Foo as Testee;
use Easy_AI\Tests\TestCase;

/**
 * Foo test case.
 */
class FooTest extends TestCase {

	/**
	 * A single example test.
	 */
	public function test_sample(): void {
		// Replace this with some actual testing code.
		static::assertTrue( ( new Testee() )->is_true() );
	}

	/**
	 * A single example test.
	 */
	public function test_foo(): void {
		// Replace this with some actual testing code.
		static::assertFalse( false );
	}

	/**
	 * A single example test.
	 */
	public function test_bar(): void {
		// Replace this with some actual testing code.
		static::assertEquals( 'Foo::bar()', ( new Testee() )->bar() );
	}
}
