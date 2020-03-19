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
        $room->available = "no";
        $room->save();

        $room = new Room();
        $room->building_id = 2;
        $room->type_id = 2;
        $room->number = "401";
        $room->floor = 4;
        $room->available = "no";
        $room->save();

        $room = new Room();
        $room->building_id = 3;
        $room->type_id = 1;
        $room->number = "301";
        $room->floor = 3;
        $room->available = "no";
        $room->save();

        factory(Room::class, 30)->create([
            'building_id' => 1,
            'type_id' => 1
        ]);


        factory(Room::class, 30)->create([
            'building_id' => 2,
            'type_id' => 1

        ]);

        factory(Room::class, 30)->create([
            'building_id' => 3,
            'type_id' => 1

        ]);

        factory(Room::class, 20)->create([
            'building_id' => 1,
            'type_id' => 2
        ]);


        factory(Room::class, 20)->create([
            'building_id' => 2,
            'type_id' => 2

        ]);

        factory(Room::class, 20)->create([
            'building_id' => 3,
            'type_id' => 2

        ]);
    }

}
