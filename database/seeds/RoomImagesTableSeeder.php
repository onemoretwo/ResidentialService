<?php

use Illuminate\Database\Seeder;
use App\RoomImage;

class RoomImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roomImage = new RoomImage();
        $roomImage->room_id = 1;
        $roomImage->image_path = "hello.jpg";
        $roomImage->save();
    }
}
