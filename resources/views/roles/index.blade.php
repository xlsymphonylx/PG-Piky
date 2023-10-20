@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/table.css') }}">

    <div class="table-custom__container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @can('crear-rol')
            <div class="table-custom__options">
                <a href="{{ url('/roles/create') }}">New</a>
            </div>
        @endcan

        <table class="table-custom">
            <thead style="background-color: #003366">
                <th>ID</th>
                <th>Role</th>
                <th></th> <!-- Corrected a typo here -->
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td class="options">
                            <div class="options-dropdown">
                                <div class="vertical-dots">&#8230;</div>
                                <div class="options-dropdown-content">
                                    <a href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST"
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
