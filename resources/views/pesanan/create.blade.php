@extends('layouts.app')
@extends('layouts.backend')

@section('content')
<div class="card">
    <div class="card-header">Add New Pesanan</div>
    <div class="card-body">
        <form action="{{ route('pesanan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="customer_name" class="form-label">Customer Name</label>
                <input type="text" class="form-control" id="customer_name" name="customer_name" value="{{ old('customer_name') }}">
            </div>
            <div class="mb-3">
                <label for="travel_package" class="form-label">Travel Package</label>
                <select name="travel_package_id" id="travel_package" class="form-control">
                    @foreach($travelPackages as $package)
                        <option value="{{ $package->id }}">{{ $package->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="total_price" class="form-label">Total Price</label>
                <input type="number" class="form-control" id="total_price" name="total_price" value="{{ old('total_price') }}">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="Pending">Pending</option>
                    <option value="Confirmed">Confirmed</option>
                    <option value="Cancelled">Cancelled</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Pesanan</button>
        </form>
    </div>
</div>
@endsection
