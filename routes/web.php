<?php

use Illuminate\Support\Facades\Route;

// USER
// Route::get('/', function () {
//     return view('companyprofile.dapurWulan');
// });

Route::get('/', [App\Http\Controllers\CompanyController::class, 'index'])->name('CompanyProfile');

// Testimoni
Route::post('/storetestimoni', [App\Http\Controllers\CompanyController::class, 'store'])->name('store.testimoni');

// LOGIN
Route::get('/logintemplates', function () {
    return view('templateAdmin.signin');
});

// Admin
Route::get('/adminDashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('adminDashboard');
Route::get('/adminProfile', [App\Http\Controllers\AdminController::class, 'indexProfile'])->name('adminProfile');

// Information Sidebar
Route::get('/adminInformation{id}', [App\Http\Controllers\AdminController::class, 'indexInformation'])->name('adminInformation1');
Route::post('/update{id}', [App\Http\Controllers\AdminController::class, 'updateInformation']);

Route::get('/adminGallery', [App\Http\Controllers\AdminController::class, 'indexGallery'])->name('adminGallery');
Route::get('/adminGalleryAdd', [App\Http\Controllers\AdminController::class, 'indexGalleryAdd'])->name('adminGalleryAdd');
Route::delete('/galeri/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroyGaleri']);
Route::post('/storegaleri', [App\Http\Controllers\AdminController::class, 'storegaleri'])->name('store.galeri');

Route::get('/adminTestimonial', [App\Http\Controllers\AdminController::class, 'indexTestimonial'])->name('adminTestimonial');
Route::put('/testimoni/{id}/update-status/{status}', [App\Http\Controllers\AdminController::class, 'updateStatus'])->name('testimoni.updateStatus');
Route::delete('/testi/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroyTesti']);

// Components Sidebar 

// Crud Category
Route::get('/adminViewCategoryAdd', [App\Http\Controllers\AdminController::class, 'viewCategoryAdd'])->name('viewCategoryAdd');
Route::post('/adminCategoryAdd', [App\Http\Controllers\AdminController::class, 'indexCategoryAdd'])->name('adminCategoryAdd');
Route::get('/adminCategory', [App\Http\Controllers\AdminController::class, 'indexCategory'])->name('adminCategory');
Route::delete('/category/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroyCategory']);

// CRUD Product
Route::get('/adminProduct', [App\Http\Controllers\AdminController::class, 'indexProduct'])->name('adminProduct');
Route::get('/adminProductEdit', [App\Http\Controllers\AdminController::class, 'indexProductEdit'])->name('adminProductEdit');
Route::get('/adminProductDataTambah', [App\Http\Controllers\AdminController::class, 'indexProductTambah'])->name('adminProductEdit');
Route::delete('/produk/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroyProduk']);
Route::put('/produk/{id}/update-status/{status}', [App\Http\Controllers\AdminController::class, 'updateStatusProduk'])->name('produk.updateStatus');
Route::post('/storeproduk', [App\Http\Controllers\AdminController::class, 'storeproduk'])->name('store.produk');
Route::get('/produkedit{id}', [App\Http\Controllers\AdminController::class, 'editProdukData'])->name('editProduk');
Route::post('/updateProduk/{id}', [App\Http\Controllers\AdminController::class, 'updateProduk']);

// Orders Sidebar 
Route::get('/adminOrders', [App\Http\Controllers\AdminController::class, 'indexOrders'])->name('adminOrders');
Route::get('/adminHistory', [App\Http\Controllers\AdminController::class, 'indexHistory'])->name('adminHistory');
Route::delete('/pesanan/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroyPesanan']);
Route::put('/pesanan/{id}/update-status/{status}', [App\Http\Controllers\AdminController::class, 'updateStatusPesanan'])->name('pesanan.updateStatus');
Route::get('/laporan-pdf', [App\Http\Controllers\AdminController::class,  'exportPdf'])->name('laporanPdf');
Route::get('/pesanan-selesai-laporan-pdf', [App\Http\Controllers\AdminController::class,  'exportPdfSelesai'])->name('laporanPdfSelesai');
Route::get('/adminOrderAdd', [App\Http\Controllers\AdminController::class, 'indexOrderAdd'])->name('adminOrderAdd');
Route::post('/storeorder', [App\Http\Controllers\AdminController::class, 'storeorder'])->name('store.order');
Route::get('/pesananedit{id}', [App\Http\Controllers\AdminController::class, 'editOrderData'])->name('editOrder');
Route::post('/updateOrder/{id}', [App\Http\Controllers\AdminController::class, 'updateOrder']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
