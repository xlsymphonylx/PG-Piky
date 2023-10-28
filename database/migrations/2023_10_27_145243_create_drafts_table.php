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
        Schema::create('drafts', function (Blueprint $table) {
            $table->id();
            $table->float('fwd_port_initial', 8, 2)->nullable();
            $table->float('fwd_starboard_initial', 8, 2)->nullable();
            $table->float('mean_foward_initial', 8, 2)->nullable();
            $table->float('correction_to_fp_initial', 8, 2)->nullable();
            $table->float('corrected_fwd_initial', 8, 2)->nullable();
            $table->float('fwd_port_final', 8, 2)->nullable();
            $table->float('fwd_starboard_final', 8, 2)->nullable();
            $table->float('mean_foward_final', 8, 2)->nullable();
            $table->float('correction_to_fp_final', 8, 2)->nullable();
            $table->float('corrected_fwd_final', 8, 2)->nullable();
            $table->float('midship_port_initial', 8, 2)->nullable();
            $table->float('midship_starboard_initial', 8, 2)->nullable();
            $table->float('mean_midship_initial', 8, 2)->nullable();
            $table->float('correction_to_midship_initial', 8, 2)->nullable();
            $table->float('corrected_midship_initial', 8, 2)->nullable();
            $table->float('midship_port_final', 8, 2)->nullable();
            $table->float('midship_starboard_final', 8, 2)->nullable();
            $table->float('mean_midship_final', 8, 2)->nullable();
            $table->float('correction_to_midship_final', 8, 2)->nullable();
            $table->float('corrected_midship_final', 8, 2)->nullable();
            $table->float('aft_port_initial', 8, 2)->nullable();
            $table->float('aft_starboard_initial', 8, 2)->nullable();
            $table->float('mean_aft_initial', 8, 2)->nullable();
            $table->float('correction_to_aft_initial', 8, 2)->nullable();
            $table->float('corrected_aft_initial', 8, 2)->nullable();
            $table->float('aft_port_final', 8, 2)->nullable();
            $table->float('aft_starboard_final', 8, 2)->nullable();
            $table->float('mean_aft_final', 8, 2)->nullable();
            $table->float('correction_to_aft_final', 8, 2)->nullable();
            $table->float('corrected_aft_final', 8, 2)->nullable();
            $table->float('mean_fwd_aft_initial', 8, 2)->nullable();
            $table->float('mean_fwd_aft_final', 8, 2)->nullable();
            $table->float('mean_of_mean_initial', 8, 2)->nullable();
            $table->float('mean_of_mean_final', 8, 2)->nullable();
            $table->float('displacement_for_mm_initial', 8, 2)->nullable();
            $table->float('displacement_for_mm_final', 8, 2)->nullable();
            $table->float('first_trim_correction_initial', 8, 2)->nullable();
            $table->float('first_trim_correction_final', 8, 2)->nullable();
            $table->float('second_trim_correction_initial', 8, 2)->nullable();
            $table->float('second_trim_correction_final', 8, 2)->nullable();
            $table->float('total_trim_correction_initial', 8, 2)->nullable();
            $table->float('total_trim_correction_final', 8, 2)->nullable();
            $table->float('corrected_displacement_initial', 8, 2)->nullable();
            $table->float('corrected_displacement_final', 8, 2)->nullable();
            $table->float('density_initial', 8, 2)->nullable();
            $table->float('density_final', 8, 2)->nullable();
            $table->float('density_correction_initial', 8, 2)->nullable();
            $table->float('density_correction_final', 8, 2)->nullable();
            $table->float('final_corrected_displacement_initial', 8, 2)->nullable();
            $table->float('final_corrected_displacement_final', 8, 2)->nullable();
            $table->float('deductions_total_initial', 8, 2)->nullable();
            $table->float('deductions_total_final', 8, 2)->nullable();
            $table->float('fuel_oil_initial', 8, 2)->nullable();
            $table->float('fuel_oil_final', 8, 2)->nullable();
            $table->float('diesel_oil_initial', 8, 2)->nullable();
            $table->float('diesel_oil_final', 8, 2)->nullable();
            $table->float('ballast_water_initial', 8, 2)->nullable();
            $table->float('ballast_water_final', 8, 2)->nullable();
            $table->float('fresh_water_initial', 8, 2)->nullable();
            $table->float('fresh_water_final', 8, 2)->nullable();
            $table->float('lubricating_oil_initial', 8, 2)->nullable();
            $table->float('lubricating_oil_final', 8, 2)->nullable();
            $table->float('sludge_initial', 8, 2)->nullable();
            $table->float('sludge_final', 8, 2)->nullable();
            $table->float('others_initial', 8, 2)->nullable();
            $table->float('others_final', 8, 2)->nullable();
            $table->float('net_displacement_initial', 8, 2)->nullable();
            $table->float('net_displacement_final', 8, 2)->nullable();
            $table->float('light_ship', 8, 2)->nullable();
            $table->float('constant', 8, 2)->nullable();
            $table->float('loaded_cargo', 8, 2)->nullable();
            $table->float('discharged_cargo', 8, 2)->nullable();
            $table->float('lbp_initial', 8, 2)->nullable();
            $table->float('lbp_final', 8, 2)->nullable();
            $table->float('fwd_dist_initial', 8, 2)->nullable();
            $table->float('fwd_dist_final', 8, 2)->nullable();
            $table->float('mid_dist_initial', 8, 2)->nullable();
            $table->float('mid_dist_final', 8, 2)->nullable();
            $table->float('aft_dist_initial', 8, 2)->nullable();
            $table->float('aft_dist_final', 8, 2)->nullable();
            $table->float('lbm_initial', 8, 2)->nullable();
            $table->float('lbm_final', 8, 2)->nullable();
            $table->float('trim_obs_initial', 8, 2)->nullable();
            $table->float('trim_obs_final', 8, 2)->nullable();
            $table->float('trim_corr_initial', 8, 2)->nullable();
            $table->float('trim_corr_final', 8, 2)->nullable();
            $table->float('tpc_initial', 8, 2)->nullable();
            $table->float('tpc_final', 8, 2)->nullable();
            $table->float('lcf_initial', 8, 2)->nullable();
            $table->float('lcf_final', 8, 2)->nullable();
            $table->float('mct_1_initial', 8, 2)->nullable();
            $table->float('mct_1_final', 8, 2)->nullable();
            $table->float('mct_2_initial', 8, 2)->nullable();
            $table->float('mct_2_final', 8, 2)->nullable();
            $table->float('difference_initial', 8, 2)->nullable();
            $table->float('difference_final', 8, 2)->nullable();
            $table->float('sag_plus_hog_initial', 8, 2)->nullable();
            $table->float('sag_plus_hog_final', 8, 2)->nullable();
            $table->boolean('finalized')->nullable();
            $table->unsignedBigInteger('work_order_id');
            $table->foreign('work_order_id')->references('id')->on('work_orders')->onDelete('cascade');
            $table->unsignedBigInteger('vessel_id')->nullable();
            $table->foreign('vessel_id')->references('id')->on('work_orders')->onDelete('cascade');
            $table->unsignedBigInteger('condition_id')->nullable();
            $table->foreign('condition_id')->references('id')->on('conditions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drafts');
    }
};
