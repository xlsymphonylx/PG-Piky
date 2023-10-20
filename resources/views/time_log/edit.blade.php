@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/form.css') }}">

    <div class="form-custom__container">
        <h3 class="form-custom__title">Editing Time Log</h3>
        @if ($errors->any())
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                <strong>Please fill all fields!</strong>
                @foreach ($errors->all() as $error)
                    <span class="badge badge-danger">{{ $error }}</span>
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <form method="POST" action="{{ route('time_log.update', $timeLog->id) }}">
            @csrf
            @method('PUT')
            <div class="form-custom__section">
                <div class="form-custom__section">
                    <div class="form-custom__group">
                        <label class="form-custom__label" for="entry_time">Entry Time</label>
                        <input type="datetime-local" class="form-custom__input" id="entry_time" name="entry_time"
                            value="{{ $timeLog->entry_time }}" placeholder="Enter entry time" required>
                    </div>

                    <div class="form-custom__group">
                        <label class="form-custom__label" for="description">Description</label>
                        <input type="text" class="form-custom__input" id="description"
                            value="{{ $timeLog->description }}" name="description" placeholder="Enter description" required>
                    </div>
                </div>
                <div style="margin-left: 1rem">
                    <button type="submit" class="form-custom__btn form-custom__btn-success">Save</button>
                    <a href="{{ route('time_log.index') }}" class="form-custom__btn form-custom__btn-danger">Cancel</a>
                </div>
        </form>
    </div>
@endsection
