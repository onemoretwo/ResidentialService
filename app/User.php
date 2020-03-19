<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public function room(){
        return $this->$this->belongsTo(Room::class);
    }

    public function user_statements(){
        return $this->hasMany(User_Statement::class);
    }

    use Notifiable;

    protected $fillable = ['title', 'first_name', 'last_name', 'email', 'password', 'gender', 'birth_date', 'money',
                            'citizen_id', 'address', 'phone_number_1', 'phone_number_2'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
