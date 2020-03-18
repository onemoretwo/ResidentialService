<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('room_id')->unsigned()->nullable();
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
//            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('birth_date');
            $table->binary('gender');
            $table->string('citizen_id',13)->unique();
            $table->mediumText('address');
            $table->string('phone_number_1',10);
            $table->string('phone_number_2',10)->nullable();
            $table->float('money')->default(0);
            $table->enum('role',['user','staff','admin']);

            $table->rememberToken();
            $table->timestamp("checkIn_at");
            $table->timestamps();

            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
