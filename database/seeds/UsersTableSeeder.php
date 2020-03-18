<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->room_id = null;
        $user->title = "นาย";
        $user->first_name = "แอด";
        $user->last_name = "มิน";
        $user->email = "admin@gmail.com";
        $user->password = "admin1234";
        $user->birth_date = NOW();
        $user->gender = 1;
        $user->citizen_id = "1234567890123";
        $user->address = "homeless";
        $user->phone_number_1 = "0868214563";
        $user->phone_number_2 = null;
        $user->role = "admin";
        $user->checkIn_at = NOW();
        $user->save();
    }
}
