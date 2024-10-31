<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function upload(Request $request)
    {
        // Validasi file video
        $request->validate([
            'video' => 'required|mimes:mp4,mov,avi,wmv|max:1024000', // maksimal 100 MB
        ]);

        // Simpan video di folder 'videos' dalam storage
        $path = $request->file('video')->store('videos', 'public');

        // Return URL lokasi video
        return response()->json([
            'url' => asset('storage/' . $path),
        ]);
    }
}
