<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogStock extends Model
{
    protected $primaryKey = 'catalog_item_id';
    protected $table = 'catalog_item_stock';
    protected $guarded = [];
}
