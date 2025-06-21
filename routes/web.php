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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/aboutSenseiDeveloper', [App\Http\Controllers\aboutController::class, 'about'])->name('about');
Route::get('/services', [App\Http\Controllers\servicesController::class, 'services'])->name('services');
Route::get('/contactUs', [App\Http\Controllers\ContactUsController::class, 'contactUs'])->name('contactUs');
Route::post('/contacts', [App\http\Controllers\ContactController::class, 'store'])->name('Contacts.store');
Route::post('/Dataservice', [App\http\controllers\DataServiceController::class, 'store'])->name('service.store');
Route::post('/SearchBar',[App\http\controllers\SearchBarController::class, 'store'])->name('search');
