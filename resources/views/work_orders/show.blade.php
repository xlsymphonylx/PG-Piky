@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/form.css') }}">
    <div class="form-custom__container">
        <h3 class="form-custom__title">Viewing Work Order</h3>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="file_number">File Number</label>
                <input type="text" class="form-custom__input" id="file_number" name="file_number"
                    value="{{ $workOrder->file_number }}" placeholder="Enter File Number" readonly>
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="branch">Branch</label>
                <input type="text" class="form-custom__input" id="branch" name="branch"
                    value="{{ $workOrder->branch }}" placeholder="Enter the branch" readonly>
            </div>

            <div class="form-custom__group">
                <label class="form-custom__label" for="terminal">Terminal</label>
                <input type="text" class="form-custom__input" id="terminal" name="terminal"
                    value="{{ $workOrder->terminal }}" placeholder="Enter the terminal" readonly>
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="product">Product</label>
                <input type="text" class="form-custom__input" id="product" name="product"
                    value="{{ $workOrder->product }}" placeholder="Enter the product" readonly>
            </div>
            <div class="form-custom__group">
                <label class="form-custom__label" for="vessel">Vessel</label>
                <input type="text" class="form-custom__input" id="vessel" name="vessel"
                    value="{{ $workOrder->vessel }}" placeholder="Enter the vessel" readonly>
            </div>
        </div>
        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="file_status">File Status</label>
                <input type="text" class="form-custom__input" id="file_status" name="file_status"
                    value="{{ $workOrder->file_status }}" placeholder="Enter the file status" readonly>
            </div>

            <div class="form-custom__group">
                <label class="form-custom__label" for="eta">ETA</label>
                <input type="date" class="form-custom__input" id="eta" name="eta"
                    value="{{ \Carbon\Carbon::parse($workOrder->eta)->format('Y-m-d') }}" readonly>
            </div>
        </div>
        <div style="margin-left: 1rem; margin-bottom: 2rem">
            <a href="{{ route('work_orders.edit', $workOrder->id) }}"
                class="form-custom__btn form-custom__btn-success">Edit</a>
            <a href="{{ route('work_orders.index') }}" class="form-custom__btn form-custom__btn-danger">Cancel</a>
        </div>
    </div>
@endsection
