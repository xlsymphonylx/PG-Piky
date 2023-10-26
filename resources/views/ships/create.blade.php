@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/form.css') }}">

    <div class="form-custom__container">
        <h3 class="form-custom__title">New Ship</h3>
        @if ($errors->any())
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                <strong>Please check the fields!</strong>
                @foreach ($errors->all() as $error)
                    <span class="badge badge-danger text-danger">{{ $error }}</span>
                @endforeach
            </div>
        @endif
        <form method="POST" action="{{ route('ships.store') }}">
            @csrf

            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="vessel">Vessel</label>
                    <input type="text" class="form-custom__input" id="vessel" name="vessel"
                        placeholder="Enter entry time" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="loaded">Load State</label>
                    <select type="text" class="form-custom__input" style="padding: 0" id="loaded" name="loaded"
                        required>
                        <option value="1">Loaded</option>
                        <option value="0">Not Loaded</option>

                    </select>
                </div>
            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="file">File</label>
                    <input type="text" class="form-custom__input" id="file" name="file" placeholder="Enter file"
                        required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="vessel_previous_name">Vessel previous name</label>
                    <input type="text" class="form-custom__input" id="vessel_previous_name" name="vessel_previous_name"
                        placeholder="Enter vessel previous name" required>
                </div>
            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="call_letters">Call Letters</label>
                    <input type="text" class="form-custom__input" id="call_letters" name="call_letters"
                        placeholder="Enter call letters" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="built_year">Built Year</label>
                    <input type="date" class="form-custom__input" id="built_year" name="built_year"
                        placeholder="Enter built year" required>
                </div>
            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="built_by">Built By</label>
                    <input type="text" class="form-custom__input" id="built_by" name="built_by"
                        placeholder="Enter built by" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="hydrostatic_by">Hydrostatic By</label>
                    <input type="text" class="form-custom__input" id="hydrostatic_by" name="hydrostatic_by"
                        placeholder="Enter hydrostatic by" required>
                </div>
            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="shipyard_no">Shipyard Number</label>
                    <input type="text" class="form-custom__input" id="shipyard_no" name="shipyard_no"
                        placeholder="Enter shipyard number" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="hull_no">Hull Number</label>
                    <input type="text" class="form-custom__input" id="hull_no" name="hull_no"
                        placeholder="Enter hull number" required>
                </div>
            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="dated_hull">Dated Hull</label>
                    <input type="date" class="form-custom__input" id="dated_hull" name="dated_hull"
                        placeholder="Enter dated hull" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="registry_port">Registry Port</label>
                    <input type="text" class="form-custom__input" id="registry_port" name="registry_port"
                        placeholder="Enter registry port" required>
                </div>
            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="flag">Flag</label>
                    <input type="text" class="form-custom__input" id="flag" name="flag"
                        placeholder="Enter flag" required>
                </div>

            </div>
            <div style="margin-left: 1rem">
                <button type="submit" class="form-custom__btn form-custom__btn-success">Save</button>
                <a href="{{ route('ships.index') }}" class="form-custom__btn form-custom__btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
