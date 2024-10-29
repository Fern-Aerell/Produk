<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $produks = Produk::with(['features'])->get();
        $content = '';
        return view('app', compact(['produks', 'content']));
    }

    public function index_produk_feature(string $produk, string $feature)
    {
        $produks = Produk::with(['features'])->get();

        $content = Produk::where('route', $produk)
            ->with(['features' => function ($query) use ($feature) {
                $query->where('route', $feature);
            }])
            ->first()
            ?->features
            ?->first()
            ?->content;
        if(!$content) {
            return abort(404);
        }

        return view('app', compact(['produks', 'content']));
    }
}
