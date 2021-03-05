<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWinCardCountToMatchResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('match_results', function (Blueprint $table) {
            //対戦時の勝カード枚数の追加（攻撃、守備それぞれ）
            $table->integer('win_card_count_offence')->nullable();
            $table->integer('win_card_count_diffence')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('match_results', function (Blueprint $table) {
            //
            $table->dropColumn('win_card_count_offence');
            $table->dropColumn('win_card_count_diffence');
        });
    }
}
