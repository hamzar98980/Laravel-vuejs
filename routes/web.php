<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('fetch/posts', [PostController::class,'index'])->name('posts.index');
Route::post('contact/store', [PostController::class,'contactStore'])->name('contact.store');
Route::get('fetch/contact', [PostController::class,'fetchContacts'])->name('contact.fetch');

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');