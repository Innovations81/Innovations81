<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexsGameTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('game_transactions', function (Blueprint $table) {
            $table->index('transaction_id');
            $table->index('type');
            $table->index('session_id');
            $table->index('game_type_id');
            $table->index('is_ezugi_bet');
            $table->index('debit_transaction_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('game_transactions', function (Blueprint $table) {
            $table->index('transaction_id');
            $table->index('type');
            $table->index('session_id');
            $table->index('game_type_id');
            $table->index('is_ezugi_bet');
            $table->index('debit_transaction_id');
        });
    }
}
