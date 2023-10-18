@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/form.css') }}">

    <div class="form-custom__container">
        <h3 class="form-custom__title">Creando Orden de Trabajo</h3>
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="name">Nombre</label>
                    <input type="text" class="form-custom__input" id="name" name="name"
                        placeholder="Ingrese el nombre" required>

                </div>
                <div class="form-custom__group">
                    <label class="form-custom__label" for="email">Email</label>
                    <input type="email" class="form-custom__input" id="email" name="email"
                        placeholder="Ingrese el email" required>
                </div>
            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="password">Contraseña</label>
                    <input type="text" class="form-custom__input" id="password" name="password"
                        placeholder="Ingrese la Contraseña" required>
                </div>
                <div class="form-custom__group">
                    <label class="form-custom__label" for="password_confirmation">Confirme Contraseña</label>
                    <input type="text" class="form-custom__input" id="password_confirmation" name="password_confirmation"
                        placeholder="Ingrese Confirmacion" required>
                </div>
            </div>
            <div style="margin-left: 1rem">
                <button type="submit" class="form-custom__btn form-custom__btn-success">Guardar</button>
                <a href="{{ route('users.index') }}" class="form-custom__btn form-custom__btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
