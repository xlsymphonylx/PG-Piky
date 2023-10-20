@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/table.css') }}">

    <div class="table-custom__container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-custom__options">
            <a href="{{ url('/ships/create') }}">New</a>
        </div>
        <table class="table-custom">
            <thead>
                <tr>
                    <th>Vessel</th>
                    <th>Loaded</th>
                    <th>File</th>
                    <th>Vessel Previous Name</th>
                    <th>Call Letters</th>
                    <th>Built Year</th>
                    <th>Built By</th>
                    <th>Hydrostatic By</th>
                    <th>Shipyard Number</th>
                    <th>Hull Number</th>
                    <th>Dated Hull</th>
                    <th>Registry Port</th>
                    <th>Flag</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ships as $ship)
                    <tr>
                        <td>{{ $ship->vessel }}</td>
                        <td>{{ $ship->loaded ? 'Yes' : 'No' }}</td>
                        <td>{{ $ship->file }}</td>
                        <td>{{ $ship->vessel_previous_name }}</td>
                        <td>{{ $ship->call_letters }}</td>
                        <td>{{ $ship->built_year }}</td>
                        <td>{{ $ship->built_by }}</td>
                        <td>{{ $ship->hydrostatic_by }}</td>
                        <td>{{ $ship->shipyard_no }}</td>
                        <td>{{ $ship->hull_no }}</td>
                        <td>{{ $ship->dated_hull }}</td>
                        <td>{{ $ship->registry_port }}</td>
                        <td>{{ $ship->flag }}</td>
                        <td class="options">
                            <div class="options-dropdown">
                                <div class="vertical-dots">&#8230;</div>
                                <div class="options-dropdown-content">
                                    <a href="{{ route('ships.show', $ship->id) }}">View</a>
                                    <a href="{{ route('ships.edit', $ship->id) }}">Edit</a>
                                    <form action="{{ route('ships.destroy', $ship->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete">
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
