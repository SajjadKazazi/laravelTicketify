<?php

namespace App\Providers;

use App\Ticketify\Ticketify;
use App\Ticketify\TicketifyFacade;
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
        //
    }
}
