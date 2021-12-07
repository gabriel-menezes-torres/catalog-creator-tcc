<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\BaseInterface;
use App\Repositories\Contracts\CatalogItemInterface;
use App\Repositories\Contracts\CategoryInterface;
use App\Repositories\Contracts\CatalogStockInterface;

use App\Repositories\BaseRepository;
use App\Repositories\CatalogItemRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\CatalogStockRepository;

/**
 * Class RepositoryServiceProvider
 * @package App\Providers
 */
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $toBind = [
            BaseInterface::class => BaseRepository::class,
            CatalogItemInterface::class => CatalogItemRepository::class,
            CategoryInterface::class => CategoryRepository::class,
            CatalogStockInterface::class => CatalogStockRepository::class
        ];

        foreach ($toBind as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}
