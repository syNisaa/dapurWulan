<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function create()
    {
        return view('companyprofile.sendTestimoni');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif',
            'deskripsi' => 'required'
        ]);

        $gambarPath = $request->file('gambar')->store('testimoni', 'public');

        Testimoni::create([
            'gambar' => $gambarPath,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('testimoni.create')->with('success', 'Testimoni berhasil ditambahkan.');
    }
}
