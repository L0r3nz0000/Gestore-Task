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

Route::get('/',[controller_1::class,'index']);
Route::post('/add_task',[controller_1::class,'addTask']);
Route::get('/get_tasks',[controller_1::class,'getTasks']);
Route::post('/edit_task_name',[controller_1::class,'setName']);
Route::post('/edit_task_description',[controller_1::class,'setDescription']);
Route::post('/delete_task',[controller_1::class,'deleteTask']);