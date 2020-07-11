<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';
    protected $primaryKey = 'tickets_id';

    protected $fillable = ['ticket_code','customer_name','problem_description','email','phone_no','agent_id','status'];

    public function replies(){
        return $this->hasMany('App\TicketReply','tickets_id','ticket_replies_id');
    }
}
