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

	<section id="billboard">

		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<button class="prev slick-arrow">
						<i class="icon icon-arrow-left"></i>
					</button>

					<div class="main-slider pattern-overlay">
						<div class="slider-item">
							<div class="banner-content">
								<h2 class="banner-title">Life of the Wild</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero
									ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis
									urna, a eu.</p>
								<div class="btn-wrap">
									<a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
											class="icon icon-ns-arrow-right"></i></a>
								</div>
							</div><!--banner-content-->
							<img src="assets/images/main-banner1.jpg" alt="banner" class="banner-image">
						</div><!--slider-item-->

						<div class="slider-item">
							<div class="banner-content">
								<h2 class="banner-title">Birds gonna be Happy</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero
									ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis
									urna, a eu.</p>
								<div class="btn-wrap">
									<a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
											class="icon icon-ns-arrow-right"></i></a>
								</div>
							</div><!--banner-content-->
							<img src="assets/images/main-banner2.jpg" alt="banner" class="banner-image">
						</div><!--slider-item-->

					</div><!--slider-->

					<button class="next slick-arrow">
						<i class="icon icon-arrow-right"></i>
					</button>

				</div>
			</div>
		</div>

	</section>

	<section id="client-holder" data-aos="fade-up">
		<div class="container">
			<div class="row">
				<div class="inner-content">
					<div class="logo-wrap">
						<div class="grid">
							<a href="#"><img src="assets/images/client-image1.png" alt="client"></a>
							<a href="#"><img src="assets/images/client-image2.png" alt="client"></a>
							<a href="#"><img src="assets/images/client-image3.png" alt="client"></a>
							<a href="#"><img src="assets/images/client-image4.png" alt="client"></a>
							<a href="#"><img src="assets/images/client-image5.png" alt="client"></a>
						</div>
					</div><!--image-holder-->
				</div>
			</div>
		</div>
	</section>

	<section id="featured-books" class="py-5 my-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="section-header align-center">
					<div class="title">
						<span>Some quality items</span>
					</div>
					<h2 class="section-title">Featured Books</h2>
				</div>

				<div class="product-list" data-aos="fade-up">
					<div class="row">

						@foreach($books as $book)
						<div class="col-md-3">
							<div class="product-item">
								<figure class="product-style">
									<img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}" class="product-item">
									<form action="{{ route('checkout') }}" method="GET">
	<input type="hidden" name="book_id" value="{{ $book->id }}">
	<button type="submit" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
</form>
								</figure>
								<figcaption>
									<h3>{{ $book->title }}</h3>
									<span>{{ $book->author }}</span>
									<div class="item-price">$ {{ number_format($book->price, 2) }}</div>
								</figcaption>
							</div>
						</div>
						@endforeach

					</div>
				</div>

			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="btn-wrap align-right">
					<a href="#" class="btn-accent-arrow">View all products <i class="icon icon-ns-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

	<section id="best-selling" class="leaf-pattern-overlay">
		<div class="corner-pattern-overlay"></div>
		<div class="container">
			<div class="row justify-content-center">

				<div class="col-md-8">

					<div class="row">

						<div class="col-md-6">
							<figure class="products-thumb">
								<img src="assets/images/single-image.jpg" alt="book" class="single-image">
							</figure>
						</div>

						<div class="col-md-6">
							<div class="product-entry">
								<h2 class="section-title divider">Best Selling Book of the Week</h2>

								<div class="products-content">
									<div class="author-name">By Timbur Hood</div>
									<h3 class="item-title">Birds gonna be happy</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet,
										libero ipsum enim pharetra hac.</p>
									<div class="item-price">$ 45.00</div>
									<div class="btn-wrap">
										<a href="#" class="btn-accent-arrow">shop it now <i
												class="icon icon-ns-arrow-right"></i></a>
									</div>
								</div>

							</div>
						</div>

					</div>
					<!-- / row -->

				</div>

			</div>
		</div>
	</section>
@php
    $genres = ['All Genre', 'Business', 'Technology', 'Romantic', 'Adventure', 'Fictional'];
@endphp

<ul class="tabs">
    @foreach($genres as $index => $genre)
        <li data-tab-target="#{{ strtolower(str_replace(' ', '-', $genre)) }}"
            class="tab {{ $index == 0 ? 'active' : '' }}">
            {{ $genre }}
        </li>
    @endforeach
</ul>

<section id="popular-books" class="bookshelf py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header align-center mb-4">
                    <div class="title">
                        <span>Some quality items</span>
                    </div>
                    <h2 class="section-title">Popular Books</h2>
                </div>

                {{-- Tabs --}}
                <ul class="tabs">
                    @foreach($genres as $index => $genre)
                        <li data-tab-target="#{{ strtolower(str_replace(' ', '-', $genre)) }}"
                            class="tab {{ $index == 0 ? 'active' : '' }}">
                            {{ $genre }}
                        </li>
                    @endforeach
                </ul>

                {{-- Tab Content --}}
                <div class="tab-content mt-4">
                    @foreach($genres as $index => $genre)
                        @php
                            $filteredBooks = $genre === 'All Genre' ? $books : $books->where('genre', $genre);
                            $tabId = strtolower(str_replace(' ', '-', $genre));
                        @endphp

                        <div id="{{ $tabId }}" data-tab-content class="{{ $index == 0 ? 'active' : '' }}">
                            <div class="row">
                                @forelse($filteredBooks as $book)
                                    <div class="col-md-3 mb-4">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="{{ asset('storage/' . $book->image) }}"
                                                     alt="{{ $book->title }}"
                                                     class="product-item img-fluid">
                                                <button type="button" class="add-to-cart">Add to Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>{{ $book->title }}</h3>
                                                <span>{{ $book->author }}</span>
                                                <div class="item-price">$ {{ number_format($book->price, 2) }}</div>
                                            </figcaption>
                                        </div>
                                    </div>
                                @empty
                                    <p>No books in this category.</p>
                                @endforelse
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>

{{-- JavaScript for Tab Switching --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('.tab');
        const tabContents = document.querySelectorAll('[data-tab-content]');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = document.querySelector(tab.dataset.tabTarget);

                tabs.forEach(t => t.classList.remove('active'));
                tabContents.forEach(tc => tc.classList.remove('active'));

                tab.classList.add('active');
                target.classList.add('active');
            });
        });
    });
</script>

{{-- Optional CSS --}}
<style>
    .tabs {
        list-style: none;
        padding-left: 0;
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .tabs .tab {
        padding: 10px 20px;
        background: #eee;
        border-radius: 5px;
        cursor: pointer;
    }

    .tabs .tab.active {
        background: #007bff;
        color: #fff;
    }

    .tab-content > div {
        display: none;
    }

    .tab-content > div.active {
        display: block;
    }
</style>

	<section id="quotation" class="align-center pb-5 mb-5">
		<div class="inner-content">
			<h2 class="section-title divider">Quote of the day</h2>
			<blockquote data-aos="fade-up">
				<q>“The more that you read, the more things you will know. The more that you learn, the more places
					you’ll go.”</q>
				<div class="author-name">Dr. Seuss</div>
			</blockquote>
		</div>
	</section>

	<section id="subscribe">
		<div class="container">
			<div class="row justify-content-center">

				<div class="col-md-8">
					<div class="row">

						<div class="col-md-6">

							<div class="title-element">
								<h2 class="section-title divider">Subscribe to our newsletter</h2>
							</div>

						</div>
						<div class="col-md-6">

							<div class="subscribe-content" data-aos="fade-up">
								<p>Sed eu feugiat amet, libero ipsum enim pharetra hac dolor sit amet, consectetur. Elit
									adipiscing enim pharetra hac.</p>
								<form id="form">
									<input type="text" name="email" placeholder="Enter your email addresss here">
									<button class="btn-subscribe">
										<span>send</span>
										<i class="icon icon-send"></i>
									</button>
								</form>
							</div>

						</div>

					</div>
				</div>

			</div>
		</div>
	</section>

	<section id="latest-blog" class="py-5 my-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="section-header align-center">
						<div class="title">
							<span>Read our articles</span>
						</div>
						<h2 class="section-title">Latest Articles</h2>
					</div>

					<div class="row">

						<div class="col-md-4">

							<article class="column" data-aos="fade-up">

								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="assets/images/post-img1.jpg" alt="post" class="post-image">
									</a>
								</figure>

								<div class="post-item">
									<div class="meta-date">Mar 30, 2021</div>
									<h3><a href="#">Reading books always makes the moments happy</a></h3>

									<div class="links-element">
										<div class="categories">inspiration</div>
										<div class="social-links">
											<ul>
												<li>
													<a href="#"><i class="icon icon-facebook"></i></a>
												</li>
												<li>
													<a href="#"><i class="icon icon-twitter"></i></a>
												</li>
												<li>
													<a href="#"><i class="icon icon-behance-square"></i></a>
												</li>
											</ul>
										</div>
									</div><!--links-element-->

								</div>
							</article>

						</div>
						<div class="col-md-4">

							<article class="column" data-aos="fade-up" data-aos-delay="200">
								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="assets/images/post-img2.jpg" alt="post" class="post-image">
									</a>
								</figure>
								<div class="post-item">
									<div class="meta-date">Mar 29, 2021</div>
									<h3><a href="#">Reading books always makes the moments happy</a></h3>

									<div class="links-element">
										<div class="categories">inspiration</div>
										<div class="social-links">
											<ul>
												<li>
													<a href="#"><i class="icon icon-facebook"></i></a>
												</li>
												<li>
													<a href="#"><i class="icon icon-twitter"></i></a>
												</li>
												<li>
													<a href="#"><i class="icon icon-behance-square"></i></a>
												</li>
											</ul>
										</div>
									</div><!--links-element-->

								</div>
							</article>

						</div>
						<div class="col-md-4">

							<article class="column" data-aos="fade-up" data-aos-delay="400">
								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="assets/images/post-img3.jpg" alt="post" class="post-image">
									</a>
								</figure>
								<div class="post-item">
									<div class="meta-date">Feb 27, 2021</div>
									<h3><a href="#">Reading books always makes the moments happy</a></h3>

									<div class="links-element">
										<div class="categories">inspiration</div>
										<div class="social-links">
											<ul>
												<li>
													<a href="#"><i class="icon icon-facebook"></i></a>
												</li>
												<li>
													<a href="#"><i class="icon icon-twitter"></i></a>
												</li>
												<li>
													<a href="#"><i class="icon icon-behance-square"></i></a>
												</li>
											</ul>
										</div>
									</div><!--links-element-->

								</div>
							</article>

						</div>

					</div>

					<div class="row">

						<div class="btn-wrap align-center">
							<a href="#" class="btn btn-outline-accent btn-accent-arrow" tabindex="0">Read All Articles<i
									class="icon icon-ns-arrow-right"></i></a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section id="download-app" class="leaf-pattern-overlay">
		<div class="corner-pattern-overlay"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="row">

						<div class="col-md-5">
							<figure>
								<img src="assets/images/device.png" alt="phone" class="single-image">
							</figure>
						</div>

						<div class="col-md-7">
							<div class="app-info">
								<h2 class="section-title divider">Download our app now !</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis sed ptibus
									liberolectus nonet psryroin. Amet sed lorem posuere sit iaculis amet, ac urna.
									Adipiscing fames semper erat ac in suspendisse iaculis.</p>
								<div class="google-app">
									<img src="assets/images/google-play.jpg" alt="google play">
									<img src="assets/images/app-store.jpg" alt="app store">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-md-4">

					<div class="footer-item">
						<div class="company-brand">
							<img src="assets/images/main-logo.png" alt="logo" class="footer-logo">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis sed ptibus liberolectus
								nonet psryroin. Amet sed lorem posuere sit iaculis amet, ac urna. Adipiscing fames
								semper erat ac in suspendisse iaculis.</p>
						</div>
					</div>

				</div>

				<div class="col-md-2">

					<div class="footer-menu">
						<h5>About Us</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">vision</a>
							</li>
							<li class="menu-item">
								<a href="#">articles </a>
							</li>
							<li class="menu-item">
								<a href="#">careers</a>
							</li>
							<li class="menu-item">
								<a href="#">service terms</a>
							</li>
							<li class="menu-item">
								<a href="#">donate</a>
							</li>
						</ul>
					</div>

				</div>
				<div class="col-md-2">

					<div class="footer-menu">
						<h5>Discover</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Home</a>
							</li>
							<li class="menu-item">
								<a href="#">Books</a>
							</li>
							<li class="menu-item">
								<a href="#">Authors</a>
							</li>
							<li class="menu-item">
								<a href="#">Subjects</a>
							</li>
							<li class="menu-item">
								<a href="#">Advanced Search</a>
							</li>
						</ul>
					</div>

				</div>
				<div class="col-md-2">

					<div class="footer-menu">
						<h5>My account</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Sign In</a>
							</li>
							<li class="menu-item">
								<a href="#">View Cart</a>
							</li>
							<li class="menu-item">
								<a href="#">My Wishtlist</a>
							</li>
							<li class="menu-item">
								<a href="#">Track My Order</a>
							</li>
						</ul>
					</div>

				</div>
				<div class="col-md-2">

					<div class="footer-menu">
						<h5>Help</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Help center</a>
							</li>
							<li class="menu-item">
								<a href="#">Report a problem</a>
							</li>
							<li class="menu-item">
								<a href="#">Suggesting edits</a>
							</li>
							<li class="menu-item">
								<a href="#">Contact us</a>
							</li>
						</ul>
					</div>

				</div>

			</div>
			<!-- / row -->

		</div>
	</footer>

	<div id="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="copyright">
						<div class="row">

							<div class="col-md-6">
								<p>© 2022 All rights reserved. Free HTML Template by <a
										href="https://www.templatesjungle.com/" target="_blank">TemplatesJungle</a></p>
							</div>

							<div class="col-md-6">
								<div class="social-links align-right">
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
								</div>
							</div>

						</div>
					</div><!--grid-->

				</div><!--footer-bottom-content-->
			</div>
		</div>
	</div>

	<script src="assets/js/jquery-1.11.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/script.js"></script>


</body>

</html>