<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Rak;
use App\Http\Resources\BookResource;

class ApiController extends Controller
{
    public function index(){
        $buku = Buku::join('raks', 'bukus.rak', '=', 'raks.id')
        ->select('bukus.*', 'raks.kode_rak')
        ->get();
        return new BookResource(true, "List data Buku yang ada", $buku);
    }

    public function rak(){
        $rak = Rak::all();
        return new BookResource(true, "List data Rak yang ada", $rak);
    }

    public function search(Request $request){
            $query = $request->input('cari');
            $books = Buku::join('raks', 'bukus.rak', '=', 'raks.id')
                    ->select('bukus.*', 'raks.kode_rak')
                    ->where('nama', 'like', "%$query%")
                    ->orWhere('penerbit', 'like', "%$query%")
                    ->orWhere('penulis', 'like', "%$query%")
                    ->orWhere('tahun', 'like', "$query")
                    ->orWhere('kode_rak', 'like', "%$query%")
                    ->get();
            // dd($books)
            if(!$books){
                abort(code:404, message:'Query Not Found');
            }

                return response()->json([
                    'data' => $books
                ]);
    }

    public function cari(Request $request){
        return redirect('api/buku/search?cari='.$request->cari);
    }
}
