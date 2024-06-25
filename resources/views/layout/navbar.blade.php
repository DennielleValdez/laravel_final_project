<div class="row">
    <div class="col-md-12 mt-3">
        <div class="logo d-flex justify-content-center align-items-center">
            <img src="../homeimg/LOGO/Hannah.png" class="d-block" style="width:310px; height:120px;" alt="...">
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
                <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>

        <!-- DROPDOWN -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Brands
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/olay">Olay</a></li>
                <li><a class="dropdown-item" href="/esteelauder">Estee Lauder</a></li>
                <li><a class="dropdown-item" href="/dior">Dior</a></li>
                <li><a class="dropdown-item" href="/clinique">Clinique</a></li>
                <li><a class="dropdown-item" href="/somebymi">Some by Mi</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/allproducts">All Products</a></li>
                </ul>
            </li>

        <!-- CONTACT -->
            <li class="nav-item">
                <a class="nav-link" href="/about#contact-form">Contact</a>
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
                    
                    {{-- LOG OUT --}}
                    @if (Session::get('id'))
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    @else

                     <!-- SIGN UP & LOG IN -->
                    <li class="nav-item">
                        <a class="nav-link" href="/signup"><i class="fas fa-user-plus"></i> Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login"><i class="fas fa-sign-in-alt"></i> Log In</a>
                    </li>
                    @endif
                </ul>
                </li>
                
               
            </ul>
        </div>
        </div>
    </nav>
</div>