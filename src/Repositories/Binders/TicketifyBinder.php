<?php

namespace Sajjadkazazi\Ticketify\Binders;

use Illuminate\Database\Eloquent\Model;
use Sajjadkazazi\Ticketify\Models\Ticketify;
class TicketifyBinder extends BinderAbstract
{

    public function bind(Model $entity)
    {
        /** @var Ticketify $entity */
        $data = $entity->toArray();



        return $data;
    }
}
