<?php

namespace App\Http\Controllers;

use App\Inventaris;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventaris = Inventaris::orderBy('nama', 'ASC')->paginate(10);
        return view('inventaris.index', compact('inventaris'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventaris.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required', 'kondisi'=>'required',
            'keterangan'=>'required', 'jumlah'=>'required|numeric',
            'id_jenis'=>'required', 'tanggal_register'=>'required',
            'id_ruang'=>'required', 'kode_inventaris'=>'required',
            'id_petugas'=>'required'
        ]);
        Inventaris::create($request->all());
        return redirect('/inventaris')->with('status', 'Inventaris created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function show(Inventaris $inventaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventaris $inventaris)
    {
        return view('inventaris.edit', compact('inventaris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventaris $inventaris)
    {
        $request->validate([
            'nama'=>'required', 'kondisi'=>'required',
            'keterangan'=>'required', 'jumlah'=>'required|numeric',
            'id_jenis'=>'required', 'id_ruang'=>'required'
        ]);
        $inventaris->update($request->all());
        return redirect('/inventaris')->with('status', 'Inventaris updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventaris $inventaris)
    {
        $inventaris->delete();
        return redirect('/inventaris')->with('status', 'Inventaris deleted successfully');
    }
}
