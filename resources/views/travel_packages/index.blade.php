@extends('layouts.app')
@extends('layouts.backend')

@section('content')
<div class="card">
    <div class="card-header">Travel Package List</div>
    <div class="card-body">
        @can('create-travel-package')
        <a href="{{ route('travel_packages.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Travel Package</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($travel_packages as $travel_package)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $travel_package->title }}</td>
                    <td>{{ $travel_package->description }}</td>
                    <td>
                        <form action="{{ route('travel_packages.destroy', $travel_package->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('travel_packages.show', $travel_package->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>
                            @can('edit-travel-package')
                            <a href="{{ route('travel_packages.edit', $travel_package->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                            @endcan
                            @can('delete-travel-package')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this travel package?');"><i class="bi bi-trash"></i> Delete</button>
                            @endcan
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">
                        <span class="text-danger"><strong>No Travel Package Found!</strong></span>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
        $travel_packages = TravelPackage::paginate(10);
    </div>
</div>
@endsection

