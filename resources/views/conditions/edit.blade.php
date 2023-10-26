@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/form.css') }}">

    <div class="form-custom__container">
        <h3 class="form-custom__title">Editing Condition</h3>
        @if ($errors->any())
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                <strong>Please check the fields!</strong>
                @foreach ($errors->all() as $error)
                    <span class="badge badge-danger text-danger">{{ $error }}</span>
                @endforeach
            </div>
        @endif
        <form method="POST" action="{{ route('conditions.update', $condition->id) }}">
            @csrf
            @method('PUT')
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label">Attending Supervisor</label>
                    <input type="text" value="{{ $condition->attending_surveyor }}" class="form-custom__input" />
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label">Master's Name</label>
                    <input type="text" value="{{ $condition->master_name }}" class="form-custom__input" />
                </div>
            </div>

            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label">Chief's Name</label>
                    <input type="text" class="form-custom__input" value="{{ $condition->chief_name }}" />
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label">Witness Dought</label>
                    <input type="text" class="form-custom__input" value="{{ $condition->witness_dought }}" />
                </div>
            </div>

            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label">Tank Witness</label>
                    <input type="text" class="form-custom__input" value="{{ $condition->witness_tank }}" />
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label">Ship Location</label>
                    <input type="text" class="form-custom__input" value="{{ $condition->ship_location }}" />
                </div>
            </div>

            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label">Weather Temperature</label>
                    <input type="number" class="form-custom__input" value="{{ $condition->weather_temp }}" />
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label">Sea Conditions</label>
                    <input type="text" class="form-custom__input" value="{{ $condition->sea_conditions }}" />
                </div>
            </div>

            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label">Ship Heading</label>
                    <input type="number" class="form-custom__input" value="{{ $condition->heading_ship }}" />
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label">Wind Direction</label>
                    <input type="text" class="form-custom__input" value="{{ $condition->direction_wind }}" />
                </div>
            </div>

            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label">Stream Speed</label>
                    <input type="number" class="form-custom__input" value="{{ $condition->stream_speed }}" />
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label">Tide</label>
                    <input type="text" class="form-custom__input" value="{{ $condition->tide }}" />
                </div>
            </div>

            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label">Ice</label>
                    <input type="text" class="form-custom__input" value="{{ $condition->ice }}" />
                </div>
            </div>

            <div style="margin-left: 1rem">
                <button type="submit" class="form-custom__btn form-custom__btn-success">Save</button>
                <a href="{{ route('conditions.index') }}" class="form-custom__btn form-custom__btn-danger">Cancel</a>
            </div>
        </form>
    </div>
@endsection
