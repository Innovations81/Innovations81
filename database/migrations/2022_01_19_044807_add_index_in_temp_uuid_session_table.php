<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexInTempUuidSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('temp_uuid', function (Blueprint $table) {
            $table->index('uuid');
            $table->index('created_at');
        });

        Schema::table('session_uuid', function (Blueprint $table) {
            $table->index('uuid');
            $table->index('expires_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('temp_uuid', function (Blueprint $table) {
            $table->index('uuid');
            $table->index('created_at');
        });

        Schema::table('session_uuid', function (Blueprint $table) {
            $table->index('uuid');
            $table->index('expires_at');
        });
    }
}
