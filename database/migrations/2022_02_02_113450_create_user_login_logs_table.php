<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLoginLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_login_logs', function (Blueprint $table) {
             $table->id();
             $table->bigInteger('user_id')->unsigned(); 
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             $table->string('ip')->nullable();
             $table->string('device',500)->nullable();
             $table->string('browser',500)->nullable();
             $table->string('os',500)->nullable();
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
        Schema::dropIfExists('user_login_logs');
    }
}
