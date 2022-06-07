<?php

namespace Sajjadkazazi\Ticketify;

use Sajjadkazazi\Ticketify\Ticketify;
use Sajjadkazazi\Ticketify\TicketifyFacade;
use Illuminate\Support\ServiceProvider;

class TicketifyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ticketify',function(){
            return new Ticketify();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->loadMigrationsFrom(__DIR__.'/../migrations');
        $this->publishes([
            __DIR__ . '/../migrations/' => database_path('migrations/my-package'),
        ], 'my-package-migrations');
    }
}
