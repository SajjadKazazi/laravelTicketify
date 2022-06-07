<?php

namespace Sajjadkazazi\Ticketify;


use Sajjadkazazi\Ticketify\User\TicketifyRepository;

class Ticketify
{


    public  function all_tickets(){
        $repo = new TicketifyRepository();
        dd($repo->all_ticket());

    }
}
