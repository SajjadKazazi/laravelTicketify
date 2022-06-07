<?php

namespace Sajjadkazazi\Ticketify\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Ticketify extends Model
{
    use HasFactory;
    protected $table = 'ticketify';
    protected $dates = ['completed_at'];

    protected $fillable = ['subject', 'content', 'status', 'priority',
        'department_id', 'user_id', 'category_id', 'to_user_id', 'completed_at'
    ];


    public function category(){
        return $this->belongsTo('Sajjadkazazi\Ticketify\Models\TicketifyCategory','category_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function to_user()
    {
        return $this->belongsTo('App\User', 'to_user_id');
    }

    public function department(){
        return $this->belongsTo('Sajjadkazazi\Ticketify\Models\TicketifyDepartment','department_id');
    }

    public function replies(){
        return $this->hasMany('Sajjadkazazi\Ticketify\Models\TicketifyReply');
    }

    public function hasReplies()
    {
        return (bool) count($this->replies());
    }

    public function countReplies(){
        return count($this->replies());
    }

    public function isComplete()
    {
        return (bool) $this->completed_at;
    }

    public function scopeComplete($query)
    {
        return $query->whereNotNull('completed_at');
    }

    public function scopeActive($query)
    {
        return $query->whereNull('completed_at');
    }
    public function scopeUserTickets($query, $id)
    {
        return $query->where('user_id', $id);
    }

}
