<?php

use App\Http\Controllers\Sekper\ApprovalSuratKeluarController;
use App\Http\Controllers\Sekper\BackdateSuratKeluarController;
use App\Http\Controllers\Sekper\DokumenKantorCabangController;
use App\Http\Controllers\Sekper\DokumenKantorPusatController;
use App\Http\Controllers\Sekper\DokumenPerusahaanController;
use App\Http\Controllers\Sekper\SuratMasukController;
use App\Http\Controllers\Sekper\SlidePresentasiController;
use App\Http\Controllers\Sekper\DokumenPerusahaanLihatController;
use App\Http\Controllers\Sekper\PiagamSertifikatController;
use App\Http\Controllers\Sekper\PeraturanPerusahaanController;
use App\Http\Controllers\Sekper\NotulensiRapatController;
use App\Http\Controllers\Sekper\PksSekperController;
use App\Http\Controllers\Sekper\RekananController;
use App\Http\Controllers\Sekper\SuratKeluarController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/sekper', 'as' => 'sekper.'], function () {

  // Route::group(['prefix' => '/dokumen-perusahaan', 'as' => 'dokumenperusahaan.'], function () {
  //   Route::resource('kantorpusat', DokumenKantorPusatController::class);
  //   Route::post('kantorpusat/update/{id}', [DokumenKantorPusatController::class, 'updatedata'])->name('kantorpusat.update');
  //   Route::resource('kantorcabang', DokumenKantorCabangController::class);
  //   Route::post('kantorcabang/update/{id}', [DokumenKantorCabangController::class, 'updatedata'])->name('kantorcabang.update');
  //   Route::resource('lihat', DokumenPerusahaanLihatController::class);
  // });

  // Route::resource('piagamsertifikat', PiagamSertifikatController::class);
  // Route::resource('peraturanperusahaan', PeraturanPerusahaanController::class);
  // Route::resource('slidepresentasi', SlidePresentasiController::class);
  // Route::post('slidepresentasi/update/{id}', [SlidePresentasiController::class, 'updatedata'])->name('slidepresentasi.update');
  // Route::resource('notulensi', NotulensiRapatController::class);
  // Route::resource('rekanan', RekananController::class);
  // Route::resource('pks', PksSekperController::class);

  Route::resource('suratmasuk', SuratMasukController::class);
  Route::resource('suratkeluar', SuratKeluarController::class);
  Route::resource('slide_presentasi', SlidePresentasiController::class);
  Route::resource('dok_perusahaan', DokumenPerusahaanController::class);

  Route::group(['prefix' => '/suratkeluar', 'as' => 'suratkeluar.'], function () {

    Route::post('ttd_surat', [SuratKeluarController::class, 'store_ttd'])->name('ttd_surat');
    Route::post('backdate_surat', [SuratKeluarController::class, 'store_bd'])->name('backdate_surat');
    // Route::post('uploadsurat/update/{id}', [UploadSuratKeluarController::class, 'updatedata'])->name('uploadsurat.update');
    // Route::resource('approval', ApprovalSuratKeluarController::class);
    // Route::resource('tandatangan', TtdSuratKeluarController::class);
    // Route::resource('backdate', BackdateSuratKeluarController::class);

  });

});

