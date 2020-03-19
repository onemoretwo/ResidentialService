<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new Type();
        $type->name = "A";
        $type->size = 32.5;
        $type->capacity = 2;
        $type->price = 6000;

    }
}
