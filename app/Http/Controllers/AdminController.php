<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\JenisProduk;
use App\Models\Testimoni;
use App\Models\Galeri;
use App\Models\Pesanan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    public function index()
    {
        $ct = Testimoni::count();
        $cp = Produk::count();
        $co = Pesanan::count();
        $cj = JenisProduk::count();
        $pesan = Pesanan::where('status', 'proses')->get();
        $testiacc = Testimoni::where('status', 'acc')->count();
        $produkav = Produk::where('status_pesan', 'available')->count();
        $pesanan = Pesanan::where('status', 'proses')->count();

        $monthlyProducts = DB::table('pesanans')
            ->selectRaw('MONTH(tanggal_pengambilan) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month');

        // Isi data bulan 1-12
        $chartData = [];
        for ($i = 1; $i <= 12; $i++) {
            $chartData[] = $monthlyProducts[$i] ?? 0;
        }
        return view('templateAdmin.adminWulan', compact('pesan', 'cp', 'cj', 'ct', 'co', 'testiacc', 'produkav', 'pesanan', 'chartData'));
    }

    public function indexProfile()
    {
        return view('templateAdmin.profile');
    }

    public function indexInformation($id)
    {
        $informasi = Informasi::find($id)->get(); // cari data berdasarkan ID
        return view('templateAdmin.General.edit_informasi', compact('informasi'));
    }

    public function updateInformation(Request $request, $id)
    {
        $informasi = Informasi::find($id);

        $informasi->nama_toko = $request->nama_toko;
        $informasi->email = $request->email;
        $informasi->nomer_telepon = $request->nomer_telepon;
        $informasi->jam_buka = $request->jam_buka;
        $informasi->alamat = $request->alamat;
        $informasi->deskripsi = $request->deskripsi;
        $informasi->deskripsi_toko = $request->deskripsi_toko;
        $informasi->save();

        return redirect()->back()->with('success', 'Data berhasil diperbarui.');
    }

    public function indexGallery()
    {
        $jenis = JenisProduk::all();
        $galeri = Galeri::with('jenisProduk')->get();
        return view('templateAdmin.General.Gallery', compact('galeri', 'jenis'));
    }

    public function indexGalleryAdd()
    {
        return view('templateAdmin.General.tambah_galeri');
    }

    public function destroyGaleri($id)
    {
        $galeri = Galeri::where('id', $id)->firstOrFail();
        $galeri->delete(); // Ini hapus datanya

        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }

    public function storegaleri(Request $request)
    {
        $request->validate([
            'id_jenis' => 'required|integer|max:255',
            'gambarUp' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $file = $request->file('gambarUp');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('gambar/galeripoto'), $filename);

        Galeri::create([
            'id_jenis' => $request->id_jenis,
            'gambar' => $filename, // hanya nama file yang disimpan
        ]);

        return redirect()->back()->with('success', 'Gambar berhasil diunggah!');
    }

    // 
    public function indexTestimonial()
    {
        $testiAdmin = Testimoni::all();
        return view('templateAdmin.General.Testimonial', compact('testiAdmin'));
    }

    public function updateStatus($id, $status)
    {
        $testimoni = Testimoni::find($id);

        if ($testimoni) {
            $testimoni->status = $status;
            $testimoni->save();
        }

        return redirect()->back()->with('success', 'Status berhasil diupdate!');
    }

    public function destroyTesti($id)
    {
        $testi = Testimoni::where('id', $id)->firstOrFail();;
        $testi->delete(); // Ini hapus datanya

        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }


    // Component
    public function indexCategory()
    {
        $jenis = JenisProduk::all(); // cari data berdasarkan ID
        return view('templateAdmin.Component.Category', compact('jenis'));
    }

    public function viewCategoryAdd()
    {
        return view('templateAdmin.Component.Category_Tambah');
    }

    public function indexCategoryAdd(Request $request)
    {
        JenisProduk::create([
            'nama_jenisproduk' => $request->nama_jenisproduk,
        ]);
        return redirect()->route('adminCategory');
    }

    public function destroyCategory($id)
    {
        $jenis = JenisProduk::where('id', $id)->firstOrFail();;
        $jenis->delete(); // Ini hapus datanya

        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }

    // Produk
    public function indexProduct()
    {
        $produk = Produk::with('jenis')->get();
        return view('templateAdmin.Component.Produk', compact('produk'));
    }

    public function indexProductEdit()
    {
        $jenis = JenisProduk::all();
        return view('templateAdmin.Component.Produk_Edit', compact('jenis'));
    }

    public function indexProductTambah()
    {
        $jenis = JenisProduk::all();
        return view('templateAdmin.Component.Produk_Tambah', compact('jenis'));
    }

    public function storeproduk(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $file = $request->file('gambar');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('gambar/produkpoto'), $filename);

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'status_pesan' => $request->status_pesan,
            'id_jenis' => $request->id_jenis,
            'gambar' => $filename, // hanya nama file yang disimpan
        ]);

        return redirect('/adminProduct');
    }

    public function destroyProduk($id)
    {
        $jenis = Produk::where('id', $id)->firstOrFail();;
        $jenis->delete(); // Ini hapus datanya

        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }

    public function updateStatusProduk($id, $status)
    {
        $produk = Produk::find($id);

        if ($produk) {
            $produk->status_pesan = $status;
            $produk->save();
        }

        return redirect()->back()->with('success', 'Status berhasil diupdate!');
    }

    public function editProdukData($id)
    {
        $jenis = JenisProduk::all();
        $produk = Produk::where('id',$id)->get();
        return view('templateAdmin.Component.Produk_Edit', compact('produk','jenis'));
    }

    public function updateProduk(Request $request, $id)
    {
        $produk = Produk::find($id);

        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->id_jenis = $request->id_jenis;
        $produk->save();

        return redirect('adminProduct');
    }

    // Orders
    public function indexOrders()
    {
        $pesanan = Pesanan::where('status', 'proses')->get();
        return view('templateAdmin.Order.Orders', compact('pesanan'));
    }

    public function indexHistory()
    {
        $history = Pesanan::where('status', 'selesai')->get();
        return view('templateAdmin.Order.History', compact('history'));
    }

    public function destroyPesanan($id)
    {
        $pesanan = Pesanan::where('id', $id)->firstOrFail();;
        $pesanan->delete(); // Ini hapus datanya

        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }

    public function updateStatusPesanan($id, $status)
    {
        $pesanan = Pesanan::find($id);

        if ($pesanan) {
            $pesanan->status = $status;
            $pesanan->save();
        }

        return redirect()->back()->with('success', 'Status berhasil diupdate!');
    }

    public function indexOrderAdd()
    {
        $order = Pesanan::all(); 
        $jenis = JenisProduk::all();
        return view('templateAdmin.Order.OrderAdd', compact('order','jenis'));
    }

    public function storeorder(Request $request)
    {
        Pesanan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'produk_pesanan' => $request->produk_pesanan,
            'total_harga' => $request->total_harga,
            'tanggal_pesanan' => $request->tanggal_pesanan,
            'status' => "proses",
            'alamat' => $request->alamat,
            'metode_pembayaran' => $request->metode_pembayaran,
            'tanggal_pengambilan' => $request->tanggal_pengambilan,
        ]);

        return redirect('/adminOrders');
    }
    
    public function editOrderData($id)
    {
        $ordere = Pesanan::where('id',$id)->get();
        // $ordere = Pesanan::find($id)->get(); // cari data berdasarkan ID
        return view('templateAdmin.Order.adminOrderEdit', compact('ordere'));
    }

    public function updateOrder(Request $request, $id)
    {
        $order = Pesanan::find($id);

        $order->nama_pelanggan = $request->nama_pelanggan;
        $order->produk_pesanan = $request->produk_pesanan;
        $order->total_harga = $request->total_harga;
        $order->tanggal_pesanan = $request->tanggal_pesanan;
        $order->alamat = $request->alamat;
        $order->metode_pembayaran = $request->metode_pembayaran;
        $order->tanggal_pengambilan = $request->tanggal_pengambilan;
        $order->save();

        return redirect('adminOrders');
    }

    public function exportPdf()
    {
        $pesanan = Pesanan::where('status', '!=', 'selesai')->get();

        $pdf = Pdf::loadView('templateAdmin.Order.laporan', compact('pesanan'))
            ->setPaper('A4', 'landscape');
        return $pdf->download('laporan-pesanan.pdf');
    }

    public function exportPdfSelesai()
    {
        $pesanan = Pesanan::where('status','selesai')->get();

        $pdf = Pdf::loadView('templateAdmin.Order.laporanhistory', compact('pesanan'))
            ->setPaper('A4', 'landscape');
        return $pdf->download('laporan-pesananSelesai.pdf');
    }
}
