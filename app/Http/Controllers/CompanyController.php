<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;
use App\Models\Testimoni;
use App\Models\JenisProduk;
use App\Models\Produk;
use App\Models\Galeri;
use PHPUnit\Framework\Constraint\Count;

class CompanyController extends Controller
{
    public function index()
    {
        $informasi = Informasi::all();
        $testimoniacc = Testimoni::where('status', 'acc')->get();
        $testimoni = Testimoni::all();
        $jenis = JenisProduk::all();
        $produk = Produk::all();
        $galeri = Galeri::with('jenisProduk')->get();
        $produkname = Produk::with('jenis')->get();
        // Count
        $cproduk = Produk::count();
        $cjenis = JenisProduk::count();
        $ctesti =Testimoni::count();
        return view('companyprofile.dapurWulan', compact('informasi','testimoni','testimoniacc','jenis','produk','produkname','galeri','cproduk','cjenis','ctesti'));
    }

    public function store(Request $request){
        Testimoni::create([
            'nama' => $request->nama,
            'nama_makanan' => $request->nama_makanan,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('CompanyProfile')->with('success', 'Terimakasih partisipasinya, Testimoni berhasil di kirim! Tunggu sampai admin setujui yaaa!');
    }
}
