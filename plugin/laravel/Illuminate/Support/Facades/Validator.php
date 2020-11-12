<?php

namespace Illuminate\Support\Facades;

use Illuminate\Contracts\Validation\Validator as ValidatorContract;

class Validator extends Facade
{
	/**
	 * Create a validator for some data, based on a custom set of rules.
	 *
	 * @param array $data The data under validation
	 * @param array $rules The validation rules.
	 * @param array | null $messages Optional error messages for rules that fail.
	 *
	 * @return ValidatorContract
	 */
	public static function make(array $data, array $rules, array $messages = null): ValidatorContract {}
}
