<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('conditions', function (Blueprint $table) {
            $table->id();
            $table->string('attending_surveyor');
            $table->string('master_name');
            $table->string('chief_name');
            $table->string('witness_dought');
            $table->string('witness_tank');
            $table->string('ship_location');
            $table->integer('weather_temp');
            $table->string('sea_conditions');
            $table->float('heading_ship', 10, 2);
            $table->string('direction_wind');
            $table->integer('stream_speed');
            $table->string('tide');
            $table->string('ice');
            $table->unsignedBigInteger('work_order_id');
            $table->foreign('work_order_id')->references('id')->on('work_orders')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('conditions', function (Blueprint $table) {
            $table->dropForeign(['work_order_id']);
        });
        Schema::dropIfExists('conditions');
    }
};
