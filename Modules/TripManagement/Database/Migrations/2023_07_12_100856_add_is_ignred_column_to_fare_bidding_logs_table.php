<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsIgnredColumnToFareBiddingLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fare_bidding_logs', function (Blueprint $table) {
            $table->boolean('is_ignored')->default(0)->after('bid_fare');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fare_bidding_logs', function (Blueprint $table) {
            $table->dropColumn('is_ignored');
        });
    }
}
