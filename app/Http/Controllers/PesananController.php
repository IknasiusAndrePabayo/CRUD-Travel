<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StorePesananRequest;
use App\Http\Requests\UpdatePesananRequest;
use App\Models\TravelPackage;

class PesananController extends Controller
{
    /**
     * Instantiate a new PesananController instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:create-pesanan|edit-pesanan|delete-pesanan', ['only' => ['index', 'show']]);
        $this->middleware('permission:create-pesanan', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-pesanan', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-pesanan', ['only' => ['destroy']]);
    }

public function index()
{
    $pesanan = Pesanan::paginate(10);
    return view('pesanan.index', compact('pesanan'));
}



    /**
     * Show the form for creating a new resource.
     */
    /**
 * Show the form for creating a new resource.
 */
public function create(): View
{
    $travelPackages = TravelPackage::all();
    return view('pesanan.create', compact('travelPackages'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePesananRequest $request): RedirectResponse
    {
        Pesanan::create($request->all());
        return redirect()->route('pesanan.index')
            ->withSuccess('New pesanan added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesanan $pesanan): View
    {
        return view('pesanan.show', [
            'pesanan' => $pesanan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesanan $pesanan): View
    {
        return view('pesanan.edit', [
            'pesanan' => $pesanan
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePesananRequest $request, Pesanan $pesanan): RedirectResponse
    {
        $pesanan->update($request->all());
        return redirect()->route('pesanan.index')
            ->withSuccess('Pesanan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesanan $pesanan): RedirectResponse
    {
        $pesanan->delete();
        return redirect()->route('pesanan.index')
            ->withSuccess('Pesanan deleted successfully.');
    }
}
