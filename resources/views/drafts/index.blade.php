@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ url('css/table.css') }}">

<div class="table-custom__container">
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <h3 class="form-custom__title" style="text-align: center;margin-bottom: 3rem">Draft Control</h3>

    <div class="table-custom__options" style="text-align: center">
        <a href="{{ url('/drafts/recreate') }}">New</a>
        <a href="{{ url('/drafts/continue') }}">Continue</a>
        <form action="{{ route('drafts.finalize') }}" method="POST" style="display: inline;">
            @csrf
            <input type="submit" class="finalize-draft" value="Finalize" style="background-color: red">
        </form>

    </div>
</div>
@endsection