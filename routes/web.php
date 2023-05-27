<?php

use App\Models\Rouanet;
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

    return view('welcome');
});


Route::get('/rouanets/view', function () {
    $data = Rouanet::all();

    return view('rouanets', [
        'data' => $data,
    ]);
});

Route::get('/rouanets', function () {
    return Rouanet::all();
});

Route::get('/rouanet/{id}', function ($id) {
    return Rouanet::find($id);
});


Route::get('/rouanet/view/{id}', function ($id) {
    $data = Rouanet::find($id);

        return view('rouanet', [
            'id' => $id,
            'data' => $data
        ]);
    });
