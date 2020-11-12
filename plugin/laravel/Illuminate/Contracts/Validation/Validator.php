<?php

namespace Illuminate\Contracts\Validation
{
	use Illuminate\Contracts\Support\MessageProvider;

	interface Validator extends MessageProvider
	{
		/**
		 * Determine if the data fails the validation rules.
		 *
		 * @return bool
		 */
		public function fails(): bool;

		/**
		 * Get the failed validation rules.
		 *
		 * @return array
		 */
		public function failed(): array;

		/**
		 * Add conditions to a given field based on a Closure.
		 *
		 * @param  string  $attribute
		 * @param  string|array  $rules
		 * @param  callable  $callback
		 * @return $this
		 */
		public function sometimes(string $attribute, $rules, callable $callback): self;

		/**
		 * After an after validation callback.
		 *
		 * @param  callable|string  $callback
		 * @return $this
		 */
		public function after($callback): self;
	}
}
