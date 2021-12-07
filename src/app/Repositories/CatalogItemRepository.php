<?php

namespace App\Repositories;

use App\Models\CatalogItem;
use App\Repositories\Contracts\CatalogStockInterface;
use App\Repositories\BaseRepository;

class CatalogItemRepository extends BaseRepository implements CatalogStockInterface
{

    /**
     * CatalogItem constructor.
     *
     * @param  CatalogItem  $model
     */
    public function __construct(CatalogItem $model)
    {
        parent::__construct($model);
    }
}
