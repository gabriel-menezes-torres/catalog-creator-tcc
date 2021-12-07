<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Contracts\CategoryInterface;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryInterface
{

    /**
     * Book constructor.
     *
     * @param  Category  $model
     */
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }
}
