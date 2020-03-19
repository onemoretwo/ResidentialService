<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function room(){
        return $this->belongsTo(Room::class);
    }
}
