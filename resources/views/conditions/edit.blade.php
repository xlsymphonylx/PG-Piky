@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/form.css') }}">

    <div class="form-custom__container">
        <h3 class="form-custom__title">Editar Condicion</h3>
        <form method="POST" action="{{ route('conditions.update', $condition->id) }}">
            @csrf
            @method('PUT')
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label">Supervisor Asistente</label>
                    <input type="text" value="{{ $condition->attending_surveyor }}" class="form-custom__input" />
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label">Nombre del Capitán:</label>
                    <input type="text" value="{{ $condition->master_name }}" class="form-custom__input" />
                </div>
            </div>

            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label">Nombre del Jefe:</label>
                    <input type="text" class="form-custom__input" value="{{ $condition->chief_name }}" />
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label">Testigo de Lastre:</label>
                    <input type="text" class="form-custom__input" value="{{ $condition->witness_dought }}" />
                </div>
            </div>

            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label">Testigo de Tanque:</label>
                    <input type="text" class="form-custom__input" value="{{ $condition->witness_tank }}" />
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label">Ubicación del Barco:</label>
                    <input type="text" class="form-custom__input" value="{{ $condition->ship_location }}" />
                </div>
            </div>

            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label">Temperatura del Tiempo:</label>
                    <input type="number" class="form-custom__input" value="{{ $condition->weather_temp }}" />
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label">Condiciones del Mar:</label>
                    <input type="text" class="form-custom__input" value="{{ $condition->sea_conditions }}" />
                </div>
            </div>

            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label">Orientación del Barco:</label>
                    <input type="number" class="form-custom__input" value="{{ $condition->heading_ship }}" />
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label">Dirección del Viento:</label>
                    <input type="text" class="form-custom__input" value="{{ $condition->direction_wind }}" />
                </div>
            </div>

            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label">Velocidad de Corriente:</label>
                    <input type="number" class="form-custom__input" value="{{ $condition->stream_speed }}" />
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label">Marea:</label>
                    <input type="text" class="form-custom__input" value="{{ $condition->tide }}" />
                </div>
            </div>

            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label">Hielo:</label>
                    <input type="text" class="form-custom__input" value="{{ $condition->ice }}" />
                </div>
            </div>

            <div style="margin-left: 1rem">
                <button type="submit" class="form-custom__btn form-custom__btn-success">Guardar</button>
                <a href="{{ route('conditions.index') }}" class="form-custom__btn form-custom__btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
