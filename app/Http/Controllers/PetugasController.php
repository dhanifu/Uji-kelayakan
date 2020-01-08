<?php

namespace App\Http\Controllers;

use App\Petugas;
use App\Level;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels = Level::all();
        $petugas = Petugas::orderBy('nama_petugas', 'ASC')->paginate(10);
        return view('petugas.index', compact('petugas', 'levels'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'username'=>'required',
            'password'=>'required',
            'nama_petugas'=>'required',
            'id_level'=>'required'
        ]);

        Petugas::create($request->all());

        return redirect('/petugas')->with('status', 'Petugas created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function show(Petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function edit(Petugas $petugas)
    {
        $levels = Level::all();
        return view('petugas.edit', compact('petugas', 'levels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petugas $petugas)
    {
        $request->validate([
            'username'=>'required',
            'nama_petugas'=>'required',
            'id_level'=>'required'
        ]);

        $petugas->update($request->all());

        return redirect('/petugas')->with('status', 'Petugas updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petugas $petugas)
    {
        $petugas->delete();
        return redirect('/petugas')->with('status', 'Petugas deleted successfully');
    }
}
