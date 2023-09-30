@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Órdenes de Trabajo</div>

                    <div class="card-body">
                        <a href="{{ route('work_orders.create') }}" class="btn btn-primary mb-3">Agregar Nueva Orden</a>

                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sucursal</th>
                                    <th>Terminal</th>
                                    <th>Producto</th>
                                    <th>Buque</th>
                                    <th>Estado de Archivo</th>
                                    <th>ETA</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($workOrders as $workOrder)
                                    <tr>
                                        <td>{{ $workOrder->branch }}</td>
                                        <td>{{ $workOrder->terminal }}</td>
                                        <td>{{ $workOrder->product }}</td>
                                        <td>{{ $workOrder->vessel }}</td>
                                        <td>{{ $workOrder->file_status }}</td>
                                        <td>{{ $workOrder->eta }}</td>
                                        <td>
                                            <a href="{{ route('work_orders.show', $workOrder->id) }}"
                                                class="btn btn-info">Ver</a>
                                            <a href="{{ route('work_orders.edit', $workOrder->id) }}"
                                                class="btn btn-primary">Editar</a>
                                            <form action="{{ route('work_orders.destroy', $workOrder->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
