<?php

// use App\Http\Controllers\UserController;
use App\Http\Controllers\Utility\MenuController;
use App\Http\Controllers\legal\PksController;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Route;
// use Facade\FlareClient\Http\Response;
// use Illuminate\Support\Facades\DB;


Route::group(['prefix' => '/legal', 'as' => 'legal.'], function () {

    // Route::resource('/menu', MenuController::class);
    Route::get('uu_asuransi', [ApiController::class, 'uu_asuransi'])->name('uu_asuransi');
    Route::get('get_uu_asuransi', [ApiController::class, 'get_uu']);
    // Route::get('viewPdf', [ApiController::class, 'viewPdf']);

    Route::group(['prefix' => '/pks', 'as' => 'pks.'], function() {

        Route::get('polis', [ApiController::class, 'polis'])->name('polis');
        Route::get('mssp_kode', [ApiController::class, 'mssp_kode'])->name('mssp_kode');
        Route::get('draft_pks', [ApiController::class, 'draftPks'])->name('draft_pks');
        
        Route::prefix('/lihat')->name('lihat.')->controller(PksController::class)->group(function() {
            Route::get('/pks/{pk}', 'viewPks');
        });
    });

});


