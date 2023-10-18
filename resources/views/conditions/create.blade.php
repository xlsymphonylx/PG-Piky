@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/form.css') }}">

    <div class="form-custom__container">
        <h3 class="form-custom__title">Nueva Condicion</h3>
        <form method="POST" action="{{ route('conditions.store') }}">
            @csrf

            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="attending_surveyor">Supervisor Asistente</label>
                    <input type="text" class="form-custom__input" id="attending_surveyor" name="attending_surveyor"
                        placeholder="Ingrese Supervisor Asistente" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="master_name">Nombre del Capitán</label>
                    <input type="text" class="form-custom__input" id="master_name" name="master_name"
                        placeholder="Ingrese Nombre del Capitán" required>
                </div>
            </div>

            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="chief_name">Nombre del Jefe</label>
                    <input type="text" class="form-custom__input" id="chief_name" name="chief_name"
                        placeholder="Ingrese Nombre del Jefe" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="witness_dought">Testigo de Lastre</label>
                    <input type="text" class="form-custom__input" id="witness_dought" name="witness_dought"
                        placeholder="Ingrese Testigo de Lastre" required>
                </div>
            </div>

            <div class="form-custom__section">
                <!-- Add more pairs of form-custom__group as needed -->

                <div class="form-custom__group">
                    <label class="form-custom__label" for="witness_tank">Testigo de Tanque</label>
                    <input type="text" class="form-custom__input" id="witness_tank" name="witness_tank"
                        placeholder="Ingrese Testigo de Tanque" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="ship_location">Ubicación del Barco</label>
                    <input type="text" class="form-custom__input" id="ship_location" name="ship_location"
                        placeholder="Ingrese Ubicación del Barco" required>
                </div>
            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="weather_temp">Temperatura del Tiempo</label>
                    <input type="number" class="form-custom__input" id="weather_temp" name="weather_temp"
                        placeholder="Ingrese Temperatura del Tiempo" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="sea_conditions">Condiciones del Mar</label>
                    <input type="text" class="form-custom__input" id="sea_conditions" name="sea_conditions"
                        placeholder="Ingrese Condiciones del Mar" required>
                </div>
            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="heading_ship">Orientación del Barco</label>
                    <input type="number" class="form-custom__input" id="heading_ship" name="heading_ship"
                        placeholder="Ingrese Orientación del Barco" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="direction_wind">Dirección del Viento</label>
                    <input type="text" class="form-custom__input" id="direction_wind" name="direction_wind"
                        placeholder="Ingrese Dirección del Viento" required>
                </div>
            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="stream_speed">Velocidad de Corriente</label>
                    <input type="number" class="form-custom__input" id="stream_speed" name="stream_speed"
                        placeholder="Ingrese Velocidad de Corriente" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="tide">Marea</label>
                    <input type="text" class="form-custom__input" id="tide" name="tide"
                        placeholder="Ingrese Marea" required>
                </div>
            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="ice">Hielo</label>
                    <input type="text" class="form-custom__input" id="ice" name="ice"
                        placeholder="Ingrese Hielo" required>
                </div>
            </div>

            <div style="margin-left: 1rem">
                <button type="submit" class="form-custom__btn form-custom__btn-success">Guardar</button>
                <a href="{{ route('conditions.index') }}" class="form-custom__btn form-custom__btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
