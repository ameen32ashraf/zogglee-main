<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CDN (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Segoe UI', sans-serif;
        }

        h1, h4, h5 {
            font-weight: 600;
            color: #343a40;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            background-color: #fff;
        }

        .form-control, .form-select {
            border-radius: 8px;
            padding: 10px 15px;
            border: 1px solid #ced4da;
            font-size: 1rem;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .list-group-item {
            border: 1px solid #e3e3e3;
            border-radius: 8px;
            margin-bottom: 10px;
            padding: 15px;
            background-color: #ffffff;
            transition: all 0.2s ease;
            opacity: 0;
            animation: fadeIn 0.5s ease forwards;
        }

        .list-group-item:hover {
            background-color: #f1f1f1;
        }

        .list-group-item img {
            width: 60px;
            height: 90px;
            object-fit: cover;
            border-radius: 4px;
            margin-right: 15px;
        }

        .btn-warning, .btn-danger {
            border-radius: 6px;
            padding: 6px 12px;
            font-size: 0.9rem;
        }

        .alert {
            border-radius: 8px;
            font-size: 0.95rem;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .list-group-item {
                flex-direction: column;
                align-items: flex-start !important;
            }

            .list-group-item div:last-child {
                margin-top: 10px;
            }
        }

        .navbar {
            border-radius: 0 0 10px 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .navbar .nav-button {
            background-color: white;
            color: #007bff;
            font-weight: 600;
            padding: 6px 12px;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .navbar .nav-button:hover {
            background-color: #f0f0f0;
        }

        .navbar .user-name {
            color: #ffffff;
            font-weight: 500;
            margin-right: 15px;
        }
    </style>
</head>
<body>

{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid px-4">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item me-3 user-name">
                    Hello, {{ Auth::user()->name }}
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="nav-button">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container py-5">
    <h1 class="mb-4">Add New Specs</h1>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Book Form --}}
    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Specs Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter Specs title" required>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">SIZE OF SPECS</label>
            <input type="text" name="author" class="form-control" placeholder="Enter size of Specs" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price ($)</label>
            <input type="number" name="price" class="form-control" step="0.01" placeholder="e.g. 29.99" required>
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <select name="genre" class="form-control" required>
                <option value="">-- Select Genre --</option>
                <option value="Business">Frames</option>
                <option value="Technology">sunglass</option>
                <option value="Romantic">blue glass</option>
                
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Book Cover Image</label>
            <input type="file" name="image" class="form-control" accept="image/*" required>
        </div>

        <button type="submit" class="btn btn-primary">Add SPECS</button>
    </form>
</div>

<div class="container mt-5">
    <h4>SPECS by Category</h4>
    @foreach($booksByGenre as $genre => $books)
        <div class="mb-4">
            <h5 class="text-primary">{{ $genre }}</h5>
            <ul class="list-group">
                @foreach($books as $book)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}" width="50" class="me-2">
                            <strong>{{ $book->title }}</strong> by {{ $book->author }} – ${{ $book->price }}
                        </div>
                        <div>
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this book?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
</div>

<!-- Bootstrap JS (Optional if you're using dropdowns/collapsible navbar) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
