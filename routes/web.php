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

Route::get('/project/{id}', [RouanetController::class, 'getProjectById']);

Route::get('/project/view/{id}', [RouanetController::class, 'getProjectByIdView']);

Route::get('/project/create', [RouanetController::class, 'create']);
