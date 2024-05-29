@extends('layouts.app')
@extends('layouts.backend')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Pesanan Information
                </div>
                <div class="float-end">
                    <a href="{{ route('pesanan.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="customer_name" class="col-md-4 col-form-label text-md-end text-start"><strong>Customer Name:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $pesanan->customer_name }}
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="travel_package" class="col-md-4 col-form-label text-md-end text-start"><strong>Travel Package:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $pesanan->travelPackage->title }}
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="total_price" class="col-md-4 col-form-label text-md-end text-start"><strong>Total Price:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $pesanan->total_price }}
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="status" class="col-md-4 col-form-label text-md-end text-start"><strong>Status:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $pesanan->status }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
