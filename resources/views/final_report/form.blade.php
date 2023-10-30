@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/form.css') }}">

    <div class="form-custom__container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <h3 class="form-custom__title">Final Report</h3>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="fwd_port_initial">FWD Port Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->fwd_port_initial !== null ? number_format($draft->fwd_port_initial, 4) : '' }}"
                    id="fwd_port_initial" name="fwd_port_initial" placeholder="Enter FWD Port Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="fwd_port_final">FWD Port Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->fwd_port_final !== null ? number_format($draft->fwd_port_final, 4) : '' }}"
                    id="fwd_port_final" name="fwd_port_final" placeholder="Enter FWD Port Final">
            </div>
        </div>

        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="fwd_starboard_initial">FWD Starboard Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->fwd_starboard_initial !== null ? number_format($draft->fwd_starboard_initial, 4) : '' }}"
                    id="fwd_starboard_initial" name="fwd_starboard_initial" placeholder="Enter FWD Starboard Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="fwd_starboard_final">FWD Starboard Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->fwd_starboard_final !== null ? number_format($draft->fwd_starboard_final, 4) : '' }}"
                    id="fwd_starboard_final" name="fwd_starboard_final" placeholder="Enter FWD Starboard Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="mean_foward_initial">Mean Foward Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->mean_foward_initial !== null ? number_format($draft->mean_foward_initial, 4) : '' }}"
                    id="mean_foward_initial" name="mean_foward_initial" placeholder="Enter Mean Foward Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="mean_foward_final">Mean Foward Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->mean_foward_final !== null ? number_format($draft->mean_foward_final, 4) : '' }}"
                    id="mean_foward_final" name="mean_foward_final" placeholder="Enter Mean Foward Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="correction_to_fp_initial">Correction to FP Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->correction_to_fp_initial !== null ? number_format($draft->correction_to_fp_initial, 4) : '' }}"
                    id="correction_to_fp_initial" name="correction_to_fp_initial"
                    placeholder="Enter Correction to FP Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="correction_to_fp_final">Correction to FP Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->correction_to_fp_final !== null ? number_format($draft->correction_to_fp_final, 4) : '' }}"
                    id="correction_to_fp_final" name="correction_to_fp_final" placeholder="Enter Correction to FP Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="corrected_fwd_initial">Corrected FWD Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->corrected_fwd_initial !== null ? number_format($draft->corrected_fwd_initial, 4) : '' }}"
                    id="corrected_fwd_initial" name="corrected_fwd_initial" placeholder="Enter Corrected FWD Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="corrected_fwd_final">Corrected FWD Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->corrected_fwd_final !== null ? number_format($draft->corrected_fwd_final, 4) : '' }}"
                    id="corrected_fwd_final" name="corrected_fwd_final" placeholder="Enter Corrected FWD Final">
            </div>
        </div>

        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="midship_port_initial">Midship Port Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->midship_port_initial !== null ? number_format($draft->midship_port_initial, 4) : '' }}"
                    id="midship_port_initial" name="midship_port_initial" placeholder="Enter Midship Port Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="midship_port_final">Midship Port Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->midship_port_final !== null ? number_format($draft->midship_port_final, 4) : '' }}"
                    id="midship_port_final" name="midship_port_final" placeholder="Enter Midship Port Final">
            </div>
        </div>

        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="midship_starboard_initial">Midship Starboard Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->midship_starboard_initial !== null ? number_format($draft->midship_starboard_initial, 4) : '' }}"
                    id="midship_starboard_initial" name="midship_starboard_initial"
                    placeholder="Enter Midship Starboard Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="midship_starboard_final">Midship Starboard Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->midship_starboard_final !== null ? number_format($draft->midship_starboard_final, 4) : '' }}"
                    id="midship_starboard_final" name="midship_starboard_final"
                    placeholder="Enter Midship Starboard Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="mean_midship_initial">Mean Midship Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->mean_midship_initial !== null ? number_format($draft->mean_midship_initial, 4) : '' }}"
                    id="mean_midship_initial" name="mean_midship_initial" placeholder="Enter Mean Midship Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="mean_midship_final">Mean Midship Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->mean_midship_final !== null ? number_format($draft->mean_midship_final, 4) : '' }}"
                    id="mean_midship_final" name="mean_midship_final" placeholder="Enter Mean Midship Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="correction_to_midship_initial">Correction to MD Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->correction_to_midship_initial !== null ? number_format($draft->correction_to_midship_initial, 4) : '' }}"
                    id="correction_to_midship_initial" name="correction_to_midship_initial"
                    placeholder="Enter Correction to MD Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="correction_to_midship_final">Correction to MD Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->correction_to_midship_final !== null ? number_format($draft->correction_to_midship_final, 4) : '' }}"
                    id="correction_to_midship_final" name="correction_to_midship_final"
                    placeholder="Enter Correction to MD Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="corrected_midship_initial">Corrected Midship Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->corrected_midship_initial !== null ? number_format($draft->corrected_midship_initial, 4) : '' }}"
                    id="corrected_midship_initial" name="corrected_midship_initial"
                    placeholder="Enter Corrected Midship Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="corrected_midship_final">Corrected Midship Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->corrected_midship_final !== null ? number_format($draft->corrected_midship_final, 4) : '' }}"
                    id="corrected_midship_final" name="corrected_midship_final"
                    placeholder="Enter Corrected Midship Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="aft_port_initial">AFT Port Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->aft_port_initial !== null ? number_format($draft->aft_port_initial, 4) : '' }}"
                    id="aft_port_initial" name="aft_port_initial" placeholder="Enter AFT Port Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="aft_port_final">AFT Port Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->aft_port_final !== null ? number_format($draft->aft_port_final, 4) : '' }}"
                    id="aft_port_final" name="aft_port_final" placeholder="Enter AFT Port Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="aft_starboard_initial">AFT Starboard Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->aft_starboard_initial !== null ? number_format($draft->aft_starboard_initial, 4) : '' }}"
                    id="aft_starboard_initial" name="aft_starboard_initial" placeholder="Enter AFT Starboard Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="aft_starboard_final">AFT Starboard Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->aft_starboard_final !== null ? number_format($draft->aft_starboard_final, 4) : '' }}"
                    id="aft_starboard_final" name="aft_starboard_final" placeholder="Enter AFT Starboard Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="mean_aft_initial">Mean AFT Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->mean_aft_initial !== null ? number_format($draft->mean_aft_initial, 4) : '' }}"
                    id="mean_aft_initial" name="mean_aft_initial" placeholder="Enter Mean AFT Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="mean_aft_final">Mean AFT Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->mean_aft_final !== null ? number_format($draft->mean_aft_final, 4) : '' }}"
                    id="mean_aft_final" name="mean_aft_final" placeholder="Enter Mean AFT Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="correction_to_aft_initial">Correction to AP Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->correction_to_aft_initial !== null ? number_format($draft->correction_to_aft_initial, 4) : '' }}"
                    id="correction_to_aft_initial" name="correction_to_aft_initial"
                    placeholder="Enter Correction to AP Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="correction_to_aft_final">Correction to AP Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->correction_to_aft_final !== null ? number_format($draft->correction_to_aft_final, 4) : '' }}"
                    id="correction_to_aft_final" name="correction_to_aft_final"
                    placeholder="Enter Correction to AP Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="corrected_aft_initial">Corrected AFT Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->corrected_aft_initial !== null ? number_format($draft->corrected_aft_initial, 4) : '' }}"
                    id="corrected_aft_initial" name="corrected_aft_initial" placeholder="Enter Corrected AFT Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="corrected_aft_final">Corrected AFT Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->corrected_aft_final !== null ? number_format($draft->corrected_aft_final, 4) : '' }}"
                    id="corrected_aft_final" name="corrected_aft_final" placeholder="Enter Corrected AFT Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="mean_fwd_aft_initial">MeanFwd/Aft Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->mean_fwd_aft_initial !== null ? number_format($draft->mean_fwd_aft_initial, 4) : '' }}"
                    id="mean_fwd_aft_initial" name="mean_fwd_aft_initial" placeholder="Enter MeanFwd/Aft Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="mean_fwd_aft_final">MeanFwd/Aft Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->mean_fwd_aft_final !== null ? number_format($draft->mean_fwd_aft_final, 4) : '' }}"
                    id="mean_fwd_aft_final" name="mean_fwd_aft_final" placeholder="Enter MeanFwd/Aft Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="mean_of_mean_initial">Mean of Mean Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->mean_of_mean_initial !== null ? number_format($draft->mean_of_mean_initial, 4) : '' }}"
                    id="mean_of_mean_initial" name="mean_of_mean_initial" placeholder="Enter MeanFwd/Aft Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="mean_of_mean_final">Mean of Mean Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->mean_of_mean_final !== null ? number_format($draft->mean_of_mean_final, 4) : '' }}"
                    id="mean_of_mean_final" name="mean_of_mean_final" placeholder="Enter MeanFwd/Aft Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="displacement_for_mm_initial">Displacement for MM
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->displacement_for_mm_initial !== null ? number_format($draft->displacement_for_mm_initial, 4) : '' }}"
                    id="displacement_for_mm_initial" name="displacement_for_mm_initial"
                    placeholder="Enter Displacement for MM Starboard Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="displacement_for_mm_final">Displacement for MM Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->displacement_for_mm_final !== null ? number_format($draft->displacement_for_mm_final, 4) : '' }}"
                    id="displacement_for_mm_final" name="displacement_for_mm_final"
                    placeholder="Enter Displacement for MM Starboard Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="first_trim_correction_initial">1st Trim correction
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->first_trim_correction_initial !== null ? number_format($draft->first_trim_correction_initial, 4) : '' }}"
                    id="first_trim_correction_initial" name="first_trim_correction_initial"
                    placeholder="Enter 1st Trim correction Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="first_trim_correction_final">1st Trim correction Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->first_trim_correction_final !== null ? number_format($draft->first_trim_correction_final, 4) : '' }}"
                    id="first_trim_correction_final" name="first_trim_correction_final"
                    placeholder="Enter 1st Trim correction Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="second_trim_correction_initial">2nd Trim correction
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->second_trim_correction_initial !== null ? number_format($draft->second_trim_correction_initial, 4) : '' }}"
                    id="second_trim_correction_initial" name="second_trim_correction_initial"
                    placeholder="Enter 2nd Trim correction Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="second_trim_correction_final">2nd Trim correction Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->second_trim_correction_final !== null ? number_format($draft->second_trim_correction_final, 4) : '' }}"
                    id="second_trim_correction_final" name="second_trim_correction_final"
                    placeholder="Enter 2nd Trim correction Final">
            </div>
        </div>

        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="total_trim_correction_initial">Total Trim Corr-n
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->total_trim_correction_initial !== null ? number_format($draft->total_trim_correction_initial, 4) : '' }}"
                    id="total_trim_correction_initial" name="total_trim_correction_initial"
                    placeholder="Enter Total Trim Corr-n Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="total_trim_correction_final">Total Trim Corr-n Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->total_trim_correction_final !== null ? number_format($draft->total_trim_correction_final, 4) : '' }}"
                    id="total_trim_correction_final" name="total_trim_correction_final"
                    placeholder="Enter Total Trim Corr-n Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="corrected_displacement_initial">Corrected Disp-t
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->corrected_displacement_initial !== null ? number_format($draft->corrected_displacement_initial, 4) : '' }}"
                    id="corrected_displacement_initial" name="corrected_displacement_initial"
                    placeholder="Enter Corrected Disp-t Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="corrected_displacement_final">Corrected Disp-t Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->corrected_displacement_final !== null ? number_format($draft->corrected_displacement_final, 4) : '' }}"
                    id="corrected_displacement_final" name="corrected_displacement_final"
                    placeholder="Enter Corrected Disp-t Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="density_initial">Density
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->density_initial !== null ? number_format($draft->density_initial, 4) : '' }}"
                    id="density_initial" name="density_initial" placeholder="Enter Density Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="density_final">Density Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->density_final !== null ? number_format($draft->density_final, 4) : '' }}"
                    id="density_final" name="density_final" placeholder="Enter Density Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="density_correction_initial">Density Correction
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->density_correction_initial !== null ? number_format($draft->density_correction_initial, 4) : '' }}"
                    id="density_correction_initial" name="density_correction_initial"
                    placeholder="Enter Density Correction Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="density_correction_final">Density Correction Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->density_correction_final !== null ? number_format($draft->density_correction_final, 4) : '' }}"
                    id="density_correction_final" name="density_correction_final"
                    placeholder="Enter Density Correction Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="final_corrected_displacement_initial">Final Corr-d Disp-t
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->final_corrected_displacement_initial !== null ? number_format($draft->final_corrected_displacement_initial, 4) : '' }}"
                    id="final_corrected_displacement_initial" name="final_corrected_displacement_initial"
                    placeholder="Enter Final Corr-d Disp-t Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="final_corrected_displacement_final">Final Corr-d Disp-t
                    Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->final_corrected_displacement_final !== null ? number_format($draft->final_corrected_displacement_final, 4) : '' }}"
                    id="final_corrected_displacement_final" name="final_corrected_displacement_final"
                    placeholder="Enter Final Corr-d Disp-t Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="deductions_total_initial">Deductions Total
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->deductions_total_initial !== null ? number_format($draft->deductions_total_initial, 4) : '' }}"
                    id="deductions_total_initial" name="deductions_total_initial"
                    placeholder="Enter Deductions Total Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="deductions_total_final">Deductions Total
                    Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->deductions_total_final !== null ? number_format($draft->deductions_total_final, 4) : '' }}"
                    id="deductions_total_final" name="deductions_total_final" placeholder="Enter Deductions Total Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="fuel_oil_initial">Fuel Oil
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->fuel_oil_initial !== null ? number_format($draft->fuel_oil_initial, 4) : '' }}"
                    id="fuel_oil_initial" name="fuel_oil_initial" placeholder="Enter Fuel Oil Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="fuel_oil_final">Fuel Oil Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->fuel_oil_final !== null ? number_format($draft->fuel_oil_final, 4) : '' }}"
                    id="fuel_oil_final" name="fuel_oil_final" placeholder="Enter Fuel Oil Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="diesel_oil_initial">Diesel Oil
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->diesel_oil_initial !== null ? number_format($draft->diesel_oil_initial, 4) : '' }}"
                    id="diesel_oil_initial" name="diesel_oil_initial" placeholder="Enter Diesel Oil Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="diesel_oil_final">Diesel Oil Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->diesel_oil_final !== null ? number_format($draft->diesel_oil_final, 4) : '' }}"
                    id="diesel_oil_final" name="diesel_oil_final" placeholder="Enter Diesel Oil Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="ballast_water_initial">Ballast Water
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->ballast_water_initial !== null ? number_format($draft->ballast_water_initial, 4) : '' }}"
                    id="ballast_water_initial" name="ballast_water_initial" placeholder="Enter Ballast Water Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="ballast_water_final">Ballast Water Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->ballast_water_final !== null ? number_format($draft->ballast_water_final, 4) : '' }}"
                    id="ballast_water_final" name="ballast_water_final" placeholder="Enter Ballast Water Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="fresh_water_initial">Fresh Water
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->fresh_water_initial !== null ? number_format($draft->fresh_water_initial, 4) : '' }}"
                    id="fresh_water_initial" name="fresh_water_initial" placeholder="Enter Fresh Water Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="fresh_water_final">Fresh Water Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->fresh_water_final !== null ? number_format($draft->fresh_water_final, 4) : '' }}"
                    id="fresh_water_final" name="fresh_water_final" placeholder="Enter Fresh Water Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="lubricating_oil_initial">Lubricating Oil
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->lubricating_oil_initial !== null ? number_format($draft->lubricating_oil_initial, 4) : '' }}"
                    id="lubricating_oil_initial" name="lubricating_oil_initial"
                    placeholder="Enter Lubricating Oil Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="lubricating_oil_final">Lubricating Oil Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->lubricating_oil_final !== null ? number_format($draft->lubricating_oil_final, 4) : '' }}"
                    id="lubricating_oil_final" name="lubricating_oil_final" placeholder="Enter Lubricating Oil Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="sludge_initial">Sludge
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->sludge_initial !== null ? number_format($draft->sludge_initial, 4) : '' }}"
                    id="sludge_initial" name="sludge_initial" placeholder="Enter Sludge Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="sludge_final">Sludge Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->sludge_final !== null ? number_format($draft->sludge_final, 4) : '' }}"
                    id="sludge_final" name="sludge_final" placeholder="Enter Sludge Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="others_initial">Others
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->others_initial !== null ? number_format($draft->others_initial, 4) : '' }}"
                    id="others_initial" name="others_initial" placeholder="Enter Others Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="others_final">Others Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->others_final !== null ? number_format($draft->others_final, 4) : '' }}"
                    id="others_final" name="others_final" placeholder="Enter Others Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="net_displacement_initial">Net Displacement Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->net_displacement_initial !== null ? number_format($draft->net_displacement_initial, 4) : '' }}"
                    id="net_displacement_initial" name="net_displacement_initial"
                    placeholder="Enter Net Displacement Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="net_displacement_final">Net Displacement Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->net_displacement_final !== null ? number_format($draft->net_displacement_final, 4) : '' }}"
                    id="net_displacement_final" name="net_displacement_final" placeholder="Enter Net Displacement Final">
            </div>
        </div>

        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="loaded_cargo">Loaded Cargo </label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->loaded_cargo !== null ? number_format($draft->loaded_cargo, 4) : '' }}"
                    id="loaded_cargo" name="loaded_cargo" placeholder="Enter Loaded Cargo ">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="discharged_cargo">Discharged Cargo</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->discharged_cargo !== null ? number_format($draft->discharged_cargo, 4) : '' }}"
                    id="discharged_cargo" name="discharged_cargo" placeholder="Enter Discharged Cargo">
            </div>
        </div>

        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="lbp_initial">LBP
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->lbp_initial !== null ? number_format($draft->lbp_initial, 4) : '' }}"
                    id="lbp_initial" name="lbp_initial" placeholder="Enter LBP Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="lbp_final">LBP Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->lbp_final !== null ? number_format($draft->lbp_final, 4) : '' }}" id="lbp_final"
                    name="lbp_final" placeholder="Enter LBP Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="fwd_dist_initial">FWD Dist
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->fwd_dist_initial !== null ? number_format($draft->fwd_dist_initial, 4) : '' }}"
                    id="fwd_dist_initial" name="fwd_dist_initial" placeholder="Enter FWD Dist Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="fwd_dist_final">FWD Dist Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->fwd_dist_final !== null ? number_format($draft->fwd_dist_final, 4) : '' }}"
                    id="fwd_dist_final" name="fwd_dist_final" placeholder="Enter FWD Dist Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="mid_dist_initial">MID Dist
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->mid_dist_initial !== null ? number_format($draft->mid_dist_initial, 4) : '' }}"
                    id="mid_dist_initial" name="mid_dist_initial" placeholder="Enter MID Dist Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="mid_dist_final">MID Dist Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->mid_dist_final !== null ? number_format($draft->mid_dist_final, 4) : '' }}"
                    id="mid_dist_final" name="mid_dist_final" placeholder="Enter MID Dist Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="aft_dist_initial">AFT Dist
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->aft_dist_initial !== null ? number_format($draft->aft_dist_initial, 4) : '' }}"
                    id="aft_dist_initial" name="aft_dist_initial" placeholder="Enter AFT Dist Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="aft_dist_final">AFT Dist Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->aft_dist_final !== null ? number_format($draft->aft_dist_final, 4) : '' }}"
                    id="aft_dist_final" name="aft_dist_final" placeholder="Enter AFT Dist Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="lbm_initial">LBM
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->lbm_initial !== null ? number_format($draft->lbm_initial, 4) : '' }}"
                    id="lbm_initial" name="lbm_initial" placeholder="Enter LBM Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="lbm_final">LBM Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->lbm_final !== null ? number_format($draft->lbm_final, 4) : '' }}" id="lbm_final"
                    name="lbm_final" placeholder="Enter LBM Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="trim_obs_initial">Trim OBS
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->trim_obs_initial !== null ? number_format($draft->trim_obs_initial, 4) : '' }}"
                    id="trim_obs_initial" name="trim_obs_initial" placeholder="Enter Trim OBS Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="trim_obs_final">Trim OBS Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->trim_obs_final !== null ? number_format($draft->trim_obs_final, 4) : '' }}"
                    id="trim_obs_final" name="trim_obs_final" placeholder="Enter Trim OBS Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="trim_corr_initial">Trim Corr
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->trim_corr_initial !== null ? number_format($draft->trim_corr_initial, 4) : '' }}"
                    id="trim_corr_initial" name="trim_corr_initial" placeholder="Enter Trim Corr Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="trim_corr_final">Trim Corr Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->trim_corr_final !== null ? number_format($draft->trim_corr_final, 4) : '' }}"
                    id="trim_corr_final" name="trim_corr_final" placeholder="Enter Trim Corr Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="tpc_initial">TPC
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->tpc_initial !== null ? number_format($draft->tpc_initial, 4) : '' }}"
                    id="tpc_initial" name="tpc_initial" placeholder="Enter TPC Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="tpc_final">TPC Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->tpc_final !== null ? number_format($draft->tpc_final, 4) : '' }}" id="tpc_final"
                    name="tpc_final" placeholder="Enter TPC Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="lcf_initial">LCF
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->lcf_initial !== null ? number_format($draft->lcf_initial, 4) : '' }}"
                    id="lcf_initial" name="lcf_initial" placeholder="Enter LCF Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="lcf_final">LCF Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->lcf_final !== null ? number_format($draft->lcf_final, 4) : '' }}" id="lcf_final"
                    name="lcf_final" placeholder="Enter LCF Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="mct_1_initial">MCT 1
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->mct_1_initial !== null ? number_format($draft->mct_1_initial, 4) : '' }}"
                    id="mct_1_initial" name="mct_1_initial" placeholder="Enter MCT 1 Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="mct_1_final">MCT 1 Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->mct_1_final !== null ? number_format($draft->mct_1_final, 4) : '' }}"
                    id="mct_1_final" name="mct_1_final" placeholder="Enter MCT 1 Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="mct_2_initial">MCT 2
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->mct_2_initial !== null ? number_format($draft->mct_2_initial, 4) : '' }}"
                    id="mct_2_initial" name="mct_2_initial" placeholder="Enter MCT 2 Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="mct_2_final">MCT 2 Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->mct_2_final !== null ? number_format($draft->mct_2_final, 4) : '' }}"
                    id="mct_2_final" name="mct_2_final" placeholder="Enter MCT 2 Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="difference_initial">Difference
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->difference_initial !== null ? number_format($draft->difference_initial, 4) : '' }}"
                    id="difference_initial" name="difference_initial" placeholder="Enter Difference Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="difference_final">Difference Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->difference_final !== null ? number_format($draft->difference_final, 4) : '' }}"
                    id="difference_final" name="difference_final" placeholder="Enter Difference Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="sag_plus_hog_initial">Sag+Hog
                    Initial</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->sag_plus_hog_initial !== null ? number_format($draft->sag_plus_hog_initial, 4) : '' }}"
                    id="sag_plus_hog_initial" name="sag_plus_hog_initial" placeholder="Enter Sag+Hog Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="sag_plus_hog_final">Sag+Hog Final</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->sag_plus_hog_final !== null ? number_format($draft->sag_plus_hog_final, 4) : '' }}"
                    id="sag_plus_hog_final" name="sag_plus_hog_final" placeholder="Enter Sag+Hog Final">
            </div>
        </div>
        <div class="form-custom_section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="constant">Constant</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->constant !== null ? number_format($draft->constant, 4) : '' }}" id="constant"
                    name="constant" placeholder="Enter Constant">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="light_ship">Light Ship
                </label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $draft->light_ship !== null ? number_format($draft->light_ship, 4) : '' }}" id="light_ship"
                    name="light_ship" placeholder="Enter Light Ship ">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="vessel">Vessel</label>
                <input type="text" class="form-custom__input" id="vessel" name="vessel"
                    value="{{ $ship->vessel }}" readonly>
            </div>

            <div class="form-custom__group">
                <label class="form-custom__label" for="loaded">Load State</label>
                <select type="text" class="form-custom__input" style="padding: 0" id="loaded" name="loaded"
                    value="{{ $ship->loaded }}" readonly>
                    <option value="{{ true }}">Loaded</option>
                    <option value="{{ false }}">Not Loaded</option>
                </select>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="file">File</label>
                <input type="text" class="form-custom__input" id="file" name="file"
                    value="{{ $ship->file }}" readonly>
            </div>

            <div class="form-custom__group">
                <label class="form-custom__label" for="vessel_previous_name">Vessel previous name</label>
                <input type="text" class="form-custom__input" id="vessel_previous_name" name="vessel_previous_name"
                    value="{{ $ship->vessel_previous_name }}" readonly>
            </div>
        </div>

        <!-- Section 3 -->
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="call_letters">Call Letters</label>
                <input type="text" class="form-custom__input" id="call_letters" name="call_letters"
                    value="{{ $ship->call_letters }}" readonly>
            </div>

            <div class="form-custom__group">
                <label class="form-custom__label" for="built_year">Built Year</label>
                <input type="text" class="form-custom__input" id="built_year" name="built_year"
                    value="{{ $ship->built_year }}" readonly>
            </div>
        </div>

        <!-- Section 4 -->
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="built_by">Built By</label>
                <input type="text" class="form-custom__input" id="built_by" name="built_by"
                    value="{{ $ship->built_by }}" readonly>
            </div>

            <div class="form-custom__group">
                <label class="form-custom__label" for="hydrostatic_by">Hydrostatic By</label>
                <input type="text" class="form-custom__input" id="hydrostatic_by" name="hydrostatic_by"
                    value="{{ $ship->hydrostatic_by }}" readonly>
            </div>
        </div>

        <!-- Section 5 -->
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="shipyard_no">Shipyard Number</label>
                <input type="text" class="form-custom__input" id="shipyard_no" name="shipyard_no"
                    value="{{ $ship->shipyard_no }}" readonly>
            </div>

            <div class="form-custom__group">
                <label class="form-custom__label" for="hull_no">Hull Number</label>
                <input type="text" class="form-custom__input" id="hull_no" name="hull_no"
                    value="{{ $ship->hull_no }}" readonly>
            </div>
        </div>

        <!-- Section 6 -->
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="dated_hull">Dated Hull</label>
                <input type="text" class="form-custom__input" id="dated_hull" name="dated_hull"
                    value="{{ $ship->dated_hull }}" readonly>
            </div>

            <div class="form-custom__group">
                <label class="form-custom__label" for="registry_port">Registry Port</label>
                <input type="text" class="form-custom__input" id="registry_port" name="registry_port"
                    value="{{ $ship->registry_port }}" readonly>
            </div>
        </div>

        <!-- Section 7 -->
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="flag">Flag</label>
                <input type="text" class="form-custom__input" id="flag" name="flag"
                    value="{{ $ship->flag }}" readonly>
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label">Attending Supervisor</label>
                <input readonly type="text" value="{{ $condition->attending_surveyor }}"
                    class="form-custom__input" />
            </div>

            <div class="form-custom__group">
                <label class="form-custom__label">Master's Name</label>
                <input readonly type="text" value="{{ $condition->master_name }}" class="form-custom__input" />
            </div>
        </div>

        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label">Chief's Name</label>
                <input readonly type="text" class="form-custom__input" value="{{ $condition->chief_name }}" />
            </div>

            <div class="form-custom__group">
                <label class="form-custom__label">Witness Dought</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $condition->witness_dought }}" />
            </div>
        </div>

        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label">Tank Witness</label>
                <input readonly type="text" class="form-custom__input" value="{{ $condition->witness_tank }}" />
            </div>

            <div class="form-custom__group">
                <label class="form-custom__label">Ship Location</label>
                <input readonly type="text" class="form-custom__input" value="{{ $condition->ship_location }}" />
            </div>
        </div>

        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label">Weather Temperature</label>
                <input readonly type="number" class="form-custom__input" value="{{ $condition->weather_temp }}" />
            </div>

            <div class="form-custom__group">
                <label class="form-custom__label">Sea Conditions</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $condition->sea_conditions }}" />
            </div>
        </div>

        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label">Ship Heading</label>
                <input readonly type="number" class="form-custom__input" value="{{ $condition->heading_ship }}" />
            </div>

            <div class="form-custom__group">
                <label class="form-custom__label">Wind Direction</label>
                <input readonly type="text" class="form-custom__input"
                    value="{{ $condition->direction_wind }}" />
            </div>
        </div>

        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label">Stream Speed</label>
                <input readonly type="number" class="form-custom__input" value="{{ $condition->stream_speed }}" />
            </div>

            <div class="form-custom__group">
                <label class="form-custom__label">Tide</label>
                <input readonly type="text" class="form-custom__input" value="{{ $condition->tide }}" />
            </div>
        </div>

        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label">Ice</label>
                <input readonly type="text" class="form-custom__input" value="{{ $condition->ice }}" />
            </div>
        </div>
    </div>
@endsection
