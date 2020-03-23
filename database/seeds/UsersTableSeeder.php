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
        $user->password = Hash::make('admin1234');
        $user->birth_date = NOW();
        $user->gender = 1;
        $user->citizen_id = "1234567890123";
        $user->address = "homeless";
        $user->phone_number_1 = "0868214563";
        $user->phone_number_2 = null;
        $user->role = "admin";
        $user->checkIn_at = null;
        $user->save();
//
//        $user = new User();
//        $user->room_id = null;
//        $user->title = "นาย";
//        $user->first_name = "guest";
//        $user->last_name = "guest";
//        $user->email = "guest@gmail.com";
//        $user->password = Hash::make('1234');
//        $user->birth_date = NOW();
//        $user->gender = 1;
//        $user->citizen_id = "4674567643123";
//        $user->address = "homeless";
//        $user->phone_number_1 = "0868214563";
//        $user->phone_number_2 = null;
//        $user->role = "user";
//        $user->checkIn_at = null;
//        $user->save();
//
//        $user = new User();
//        $user->room_id = 1;
//
//        $room = Room::findOrFail(1);
//        $room->available = 'no';
//        $room->save();
//
//        $user = new User();
//        $user->title = "นาย";
//        $user->first_name = "อานนท์";
//        $user->last_name = "สุขศิริ";
//        $user->email = "arnon@gmail.com";
//        $user->password = Hash::make('1234');
//        $user->birth_date = NOW();
//        $user->gender = 1;
//        $user->citizen_id = "1234561234561";
//        $user->money = 100000;
//        $user->address = "homeless";
//        $user->phone_number_1 = "0868214563";
//        $user->role = "user";
//        $user->save();
//
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
//
//        $user = new User();
//        $user->room_id = 27;
//        $user->title = "นาย";
//        $user->first_name = "อนุทิน";
//        $user->last_name = "จำไม่ได้";
//        $user->email = "anutin@gmail.com";
//        $user->password = Hash::make('1234');
//        $user->birth_date = NOW();
//        $user->gender = 1;
//        $user->citizen_id = "1122334455667";
//        $user->address = "homeless";
//        $user->phone_number_1 = "1122334455";
//        $user->role = "user";
//        $user->save();
//
//        $user = new User();
//        $user->room_id = 1;
//
//        $room = Room::findOrFail(1);
//        $room->available = 'no';
//        $room->save();
//
//        $user->title = "นาย";
//        $user->first_name = "โกมิน";
//        $user->last_name = "ไม่รู้เหมือนกัน";
//        $user->email = "gomin@gmail.com";
//        $user->password = Hash::make('1234');
//        $user->birth_date = NOW();
//        $user->gender = 1;
//        $user->citizen_id = "1346798521234";
//        $user->address = "homeless";
//        $user->phone_number_1 = "0868214563";
//        $user->role = "user";
//        $user->save();
//
//        $user = new User();
//        $user->room_id = 107;
//        $user->title = "นาย";
//        $user->first_name = "โกมินทร์";
//        $user->last_name = "ปะวันเตา";
//        $user->email = "user@gmail.com";
//        $user->password = Hash::make('1234');
//        $user->birth_date = NOW();
//        $user->gender = 1;
//        $user->citizen_id = "1100702968665";
//        $user->address = "homeless";
//        $user->phone_number_1 = "0868214563";
//        $user->phone_number_2 = null;
//        $user->role = "user";
//        $user->checkIn_at = null;
//        $user->save();
//
//        $user = new User();
//        $user->room_id = 311;
//        $user->title = "นาย";
//        $user->first_name = "test1";
//        $user->last_name = "ปะวันเตา";
//        $user->email = "user2@gmail.com";
//        $user->password = Hash::make('1234');
//        $user->birth_date = NOW();
//        $user->gender = 1;
//        $user->citizen_id = "1100702918665";
//        $user->address = "homeless";
//        $user->phone_number_1 = "0868214563";
//        $user->phone_number_2 = null;
//        $user->role = "user";
//        $user->checkIn_at = null;
//        $user->save();
//
//        $user = new User();
//        $user->room_id = 143;
//        $user->title = "นาย";
//        $user->first_name = "ปฎิพัด";
//        $user->last_name = "ปะวันเตา";
//        $user->email = "user3@gmail.com";
//        $user->password = Hash::make('1234');
//        $user->birth_date = NOW();
//        $user->gender = 1;
//        $user->citizen_id = "1110702968665";
//        $user->address = "homeless";
//        $user->phone_number_1 = "0868214563";
//        $user->phone_number_2 = null;
//        $user->role = "user";
//        $user->checkIn_at = null;
//        $user->save();
//
//        $user = new User();
//        $user->room_id = 227;
//        $user->title = "นาย";
//        $user->first_name = "test2";
//        $user->last_name = "ปะวันเตา";
//        $user->email = "user4@gmail.com";
//        $user->password = Hash::make('1234');
//        $user->birth_date = NOW();
//        $user->gender = 1;
//        $user->citizen_id = "1101702968665";
//        $user->address = "homeless";
//        $user->phone_number_1 = "0868214563";
//        $user->phone_number_2 = null;
//        $user->role = "user";
//        $user->checkIn_at = null;
//        $user->save();
///
//        $user = new User();
//        $user->title = "นาย";
//        $user->first_name = "tester";
//        $user->last_name = "สมญ";
//        $user->email = "tester@gmail.com";
//        $user->password = Hash::make('1234');
//        $user->birth_date = NOW();
//        $user->gender = 1;
//        $user->citizen_id = "1101702968669";
//        $user->address = "homeless";
//        $user->phone_number_1 = "0868214563";
//        $user->phone_number_2 = null;
//        $user->role = "user";
//        $user->checkIn_at = null;
//        $user->save();
    }




}
