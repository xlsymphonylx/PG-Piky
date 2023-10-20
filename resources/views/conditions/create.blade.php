@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/form.css') }}">

    <div class="form-custom__container">
        <h3 class="form-custom__title">New Condition</h3>
        <form method="POST" action="{{ route('conditions.store') }}">
            @csrf

            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="attending_surveyor">Attending Supervisor</label>
                    <input type="text" class="form-custom__input" id="attending_surveyor" name="attending_surveyor"
                        placeholder="Enter Assistant Supervisor" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="master_name">Master's Name</label>
                    <input type="text" class="form-custom__input" id="master_name" name="master_name"
                        placeholder="Enter Captain's Name" required>
                </div>
            </div>

            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="chief_name">Chief's Name</label>
                    <input type="text" class="form-custom__input" id="chief_name" name="chief_name"
                        placeholder="Enter Chief's Name" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="witness_dought">Witness Dought</label>
                    <input type="text" class="form-custom__input" id="witness_dought" name="witness_dought"
                        placeholder="Enter Ballast Witness" required>
                </div>
            </div>

            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="witness_tank">Tank Witness</label>
                    <input type="text" class="form-custom__input" id="witness_tank" name="witness_tank"
                        placeholder="Enter Tank Witness" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="ship_location">Ship Location</label>
                    <input type="text" class="form-custom__input" id="ship_location" name="ship_location"
                        placeholder="Enter Ship Location" required>
                </div>
            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="weather_temp">Weather Temperature</label>
                    <input type="number" class="form-custom__input" id="weather_temp" name="weather_temp"
                        placeholder="Enter Weather Temperature" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="sea_conditions">Sea Conditions</label>
                    <input type="text" class="form-custom__input" id="sea_conditions" name="sea_conditions"
                        placeholder="Enter Sea Conditions" required>
                </div>
            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="heading_ship">Ship Heading</label>
                    <input type="number" class="form-custom__input" id="heading_ship" name="heading_ship"
                        placeholder="Enter Ship Heading" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="direction_wind">Wind Direction</label>
                    <input type="text" class="form-custom__input" id="direction_wind" name="direction_wind"
                        placeholder="Enter Wind Direction" required>
                </div>
            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="stream_speed">Stream Speed</label>
                    <input type="number" class="form-custom__input" id="stream_speed" name="stream_speed"
                        placeholder="Enter Stream Speed" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="tide">Tide</label>
                    <input type="text" class="form-custom__input" id="tide" name="tide"
                        placeholder="Enter Tide" required>
                </div>
            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="ice">Ice</label>
                    <input type="text" class="form-custom__input" id="ice" name="ice"
                        placeholder="Enter Ice" required>
                </div>
            </div>

            <div style="margin-left: 1rem">
                <button type="submit" class="form-custom__btn form-custom__btn-success">Save</button>
                <a href="{{ route('conditions.index') }}" class="form-custom__btn form-custom__btn-danger">Cancel</a>
            </div>
        </form>
    </div>
@endsection
