<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body> 
    @include('layout.navbar')

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
            <h2>Discover your skin type</h2>
        </div>
        <div class="col-md-12 mt-2 d-flex justify-content-center align-items-center">
            <button class="btn btn-outline-dark mt-3">Take the test now</button>
        </div>
        <br><hr>

    {{-- WHATS NEW --}}
        <div class="row">
            {{-- OLAY CLEANSER --}}
            <div class="col-md-6">
                <div class="whatsNew-text">
                    <h2>Meet the Official Facial Cleanser of Team USA</h2>
                    <p>We assembled a team of all-star athletes to bring you a NEW kind of daily facial cleansers: CLeansing Melts! Try for yourself</p>
                    <br>
                    {{-- SEE ALL PRODUCTS --}}
                    <a href="/allproducts" class="btn btn-outline-secondary">SEE ALL PRODUCTS</a>
                </div>
            </div>
        
            <div class="col-md-6">
                <div class="whatsNew-img">
                    <img src="../homeimg/olaymelts.jpg" class="d-block w-100" alt="...">
                </div>
            </div>

            {{-- STEPS --}}
            <div class="col-md-6">
                <div class="whatsNew-img">
                    <img src="../homeimg/steps.jpg" class="d-block w-100" alt="...">
                </div>
            </div>

            <div class="col-md-6">
                <div class="whatsNew-text">
                    <h2>Step-by-Step Guide to Using Skincare Products</h2>
                    <p>Welcome to our comprehensive guide on how to use skincare products effectively. Proper application is key to maximizing the benefits of your skincare routine. Whether you are a skincare newbie or a seasoned enthusiast, our step-by-step guide will help you get the most out of your products.</p>
                    <br>
                    {{-- LEARN MORE --}}
                    <a href="/" class="btn btn-outline-secondary">LEARN MORE</a>
                </div>
            </div>
            <hr>

        {{-- BEST SELLERS --}}
            <div class="col-md-12 mt-3">
                <h3>BRANDS:</h3>
            </div>

            {{-- PRODUCT CARDS FROM DATA BASE --}}


            <div class="col-md-1 mt-3">
                <h1></h1>
            </div>

            {{-- OLAY --}}
            <div class="col-md-2 mt-3">
                <div class="card-container">
                    <div class="card fixed-size-card" id="brandCards">
                      <a href="/olay">
                        <img src="../homeimg/olay.png" class="card-img fixed-size-image" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            {{-- ESTEE LAUDER --}}
            <div class="col-md-2 mt-3">
                <div class="card-container">
                    <div class="card fixed-size-card" id="brandCards">
                      <a href="/esteelauder">
                        <img src="../homeimg/esteelauder.png" class="card-img fixed-size-image" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            {{-- DIOR --}}
            <div class="col-md-2 mt-3">
                <div class="card-container">
                    <div class="card fixed-size-card" id="brandCards">
                      <a href="/dior">
                        <img src="../homeimg/dior.png" class="card-img fixed-size-image" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            {{-- CLINIQUE --}}
            <div class="col-md-2 mt-3">
                <div class="card-container">
                    <div class="card fixed-size-card" id="brandCards">
                      <a href="/clinique">
                        <img src="../homeimg/clinique.png" class="card-img fixed-size-image" alt="...">
                        </a>
                    </div>
                </div>
            </div>

             {{-- SOME BY MI --}}
             <div class="col-md-2 mt-3">
                <div class="card-container">
                    <div class="card fixed-size-card" id="brandCards">
                      <a href="/somebymi">
                        <img src="../homeimg/somebymi.png" class="card-img fixed-size-image" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-1 mt-3">
                <h1></h1>
            </div>

           

        </div>
        






    </div>
  

@include('layout.footer')




</body>
<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- JAVASCRIPT not used on this page-->
<!-- <script src="js/items.js"></script>
<script src="js/main.js"></script> -->

</html>
