@extends('layouts.app')
@extends('layouts.backend')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Informasi Paket Perjalanan
                </div>
                <div class="float-end">
                    <a href="{{ route('travel_packages.index') }}" class="btn btn-primary btn-sm">&larr; Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <label for="title" class="col-md-4 col-form-label text-md-end text-start"><strong>Judul:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $travelPackage->title }}
                    </div>
                </div>
                <div class="row">
                    <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Deskripsi:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $travelPackage->description }}
                    </div>
                </div>
                <!-- Tambahan informasi lainnya -->
            </div>
        </div>
    </div>
</div>
@endsection
