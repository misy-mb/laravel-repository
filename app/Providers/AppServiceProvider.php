<?php

namespace App\Providers;

use App\Repositories\Eloquents\permission\EloquentPermission;
use App\Repositories\Eloquents\todo\EloquentTodo;
use App\Repositories\Interfaces\permission\PermissionInterface;
use App\Repositories\Interfaces\todo\TodoInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TodoInterface::class, EloquentTodo::class);
        $this->app->singleton(PermissionInterface::class, EloquentPermission::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
    }
}
