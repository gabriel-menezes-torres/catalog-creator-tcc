<?php

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Interface BaseInterface
 * @package App\Repositories
 */
interface BaseInterface
{
    /**
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): Model;

    /**
     * @param int $records
     * @return Collection
     */
    public function fetch(int $records): Collection;

    /**
     * @param int id
     * @return Model
     */
    public function find(int $id): Model;

    /**
     * @return Collection
     */
    public function findAll(string $distinctBy): Collection;

    /**
     * @param array $fields
     * @return Array
     */
    public function findByAttributes(array $fields): array;
}
