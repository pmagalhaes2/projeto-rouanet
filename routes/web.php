<?php

use App\Http\Controllers\RouanetController;
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


Route::get('/projects/view', [RouanetController::class, 'getProjectsView']);

Route::get('/projects', [RouanetController::class, 'index']);

Route::get('/project/{id}', [RouanetController::class, 'show']);

Route::get('/project/view/{id}', [RouanetController::class, 'getProjectByIdView']);

Route::get('/projects/create', [RouanetController::class, 'create']);

Route::post('/projects', [RouanetController::class, 'store']);

Route::delete('/projects/{id}', [RouanetController::class, 'destroy']);
