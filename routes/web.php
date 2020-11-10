<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\GymController;

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

Route::get('', function () {
    return view('welcome');

});
Route::get('/home', function () {
    return view('home');

});


Route::get('/gyms', [GymController::class, 'index'])->name('gyms.index');

Route::get('/gyms/create', [GymController::class, 'create'])->name('gyms.create');


Route::prefix('gyms')
    ->name('gyms.')


    ->group(function () {
        Route::get('create', [GymController::class, 'create'])->name('create');
       // Route::get('edit', [BenefitController::class, 'edit'])->name('edit');
        Route::post('', [GymController::class, 'store'])->name('store');

        //Route::patch('{benefit}', [BenefitController::class, 'update'])->name('update');
      //  Route::delete('{benefit}', [BenefitController::class, 'delete'])->name('delete');
       // Route::get('view', [BenefitController::class, 'view'])->name('view');
       // Route::get('{benefit}', [BenefitController::class, 'show'])->name('show');
        Route::get('', [GymController::class, 'index'])->name('index');
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
