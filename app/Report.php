<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //report นี้เป็นของ user คนไหน
    public function user(){
        return $this->belongsTo(User::class);
    }
}
