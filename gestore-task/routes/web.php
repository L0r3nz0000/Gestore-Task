<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controller_1;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test',[controller_1::class,'index2']);

Route::get('/',[controller_1::class,'index']);
Route::post('/add_task',[controller_1::class,'addTask']);
Route::get('/get_tasks',[controller_1::class,'getTasks']);