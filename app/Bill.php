<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    // บิลนี้เป็นของห้องไหน
    public function room(){
        return $this->belongsTo(Room::class);
    }

    // บิลนี้ staff คนไหนเป็นคนออก
    public function user(){
        return $this->belongsTo(User::class);
    }
}
