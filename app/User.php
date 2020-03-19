<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    public function room(){
        return $this->belongsTo(Room::class);
    }

    public function userStatements(){
        return $this->hasMany(UserStatement::class);
    }

    public function bills(){
        return $this->hasMany(Bill::class);
    }

    public function packages(){
        return $this->hasMany(Package::class);
    }

    public function report(){
        return $this->hasMany(Report::class);
    }

    public function bookingRequest(){
        return $this->hasMany(BookingRequest::class);
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


    public function getRoomFromUser($title,$first,$last){
        $user = DB::table('users')->where('title',$title)->where('first_name',$first)->where('last_name',$last)->first();
        return $user->id;
    }
}
