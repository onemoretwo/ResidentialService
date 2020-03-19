<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Statement extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $table = 'user_statements';
}
