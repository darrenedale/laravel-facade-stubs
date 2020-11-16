<?php

/** @noinspection PhpUnused */
/** @noinspection PhpInconsistentReturnPointsInspection */

namespace Illuminate\Support\Facades;

class Session
{
	/**
	 * Determine whether a session variable exists and is not null.
	 *
	 * @param string $key
	 *
	 * @return bool
	 */
	public static function has(string $key): bool {}

	/**
	 * Determine whether a session variable exists.
	 *
	 * @param string $key
	 *
	 * @return bool
	 */
	public static function exists(string $key): bool {}

	/**
	 * Fetch all the session data.
	 *
	 * @return array
	 */
	public static function all(): array {}

	/**
	 * Fetch an item from the session.
	 *
	 * The default can be a closure to return the result of that function as the default value if the session variable
	 * is not set.
	 *
	 * @param string $key The key of the session variable to get.
	 * @param mixed $default The default to return if the session variable is not set.
	 *
	 * @return mixed
	 */
	public static function get(string $key, $default = null) {}

	/**
	 * Fetch an item from the session, and remove it.
	 *
	 * The default can be a closure to return the result of that function as the default value if the session variable
	 * is not set.
	 *
	 * @param string $key The key of the session variable to get.
	 * @param mixed $default The default value to return if the session variable is not set.
	 *
	 * @return mixed
	 */
	public static function pull(string $key, $default) {}

	/**
	 * Store a value for a session variable.
	 *
	 * @param string $key The key for the variable in the session.
	 * @param mixed $value The value to store.
	 */
	public static function put(string $key, $value): void {}

	/**
	 * Push a value onto a pre-existing session variable that has an array value.
	 *
	 * @param string $key The key of the session variable to push to.
	 * @param mixed $value The value to push onto the array.
	 */
	public static function push(string $key, $value): void {}

	/**
	 * Remove one or more keys from the session variables.
	 *
	 * @param  string[] | string $keys The key or keys to remove from the session.
	 */
	public static function forget($keys): void {}

	/**
	 * Clear all data from the session.
	 */
	public static function flush(): void {}

	/**
	 * Retain all flash data for an additional request.
	 */
	public static function reflash(): void {}

	/**
	 * Retain specific flash data for an additional request.
	 *
	 * @param  string ...$keys The key or keys to keep in the flash data.
	 */
	public static function keep(...$keys): void {}

	/**
	 * Store a value for a session variable in the flash store (for one request only).
	 *
	 * @param string $key The key for the variable in the session.
	 * @param mixed $value The value to store.
	 */
	public static function flash(string $key, $value): void {}
}
