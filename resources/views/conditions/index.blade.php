@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/table.css') }}">

    <div class="table-custom__container">
        <div class="table-custom__options">
            <a href="{{ url('/conditions/create') }}">Nuevo</a>
        </div>
        <table class="table-custom">
            <thead>
                <tr>
                    <th>Attending Surveyor</th>
                    <th>Master Name</th>
                    <th>Chief Name</th>
                    <th>Witness Dought</th>
                    <th>Witness Tank</th>
                    <th>Ship Location</th>
                    <th>Weather Temp</th>
                    <th>Sea Conditions</th>
                    <th>Heading Ship</th>
                    <th>Direction Wind</th>
                    <th>Stream Speed</th>
                    <th>Tide</th>
                    <th>Ice</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($conditions as $condition)
                    <tr>
                        <td>{{ $condition->attending_surveyor }}</td>
                        <td>{{ $condition->master_name }}</td>
                        <td>{{ $condition->chief_name }}</td>
                        <td>{{ $condition->witness_dought }}</td>
                        <td>{{ $condition->witness_tank }}</td>
                        <td>{{ $condition->ship_location }}</td>
                        <td>{{ $condition->weather_temp }}</td>
                        <td>{{ $condition->sea_conditions }}</td>
                        <td>{{ $condition->heading_ship }}</td>
                        <td>{{ $condition->direction_wind }}</td>
                        <td>{{ $condition->stream_speed }}</td>
                        <td>{{ $condition->tide }}</td>
                        <td>{{ $condition->ice }}</td>
                        <td class="options">
                            <div class="options-dropdown">
                                <div class="vertical-dots">&#8230;</div>
                                <div class="options-dropdown-content">
                                    <a href="{{ route('conditions.show', $condition->id) }}">Ver</a>
                                    <a href="{{ route('conditions.edit', $condition->id) }}">Editar</a>
                                    <form action="{{ route('conditions.destroy', $condition->id) }}" method="POST"
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
