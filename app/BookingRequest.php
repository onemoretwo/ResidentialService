<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingRequest extends Model
{
    //
//    protected $table = 'booking_requests';

    public function room(){
        return $this->hasOne(Room::class);
    }

    public function  user(){
        return $this->belongsTo(Room::class);
    }


}
