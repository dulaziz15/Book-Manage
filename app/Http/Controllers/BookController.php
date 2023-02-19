<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Rak;
use App\Models\Buku;
use PDF;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Buku::join('raks', 'bukus.rak', '=', 'raks.id')
        ->select('bukus.*', 'raks.kode_rak')
        ->get();
        return view('page.book', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datas = Rak::all();
        return view('page.crud_buku.tambah', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = Buku::create([
            'nama' => $request->nama,
            'rak' => $request->rak,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun' => $request->tahun
        ]);
        return redirect(route('buku.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bukus = Buku::join('raks', 'bukus.rak', '=', 'raks.id')
        ->where('bukus.id', '=', $id)
        ->select('bukus.*', 'raks.kode_rak')
        ->get();
        // dd($bukus);
        $raks = Rak::all();
        return view('page.crud_buku.edit', compact('bukus', 'raks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bukus = Buku::find($id);
        $bukus->update([
            'nama' => $request->nama,
            'rak' => $request->rak,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun' => $request->tahun
        ]);

        return redirect(route('buku.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Buku::find($id);
        $data->delete();
        return redirect(route('buku.index'));
    }

    
}
