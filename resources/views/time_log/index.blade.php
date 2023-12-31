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
            <a href="{{ url('/time_log/create') }}">New</a>
        </div>
        <table class="table-custom">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Entry Time</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($timeLogs as $timeLog)
                    <tr>
                        <td>{{ $timeLog->description }}</td>
                        <td>{{ $timeLog->entry_time }}</td>
                        <td class="options">
                            <div class="options-dropdown">
                                <div class="vertical-dots">&#8230;</div>
                                <div class="options-dropdown-content">
                                    <a href="{{ route('time_log.show', $timeLog->id) }}">View</a>
                                    <a href="{{ route('time_log.edit', $timeLog->id) }}">Edit</a>
                                    <form action="{{ route('time_log.destroy', $timeLog->id) }}" method="POST"
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
