@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Edit Book - {{ $book->title }}</h1>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Error Messages --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Edit Book Form --}}
    <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Book Title --}}
        <div class="mb-3">
            <label for="title" class="form-label">Book Title</label>
            <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
        </div>

        {{-- Author --}}
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" name="author" class="form-control" value="{{ $book->author }}" required>
        </div>

        {{-- Price --}}
        <div class="mb-3">
            <label for="price" class="form-label">Price ($)</label>
            <input type="number" name="price" class="form-control" step="0.01" value="{{ $book->price }}" required>
        </div>

        {{-- Genre --}}
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <select name="genre" class="form-control" required>
                <option value="">-- Select Genre --</option>
                <option value="Business" {{ $book->genre == 'Business' ? 'selected' : '' }}>Business</option>
                <option value="Technology" {{ $book->genre == 'Technology' ? 'selected' : '' }}>Technology</option>
                <option value="Romantic" {{ $book->genre == 'Romantic' ? 'selected' : '' }}>Romantic</option>
                <option value="Adventure" {{ $book->genre == 'Adventure' ? 'selected' : '' }}>Adventure</option>
                <option value="Fictional" {{ $book->genre == 'Fictional' ? 'selected' : '' }}>Fictional</option>
            </select>
        </div>

        {{-- Current Image --}}
        <div class="mb-3">
            <label class="form-label">Current Book Cover</label><br>
            <img src="{{ asset('storage/' . $book->image) }}" alt="Current Book Image" width="120">
        </div>

        {{-- Upload New Image --}}
        <div class="mb-3">
            <label for="image" class="form-label">Upload New Image (optional)</label>
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>

        {{-- Submit Button --}}
        <button type="submit" class="btn btn-primary">Update Book</button>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
