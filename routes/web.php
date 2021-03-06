<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use App\Models\Avatar;
use App\Models\Image;
use App\Models\User;
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

Route::get('/dashboard', function () {
    $users = User::all();
    $avatar = Avatar::all();
    return view('dashboard', compact('users', 'avatar'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}/edit', [UserController::class, 'edit']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::delete('/delete/{id}', [UserController::class, 'destroy']);

Route::resource('avatar', AvatarController::class);
Route::resource('image', ImageController::class);
Route::resource('categorie', CategorieController::class);


Route::get('/gallerie', function () {
    $images = Image::all();
    return view('pages.gallerie', compact('images'));
});

Route::get('/animal', function () {
    $animals = Image::where('categorie_id', '1')->get();
    return view('partials.animal', compact('animals'));
});

Route::get('/technologie', function () {
    $technologies = Image::where('categorie_id', '2')->get();
    return view('partials.technologie', compact('technologies'));
});

Route::get('/voiture', function () {
    $voitures = Image::where('categorie_id', '3')->get();
    return view('partials.voiture', compact('voitures'));
});


Route::get('/download/{id}', [ImageController::class, 'download']);

