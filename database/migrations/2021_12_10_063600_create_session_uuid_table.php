<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionUuidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_uuid', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->unsignedBigInteger('user_id')->index();
            $table->integer('game_type_id')->nullable();
            $table->string('ip_address');
            $table->double('credits', 25, 2)->default('0.00');
            $table->double('balance', 25, 2)->default('0.00');
            $table->dateTime('expires_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('session_uuid', function (Blueprint $table) {
            Schema::dropIfExists('session_uuid');
        });
    }
}
