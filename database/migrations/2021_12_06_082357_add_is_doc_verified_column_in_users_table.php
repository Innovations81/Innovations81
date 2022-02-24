<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsDocVerifiedColumnInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('is_doc_verified', array('0', '1', '2'))->default('0')->comment('0=Pending,1=Approved,2=Rejected');
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
            $table->enum('is_doc_verified', array('0', '1', '2'))->default('0')->comment('0=Pending,1=Approved,2=Rejected');
        });
    }
}
