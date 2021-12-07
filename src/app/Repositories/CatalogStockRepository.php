<?php

namespace App\Repositories;

use App\Models\CatalogStock;
use App\Repositories\Contracts\CatalogStockInterface;
use App\Repositories\BaseRepository;

class CatalogStockRepository extends BaseRepository implements CatalogStockInterface
{

    /**
     * CatalogStock constructor.
     *
     * @param  CatalogStock  $model
     */
    public function __construct(CatalogStock $model)
    {
        parent::__construct($model);
    }
}
