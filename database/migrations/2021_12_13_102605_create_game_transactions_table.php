<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('game_type_id')->index();
            $table->integer('game_id')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->integer('session_id')->index();
            $table->double('balance', 25, 2)->default('0.00');
            $table->string('transaction_id')->index();
            $table->string('debit_transaction_id')->nullable()->default(null);
            $table->string('reverse_transaction_id')->nullable()->default(null);
            $table->string('type')->index();
            $table->double('amount', 25, 2)->default('0.00');
            $table->string('round_id');
            $table->string('table_id')->nullable()->default(null);
            $table->integer('request_log_id')->nullable()->default(null);
            $table->dateTime('timestamp');
            $table->integer('is_ezugi_bet')->default(0);
            $table->dateTime('placed_at');
            $table->dateTime('settled_at')->nullable()->default(null);
            $table->string('entry_type');
            $table->string('seat_id')->nullable()->default(null);
            $table->integer('ezugi_game_id');
            $table->json('ezugi_round_details')->nullable();
            $table->tinyInteger('ezugi_round_details_downloaded')->default(0)->nullable();
            $table->tinyInteger('processed')->default(0)->nullable();
            $table->tinyInteger('settled')->default(0)->nullable();
            $table->tinyInteger('closed')->default(0)->nullable();
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
        Schema::dropIfExists('game_transactions');
    }
}
