<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Files\FilesController;

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

Route::get('/', function () {
	$directories = Storage::disk("system")->directories();
    return view('index', compact('directories'));
})->name("index");

// Route::resource("/{files?}", FilesController::class)->names("file");

//Barras diagonales codificadas con el método where
Route::get("/{files?}",[FilesController::class, 'show'])->name('file.show')->where('files', '.*'); 
Route::post("/{files?}",[FilesController::class, 'store'])->name('file.store');
