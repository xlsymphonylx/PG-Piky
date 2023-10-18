@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/table.css') }}">

    <div class="table-custom__container">
        <div class="table-custom__options">
            <a href="{{ url('/users/create') }}">Nuevo</a>
        </div>
        <table class="table-custom">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Verificado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->email_verified_at ? 'Sí' : 'No' }}</td>
                        <td class="options">
                            <div class="options-dropdown">
                                <div class="vertical-dots">&#8230;</div>
                                <div class="options-dropdown-content">
                                    <a href="{{ route('users.show', $user->id) }}">Ver</a>
                                    <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST"
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
