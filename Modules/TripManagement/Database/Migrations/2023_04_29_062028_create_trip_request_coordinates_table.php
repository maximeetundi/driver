<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripRequestCoordinatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_request_coordinates', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('trip_request_id');
            $table->geography('pickup_coordinates', 'point')->nullable();
            $table->string('pickup_address')->nullable();
            $table->geography('destination_coordinates', 'point')->nullable();
            $table->boolean('is_reached_destination')->default(false);
            $table->string('destination_address')->nullable();
            $table->text('intermediate_coordinates')->nullable();
            $table->geography('int_coordinate_1', 'point')->nullable();
            $table->boolean('is_reached_1')->default(false);
            $table->geography('int_coordinate_2', 'point')->nullable();
            $table->boolean('is_reached_2')->default(false);
            $table->text('intermediate_addresses')->nullable();
            $table->geography('start_coordinates', 'point')->nullable();
            $table->geography('drop_coordinates', 'point')->nullable();
            $table->geography('driver_accept_coordinates', 'point')->nullable();
            $table->geography('customer_request_coordinates', 'point')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trip_request_coordinates');
    }
}
