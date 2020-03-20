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
//        $user = new User();
//        $user->room_id = null;
//        $user->title = "นาย";
//        $user->first_name = "admin";
//        $user->last_name = "admin";
//        $user->email = "admin@gmail.com";
//        $user->password = Hash::make('admin1234');
//        $user->birth_date = NOW();
//        $user->gender = 1;
//        $user->citizen_id = "1234567890123";
//        $user->address = "homeless";
//        $user->phone_number_1 = "0868214563";
//        $user->phone_number_2 = null;
//        $user->role = "admin";
//        $user->checkIn_at = NOW();
//        $user->save();
//
//        $user = new User();
//        $user->room_id = 1;
//        $user->title = "นาย";
//        $user->first_name = "อานนท์";
//        $user->last_name = "สุขศิริ";
//        $user->email = "arnon@gmail.com";
//        $user->password = Hash::make('1234');
//        $user->birth_date = NOW();
//        $user->gender = 1;
//        $user->citizen_id = "1234561234561";
//        $user->address = "homeless";
//        $user->phone_number_1 = "0868214563";
//        $user->role = "user";
//        $user->save();

//        $user = new User();
//        $user->title = "นางสาว";
//        $user->first_name = "ประยุทธ์";
//        $user->last_name = "จันทร์โอชา";
//        $user->email = "prayut@gmail.com";
//        $user->password = Hash::make('admin1234');
//        $user->birth_date = NOW();
//        $user->gender = 0;
//        $user->citizen_id = "9876543210987";
//        $user->address = "homeless";
//        $user->phone_number_1 = "0874561230";
//        $user->role = "staff";
//        $user->save();

        $user = new User();
        $user->room_id = 30;
        $user->title = "นาย";
        $user->first_name = "อนุทิน";
        $user->last_name = "จำไม่ได้";
        $user->email = "anutin@gmail.com";
        $user->password = Hash::make('1234');
        $user->birth_date = NOW();
        $user->gender = 1;
        $user->citizen_id = "1122334455667";
        $user->address = "homeless";
        $user->phone_number_1 = "1122334455";
        $user->role = "user";
        $user->save();
    }
}
