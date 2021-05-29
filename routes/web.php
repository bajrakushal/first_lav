<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Room;

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
Auth::routes();
Route::get('/', function () {
    $rooms = Room::all();
    return view('welcome',compact('rooms'));
});


Route::get('/admin/dashboard',[App\Http\Controllers\RoomController::class, 'naya'])->name('index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/admin/rooms', [App\Http\Controllers\RoomController::class, 'index'])->name('index');
Route::post('/admin/rooms', [App\Http\Controllers\RoomController::class, 'store'])->name('store');
Route::get('/admin/room/create', [App\Http\Controllers\RoomController::class, 'create'])->name('create');
Route::get('/admin/room/edit/{id}', [App\Http\Controllers\RoomController::class, 'edit'])->name('edit');
Route::put('/admin/rooms/update/{id}', [App\Http\Controllers\RoomController::class, 'update'])->name('update');
Route::get('/admin/rooms/delete/{id}', [App\Http\Controllers\RoomController::class, 'destroy'])->name('destroy');




