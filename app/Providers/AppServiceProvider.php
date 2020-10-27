<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Profile;
use App\Models\MsgTemplate;
use App\Observers\MsgTemplateObserver;
use App\Observers\ProfileObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       Profile::observe(ProfileObserver::class);
       MsgTemplate::observe(MsgTemplateObserver::class);
    }
}
