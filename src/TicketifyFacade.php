<?php

namespace App\Ticketify;
use Illuminate\Support\Facades\Facade;

class TicketifyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ticketify';
    }
}
