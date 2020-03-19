<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comment::class, 3)->create([
            'post_id' => 2
        ]);


        factory(Comment::class, 2)->create([
            'post_id' => 3
        ]);
    }
}
