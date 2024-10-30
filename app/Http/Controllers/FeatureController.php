<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Produk;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index() {
        $features = Feature::with(['produk'])->get();
        return view('features', compact(['features']));
    }

    public function index_add() {
        return view('auth.feature-add', ['produks' => Produk::all()]);
    }

    public function index_edit(int $id) {
        $feature = Feature::with(['produk'])->find($id);
        if(!$feature) return abort(404, 'Feature not found.');
        return view('auth.feature-edit', [
            'feature' => $feature,
            'produks' => Produk::all()
        ]);
    }

    public function add(Request $req) {
        $req->validate([
            'route' => ['required', 'string', 'regex:/^\S*$/'],
            'produk_id' => ['required', 'int', 'exists:produks,id'],
            'name' => ['required', 'string'],
            'content' => ['required', 'string'],
        ]);        
        Feature::create($req->all());
        return redirect(route('features'));
    }

    public function update(Request $req) {
        $req->validate([
            'id' => ['required', 'int'],
            'route' => ['required', 'string', 'regex:/^\S*$/'],
            'produk_id' => ['required', 'int', 'exists:produks,id'],
            'name' => ['required', 'string'],
            'content' => ['required', 'string'],
        ]);

        $features = Feature::find($req->id);
        if(!$features) return abort(404, 'Feature not found.');

        $features->update($req->only(['name', 'route', 'produk_id', 'content']));
        
        return redirect(route('features'));
    }

    public function delete(Request $req, int $id) {
        $feature = Feature::find($id);
        if(!$feature) return abort(404, 'Feature not found.');
        $feature->delete();
        return redirect()->back();
    }
}
