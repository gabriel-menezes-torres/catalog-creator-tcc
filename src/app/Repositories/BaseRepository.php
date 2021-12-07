<?php

namespace App\Repositories;

use App\Repositories\Contracts\BaseInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BaseRepository implements BaseInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $attributes
     *
     * @return Model
     */
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    /**
     * @param int $records
     * @return Collection
     */
    public function fetch(int $records): Collection
    {
        return $this->model->newQuery()
            ->select('*')
            ->limit($records)
            ->get();
    }

    /**
     * @param int $id
     * @return Model
     */
    public function find(int $id): Model
    {
        return $this->model->find($id);
    }

    /**
     * @return Collection
     */
    public function findAll($distictBy = null): Collection
    {
        return $this->model->all()->unique($distictBy)->sortByDesc('id');
    }

    /**
     * @param array $fields
     * @return Array
     */
    public function findByAttributes(array $fields): array
    {
        $query = $this->model->newQuery();

        foreach ($fields as $key => $value) {
            if (isset($value) && $value != '') {
                $query = $query->where($key, $value);
            }
        }

        return $query->get()->toArray();
    }

    /**
     * @param $key
     * @param $value
     * @return Model
     */
    public function findOne($key, $value)
    {
        return $this->model->where([$key => $value])->first();
    }

    /**
     * @param array $where
     * @param array $fieldsToUpdate
     * @return void
     */
    public function update(array $where, array $fieldsToUpdate): void
    {
        $this->model->where($where)->update($fieldsToUpdate);
    }
}
