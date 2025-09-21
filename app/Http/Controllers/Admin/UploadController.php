<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
      public function store(Request $request)
    {
        $request->validate([
            'file' => ['required','image','mimes:jpeg,jpg,png,gif,webp','max:2048'], // 2MB
        ]);

        $path = $request->file('file')->store('editor', 'public');

        return response()->json([
            'location' => Storage::url($path), // يعطي /storage/editor/...
        ]);
    }
}
