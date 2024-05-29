<?php
namespace App\Http\Controllers;

use App\Models\TravelPackage;
use App\Http\Requests\StoreTravelPackageRequest;
use App\Http\Requests\UpdateTravelPackageRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class TravelPackagesController extends Controller
{
    /**
     * Instantiate a new TravelPackageController instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:create-travel-package|edit-travel-package|delete-travel-package', ['only' => ['index', 'show']]);
        $this->middleware('permission:create-travel-package', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-travel-package', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-travel-package', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $travel_packages = TravelPackage::all(); // ambil semua paket perjalanan
        return view('travel_packages.index', compact('travel_packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('travel_packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTravelPackageRequest $request): RedirectResponse
    {
        TravelPackage::create($request->all());
        return redirect()->route('travel_packages.index')
            ->withSuccess('Paket perjalanan baru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TravelPackage $travelPackage): View
    {
        return view('travel_packages.show', [
            'travelPackage' => $travelPackage
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TravelPackage $travelPackage): View
    {
        return view('travel_packages.edit', [
            'travelPackage' => $travelPackage
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTravelPackageRequest $request, TravelPackage $travelPackage): RedirectResponse
    {
        $travelPackage->update($request->all());
        return redirect()->route('travel_packages.index')
            ->withSuccess('Paket perjalanan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TravelPackage $travelPackage): RedirectResponse
    {
        $travelPackage->delete();
        return redirect()->route('travel_packages.index')
            ->withSuccess('Paket perjalanan berhasil dihapus.');
    }
}
