@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/form.css') }}">

    <div class="form-custom__container">
        <h3 class="form-custom__title">Editing User</h3>
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
        <form method="POST" action="{{ route('users.update', $user->id) }}">
            @csrf
            @method('PUT')
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="name">Name</label>
                    <input type="text" class="form-custom__input" id="name" name="name"
                        value="{{ $user->name }}" placeholder="Enter the name" required>

                </div>
                <div class="form-custom__group">
                    <label class="form-custom__label" for="email">Email</label>
                    <input type="email" class="form-custom__input" id="email" name="email"
                        value="{{ $user->email }}" placeholder="Enter the email" required>
                </div>
            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="password">Password</label>
                    <input type="password" class="form-custom__input" id="password" name="password"
                        placeholder="Enter the password" required>
                </div>
                <div class="form-custom__group">
                    <label class="form-custom__label" for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-custom__input" id="password_confirmation"
                        name="password_confirmation" placeholder="Confirm Password" required>
                </div>
            </div>
            <div style="margin-left: 1rem">
                <button type="submit" class="form-custom__btn form-custom__btn-success">Save</button>
                <a href="{{ route('users.index') }}" class="form-custom__btn form-custom__btn-danger">Cancel</a>
            </div>
        </form>
    </div>
@endsection
