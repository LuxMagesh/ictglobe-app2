<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect', [HomeController::class, 'redirect']);
route::get('/view_os', [AdminController::class, 'view_os']);
route::post('/add_os', [AdminController::class, 'add_os']);
route::get('/delete_os/{id}', [AdminController::class, 'delete_os']);
route::get('/view_platform', [AdminController::class, 'view_platform']);
route::post('/add_platform', [AdminController::class, 'add_platform']);
route::get('/delete_platform/{id}', [AdminController::class, 'delete_platform']);
route::post('/add_command', [AdminController::class, 'add_command']);
route::get('/create_command', [AdminController::class, 'create_command']);
route::get('/show_commands', [AdminController::class, 'show_commands']);
route::get('/delete_command/{id}', [AdminController::class, 'delete_command']);
route::get('/update_command/{id}', [AdminController::class, 'update_command']);
route::post('/update_command_confirm/{id}', [AdminController::class, 'update_command_confirm']);
route::get('/search', [AdminController::class, 'search']);
route::get('/filter', [AdminController::class, 'filter']);
