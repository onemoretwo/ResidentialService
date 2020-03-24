<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Room;

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
        $user->first_name = "admin";
        $user->last_name = "admin";
        $user->email = "admin@gmail.com";
        $user->password = Hash::make('1234');
        $user->birth_date = NOW();
        $user->gender = 1;
        $user->citizen_id = "1234567890123";
        $user->address = "homeless";
        $user->phone_number_1 = "0868214563";
        $user->phone_number_2 = null;
        $user->role = "admin";
        $user->checkIn_at = null;
        $user->save();

        $user = new User();
        $user->room_id = null;
        $user->title = "นาย";
        $user->first_name = "guest";
        $user->last_name = "guest";
        $user->email = "guest@gmail.com";
        $user->password = Hash::make('1234');
        $user->birth_date = NOW();
        $user->gender = 1;
        $user->citizen_id = "4674567643123";
        $user->address = "homeless";
        $user->phone_number_1 = "0868214563";
        $user->phone_number_2 = null;
        $user->role = "user";
        $user->checkIn_at = null;
        $user->save();

        $user = new User();
        $user->room_id = 123;
        $room = Room::findOrFail(123);
        $room->available = 'no';
        $room->save();
        $user->title = "นาย";
        $user->first_name = "เจ้าของห้อง1";
        $user->last_name = "เจ้าของห้อง1";
        $user->email = "user1@gmail.com";
        $user->password = Hash::make('1234');
        $user->birth_date = NOW();
        $user->gender = 1;
        $user->citizen_id = "1234561234561";
        $user->money = 100000;
        $user->address = "homeless";
        $user->phone_number_1 = "0868214563";
        $user->role = "user";
        $user->save();

        $user = new User();
        $user->room_id = 215;
        $room = Room::findOrFail(215);
        $room->available = 'no';
        $room->save();
        $user->title = "นาย";
        $user->first_name = "เจ้าของห้อง2";
        $user->last_name = "เจ้าของห้อง2";
        $user->email = "user2@gmail.com";
        $user->password = Hash::make('1234');
        $user->birth_date = NOW();
        $user->gender = 1;
        $user->citizen_id = "0000000000000";
        $user->money = 18500;
        $user->address = "homeless";
        $user->phone_number_1 = "0868214563";
        $user->role = "user";
        $user->save();

        $user = new User();
        $user->room_id = null;
        $user->title = "นาย";
        $user->first_name = "ผู้ดูแล1";
        $user->last_name = "ผู้ดูแล1";
        $user->email = "staff1@gmail.com";
        $user->password = Hash::make('1234');
        $user->birth_date = NOW();
        $user->gender = 1;
        $user->citizen_id = "1234567899999";
        $user->address = "homeless";
        $user->phone_number_1 = "0868214563";
        $user->phone_number_2 = null;
        $user->role = "staff";
        $user->checkIn_at = null;
        $user->save();

        $user = new User();
        $user->room_id = null;
        $user->title = "นาง";
        $user->first_name = "ผู้ดูแล2";
        $user->last_name = "ผู้ดูแล2";
        $user->email = "staff2@gmail.com";
        $user->password = Hash::make('1234');
        $user->birth_date = NOW();
        $user->gender = 0;
        $user->citizen_id = "1234567888888";
        $user->address = "homeless";
        $user->phone_number_1 = "0868214563";
        $user->phone_number_2 = null;
        $user->role = "staff";
        $user->checkIn_at = null;
        $user->save();
    }




}
