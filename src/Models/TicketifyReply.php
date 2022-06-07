<?php

namespace Sajjadkazazi\Ticketify\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketifyReply extends Model
{
    use HasFactory;
    protected $table = 'ticketify_replies';

    protected $guarded = [];


    public function owner()
    {
        return $this->belongsTo('App\User', 'user_id');

    }
    public function ticket()
    {
        return $this->belongsTo('Sajjadkazazi\Ticketify\Models\Ticketify');
    }

}
