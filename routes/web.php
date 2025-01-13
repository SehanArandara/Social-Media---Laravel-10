<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [DashboardController::class,'index'])->name('dashboard');
Route::get('/terms', function(){
    return view('terms');
});

Route::post('/idea', [IdeaController::class,'store'])->name('idea-created');
Route::delete('/idea/{idea}', [IdeaController::class,'destroy'])->name('idea-destroy');
Route::get('/idea/{idea}', [IdeaController::class,'show'])->name('idea-show');
Route::get('/idea/{idea}/edit', [IdeaController::class,'show'])->name('idea-edit');
Route::put('/idea/{idea}/update', [IdeaController::class,'show'])->name('idea-update');


