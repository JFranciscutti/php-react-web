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
        Schema::create('user', function (Blueprint $table) {
            //Primary key
            $table->increments('id');

            //name of the user
            $table->string('name');

            //email of the user
            $table->string('email')->unique();

            //timestamp for verified email
            $table->timestamp('email_verified_at')->nullable();

            //password :P
            $table->string('password');

            //api token for communication with front end
            $table->string("api_token", 120)->unique();

            //records the time user been created and updated
            $table->timestamps();
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
