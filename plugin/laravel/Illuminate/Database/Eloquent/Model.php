<?php

namespace Illuminate\Database\Eloquent;

use Traversable;

class Model
{
	/**
	 * Create and store an instance of a Model.
	 *
	 * @param array $properties Associative array of properties with which to fill the created Model.
	 *
	 * @return static The created instance.
	 */
	public static function create(array $properties): self {}

	/**
	 * Locate the first Model that matches some criteria, or create and store it if it doesn't.
	 *
	 * If it's not found, all the provided properties are merged to create it.
	 *
	 * @param array $findProperties Associative array of properties to search for.
	 * @param array $propertiesIfNew Associative array of additional properties with which to fill the created Model.
	 *
	 * @return static The found or created instance.
	 */
	public static function firstOrCreate(array $findProperties, array $propertiesIfNew = []): self {}

	/**
	 * Locate the first Model that matches some criteria, or instantiate it if it doesn't.
	 *
	 * If it's not found, all the provided properties are merged to instantiate it. If not found, the newly-created
	 * model is *not* stored in the database.
	 *
	 * @param array $findProperties Associative array of properties to search for.
	 * @param array $propertiesIfNew Associative array of additional properties with which to fill the created Model.
	 *
	 * @return static The found or created instance.
	 */
	public static function firstOrNew(array $findProperties, array $propertiesIfNew = []): self {}

	/**
	 * Locate the first Model that matches some criteria and update it, or create and store it if it doesn't.
	 *
	 * @param array $findProperties Associative array of properties to search for.
	 * @param array $updateProperties Associative array of the properties with which to update the model.
	 *
	 * @return static The found or created instance.
	 */
	public static function updateOrCreate(array $findProperties, array $updateProperties = []): self {}

	/**
	 * Delete a model from the database, given its primary key.
	 *
	 * @param mixed $id The primary key of the record to delete.
	 */
	public static function destroy($id) {}

	/**
	 * Fetch all stored models.
	 *
	 * @return Collection All the models of the appropriate type from the database.
	 */
	public static function all(): Collection {}

	/**
	 * Initialise a query builder using an ORDER BY clause.
	 *
	 * @param string $column The column to order by.
	 * @param string $direction The direction of the sort ("asc" or "desc"). The default is "asc".
	 */
	public static function orderBy(string $column, $direction = "asc") {}

	/**
	 * Retrieve all the models of the appropriate type in chunks of a specified size.
	 *
	 * @param int $size The chunk size.
	 * @param callable $processor A callable that will be called with each chunk of models.
	 */
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

	/**
	 * Add a global scope to a type of Model.
	 *
	 * The scope to add must be either the name of a Illuminate\Database\Eloquent\Scope subclass or a closure that will
	 * apply the scope to all Builders instantiated on the Model type.
	 *
	 * @param string | callable $scope The scope to add.
	 */
	public static function addGlobalScope($scope) {}

	/**
	 * Initialise a query builder without a specified global scope.
	 *
	 * @param string $scope The scope to discard.
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public static function withoutGlobalScope(string $scope): Builder {}

	/**
	 * Initialise a query builder without a set of global scopes.
	 *
	 * @param string[] $scopes The scopes to discard. If not given, all global scopes are removed.
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public static function withoutGlobalScopes(array $scopes = null): Builder {}
}
