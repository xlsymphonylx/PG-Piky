<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use App\Models\Draft;
use App\Models\Ship;
use Illuminate\Http\Request;

class DraftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('drafts.index');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function continue(Request $request)
    {
        // Retrieve the latest work order from the session
        $latestWorkOrder = unserialize(session('latestWorkOrder'));
        $latestWorkOrderId = $latestWorkOrder->id;
        // Check if there is an associated draft
        $draft = Draft::where('work_order_id', $latestWorkOrderId)->first();
        $ships = Ship::where('work_order_id', $latestWorkOrderId)->get();
        $conditions = Condition::where('work_order_id', $latestWorkOrderId)->get();
        return view('drafts.form', compact('draft', 'ships', 'conditions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function recreate(Request $request)
    {
        // Retrieve the latest work order from the session
        $latestWorkOrder = unserialize(session('latestWorkOrder'));
        $latestWorkOrderId = $latestWorkOrder->id;
        // Check if there is an associated draft
        Draft::where('work_order_id', $latestWorkOrderId)->delete();

        $draft = Draft::create(['work_order_id' => $latestWorkOrderId]);

        return redirect()->route('drafts.index')
            ->with('success', 'The draft has been recreated sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function save(Request $request)
    {
        $results = array_filter($request->all(), 'strlen');
        $latestWorkOrder = unserialize(session('latestWorkOrder'));
        $latestWorkOrderId = $latestWorkOrder->id;
        $draft = Draft::where('work_order_id', $latestWorkOrderId)->first();
        $draft->update($results);
        return redirect()->route('drafts.index')
            ->with('success', 'The draft has been updated sucessfully!');
    }
    public function finalize()
    {

        $latestWorkOrder = unserialize(session('latestWorkOrder'));
        $latestWorkOrderId = $latestWorkOrder->id;
        $draft = Draft::where('work_order_id', $latestWorkOrderId)->first();

        $draft = Draft::where('work_order_id', $latestWorkOrderId)->first();

        $fieldsToCheck = [
            'fwd_port_initial',
            'fwd_port_final',
            'fwd_starboard_initial',
            'fwd_starboard_final',
            'midship_port_initial',
            'midship_port_final',
            'midship_starboard_initial',
            'midship_starboard_final',
            'aft_port_initial',
            'aft_port_final',
            'aft_starboard_initial',
            'aft_starboard_final',
            'displacement_for_mm_initial',
            'displacement_for_mm_final',
            'density_initial',
            'density_final',
            'fuel_oil_initial',
            'fuel_oil_final',
            'diesel_oil_initial',
            'diesel_oil_final',
            'ballast_water_initial',
            'ballast_water_final',
            'fresh_water_initial',
            'fresh_water_final',
            'lubricating_oil_initial',
            'lubricating_oil_final',
            'sludge_initial',
            'sludge_final',
            'others_initial',
            'others_final',
            'lbp_initial',
            'lbp_final',
            'fwd_dist_initial',
            'fwd_dist_final',
            'mid_dist_initial',
            'mid_dist_final',
            'aft_dist_initial',
            'aft_dist_final',
            'tpc_initial',
            'tpc_final',
            'lcf_initial',
            'lcf_final',
            'mct_1_initial',
            'mct_1_final',
            'mct_2_initial',
            'mct_2_final',
            'vessel_id',
            'light_ship',
            'condition_id',
        ];

        $emptyFields = [];

        foreach ($fieldsToCheck as $field) {
            if (!isset($draft[$field])) {
                $emptyFields[] = $field;
            }
        }

        if (!empty($emptyFields)) {
            // Handle the empty fields here
            // For example, you can throw an exception with a message listing the empty fields
            return redirect()->route('drafts.index')->with('error', 'Draft needs to be finished before finalizing the report.');
        }

        $draft->mean_foward_initial = ($draft->fwd_port_initial + $draft->fwd_starboard_initial) / 2;
        $draft->mean_foward_final = ($draft->fwd_port_final + $draft->fwd_starboard_final) / 2;
        $draft->mean_midship_initial = ($draft->midship_port_initial + $draft->midship_starboard_initial) / 2;
        $draft->mean_midship_final = ($draft->midship_port_final + $draft->midship_starboard_final) / 2;
        $draft->mean_aft_initial = ($draft->aft_port_initial + $draft->aft_starboard_initial) / 2;
        $draft->mean_aft_final = ($draft->aft_port_final + $draft->aft_starboard_final) / 2;
        $draft->mean_fwd_aft_initial = ($draft->aft_port_initial + $draft->aft_starboard_initial) / 2;
        $draft->mean_fwd_aft_final = ($draft->aft_port_final + $draft->aft_starboard_final) / 2;
        $draft->lbm_initial = ($draft->lbp_initial - $draft->fwd_dist_initial) - $draft->aft_dist_initial;
        $draft->lbm_final = ($draft->lbp_final - $draft->fwd_dist_final) - $draft->aft_dist_final;
        $draft->trim_obs_initial = ($draft->mean_aft_initial - $draft->mean_foward_initial);
        $draft->trim_obs_final = ($draft->mean_aft_final - $draft->mean_foward_final);
        $draft->correction_to_fp_initial = ($draft->trim_obs_initial * $draft->fwd_dist_initial) / $draft->lbm_initial;
        $draft->correction_to_fp_final = ($draft->trim_obs_final * $draft->fwd_dist_final) / $draft->lbm_final;
        $draft->correction_to_midship_initial = ($draft->trim_obs_initial * $draft->mid_dist_initial) / $draft->lbm_initial;
        $draft->correction_to_midship_final = ($draft->trim_obs_final * $draft->mid_dist_final) / $draft->lbm_final;
        $draft->correction_to_aft_initial = ($draft->trim_obs_initial * $draft->aft_dist_initial) / $draft->lbm_initial;
        $draft->correction_to_aft_final = ($draft->trim_obs_final * $draft->aft_dist_final) / $draft->lbm_final;
        $draft->corrected_fwd_initial = ($draft->mean_foward_initial - $draft->correction_to_fp_initial);
        $draft->corrected_fwd_final = ($draft->mean_foward_final - $draft->correction_to_fp_final);
        $draft->corrected_midship_initial = ($draft->mean_midship_initial - $draft->correction_to_midship_initial);
        $draft->corrected_midship_final = ($draft->mean_midship_final - $draft->correction_to_midship_final);
        $draft->corrected_aft_initial = ($draft->mean_aft_initial + $draft->correction_to_aft_initial);
        $draft->corrected_aft_final = ($draft->mean_aft_final + $draft->correction_to_aft_final);
        $draft->mean_fwd_aft_initial = ($draft->corrected_fwd_initial + $draft->corrected_aft_initial) / 2;
        $draft->mean_fwd_aft_final = ($draft->corrected_fwd_final + $draft->corrected_aft_final) / 2;
        $draft->mean_of_mean_initial = (($draft->corrected_midship_initial * 3) + $draft->mean_fwd_aft_initial) / 4;
        $draft->mean_of_mean_final = (($draft->corrected_midship_final * 3) + $draft->mean_fwd_aft_final) / 4;
        $draft->trim_corr_initial = ($draft->corrected_aft_initial - $draft->corrected_fwd_initial);
        $draft->trim_corr_final = ($draft->corrected_aft_final - $draft->corrected_fwd_final);
        $draft->difference_initial = ($draft->mct_1_initial - $draft->mct_2_initial);
        $draft->difference_final = ($draft->mct_1_final - $draft->mct_2_final);
        $draft->sag_plus_hog_initial = $draft->corrected_midship_initial - ($draft->corrected_fwd_initial + $draft->corrected_aft_initial) / 2;
        $draft->sag_plus_hog_final = $draft->corrected_midship_final - ($draft->corrected_fwd_final + $draft->corrected_aft_final) / 2;
        $draft->first_trim_correction_initial = ($draft->trim_corr_initial * $draft->tpc_initial *  $draft->lcf_initial * 100) / $draft->lbp_initial;
        $draft->first_trim_correction_final = ($draft->trim_corr_final * $draft->tpc_final *  $draft->lcf_final * 100) / $draft->lbp_final;
        $draft->second_trim_correction_initial = ($draft->trim_corr_initial * $draft->trim_corr_initial *  $draft->difference_initial * 50) / $draft->lbp_initial;
        $draft->second_trim_correction_final = ($draft->trim_corr_final * $draft->trim_corr_final *  $draft->difference_final * 50) / $draft->lbp_final;
        $draft->total_trim_correction_initial = ($draft->first_trim_correction_initial + $draft->second_trim_correction_initial);
        $draft->total_trim_correction_final = ($draft->first_trim_correction_final + $draft->second_trim_correction_final);
        $draft->corrected_displacement_initial = ($draft->displacement_for_mm_initial + $draft->total_trim_correction_initial);
        $draft->corrected_displacement_final = ($draft->displacement_for_mm_final + $draft->total_trim_correction_final);
        $draft->final_corrected_displacement_initial = ($draft->corrected_displacement_initial * $draft->density_initial) / 1.025;
        $draft->final_corrected_displacement_final = ($draft->corrected_displacement_final * $draft->density_final) / 1.025;
        $draft->density_correction_initial = ($draft->final_corrected_displacement_initial - $draft->corrected_displacement_initial);
        $draft->density_correction_final = ($draft->final_corrected_displacement_final - $draft->corrected_displacement_final);
        $draft->deductions_total_initial = $draft->fuel_oil_initial
            + $draft->diesel_oil_initial
            + $draft->ballast_water_initial
            + $draft->fresh_water_initial
            + $draft->lubricating_oil_initial
            + $draft->sludge_initial
            + $draft->others_initial;
        $draft->deductions_total_final = $draft->fuel_oil_final
            + $draft->diesel_oil_final
            + $draft->ballast_water_final
            + $draft->fresh_water_final
            + $draft->lubricating_oil_final
            + $draft->sludge_final
            + $draft->others_final;
        $draft->net_displacement_initial = $draft->final_corrected_displacement_initial - $draft->deductions_total_initial;
        $draft->net_displacement_final = $draft->final_corrected_displacement_final - $draft->deductions_total_final;
        $draft->constant = $draft->net_displacement_initial - $draft->light_ship;
        $draft->loaded_cargo = $draft->net_displacement_final - $draft->net_displacement_initial;
        $draft->discharged_cargo = $draft->net_displacement_initial - $draft->net_displacement_final;
        $draft->finalized = true;
        $draft->save();

        return redirect()->route('final_report.form')
            ->with('success', 'The draft has been finalized sucessfully!');
    }

    public function finalReport()
    {
        $latestWorkOrder = unserialize(session('latestWorkOrder'));
        $latestWorkOrderId = $latestWorkOrder->id;
        $draft = Draft::where('work_order_id', $latestWorkOrderId)->first();
        $ship = Ship::find($draft->vessel_id);
        $condition = Condition::find($draft->condition_id);
        return view('final_report.form', compact('draft', 'ship', 'condition'));
    }
}
