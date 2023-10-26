@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/form.css') }}">

    <div class="form-custom__container">
        <h3 class="form-custom__title">Editing Work Order</h3>
        @if ($errors->any())
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                <strong>Please check the fields!</strong>
                @foreach ($errors->all() as $error)
                    <span class="badge badge-danger text-danger">{{ $error }}</span>
                @endforeach
            </div>
        @endif
        <form method="POST" action="{{ route('work_orders.update', $workOrder->id) }}">
            @csrf
            @method('PUT')
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="file_number">File Number</label>
                    <input type="text" class="form-custom__input" id="file_number" name="file_number"
                        value="{{ $workOrder->file_number }}" placeholder="Enter File Number" required>
                </div>
            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="branch">Branch</label>
                    <input type="text" class="form-custom__input" id="branch" name="branch"
                        value="{{ $workOrder->branch }}" placeholder="Enter the branch" required>
                </div>

                <div class="form-custom__group">
                    <label class="form-custom__label" for="terminal">Terminal</label>
                    <input type="text" class="form-custom__input" id="terminal" name="terminal"
                        value="{{ $workOrder->terminal }}" placeholder="Enter the terminal" required>
                </div>
            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="product">Product</label>
                    <input type="text" class="form-custom__input" id="product" name="product"
                        value="{{ $workOrder->product }}" placeholder="Enter the product" required>
                </div>
                <div class="form-custom__group">
                    <label class="form-custom__label" for="vessel">Vessel</label>
                    <input type="text" class="form-custom__input" id="vessel" name="vessel"
                        value="{{ $workOrder->vessel }}" placeholder="Enter the vessel" required>
                </div>
            </div>
            <div class="form-custom__section">
                <div class="form-custom__group">
                    <label class="form-custom__label" for="file_status">File Status</label>
                    <input type="text" class="form-custom__input" id="file_status" name="file_status"
                        value="{{ $workOrder->file_status }}" placeholder="Enter the file status" required>
                </div>
                <div class="form-custom__group">
                    <label class="form-custom__label" for="eta">ETA</label>
                    <input type="date" class="form-custom__input" id="eta" name="eta"
                        value="{{ \Carbon\Carbon::parse($workOrder->eta)->format('Y-m-d') }}" required>
                </div>
            </div>
            <div style="margin-left: 1rem">
                <button type="submit" class="form-custom__btn form-custom__btn-success">Save</button>
                <a href="{{ route('work_orders.index') }}" class="form-custom__btn form-custom__btn-danger">Cancel</a>
            </div>
        </form>
    </div>
@endsection
