@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/form.css') }}">

    <div class="form-custom__container">
        <h3 class="form-custom__title">Editing Role</h3>

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

        <form method="POST" action="{{ route('roles.update', $role->id) }}">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="name">Role Name</label>
                    <input type="text" name="name" value="{{ $role->name }}" class="form-custom__input">
                </div>
                <div class="form-group">
                    <label class="form-custom__label" for="name">Role Permissions</label>
                    <br>
                    @foreach ($permission as $value)
                        <label class="form-custom__role-item">
                            <input type="checkbox" name="permission[]" value="{{ $value->id }}"
                                {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }}>
                            {{ $value->name }}
                        </label>
                        <br>
                    @endforeach
                </div>
                <div style="margin-left: 1rem">
                    <button type="submit" class="form-custom__btn form-custom__btn-success">Guardar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
