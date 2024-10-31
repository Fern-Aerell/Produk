<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        // Validasi file harus berupa image
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // maksimal 2MB
        ]);

        // Ambil file image
        $image = $request->file('image');

        // Simpan image di folder storage dengan nama unik
        $path = $image->store('images', 'public');

        // Buat URL untuk akses file
        $url = asset('storage/' . $path);

        // Return URL
        return response()->json(['url' => $url], 200);
    }
}
