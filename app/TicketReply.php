<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketReply extends Model
{
    protected $table = 'ticket_replies';
    protected $primaryKey = 'ticket_replies_id';
    protected $fillable = ['ticket_id','agent_id','reply_text'];

    public function ticket(){
        return $this->belongsTo('App\TicketReply','tickets_id','ticket_replies_id');
    }
}
