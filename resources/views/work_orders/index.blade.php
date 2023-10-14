@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{url('css/table.css')}}">


<div class="table-custom__container">
    <div class="table-custom__options">
        <a href="{{url('/work_orders/create')}}">Nuevo</a>
    </div>
    <table class="table-custom">
        <thead>
            <tr>
                <th>Sucursal</th>
                <th>Terminal</th>
                <th>Producto</th>
                <th>Buque</th>
                <th>Estado de Archivo</th>
                <th>ETA</th>
                <th></th>
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
                <td class="options">
                    <div class="options-dropdown">
                        <div class="vertical-dots">&#8230;</div>
                        <div class="options-dropdown-content">
                            <a href="{{ route('work_orders.show', $workOrder->id) }}">Ver</a>
                            <a href="{{ route('work_orders.edit', $workOrder->id) }}">Editar</a>
                            <form action="{{ route('work_orders.destroy', $workOrder->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Eliminar">
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection