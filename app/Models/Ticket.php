<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable=[
        'ticket_id','promo_code','event_id','user_id','price'
      ];
       //get the user that owns the event
    public function user(){
        return $this->belongsTo(User::class,'foreign_key','user_id');
      }
}
