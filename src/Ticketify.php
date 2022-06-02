<?php

namespace Sajjadkazazi\Ticketify;


class Ticketify
{

    public function tickets(){
        return \App\Models\Ticketify::all();
    }
}
