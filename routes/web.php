<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\foruser;
// use App\Http\Controllers\kotaMalangController;
// use App\Http\Controllers\demoController;
// use App\Http\Controllers\kelurahanController;


Auth::routes(['/register' => true, 'reset' => false, 'verify' => false]);


Route::prefix('/')
    ->group(function(){
        Route::get('/',  function () {
            return view('userpage.index');
        })->name('HOME1');

        Route::resources([
                'demo' => demoController::class,
        ]);
    });

Route::prefix('/masuk')
    ->middleware(['auth'])
    ->group(function(){
        Route::get('/',  function () {
            return view('dashboard.index');
        })->name('HOME');

        Route::resources([
            'kota_malang'          => kotaMalangController::class,
            'kelurahan'         =>kelurahanController::class,
        ]);

       
    });


