<?php

use Illuminate\Database\Seeder;
use App\Building;

class BuildingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $b = new Building();
        $b->name = "A";
        $b->address = "phahonyothin 34";
        $b->total_room = 60;
        $b->total_floor = 6;
        $b->water_rate = 4.00;
        $b->electric_rate = 7.00;
        $b->save();

        $b = new Building();
        $b->name = "B";
        $b->address = "phahonyothin 34";
        $b->total_room = 60;
        $b->total_floor = 6;
        $b->water_rate = 4.00;
        $b->electric_rate = 7.00;
        $b->save();

        $b = new Building();
        $b->name = "C";
        $b->address = "phahonyothin 34";
        $b->total_room = 60;
        $b->total_floor = 6;
        $b->water_rate = 4.00;
        $b->electric_rate = 7.00;
        $b->save();



    }
}
