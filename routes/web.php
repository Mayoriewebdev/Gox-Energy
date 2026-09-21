<?php


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'home']);
Route::get('AFE', [HomeController::class, 'drill'])->name('home.drilling');
Route::get('wellbore', [HomeController::class, 'well'])->name('home.wellbore');
Route::get('training', [HomeController::class, 'train'])->name('home.training');
Route::get('directional', [HomeController::class, 'direct'])->name('home.directional');
Route::get('bitsupply', [HomeController::class, 'bit'])->name('home.bitsupply');
Route::get('inspection', [HomeController::class, 'inspect'])->name('home.inspection');
Route::get('contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('demo', [HomeController::class, 'demo'])->name('home.demo');
Route::post('demo', [HomeController::class, 'storeDemo'])->name('home.demo.store');
Route::get('get-a-demo', [HomeController::class, 'demo']);
Route::post('get-a-demo', [HomeController::class, 'storeDemo']);
Route::get('past-training', [HomeController::class, 'pastTraining'])->name('home.past-training');
Route::get('manpower', [HomeController::class, 'manpower'])->name('home.manpower');