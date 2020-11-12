<?php

namespace Illuminate\Support\Facades;

class Log extends Facade
{
	public static function emergency($message): void {}
	public static function alert($message): void {}
	public static function critical($message): void {}
	public static function error($message): void {}
	public static function warning($message): void {}
	public static function notice($message): void {}
	public static function info($message): void {}
	public static function debug($message): void {}
}
