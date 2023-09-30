@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Información de la Orden de Trabajo</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('work_orders.update', $workOrder->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="branch">Sucursal</label>
                                <input type="text" class="form-control" id="branch" name="branch"
                                    value="{{ $workOrder->branch }}" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="terminal">Terminal</label>
                                <input type="text" class="form-control" id="terminal" name="terminal"
                                    value="{{ $workOrder->terminal }}" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="product">Producto</label>
                                <input type="text" class="form-control" id="product" name="product"
                                    value="{{ $workOrder->product }}" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="vessel">Buque</label>
                                <input type="text" class="form-control" id="vessel" name="vessel"
                                    value="{{ $workOrder->vessel }}" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="file_status">Estado de Archivo</label>
                                <input type="text" class="form-control" id="file_status" name="file_status"
                                    value="{{ $workOrder->file_status }}" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="eta">ETA</label>
                                <input type="date" class="form-control" id="eta" name="eta"
                                    value="{{ $workOrder->eta }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Guardar Cambios</button>
                            <a href="{{ route('work_orders.index') }}" class="btn btn-danger mt-3">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
