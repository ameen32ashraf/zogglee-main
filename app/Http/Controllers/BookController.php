<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Show the book creation form and list grouped books.
     */
    public function create()
    {
        $booksByGenre = Book::all()->groupBy('genre');
        return view('admin.dashboard', compact('booksByGenre'));
    }

    /**
     * Store a newly created book in the database.
     */
    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'title'  => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'price'  => 'required|numeric',
            'genre'  => 'required|string',
            'image'  => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Store uploaded image
        $imagePath = $request->file('image')->store('books', 'public');

        // Create new book
        Book::create([
            'title'  => $request->title,
            'author' => $request->author,
            'price'  => $request->price,
            'genre'  => $request->genre,
            'image'  => $imagePath,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Book added successfully!');
    }

    /**
     * Display all books grouped by genre (for frontend views, if used).
     */
    public function index()
    {
        $groupedBooks = Book::all()->groupBy('genre');
        return view('books.index', compact('groupedBooks'));
    }

    /**
     * Show the form for editing a specific book.
     */
    public function edit(Book $book)
    {
        return view('admin.edit', compact('book'));
    }

    /**
     * Update the specified book in storage.
     */
    public function update(Request $request, Book $book)
    {
        // Validate request
        $request->validate([
            'title'  => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'price'  => 'required|numeric',
            'genre'  => 'required|string',
            'image'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle new image upload if exists
        if ($request->hasFile('image')) {
            // Delete old image
            if ($book->image) {
                Storage::disk('public')->delete($book->image);
            }
            // Store new image
            $book->image = $request->file('image')->store('books', 'public');
        }

        // Update book fields
        $book->update([
            'title'  => $request->title,
            'author' => $request->author,
            'price'  => $request->price,
            'genre'  => $request->genre,
            'image'  => $book->image,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified book from storage.
     */
    public function destroy(Book $book)
    {
        // Delete image
        if ($book->image) {
            Storage::disk('public')->delete($book->image);
        }

        // Delete book record
        $book->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Book deleted.');
    }
}
