@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/form.css') }}">

    <div class="form-custom__container">
        <form method="POST" action="{{ route('work_orders.store') }}">
            @csrf

            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="branch">Sucursal</label>
                    <input type="text" class="form-custom__input" id="branch" name="branch"
                        placeholder="Ingrese la sucursal" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="terminal">Terminal</label>
                    <input type="text" class="form-custom__input" id="terminal" name="terminal"
                        placeholder="Ingrese la terminal" required>
                </div>


            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="product">Producto</label>
                    <input type="text" class="form-custom__input" id="product" name="product"
                        placeholder="Ingrese el producto" required>
                </div>
                <div class="form-custom__group">
                    <label class="form-custom__label" for="vessel">Buque</label>
                    <input type="text" class="form-custom__input" id="vessel" name="vessel"
                        placeholder="Ingrese el buque" required>
                </div>
            </div>


            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="file_status">Estado de Archivo</label>
                    <input type="text" class="form-custom__input" id="file_status" name="file_status"
                        placeholder="Ingrese el estado de archivo" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="eta">ETA</label>
                    <input type="date" class="form-custom__input" id="eta" name="eta" required>
                </div>
            </div>
            <div style="margin-left: 1rem">
                <button type="submit" class="form-custom__btn form-custom__btn-success">Guardar</button>
                <a href="{{ route('work_orders.index') }}" class="form-custom__btn form-custom__btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
