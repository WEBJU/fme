<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable=[
      'title','category_id','description','location','capacity','special_guests','date','sales_start_time',
      'sales_end_time','theme','event_giveaways','image',  'sales_end_date','sales_start_date','ticket_type','venue','price',
    ];
    //get the user that owns the event
    public function user(){
      return $this->belongsTo(User::class,'foreign_key','user_id');
    }

    public function category(){
      return $this->hasMany(Category::class);
    }
}
