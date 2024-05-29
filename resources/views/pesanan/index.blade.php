@extends('layouts.app')
@extends('layouts.backend')

@section('content')

<div class="card">
    <div class="card-header">Manage Pesanan</div>
    <div class="card-body">
        <a href="{{ route('pesanan.create') }}" class="btn btn-success btn-sm mb-3"><i class="bi bi-plus-circle"></i> Add New Pesanan</a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Travel Package</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pesanan as $p)
                <tr>
                    <th scope="row">{{ $p->id }}</th>
                    <td>{{ $p->customer_name }}</td>
                    <td>{{ $p->travelPackage->title }}</td>
                    <td>{{ $p->total_price }}</td>
                    <td>{{ $p->status }}</td>
                    <td>
                        <a href="{{ route('pesanan.show', $p->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>
                        <a href="{{ route('pesanan.edit', $p->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                        <form action="{{ route('pesanan.destroy', $p->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this pesanan?')"><i class="bi bi-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6">No pesanan found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        {{ $pesanan->links() }}
    </div>
</div>
@endsection
