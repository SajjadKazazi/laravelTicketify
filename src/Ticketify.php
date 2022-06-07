<?php

namespace Sajjadkazazi\Ticketify;


use Sajjadkazazi\Ticketify\User\TicketifyRepository;

class Ticketify
{
    public $ticketify;
    public function __construct(TicketifyRepository $ticketifyRepository)
    {
        $this->ticketify = $ticketifyRepository;
    }

    public function all_tickets(){
        return $this->ticketify->all_ticket();
    }
}
