<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('dil')->group(function () {
      Route::get('/', 'App@index')->name('anasayfa');
      Route::get('uyeler', 'App@uyeler')->name('uyeler');
      Route::get('yeni-uye', 'App@yeniUyeGet')->name('yeniUye');
      Route::get('uye-duzenle/{id?}', 'App@editUser')->name('uyeDuzenle');
      Route::post('uye-duzenlendi', 'App@editUserPost')->name('uyeDuzenlePost');
      Route::post('uye-ekle', 'App@yeniUyePost')->name('yeniUyePost');
      Route::get('uye/{id?}', 'App@uye')->name('uye');


      Route::get('kayit', 'Validation@get')->name('kayit');


      Route::post('kayit-ol', 'Validation@post')->middleware('kotu')->name('kayit.post');
});
