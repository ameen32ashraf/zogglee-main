<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Public Route
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Auth Routes
Auth::routes();

// Authenticated Routes
Route::middleware(['auth'])->group(function () {

    // Regular User Home
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Admin-only Routes
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    });
});
use App\Http\Controllers\BookController;

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [BookController::class, 'create'])->name('admin.dashboard');
    Route::post('/admin/books', [BookController::class, 'store'])->name('admin.books.store');
});
use App\Models\Book;

Route::get('/', function () {
    $books = Book::latest()->take(4)->get(); // Fetch 4 latest books
    return view('welcome', compact('books'));
});
Route::get('/checkout', function (\Illuminate\Http\Request $request) {
    $book = Book::findOrFail($request->book_id);
    return view('checkout', compact('book'));
})->name('checkout');

use Illuminate\Support\Facades\DB;

Route::post('/place-order', function (\Illuminate\Http\Request $request) {
    DB::table('orders')->insert([
        'book_id' => $request->book_id,
        'quantity' => $request->quantity,
        'number' => $request->number,
        'address' => $request->address,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect('/')->with('success', 'Order placed successfully!');
})->name('place.order');
Route::post('/admin/books/store', [BookController::class, 'store'])->name('books.store');
// In web.php
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [BookController::class, 'create'])->name('admin.dashboard');
    Route::post('/admin/books', [BookController::class, 'store'])->name('books.store');
    Route::get('/admin/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
    Route::put('/admin/books/{book}', [BookController::class, 'update'])->name('books.update');
    Route::delete('/admin/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');
});
