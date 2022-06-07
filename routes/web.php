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

Route::get('/', function () {
    return view('main');
});

Route::get('/computers', function () {
	$computers = DB::table('computers')->get();
    return view ('computers', compact('computers'));
});

Route::get('/processors', function () {
	$processors = DB::table('processor')->get();
    return view ('processors', compact('processors'));
});

Route::get('/motherboards', function () {
	$motherboards = DB::table('motherboard')->get();
    return view ('motherboards', compact('motherboards'));
});

Route::get('/memories', function () {
	$memories = DB::table('memory')->get();
    return view ('memories', compact('memories'));
});

Route::get('/videocards', function () {
	$videocards = DB::table('videocard')->get();
    return view ('videocards', compact('videocards'));
});

Route::get('/data_storages', function () {
	$data_storages = DB::table('data_storage')->get();
    return view ('data_storages', compact('data_storages'));
});

Route::get('/monitors', function () {
	$monitors = DB::table('monitor')->get();
    return view ('monitors', compact('monitors'));
});

Route::get('/bioses', function () {
	$bioses = DB::table('bios')->get();
    return view ('bioses', compact('bioses'));
});