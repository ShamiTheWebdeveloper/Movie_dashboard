<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get("/dashboard",[UserController::class,"dashboard"])->name('dashboard');
    Route::redirect("/","dashboard");
    Route::get("Useruploads",[UserController::class,"Useruploads"])->name("Useruploads");
    Route::get("uploadmovie",[UserController::class,"uploadmovie"])->name("uploadmovie");
    Route::post("submitmovie",[UserController::class,"submitmovie"])->name("submitmovie");
    Route::get("delete/{id}",[UserController::class,"delete"])->name("delete");
    Route::get("detail/{id}",[UserController::class,"detail"])->name("detail");
    Route::post("recommend",[UserController::class,"recommend"])->name("recommend");
    Route::get("unrecommend/{id}",[UserController::class,"unrecommend"])->name("unrecommend");
    Route::get("userrecommends",[UserController::class,"user_recommends"])->name("user.recommends");
    Route::get("userdetail/{id}",[UserController::class,"userdetail"])->name("user.detail");
    Route::get("select",[UserController::class,"select"])->name("select");
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
