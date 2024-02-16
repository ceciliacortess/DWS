<?php

use Illuminate\Support\Facades\Route;
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

use App\Http\Controllers\PostController;

Route::resource('posts', PostController::class)->only(['index', 'show', 'create', 'edit']);

//Route::get('/posts/editar', 'PostController@editGeneric')->name('posts.editGeneric');


Route::get('/libros/nuevoPrueba', [PostController::class, 'nuevoPrueba']);
Route::get('/libros/editarPrueba/{id}', [PostController::class, 'editarPrueba']);

// Asegúrate de que las rutas existentes no tengan restricciones, o edita según sea necesario.


Route::get('/', function () {
    return view('posts.inicio');
})->name('inicio');

Route::get('/posts', function () {
    return view('posts.index');
})->name('posts.index');

Route::get('/posts/{id}', function ($id) {
    return view('posts.show')-> with(['id' => $id]);
})->where('id', '[0-9]+')->name('posts.show');

/* Route::get('/posts/edit/{id}', function ($id) {
    return view('posts.edit')-> with(['id' => $id]);
})->where('id', '[0-9]+')->name('posts.edit');

 */
