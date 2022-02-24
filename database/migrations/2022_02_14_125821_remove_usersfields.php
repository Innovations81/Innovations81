<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveUsersfields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['last_login', 'last_diposit', 'last_withdrawal', 'last_bonus_give', 'total_diposit', 'total_withdrawal', 'total_bets', 'bonus_given', 'NGR', 'non_withdrawal_balance', 'present_ip', 'ip_history', 'present_device', 'device_history', 'present_browser', 'browser_history', 'present_os', 'os_history', 'deposit_history', 'withdrawal_history', 'block_status', 'allow_deposit', 'allow_withdrawal', 'transaction', 'activity', 'notes', 'game_played', 'revenue_by_game', 'revenue_by_category', 'is_active']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          //
    }
}
