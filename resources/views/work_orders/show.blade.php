@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detalles de la Orden de Trabajo</div>

                    <div class="card-body">
                        <div class="form-group mt-3">
                            <label for="branch">Sucursal</label>
                            <input type="text" class="form-control" id="branch" name="branch"
                                value="{{ $workOrder->branch }}" readonly>
                        </div>

                        <div class="form-group mt-3">
                            <label for="terminal">Terminal</label>
                            <input type="text" class="form-control" id="terminal" name="terminal"
                                value="{{ $workOrder->terminal }}" readonly>
                        </div>

                        <div class="form-group mt-3">
                            <label for="product">Producto</label>
                            <input type="text" class="form-control" id="product" name="product"
                                value="{{ $workOrder->product }}" readonly>
                        </div>

                        <div class="form-group mt-3">
                            <label for="vessel">Barco</label>
                            <input type="text" class="form-control" id="vessel" name="vessel"
                                value="{{ $workOrder->vessel }}" readonly>
                        </div>

                        <div class="form-group mt-3">
                            <label for="file_status">Estado del Archivo</label>
                            <input type="text" class="form-control" id="file_status" name="file_status"
                                value="{{ $workOrder->file_status }}" readonly>
                        </div>

                        <div class="form-group mt-3">
                            <label for="eta">ETA</label>
                            <input type="text" class="form-control" id="eta" name="eta"
                                value="{{ $workOrder->eta }}" readonly>
                        </div>

                        <a href="{{ route('work_orders.edit', $workOrder->id) }}" class="btn btn-primary mt-3">Editar</a>
                        <a href="{{ route('work_orders.index') }}" class="btn btn-danger mt-3">Regresar</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
