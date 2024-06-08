<?php
/**
 * Foo class, does foo
 *
 * @package      Easy_AI
 * @author       Kasra Sabet
 * @license      GPL-2.0+
 */

declare( strict_types = 1 );

namespace Easy_AI;

/**
 * Foo class.
 */
class Foo {
	/**
	 * Bar.
	 *
	 * @return string
	 */
	public function bar(): string {
		return 'Foo::bar()';
	}

	/**
	 * Returns true, always.
	 *
	 * @return true
	 */
	public function is_true(): bool {
		return true;
	}
}
