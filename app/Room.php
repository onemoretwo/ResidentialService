<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function users(){
        return $this->hasMany(User::class);
    }

    public function building(){
        return $this->belongsTo(Building::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function packages(){
        return $this->hasMany(Package::class);
    }

    public function bills(){
        return $this->hasMany(Bill::class);
    }
}
