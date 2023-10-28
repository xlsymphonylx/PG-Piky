<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
    use HasFactory;
    public $table = 'drafts';
    protected $fillable = [
        'fwd_port_initial', 'fwd_port_final',
        'fwd_starboard_initial', 'fwd_starboard_final',
        'mean_foward_initial', 'mean_foward_final',
        'correction_to_fp_initial', 'correction_to_fp_final',
        'corrected_fwd_initial', 'corrected_fwd_final',
        'midship_port_initial', 'midship_port_final',
        'midship_starboard_initial', 'midship_starboard_final',
        'mean_midship_initial', 'mean_midship_final',
        'correction_to_midship_initial', 'correction_to_midship_final',
        'corrected_midship_initial', 'corrected_midship_final',
        'aft_port_initial', 'aft_port_final',
        'aft_starboard_initial', 'aft_starboard_final',
        'mean_aft_initial', 'mean_aft_final',
        'correction_to_aft_initial', 'correction_to_aft_final',
        'corrected_aft_initial', 'corrected_aft_final',
        'mean_fwd_aft_initial', 'mean_fwd_aft_final',
        'mean_of_mean_initial', 'mean_of_mean_final',
        'displacement_for_mm_initial', 'displacement_for_mm_final',
        'first_trim_correction_initial', 'first_trim_correction_final',
        'second_trim_correction_initial', 'second_trim_correction_final',
        'total_trim_correction_initial', 'total_trim_correction_final',
        'corrected_displacement_initial', 'corrected_displacement_final',
        'density_initial', 'density_final',
        'density_correction_initial', 'density_correction_final',
        'final_corrected_displacement_initial', 'final_corrected_displacement_final',
        'deductions_total_initial', 'deductions_total_final',
        'fuel_oil_initial', 'fuel_oil_final',
        'diesel_oil_initial', 'diesel_oil_final',
        'ballast_water_initial', 'ballast_water_final',
        'fresh_water_initial', 'fresh_water_final',
        'lubricating_oil_initial', 'lubricating_oil_final',
        'condition_id',
        'sludge_initial', 'sludge_final',
        'others_initial', 'others_final',
        'net_displacement_initial', 'net_displacement_final',
        'light_ship',
        'constant_initial', 'constant_final',
        'loaded_cargo_initial', 'loaded_cargo_final',
        'discharged_cargo_initial', 'discharged_cargo_final',
        'lbp_initial', 'lbp_final',
        'fwd_dist_initial', 'fwd_dist_final',
        'mid_dist_initial', 'mid_dist_final',
        'aft_dist_initial', 'aft_dist_final',
        'lbm_initial', 'lbm_final',
        'trim_obs_initial', 'trim_obs_final',
        'trim_corr_initial', 'trim_corr_final',
        'tpc_initial', 'tpc_final',
        'lcf_initial', 'lcf_final',
        'mct_1_initial', 'mct_1_final',
        'mct_2_initial', 'mct_2_final',
        'difference_initial', 'difference_final',
        'sag_plus_hog_initial', 'sag_plus_hog_final',
        'work_order_id',
        'vessel_id',
    ];

    public function workOrder()
    {
        return $this->belongsTo(WorkOrder::class);
    }
    public function ship()
    {
        return $this->belongsTo(Ship::class);
    }
}
