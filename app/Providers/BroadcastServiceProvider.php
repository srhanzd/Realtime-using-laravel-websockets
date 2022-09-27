<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();//this for web
//        Broadcast::routes(["middleware" => "auth:api"]);//this is for api

        require base_path('routes/channels.php');
    }
}
