<?php

namespace Illuminate\Database\Eloquent;

use Traversable;

class Model
{
	public static function create(array $properties): self {}
	public static function firstOrCreate(array $findProperties, array $propertiesIfNew = []): self {}
	public static function firstOrNew(array $findProperties, array $propertiesIfNew = []): self {}
	public static function updateOrCreate(array $findProperties, array $createProperties = []): self {}

	public static function destroy($id) {}

	/**
	 * @return Collection
	 */
	public static function all(): Collection {}

	public static function orderBy(string $column, $direction = "asc") {}
	public static function chunk(int $size, callable $processor) {}

	/**
	 * @param $id
	 *
	 * @return \Illuminate\Database\Eloquent\Model|null
	 */
	public static function find($id): ?Model {}

	/**
	 * @param $id
	 *
	 * @return \Illuminate\Database\Eloquent\Model|null
	 */
	public static function findOrFail($id): ?Model {}

	/**
	 * Start building a query for Model objects with a basic WHERE clause.
	 *
	 * @param callable|string $field
	 * @param mixed | null $opOrValue
	 * @param mixed | null $value
	 * @param string $boolean "and" | "or"
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public static function where($field, $opOrValue = null, $value = null, string $boolean = "and"): Builder {}

	/**
	 * Start building a query for Model with condition that matches a field against one of a set of values.
	 *
	 * @param string $field The field to examine.
	 * @param array | Traversable $values The set of values against which to match the field.
	 * @param string $boolean "and" | "or". Default is "and"
	 * @param bool $not Default is `false`.
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public static function whereIn($field, $values, string $boolean = "and", $not = false): Builder {}

	/**
	 * Initialise a query builder including soft-deleted records.
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public static function withTrashed(): Builder {}

	/**
	 * Initialise a query builder including only soft-deleted records.
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public static function onlyTrashed(): Builder {}

	public static function withoutGlobalScopes() {}
}
