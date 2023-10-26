<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ships', function (Blueprint $table) {
            $table->id();
            $table->string('vessel');
            $table->boolean('loaded')->default(false);
            $table->string('file');
            $table->string('vessel_previous_name');
            $table->string('call_letters');
            $table->date('built_year');
            $table->string('built_by');
            $table->string('hydrostatic_by');
            $table->string('shipyard_no');
            $table->string('hull_no');
            $table->date('dated_hull');
            $table->string('registry_port');
            $table->string('flag');
            $table->unsignedBigInteger('work_order_id');
            $table->foreign('work_order_id')->references('id')->on('work_orders')->onDelete('cascade');
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
        Schema::table('ships', function (Blueprint $table) {
            $table->dropForeign(['work_order_id']);
        });
        Schema::dropIfExists('ships');
    }
}
