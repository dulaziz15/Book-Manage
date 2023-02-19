<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Rak;

class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Rak::all();
        return view('page.rak', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page.crud_rak.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rak = Rak::create([
            'kode_rak' => $request->kode,
            'golongan' => $request->golongan
        ]);
        // dd($rak);
        return redirect('rak');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datas = Rak::find($id);
        return view('page.crud_rak.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datas = Rak::find($id);

        $datas->update([
            'kode_rak' => $request->kode,
            'golongan' => $request->golongan
        ]);

        return redirect(route('rak.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Rak::find($id);
        $data->delete();

        return redirect(route('rak.index'));
    }
}
