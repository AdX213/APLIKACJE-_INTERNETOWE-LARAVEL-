<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubsController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('home');



// Trasy wymagające uwierzytelnienia
Route::middleware(['auth'])->group(function () {
    Route::get('clubs_create', [ClubsController::class, 'create'])->name('clubs.create');
    Route::post('clubs', [ClubsController::class, 'store'])->name('clubs.store');
    Route::get('clubs/{club}/edit', [ClubsController::class, 'edit'])->name('clubs.edit');
    Route::put('clubs/{club}', [ClubsController::class, 'update'])->name('clubs.update');
    Route::delete('clubs/{club}', [ClubsController::class, 'destroy'])->name('clubs.destroy');

    Route::get('members/{member}/edit', [MembersController::class, 'edit'])->name('members.edit');
    Route::put('members/{member}', [MembersController::class, 'update'])->name('members.update');
    Route::delete('members/{member}', [MembersController::class, 'destroy'])->name('members.destroy');
    Route::get('members_create', [MembersController::class, 'create'])->name('members.create');
    Route::post('members', [MembersController::class, 'store'])->name('members.store');
    
});


// Trasy logowania i rejestracji
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Trasa do dashboardu dostępna tylko dla zalogowanych użytkowników
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// Trasy dostępne dla wszystkich
Route::get('clubs', [ClubsController::class, 'index'])->name('clubs.index');
Route::get('clubs/{club}', [ClubsController::class, 'show'])->name('clubs.show');

Route::get('members/{member}', [MembersController::class, 'show'])->name('members.show');
Route::get('members', [MembersController::class, 'index'])->name('members.index');
