@extends('layouts.app')
@extends('layouts.backend')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">Edit Pesanan</div>
                <div class="float-end">
                    <a href="{{ route('pesanan.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
            <form action="{{ route('pesanan.update', $pesanan->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <!-- Field Travel Package -->
                    <div class="mb-3 row">
                        <label for="travel_package" class="col-md-4 col-form-label text-md-end text-start">Travel Package</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('travel_package') is-invalid @enderror" id="travel_package" name="travel_package" value="{{ $pesanan->travel_package }}">
                            @if ($errors->has('travel_package'))
                                <span class="text-danger">{{ $errors->first('travel_package') }}</span>
                            @endif
                        </div>
                    </div>
                    <!-- Field Name -->
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $pesanan->name }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <!-- Field Price -->
                    <div class="mb-3 row">
                        <label for="price" class="col-md-4 col-form-label text-md-end text-start">Price</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $pesanan->price }}">
                            @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                    </div>
                    <!-- Field Status -->
                    <div class="mb-3 row">
                        <label for="status" class="col-md-4 col-form-label text-md-end text-start">Status</label>
                        <div class="col-md-6">
                            <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                                <option value="pending" {{ $pesanan->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="confirmed" {{ $pesanan->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                <option value="cancelled" {{ $pesanan->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                            @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            @endif
                        </div>
                    </div>
                    <!-- Button Update -->
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update Pesanan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
