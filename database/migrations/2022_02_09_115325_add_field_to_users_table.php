<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('manager_name')->nullable();
            $table->string('shift')->nullable();
            $table->string('no_of_request')->nullable();
            $table->string('accepted')->nullable();
            $table->string('on_hold')->nullable();
            $table->string('rejected')->nullable();
            $table->string('backlogs')->nullable();
            $table->string('withdrawals')->nullable();
            $table->string('deposits')->nullable();
            $table->string('no_of_players')->nullable();
            $table->string('bank_details')->nullable();
            $table->string('location')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('ggr')->nullable();
            $table->string('no_of_task')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('manager_name');
            $table->dropColumn('shift');
            $table->dropColumn('no_of_request');
            $table->dropColumn('accepted');
            $table->dropColumn('on_hold');
            $table->dropColumn('rejected');
            $table->dropColumn('backlogs');
            $table->dropColumn('withdrawals');
            $table->dropColumn('deposits');
            $table->dropColumn('no_of_players');
            $table->dropColumn('bank_details');
            $table->dropColumn('location');
            $table->dropColumn('contact_number');
            $table->dropColumn('ggr');
            $table->dropColumn('no_of_task');
        });
    }
}
