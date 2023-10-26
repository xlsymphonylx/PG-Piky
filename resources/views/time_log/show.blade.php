@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/form.css') }}">
    <div class="form-custom__container">
        <h3 class="form-custom__title">Viewing Time Log</h3>

        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="entry_time">Entry Time</label>
                <input type="datetime-local" class="form-custom__input" id="entry_time" name="entry_time"
                    value="{{ $timeLog->entry_time }}" placeholder="Enter entry time" readonly>
            </div>

            <div class="form-custom__group">
                <label class="form-custom__label" for="description">Description</label>
                <input type="text" class="form-custom__input" id="description" value="{{ $timeLog->description }}"
                    name="description" placeholder="Enter description" readonly>
            </div>
        </div>
        <div style="margin-left: 1rem; margin-bottom: 2rem">
            <a href="{{ route('time_log.edit', $timeLog->id) }}"
                class="form-custom__btn form-custom__btn-success">Edit</a>
            <a href="{{ route('time_log.index') }}" class="form-custom__btn form-custom__btn-danger">Cancel</a>
        </div>
    </div>
@endsection
