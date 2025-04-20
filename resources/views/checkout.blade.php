<!DOCTYPE html>
<html lang="en">

<head>
	<title>BookSaw - Free Book Store HTML CSS Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/icomoon/icomoon.css">
	<link rel="stylesheet" type="text/css" href="assets/css/vendor.css">
	<link rel="stylesheet" type="text/css" href="assets/style.css">

</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

	<div id="header-wrap">

		<div class="top-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<div class="social-links">
							<ul>
								<li>
									<a href="#"><i class="icon icon-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-youtube-play"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-behance-square"></i></a>
								</li>
							</ul>
						</div><!--social-links-->
					</div>
					<div class="col-md-6">
    <div class="right-element">
        @guest
            <a href="{{ route('login') }}" class="user-account for-buy">
                <i class="icon icon-user"></i><span>Login</span>
            </a>
            <a href="{{ route('register') }}" class="cart for-buy">
                <i class="icon icon-user-plus"></i><span>Register</span>
            </a>
        @else
            <span class="user-name" style="margin-right: 10px;">
                <i class="icon icon-user"></i> {{ Auth::user()->name }}
            </span>

            @if(Auth::user()->role == 1)
                <a href="{{ url('/admin/dashboard') }}" class="user-account for-buy">
                    <i class="icon icon-dashboard"></i><span>Dashboard</span>
                </a>
            @else
                <a href="{{ url('/user/home') }}" class="user-account for-buy">
                </a>
            @endif

            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="cart for-buy" style="border:none; background:none;">
                    <i class="icon icon-sign-out"></i><span>Logout</span>
                </button>
            </form>
        @endguest
    </div>
</div>

	<!-- Keep your search form as is -->
	<div class="action-menu">
		<div class="search-bar">
			<a href="#" class="search-button search-toggle" data-selector="#header-wrap">
				<i class="icon icon-search"></i>
			</a>
			<form role="search" method="get" class="search-box">
				<input class="search-field text search-input" placeholder="Search" type="search">
			</form>
		</div>
	</div>
</div>

					</div>

				</div>
			</div>
		</div><!--top-content-->

		<header id="header">
			<div class="container-fluid">
				<div class="row">

					<div class="col-md-2">
						<div class="main-logo">
							<a href="index.html"><img src="assets/images/main-logo.png" alt="logo"></a>
						</div>

					</div>

					<div class="col-md-10">

						<nav id="navbar">
							<div class="main-menu stellarnav">
								<ul class="menu-list">
									<li class="menu-item active"><a href="#home">Home</a></li>
									<li class="menu-item has-sub">
										<a href="#pages" class="nav-link">Pages</a>

										<ul>
											<li class="active"><a href="index.html">Home</a></li>
											<li><a href="index.html">About</a></li>
											<li><a href="index.html">Styles</a></li>
											<li><a href="index.html">Blog</a></li>
											<li><a href="index.html">Post Single</a></li>
											<li><a href="index.html">Our Store</a></li>
											<li><a href="index.html">Product Single</a></li>
											<li><a href="index.html">Contact</a></li>
											<li><a href="index.html">Thank You</a></li>
										</ul>

									</li>
									<li class="menu-item"><a href="#featured-books" class="nav-link">Featured</a></li>
									<li class="menu-item"><a href="#popular-books" class="nav-link">Popular</a></li>
									<li class="menu-item"><a href="#special-offer" class="nav-link">Offer</a></li>
									<li class="menu-item"><a href="#latest-blog" class="nav-link">Articles</a></li>
									<li class="menu-item"><a href="#download-app" class="nav-link">Download App</a></li>
								</ul>

								<div class="hamburger">
									<span class="bar"></span>
									<span class="bar"></span>
									<span class="bar"></span>
								</div>

							</div>
						</nav>

					</div>

				</div>
			</div>
		</header>

	</div><!--header-wrap-->

<div class="container my-5">
    <h2>Checkout</h2>

    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}" class="img-fluid mb-3">
            <h3>{{ $book->title }}</h3>
            <p><strong>Author:</strong> {{ $book->author }}</p>
            <p><strong>Price:</strong> ${{ number_format($book->price, 2) }}</p>
        </div>

        <div class="col-md-6">
            <form action="{{ route('place.order') }}" method="POST">
                @csrf
                <input type="hidden" name="book_id" value="{{ $book->id }}">
                <div class="form-group mb-3">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" class="form-control" value="1" min="1" required>
                </div>
                <div class="form-group mb-3">
                    <label for="number">Phone Number</label>
                    <input type="text" name="number" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <textarea name="address" class="form-control" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Place Order</button>
            </form>
        </div>
    </div>
</div>
