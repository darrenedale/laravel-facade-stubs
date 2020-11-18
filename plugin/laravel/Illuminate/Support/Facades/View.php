<?php

namespace Illuminate\Support\Facades;

class View extends Facade
{
	/**
	 * Determine whether a view exists.
	 *
	 * @param string $view The view to check.
	 *
	 * @return bool
	 */
	public static function exists(string $view): bool {}

	/**
	 * Instantiate the first view that exists from a set.
	 *
	 * The array will be traversed front-to-back, and the first element that identifies an existing view will cause that
	 * view to be instantiated and returned.
	 *
	 * @param array $views The views to check for.
	 *
	 * @return \Illuminate\Support\Facades\View
	 */
	public static function first(array $views): View {}

	/**
	 * Register a view composer.
	 *
	 * The registered composers are called just before the view is rendered. They receive the View object as an
	 * argument. If a class FQN is registered, the compose() method is called on an object of that class; if a closure
	 * is registered, the closure is called.
	 *
	 * Use "*" for the view to register a composer for all views.
	 *
	 * The composer will be resolved using the service container, so the composer may receive other type-hinted
	 * arguments.
	 *
	 * @param string | string[] $views The view(s) for which to register the composer.
	 * @param string | \Closure $composer The class FQN or closure to compose the view.
	 */
	public static function composer($views, $composer): void {}

	/**
	 * Register a view creator.
	 *
	 * Creators are like composers. They differ only in the time at which the creator is called.
	 *
	 * The registered creators are called as soon as the view is instantiated (unlike composers, which wait until the
	 * view is about to be rendered). They receive the View object as an argument. If a class FQN is registered, the
	 * compose() method is called on an object of that class; if a closure is registered, the closure is called.
	 *
	 * @param string $view The view for which to register the composer.
	 * @param string | \Closure $composer The class FQN or closure to compose the view.
	 */
	public static function creator(string $view, $composer): void {}
}
