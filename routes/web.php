<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StaffController;
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
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/books', [BookController::class, 'index'])->name('book.index');
    Route::get('/books/search', [BookController::class, 'search'])->name('book.search');
    Route::post('/books', [BookController::class, 'store'])->name('book.store');
    Route::get('/books/create', [BookController::class, 'create'])->name('book.create');
    Route::get('/books/{id}', [BookController::class, 'show'])->name('book.show');
    Route::put('/books/{id}', [BookController::class, 'update'])->name('book.update');
    Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('book.destroy');
    Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('book.edit');

    Route::get('/students', [StudentController::class, 'index'])->name('student.index');
    Route::post('/students', [StudentController::class, 'store'])->name('student.store');
    Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');
    Route::put('/students/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('student.destroy');
    Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');

    Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
    Route::post('/staff', [StaffController::class, 'store'])->name('staff.store');
    Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
    Route::put('/staff/{id}', [StaffController::class, 'update'])->name('staff.update');
    Route::delete('/staff/{id}', [StaffController::class, 'destroy'])->name('staff.destroy');
    Route::get('/staff/{id}/edit', [StaffController::class, 'edit'])->name('staff.edit');
    
});

require __DIR__.'/auth.php';
