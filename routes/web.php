<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\GymController;
use App\Http\Controllers\Web\PublicGymController;

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
Route::get('/home', function () {
    return view('gyms.index');

});


Auth::routes();


Route::get('/gyms', [GymController::class, 'index'])->name('gyms.index');

Route::get('/create', [GymController::class, 'create'])->name('gyms.create');

Route::get('gyms', [PublicGymController::class, 'index'])->name('public.index');


Route::prefix('my-gyms')
    ->name('gyms.')


    ->group(function () {

        Route::get('create', [GymController::class, 'create'])->name('create');
        Route::post('', [GymController::class, 'store'])->name('store');
        Route::get('', [GymController::class, 'index'])->name('index');
        Route::get('mygyms', [GymController::class, 'mygyms'])->name('mygyms');
       // Route::get('resultados', [GymController::class, 'BuscadorGyms'])->name('resultados');
        Route::get('resultadouser', [GymController::class, 'BuscadorUsuarioRegistrado'])->name('resultadouser');
    });


Route::prefix('public')
    ->name('gyms.')


    ->group(function () {


        Route::get('resultados', [GymController::class, 'BuscadorGyms'])->name('resultados');
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('edit', [BenefitController::class, 'edit'])->name('edit');
// Route::post('mygyms', [GymController::class, 'index'])->name('mygyms');
// Route::post('mygyms', [GymController::class, 'index'])->name('mygyms');

//Route::patch('{benefit}', [BenefitController::class, 'update'])->name('update');
//  Route::delete('{benefit}', [BenefitController::class, 'delete'])->name('delete');
// Route::get('view', [BenefitController::class, 'view'])->name('view');
// Route::get('{benefit}', [BenefitController::class, 'show'])->name('show');
