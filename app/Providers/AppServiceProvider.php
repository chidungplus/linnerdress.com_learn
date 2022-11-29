<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\Coin\CoinRepository;
use App\Repositories\Coin\CoinRepositoryInterface;
use App\Repositories\CashCard\CashCardRepository;
use App\Repositories\CashCard\CashCardRepositoryInterface;

use App\Config;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
        // $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
        // $this->app->singleton(CoinRepositoryInterface::class, CoinRepository::class);
        // $this->app->singleton(CashCardRepositoryInterface::class, CashCardRepository::class);
  
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Schema::defaultStringLength(191);
        // config([
        //     'global' => Config::all([
        //         'name','value'
        //     ])->keyBy('name') // key every setting by its name
        //     ->transform(function ($setting) {
        //          return $setting->value; // return only the value
        //     })->toArray() // make it an array
        // ]);
    }
}
