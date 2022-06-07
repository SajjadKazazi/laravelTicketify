<?php

namespace Sajjadkazazi\Ticketify\User;

use Sajjadkazazi\Ticketify\Binders\TicketifyBinder;
use Sajjadkazazi\Ticketify\Models\Ticketify;

class TicketifyRepository extends RepositoryAbstract
{
    protected $binder = TicketifyBinder::class;

    public function all_ticket($limit = 10)
    {
        $with = $this->getWiths();

        $data = Ticketify::with($with)->paginate($limit);


        $binder = new $this->binder($data, $this->selection);

        return $binder->getBinder();
    }
}
