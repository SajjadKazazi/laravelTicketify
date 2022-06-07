<?php

namespace Sajjadkazazi\Ticketify\User;

use Sajjadkazazi\Ticketify\Models\Ticketify;

class TicketifyRepository extends RepositoryAbstract
{

   public function createTicket($params=[]){
       $ticket = new Ticketify();
       $ticket->subject = $params['subject'];
       $ticket->content = $params['content'];
       $ticket->content = $params['content'];
       $ticket->status = $params['status'];
       $ticket->priority = $params['priority'];
       $ticket->status = $params['status'];
   }
}
