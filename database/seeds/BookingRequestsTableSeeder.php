<?php

use Illuminate\Database\Seeder;
use App\BookingRequest;

class BookingRequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $request = new BookingRequest();
        $request->user_id = 2;
        $request->room_id = 11;
        $request->checkIn_at = NOW();
        $request->save();
    }
}
