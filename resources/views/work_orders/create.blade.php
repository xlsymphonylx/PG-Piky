@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Agregar Nueva Orden de Trabajo</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('work_orders.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="branch">Sucursal</label>
                                <input type="text" class="form-control" id="branch" name="branch"
                                    placeholder="Ingrese la sucursal" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="terminal">Terminal</label>
                                <input type="text" class="form-control" id="terminal" name="terminal"
                                    placeholder="Ingrese la terminal" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="product">Producto</label>
                                <input type="text" class="form-control" id="product" name="product"
                                    placeholder="Ingrese el producto" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="vessel">Buque</label>
                                <input type="text" class="form-control" id="vessel" name="vessel"
                                    placeholder="Ingrese el buque" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="file_status">Estado de Archivo</label>
                                <input type="text" class="form-control" id="file_status" name="file_status"
                                    placeholder="Ingrese el estado de archivo" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="eta">ETA</label>
                                <input type="date" class="form-control" id="eta" name="eta" required>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                            <a href="{{ route('work_orders.index') }}" class="btn btn-danger mt-3">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
