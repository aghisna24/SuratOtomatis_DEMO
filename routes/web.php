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


Route::get('sukses', 'SuratPengunduranDiri\SuksesController@sukses')->name('sukses');
Route::get('pesan', 'SuratPengunduranDiri\CreateController@index')->name('pesan');
Route::post('index/submit', 'SuratPengunduranDiri\CreateController@submit')->name('index.submit');
Route::get('print_pdf', 'SuratPengunduranDiri\CreateController@cetak_pdf');

Route::get('success', 'SuratMendudukiJabatan\SuccessController@success')->name('success');
Route::get('message', 'SuratMendudukiJabatan\CreateController@index1')->name('message');
Route::post('index1/submit1', 'SuratMendudukiJabatan\CreateController@submit1')->name('index1.submit1');
