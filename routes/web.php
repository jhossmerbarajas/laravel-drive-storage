<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Directories\DirectoriesController;


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
	$files = Storage::disk("system")->files();
    return view('index', compact('directories', 'files'));
})->name("index");



//Barras diagonales codificadas con el método where
Route::get("/{directories?}", [DirectoriesController::class, 'show'])
		->name('directory.show')
		->where('directories', '.*'); 

Route::post("/{directories?}", [DirectoriesController::class, 'store'])
		->name('directory.store')
		->where('directories', '.*');
