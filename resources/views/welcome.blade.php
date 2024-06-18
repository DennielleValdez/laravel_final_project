<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="../Frontend/css/home_style.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body> 
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="logo d-flex justify-content-center align-items-center">
                <img src="../img/LOGO/Hannah.png" class="d-block h-10" alt="...">
            </div>
        </div>
    </div>
    
    <!-- NAVIGATION BAR -->
    <div class="container sticky-top bg-light">
        <nav class="navbar navbar-expand-lg mt-2">
            <div class="container-fluid">
            <!-- TOGGLER -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- NAV ITEMS / id= navbarItems-->
            <div class="collapse navbar-collapse" id="navbarItems">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-underline">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="homepage.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>

            <!-- DROPDOWN -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Brands
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../Frontend/Dior.php">Dior</a></li>
                    <li><a class="dropdown-item" href="../Frontend/EsteeLauder.php">Estee Lauder</a></li>
                    <li><a class="dropdown-item" href="../Frontend/Olay.php">Olay</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="../Frontend/allProducts.php">All Products</a></li>
                    </ul>
                </li>

            <!-- CONTACT -->
                <li class="nav-item">
                    <a class="nav-link" href="..//Frontend/about.php#contact-form">Contact</a>
                </li>
                </ul>

            

            <!-- SEARCH BAR -->
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

            <!-- CART, LOCATION, ACCOUNT -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Cart</a>
                    </li>

                    <!-- <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#cartModal">
                    <i class="fas fa-shopping-cart"></i>
                    </button> -->
                
                    <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-map-marker-alt"></i> Location</a>
                    </li>

            <!-- MY ACCOUNT DROPDOWN -->
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i> My Account</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Favorites</a></li>

                        <li><a class="dropdown-item" href="carttable.php">Order Summary</a></li>

                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="../User/logout.php">Logout</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </div>

    {{-- BANNER --}}

    <div class="col-md-12">
        <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>

            <!-- CONTENT -->
            <div class="carousel-inner">

            <div class="col-md-12">
                <div class="carousel-item active">
                <img src="../homeimg/1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column h-100 align-items-end justify-content-center text-dark">
                    {{-- <h5 style="font-size: 50px;">Dior</h5>
                    <p style="font-size: 20px;">Timeless Beauty, Timeless Dior</p> --}}
                </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="carousel-item">
                <img src="../homeimg/2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column h-100 align-items-start justify-content-center text-dark">
                    {{-- <h5 style="font-size: 45px;">Estée Lauder</h5>
                    <p style="font-size: 20px;">Beauty Beyond Boundaries</p> --}}
                </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="carousel-item">
                <img src="../homeimg/3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column h-100 align-items-end justify-content-center text-dark">
                    {{-- <h5 style="font-size: 50px;">Olay</h5>
                    <p style="font-size: 20px;">Glow with Confidence</p> --}}
                </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>


    {{-- TAKE THE TEST --}}
        <div class="col-md-12 mt-5 d-flex justify-content-center align-items-center">
            <h1>Discover your skin type</h1>
        </div>
        <div class="col-md-12 mt-2 d-flex justify-content-center align-items-center">
            <button class="btn btn-outline-dark">Take the test now</button>
        </div>

    {{-- WHATS NEW --}}
    </div>
  

@include('layout.footer')




</body>
<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- JAVASCRIPT not used on this page-->
<!-- <script src="js/items.js"></script>
<script src="js/main.js"></script> -->

</html>
