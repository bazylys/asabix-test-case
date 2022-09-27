<?php

namespace App\Providers;

use App\Contracts\Repository\TagsRepositoryInterface;
use App\Repositories\Eloquent\TagsRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TagsRepositoryInterface::class, TagsRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
