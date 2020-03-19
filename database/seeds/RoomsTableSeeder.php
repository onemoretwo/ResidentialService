<?php

use Illuminate\Database\Seeder;
use App\Room;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $room = new Room();
        $room->building_id = 1;
        $room->type_id = 1;
        $room->number = "101";
        $room->floor = 1;
        $room->available = "yes";
        $room->save();
    }
}
