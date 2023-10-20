@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/form.css') }}">
    <div class="form-custom__container">
        <h3 class="form-custom__title">Viewing Work Order</h3>

        <div class="form-custom__section">
            <div class="form-custom__group">
                <label class="form-custom__label" for="branch">Branch</label>
                <input type="text" class="form-custom__input" id="branch" name="branch" value="{{ $workOrder->branch }}"
                    placeholder="Enter the branch" required>
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
                <input type="date" class="form-custom__input" id="eta" name="eta" value="{{ $workOrder->eta }}"
                    required>
            </div>
        </div>
        <div style="margin-left: 1rem; margin-bottom: 2rem">
            <a href="{{ route('work_orders.edit', $workOrder->id) }}"
                class="form-custom__btn form-custom__btn-success">Edit</a>
            <a href="{{ route('work_orders.index') }}" class="form-custom__btn form-custom__btn-danger">Cancel</a>
        </div>
    </div>
@endsection
