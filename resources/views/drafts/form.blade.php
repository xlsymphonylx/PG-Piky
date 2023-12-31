@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ url('css/form.css') }}">

<div class="form-custom__container">
    <h3 class="form-custom__title">Draft</h3>
    @if ($errors->any())
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
        <strong>Please check the fields!</strong>
        @foreach ($errors->all() as $error)
        <span class="badge badge-danger text-danger">{{ $error }}</span>
        @endforeach
    </div>
    @endif
    <form method="POST" action="{{ route('drafts.save') }}">
        @csrf
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="fwd_port_initial">FWD Port Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->fwd_port_initial !== null ? number_format($draft->fwd_port_initial,4) : '' }}"
                    id="fwd_port_initial" name="fwd_port_initial" placeholder="Enter FWD Port Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="fwd_port_final">FWD Port Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->fwd_port_final !== null ? number_format($draft->fwd_port_final,4) : '' }}" id="fwd_port_final"
                    name="fwd_port_final" placeholder="Enter FWD Port Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="fwd_starboard_initial">FWD Starboard Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->fwd_starboard_initial !== null ? number_format($draft->fwd_starboard_initial,4) : '' }}"
                    id="fwd_starboard_initial" name="fwd_starboard_initial" placeholder="Enter FWD Starboard Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="fwd_starboard_final">FWD Starboard Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->fwd_starboard_final !== null ? number_format($draft->fwd_starboard_final,4) : '' }}"
                    id="fwd_starboard_final" name="fwd_starboard_final" placeholder="Enter FWD Starboard Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="midship_port_initial">Midship Port Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->midship_port_initial !== null ? number_format($draft->midship_port_initial,4) : '' }}"
                    id="midship_port_initial" name="midship_port_initial" placeholder="Enter Midship Port Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="midship_port_final">Midship Port Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->midship_port_final !== null ? number_format($draft->midship_port_final,4) : '' }}"
                    id="midship_port_final" name="midship_port_final" placeholder="Enter Midship Port Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="midship_starboard_initial">Midship Starboard Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->midship_starboard_initial !== null ? number_format($draft->midship_starboard_initial,4) : '' }}"
                    id="midship_starboard_initial" name="midship_starboard_initial"
                    placeholder="Enter Midship Starboard Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="midship_starboard_final">Midship Starboard Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->midship_starboard_final !== null ? number_format($draft->midship_starboard_final,4) : '' }}"
                    id="midship_starboard_final" name="midship_starboard_final"
                    placeholder="Enter Midship Starboard Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="aft_port_initial">AFT Port Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->aft_port_initial !== null ? number_format($draft->aft_port_initial,4) : '' }}"
                    id="aft_port_initial" name="aft_port_initial" placeholder="Enter AFT Port Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="aft_port_final">AFT Port Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->aft_port_final !== null ? number_format($draft->aft_port_final,4) : '' }}" id="aft_port_final"
                    name="aft_port_final" placeholder="Enter AFT Port Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="aft_starboard_initial">AFT Starboard Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->aft_starboard_initial !== null ? number_format($draft->aft_starboard_initial,4) : '' }}"
                    id="aft_starboard_initial" name="aft_starboard_initial" placeholder="Enter AFT Starboard Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="aft_starboard_final">AFT Starboard Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->aft_starboard_final !== null ? number_format($draft->aft_starboard_final,4) : '' }}"
                    id="aft_starboard_final" name="aft_starboard_final" placeholder="Enter AFT Starboard Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="displacement_for_mm_initial">Displacement for MM
                    Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->displacement_for_mm_initial !== null ? number_format($draft->displacement_for_mm_initial,4) : '' }}"
                    id="displacement_for_mm_initial" name="displacement_for_mm_initial"
                    placeholder="Enter Displacement for MM Starboard Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="displacement_for_mm_final">Displacement for MM Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->displacement_for_mm_final !== null ? number_format($draft->displacement_for_mm_final,4) : '' }}"
                    id="displacement_for_mm_final" name="displacement_for_mm_final"
                    placeholder="Enter Displacement for MM Starboard Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="density_initial">Density
                    Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->density_initial !== null ? number_format($draft->density_initial,4) : '' }}" id="density_initial"
                    name="density_initial" placeholder="Enter Density Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="density_final">Density Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->density_final !== null ? number_format($draft->density_final,4) : '' }}" id="density_final"
                    name="density_final" placeholder="Enter Density Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="fuel_oil_initial">Fuel Oil
                    Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->fuel_oil_initial !== null ? number_format($draft->fuel_oil_initial,4) : '' }}"
                    id="fuel_oil_initial" name="fuel_oil_initial" placeholder="Enter Fuel Oil Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="fuel_oil_final">Fuel Oil Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->fuel_oil_final !== null ? number_format($draft->fuel_oil_final,4) : '' }}" id="fuel_oil_final"
                    name="fuel_oil_final" placeholder="Enter Fuel Oil Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="diesel_oil_initial">Diesel Oil
                    Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->diesel_oil_initial !== null ? number_format($draft->diesel_oil_initial,4) : '' }}"
                    id="diesel_oil_initial" name="diesel_oil_initial" placeholder="Enter Diesel Oil Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="diesel_oil_final">Diesel Oil Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->diesel_oil_final !== null ? number_format($draft->diesel_oil_final,4) : '' }}"
                    id="diesel_oil_final" name="diesel_oil_final" placeholder="Enter Diesel Oil Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="ballast_water_initial">Ballast Water
                    Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->ballast_water_initial !== null ? number_format($draft->ballast_water_initial,4) : '' }}"
                    id="ballast_water_initial" name="ballast_water_initial" placeholder="Enter Ballast Water Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="ballast_water_final">Ballast Water Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->ballast_water_final !== null ? number_format($draft->ballast_water_final,4) : '' }}"
                    id="ballast_water_final" name="ballast_water_final" placeholder="Enter Ballast Water Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="fresh_water_initial">Fresh Water
                    Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->fresh_water_initial !== null ? number_format($draft->fresh_water_initial,4) : '' }}"
                    id="fresh_water_initial" name="fresh_water_initial" placeholder="Enter Fresh Water Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="fresh_water_final">Fresh Water Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->fresh_water_final !== null ? number_format($draft->fresh_water_final,4) : '' }}"
                    id="fresh_water_final" name="fresh_water_final" placeholder="Enter Fresh Water Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="lubricating_oil_initial">Lubricating Oil
                    Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->lubricating_oil_initial !== null ? number_format($draft->lubricating_oil_initial,4) : '' }}"
                    id="lubricating_oil_initial" name="lubricating_oil_initial"
                    placeholder="Enter Lubricating Oil Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="lubricating_oil_final">Lubricating Oil Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->lubricating_oil_final !== null ? number_format($draft->lubricating_oil_final,4) : '' }}"
                    id="lubricating_oil_final" name="lubricating_oil_final" placeholder="Enter Lubricating Oil Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="sludge_initial">Sludge
                    Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->sludge_initial !== null ? number_format($draft->sludge_initial,4) : '' }}" id="sludge_initial"
                    name="sludge_initial" placeholder="Enter Sludge Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="sludge_final">Sludge Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->sludge_final !== null ? number_format($draft->sludge_final,4) : '' }}" id="sludge_final"
                    name="sludge_final" placeholder="Enter Sludge Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="others_initial">Others
                    Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->others_initial !== null ? number_format($draft->others_initial,4) : '' }}" id="others_initial"
                    name="others_initial" placeholder="Enter Others Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="others_final">Others Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->others_final !== null ? number_format($draft->others_final,4) : '' }}" id="others_final"
                    name="others_final" placeholder="Enter Others Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="lbp_initial">LBP
                    Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->lbp_initial !== null ? number_format($draft->lbp_initial,4) : '' }}" id="lbp_initial"
                    name="lbp_initial" placeholder="Enter LBP Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="lbp_final">LBP Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->lbp_final !== null ? number_format($draft->lbp_final,4) : '' }}" id="lbp_final" name="lbp_final"
                    placeholder="Enter LBP Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="fwd_dist_initial">FWD Dist
                    Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->fwd_dist_initial !== null ? number_format($draft->fwd_dist_initial,4) : '' }}"
                    id="fwd_dist_initial" name="fwd_dist_initial" placeholder="Enter FWD Dist Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="fwd_dist_final">FWD Dist Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->fwd_dist_final !== null ? number_format($draft->fwd_dist_final,4) : '' }}" id="fwd_dist_final"
                    name="fwd_dist_final" placeholder="Enter FWD Dist Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="mid_dist_initial">MID Dist
                    Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->mid_dist_initial !== null ? number_format($draft->mid_dist_initial,4) : '' }}"
                    id="mid_dist_initial" name="mid_dist_initial" placeholder="Enter MID Dist Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="mid_dist_final">MID Dist Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->mid_dist_final !== null ? number_format($draft->mid_dist_final,4) : '' }}" id="mid_dist_final"
                    name="mid_dist_final" placeholder="Enter MID Dist Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="aft_dist_initial">AFT Dist
                    Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->aft_dist_initial !== null ? number_format($draft->aft_dist_initial,4) : '' }}"
                    id="aft_dist_initial" name="aft_dist_initial" placeholder="Enter AFT Dist Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="aft_dist_final">AFT Dist Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->aft_dist_final !== null ? number_format($draft->aft_dist_final,4) : '' }}" id="aft_dist_final"
                    name="aft_dist_final" placeholder="Enter AFT Dist Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="tpc_initial">TPC
                    Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->tpc_initial !== null ? number_format($draft->tpc_initial,4) : '' }}" id="tpc_initial"
                    name="tpc_initial" placeholder="Enter TPC Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="tpc_final">TPC Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->tpc_final !== null ? number_format($draft->tpc_final,4) : '' }}" id="tpc_final" name="tpc_final"
                    placeholder="Enter TPC Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="lcf_initial">LCF
                    Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->lcf_initial !== null ? number_format($draft->lcf_initial,4) : '' }}" id="lcf_initial"
                    name="lcf_initial" placeholder="Enter LCF Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="lcf_final">LCF Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->lcf_final !== null ? number_format($draft->lcf_final,4) : '' }}" id="lcf_final" name="lcf_final"
                    placeholder="Enter LCF Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="mct_1_initial">MCT 1
                    Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->mct_1_initial !== null ? number_format($draft->mct_1_initial,4) : '' }}" id="mct_1_initial"
                    name="mct_1_initial" placeholder="Enter MCT 1 Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="mct_1_final">MCT 1 Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->mct_1_final !== null ? number_format($draft->mct_1_final,4) : '' }}" id="mct_1_final"
                    name="mct_1_final" placeholder="Enter MCT 1 Final">
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="mct_2_initial">MCT 2
                    Initial</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->mct_2_initial !== null ? number_format($draft->mct_2_initial,4) : '' }}" id="mct_2_initial"
                    name="mct_2_initial" placeholder="Enter MCT 2 Initial">
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="mct_2_final">MCT 2 Final</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->mct_2_final !== null ? number_format($draft->mct_2_final,4) : '' }}" id="mct_2_final"
                    name="mct_2_final" placeholder="Enter MCT 2 Final">
            </div>
        </div>
        <div class="form-custom_section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="vessel_id">Vessel</label>
                <select class="form-custom__input" id="vessel_id" name="vessel_id" style="padding: 0" required>
                    @foreach ($ships as $ship)
                    <option value="{{ $ship->id }}" {{ $ship->id === $draft->vessel_id ? 'selected' : '' }}>
                        {{ $ship->vessel }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="light_ship">Light Ship</label>
                <input type="number" step="0.0001" class="form-custom__input"
                    value="{{ $draft->light_ship !== null ? number_format($draft->light_ship,4) : '' }}" id="light_ship"
                    name="light_ship" placeholder="Enter Light Ship Initial">
            </div>
        </div>
        <div class="form-custom_section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="condition_id">Condition</label>
                <select class="form-custom__input" id="condition_id" name="condition_id" style="padding: 0" required>
                    @foreach ($conditions as $condition)
                    <option value="{{ $condition->id }}" {{ $condition->id === $draft->condition_id ? 'selected' : ''
                        }}>
                        {{ $condition->attending_surveyor . '-' . $condition->sea_conditions }}</option>
                    @endforeach
                </select>
            </div>

        </div>
        <div style="margin-left: 1rem">
            <input type="submit" class="form-custom__btn form-custom__btn-success" value="Save" />
            <a href="{{ route('drafts.index') }}" class="form-custom__btn form-custom__btn-danger">Cancel</a>
        </div>
</div>

</form>
</div>
@endsection