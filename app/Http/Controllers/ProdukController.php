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

    public function index_edit(int $id) {
        $produk = Produk::find($id);
        if(!$produk) return abort(404, 'Product not found.');
        return view('auth.produk-edit', [
            'produk' => $produk
        ]);
    }

    public function add(Request $req) {
        $req->validate([
            'name' => ['required', 'string'],
            'route' => ['required', 'string', 'regex:/^\S*$/']
        ]);
        Produk::create($req->all());
        return redirect(route('produks'));
    }

    public function update(Request $req) {
        $req->validate([
            'id' => ['required', 'int'],
            'name' => ['required', 'string'],
            'route' => ['required', 'string', 'regex:/^\S*$/']
        ]);

        $produk = Produk::find($req->id);
        if(!$produk) return abort(404, 'Product not found.');

        $produk->update($req->only(['name', 'route']));

        return redirect(route('produks'));
    }

    public function delete(Request $req, int $id) {
        $produk = Produk::find($id);
        if(!$produk) return abort(404, 'Product not found.');
        $produk->delete();
        return redirect()->back();
    }
}
