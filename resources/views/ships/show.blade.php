@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/form.css') }}">
    <div class="form-custom__container">
        <h3 class="form-custom__title">Showing Vessel</h3>


        <!-- Section 1 -->
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="vessel">Vessel</label>
                <input type="text" class="form-custom__input" id="vessel" name="vessel"
                    value="{{ $ship->vessel }}" readonly>
            </div>

            <div class="form-custom__group">
                <label class="form-custom__label" for="loaded">Load State</label>
                <select type="text" class="form-custom__input" style="padding: 0" id="loaded" name="loaded" value="{{ $ship->loaded }}"
                    readonly>
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
                <input type="text" class="form-custom__input" id="hull_no" name="hull_no" value="{{ $ship->hull_no }}"
                    readonly>
            </div>
        </div>

        <!-- Section 6 -->
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="dated_hull">Dated Hull</label>
                <input type="datetime-local" class="form-custom__input" id="dated_hull" name="dated_hull"
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
        <div style="margin-left: 1rem">
            <a href="{{ route('ships.edit', $ship->id) }}" class="form-custom__btn form-custom__btn-success">Edit</a>
            <a href="{{ route('ships.index') }}" class="form-custom__btn form-custom__btn-danger">Cancel</a>
        </div>
    </div>
@endsection
