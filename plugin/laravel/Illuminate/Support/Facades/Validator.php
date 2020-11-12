<?php

namespace Illuminate\Support\Facades;

use Illuminate\Contracts\Validation\Validator as ValidatorContract;

class Validator extends Facade
{
	/** @return ValidatorContract */
	public static function make() {}
}