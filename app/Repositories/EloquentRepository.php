<?php

namespace App\Repositories;

use App\Repositories\Interfaces\Repository;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class EloquentRepository implements Repository
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * EloquentRepository constructor.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Find a model by its primary key.
     *
     * @param  mixed  $id
     * @param  array  $columns
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null
     */
    public function find($id, $columns = ['*'])
    {
        return $this->model->find($id, $columns);
    }

    /**
     * Execute the query as a "select" statement.
     *
     * @param  array  $columns
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all($columns = ['*'])
    {
        return $this->model
            ->orderBy('created_at', 'DESC')
            ->get($columns);
    }

    /**
     * Get an array with the values of a given column.
     *
     * @param  string  $column
     * @param  string|null  $key
     * @return \Illuminate\Support\Collection
     */
    public function pluck($column, $key = null)
    {
        return $this->model->pluck($column, $key);
    }

    /**
     * Paginate the given query.
     *
     * @param  int  $perPage
     * @param  array  $columns
     * @param  string  $pageName
     * @param  int|null  $page
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     *
     * @throws \InvalidArgumentException
     */
    public function paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
    {
        return $this->model
            ->orderBy('created_at', 'DESC')
            ->paginate($perPage, $columns, $pageName, $page);
    }

    /**
     * Save a new model and return the instance.
     *
     * @param  array  $attributes
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create($attributes)
    {
        return $this->model->create($attributes);
    }

    /**
     * Update the model in the database.
     *
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @param  array  $attributes
     * @param  array  $options
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update(Model $model, array $attributes = [], array $options = [])
    {
        $model->update($attributes, $options);
        return $model;
    }

    /**
     * Delete the model from the database.
     *
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return bool|null
     *
     * @throws \Exception
     */
    public function destroy(Model $model)
    {
        return $model->delete();
    }

    /**
     * Get the first record matching the attributes.
     *
     * @param  array  $attributes
     * @return \Illuminate\Database\Eloquent\Model|static
     */
    public function findByAttributes(array $attributes)
    {
        return $this
            ->model
            ->where($attributes)
            ->first();
    }

    /**
     * Get the first record matching the attributes even soft deleted.
     *
     * @param  array  $attributes
     * @return \Illuminate\Database\Eloquent\Model|static
     */
    public function findByAttributesWithTrashed(array $attributes)
    {
        return $this
            ->model
            ->withTrashed()
            ->where($attributes)
            ->first();
    }

    /**
     * Get multiple records matching the attributes.
     *
     * @param  array  $attributes
     * @param  null|string $orderBy
     * @param  string $sortOrder
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getByAttributes(array $attributes, $orderBy = null, $sortOrder = 'asc')
    {
        $query = $this->model->newQuery();
        if ($orderBy !== null) {
            $query->orderBy($orderBy, $sortOrder);
        }
        return $query
            ->where($attributes)
            ->get();
    }

    /**
     * Find multiple models by their primary keys.
     *
     * @param  \Illuminate\Contracts\Support\Arrayable|array  $ids
     * @param  array  $columns
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function findMany($ids, $columns = ['*'])
    {
        return $this->model->findMany($ids, $columns);
    }

    public function where($conditions, $operator = null, $value = null)
    {
        if (func_num_args() == \App\Constants\Student::NUMBER_METHOD_WHERE) {
            list($value, $operator) = [$operator, '='];
        }
        $this->where[] = [$conditions, $operator, $value];

        return $this;
    }

    /**
     * where in a model by attributes.
     *
     * @param  string  $attribute
     * @param  array  $params
     * @param  array  $columns
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function whereInByAttributes($attributes, array $params, $columns = ['*']): Collection
    {
        return $this->model->whereIn($attributes, $params)->get($columns);
    }

    public function first()
    {
        return $this->model->first();
    }

    public function firstOrCreate(array $attributes)
    {
        return $this->model->firstOrCreate($attributes);
    }

    /**
     * @inheritdoc
     */
    public function findOrFail($id, $columns = ['*'])
    {
        return $this->model->findOrFail($id, $columns);
    }
}