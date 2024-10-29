<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() {
        $produks = Produk::all();
        return view('produks', compact(['produks']));
    }

    public function index_add() {
        return view('auth.produk-add');
    }

    public function add(Request $req) {
        $req->validate([
            'name' => ['required', 'string'],
            'route' => ['required', 'string']
        ]);
        return redirect()->back();
    }
}
