@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/form.css') }}">

    <div class="form-custom__container">
        <h3 class="form-custom__title">Showing Condition</h3>

        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label">Attending Supervisor</label>
                <input readonly type="text" value="{{ $condition->attending_surveyor }}" class="form-custom__input" />
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
                <input readonly type="text" class="form-custom__input" value="{{ $condition->witness_dought }}" />
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
                <input readonly type="text" class="form-custom__input" value="{{ $condition->sea_conditions }}" />
            </div>
        </div>

        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label">Ship Heading</label>
                <input readonly type="number" class="form-custom__input" value="{{ $condition->heading_ship }}" />
            </div>

            <div class="form-custom__group">
                <label class="form-custom__label">Wind Direction</label>
                <input readonly type="text" class="form-custom__input" value="{{ $condition->direction_wind }}" />
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

        <div style="margin-left: 1rem; margin-bottom: 2rem">
            <a href="{{ route('conditions.edit', $condition->id) }}"
                class="form-custom__btn form-custom__btn-success">Edit</a>
            <a href="{{ route('conditions.index') }}" class="form-custom__btn form-custom__btn-danger">Cancel</a>
        </div>
    </div>
@endsection