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
        $roomImage->image_path = "images/studio/room1.jpg";
        $roomImage->save();

        $roomImage = new RoomImage();
        $roomImage->room_id = 1;
        $roomImage->image_path = "images/studio/room2.jpg";
        $roomImage->save();

        $roomImage = new RoomImage();
        $roomImage->room_id = 1;
        $roomImage->image_path = "images/studio/room3.jpg";
        $roomImage->save();

        $roomImage = new RoomImage();
        $roomImage->room_id = 1;
        $roomImage->image_path = "images/studio/room4.jpg";
        $roomImage->save();

        $roomImage = new RoomImage();
        $roomImage->room_id = 1;
        $roomImage->image_path = "images/studio/room5.jpg";
        $roomImage->save();

        $roomImage = new RoomImage();
        $roomImage->room_id = 1;
        $roomImage->image_path = "images/studio/room6.jpg";
        $roomImage->save();

        $roomImage = new RoomImage();
        $roomImage->room_id = 1;
        $roomImage->image_path = "images/studio/room7.jpg";
        $roomImage->save();

        $roomImage = new RoomImage();
        $roomImage->room_id = 1;
        $roomImage->image_path = "images/studio/room8.jpg";
        $roomImage->save();
    }

}
