<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProyectController;
use App\Models\Proyect;
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

Auth::routes();


//Web
Route::get('/', function () {
    return view('web.home');
})->name('home');

Route::get('about', function(){
    return view('web.about');
})->name('about');

Route::get('/projects', [ProyectController::class, 'indexWeb'])->name('proyects');

Route::get('projects/{slug}', [ProyectController::class, 'show'])->name('proyect');

Route::get('/contact', function(){
    return view('web.contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard.index');

    Route::resource('dashboard/projects',  ProyectController::class)->except('show');
    
});


