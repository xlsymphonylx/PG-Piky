@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/form.css') }}">
    <div class="form-custom__container">
        <h3 class="form-custom__title">Viewing User</h3>

        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="name">Name</label>
                <input type="text" class="form-custom__input" id="name" name="name" value="{{ $user->name }}"
                    placeholder="Enter the name" readonly>

            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="email">Email</label>
                <input type="email" class="form-custom__input" id="email" name="email" value="{{ $user->email }}"
                    placeholder="Enter the email" readonly>
            </div>
        </div>
        <div class="form-custom_section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="role">Role</label>
                <select class="form-custom__input" id="role" name="role" style="padding: 0" readonly>
                    @foreach ($roles as $role)
                        <option value="{{ $role->name }}"
                            {{ $role->name == $user->getFirstRoleName() ? 'selected' : 'disabled' }}>{{ $role->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="password">Password</label>
                <input type="password" class="form-custom__input" id="password" name="password"
                    placeholder="Enter the password" readonly>
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-custom__input" id="password_confirmation" name="password_confirmation"
                    placeholder="Confirm Password" readonly>
            </div>
        </div>
        <div style="margin-left: 1rem; margin-bottom: 2rem">
            <a href="{{ route('users.edit', $user->id) }}" class="form-custom__btn form-custom__btn-success">Edit</a>
            <a href="{{ route('users.index') }}" class="form-custom__btn form-custom__btn-danger">Cancel</a>
        </div>
    </div>
@endsection
