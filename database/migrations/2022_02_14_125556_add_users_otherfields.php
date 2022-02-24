<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsersOtherfields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          
            $table->string('alternaye_phone_number')->nullable();
            $table->text('KYC_details')->nullable();
            $table->string('stage')->nullable();
            $table->string('risk')->nullable();
            $table->string('lead_owner')->nullable();
            $table->string('lead_manager')->nullable();
            $table->string('agent')->nullable();         
            $table->enum('type_of_onboarding', array('by agent', 'by associate'))->default('by agent')->nullable();
            $table->string('last_login')->nullable();
            $table->string('last_diposit')->nullable();
            $table->string('last_withdrawal')->nullable();
            $table->string('last_bonus_give')->nullable();
            $table->enum('total_diposit', array('Today', 'Yesterday','This week','Last week','this month','last month','this year'))->default('Today')->nullable();
            $table->enum('total_withdrawal', array('Today', 'Yesterday','This week','Last week','this month','last month','this year'))->default('Today')->nullable();
            $table->enum('total_bets', array('Today', 'Yesterday','This week','Last week','this month','last month','this year'))->default('Today')->nullable();
            $table->enum('bonus_given', array('Today', 'Yesterday','This week','Last week','this month','last month','this year'))->default('Today')->nullable();
            $table->enum('NGR', array('Today', 'Yesterday','This week','Last week','this month','last month','this year'))->default('Today')->nullable();
            
            $table->string('non_withdrawal_balance')->nullable();
            $table->string('present_ip')->nullable();
            $table->string('ip_history')->nullable();
            $table->string('present_device')->nullable();
            $table->string('device_history')->nullable();
            $table->string('present_browser')->nullable();
            $table->string('browser_history')->nullable();
            $table->string('present_os')->nullable();
            $table->string('os_history')->nullable();
            $table->enum('deposit_history', array('with IP', 'Browser','Device','OS'))->default('with IP')->nullable();
            $table->enum('withdrawal_history', array('with IP', 'Browser','Device','OS'))->default('with IP')->nullable();
            $table->string('block_status')->nullable();
            $table->string('allow_deposit')->nullable();
            $table->string('allow_withdrawal')->nullable();
            $table->string('transaction')->nullable();
            $table->string('activity')->nullable();
            $table->string('notes')->nullable();
            $table->string('game_played')->nullable();
            $table->string('revenue_by_game')->nullable();
            $table->string('revenue_by_category')->nullable();
            $table->enum('is_active', array('0', '1'))->default('0');
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
            $table->dropColumn('alternaye_phone_number');
            $table->dropColumn('KYC_details');
            $table->dropColumn('stage');
            $table->dropColumn('risk');
            $table->dropColumn('lead_owner');
            $table->dropColumn('lead_manager');
            $table->dropColumn('agent');         
            $table->dropColumn('type_of_onboarding');
            $table->dropColumn('last_login');
            $table->dropColumn('last_diposit');
            $table->dropColumn('last_withdrawal');
            $table->dropColumng('last_bonus_give');
            $table->dropColumn('total_diposit');
            $table->dropColumn('total_withdrawal');
            $table->dropColumn('total_bets');
            $table->dropColumn('bonus_given');
            $table->dropColumn('NGR');
      
            $table->dropColumn('non_withdrawal_balance');
            $table->dropColumn('present_ip');
            $table->dropColumn('ip_history');
            $table->dropColumn('present_device');
            $table->dropColumn('device_history');
            $table->dropColumn('present_browser');
            $table->dropColumn('browser_history');
            $table->dropColumn('present_os');
            $table->dropColumn('os_history');
            $table->dropColumn('deposit_history');
            $table->dropColumn('withdrawal_history');
            $table->dropColumn('block_status');
            $table->dropColumn('allow_deposit');
            $table->dropColumn('allow_withdrawal');
            $table->dropColumn('transaction');
            $table->dropColumn('activity');
            $table->dropColumn('notes');
            $table->dropColumn('game_played');
            $table->dropColumn('revenue_by_game');
            $table->dropColumn('revenue_by_category');
            $table->dropColumn('is_active');
        });
    }
}
