<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('otp')->after('remember_token');
            $table->enum('is_verified', array('0', '1'))->default('0')->comment('0=Not Verified,1=Verified')->after('otp');
            $table->string('username')->unique()->after('is_verified');
            $table->string('first_name')->after('username')->nullable();
            $table->string('last_name')->after('first_name')->nullable();
            $table->string('phone_countrycode')->after('last_name')->nullable();
            $table->string('phone',10)->after('phone_countrycode');
            $table->integer('country')->after('phone')->nullable();
            $table->integer('city')->after('country')->nullable();
            $table->string('dob')->after('city')->nullable();
            $table->string('gender')->after('dob')->nullable();
            $table->integer('currency')->default(1)->after('gender');
            $table->double('bonus', 25, 2)->default('0')->after('currency');
            $table->double('balance', 25, 2)->default('0')->after('bonus');
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
            $table->dropColumn('otp');
            $table->dropColumn('is_verified');
            $table->dropColumn('username');
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('phone_countrycode');
            $table->dropColumn('phone');
            $table->dropColumn('country');
            $table->dropColumn('city');
            $table->dropColumn('dob');
            $table->dropColumn('gender');
            $table->dropColumn('currency');
            $table->dropColumn('bonus');
            $table->dropColumn('balance');
        });
    }
}
