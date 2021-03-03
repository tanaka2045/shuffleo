<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeWinRateFloat54ToFloat52OnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //有効桁数を5,4 →　5,2へ変更(0.6666 → 66.67)
            $table->float('best_term_win_rate',5,2)->default(0)->change();
            $table->float('total_win_rate',5,2)->default(0)->change();
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
            //
            $table->float('best_term_win_rate',5,4)->default(0)->change();
            $table->float('total_win_rate',5,4)->default(0)->change();
        });
    }
}
