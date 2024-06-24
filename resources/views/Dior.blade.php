<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dior</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/brands.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    @include('layout/navbar')

    {{-- BANNER --}}
    <div class="container">
        <div class="banner d-flex justify-content-end align-items-center">
            <img src="../homeimg/diorpage.png" class="about-img w-100" alt="...">
        </div>

        <div class="row">
            <div class="col-md-2 mt-5">
                <p><b>Categories:</b></p>
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#list-item-4">All products</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-1">Cleansers</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">Moisturizers</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">Serums</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Specialty Products</a>
                </div>
                <br>
                <p><b>Skin Type:</b></p>
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Sensitive Skin</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-1">Normal, Combination, Dry</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">Oily, Combination</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">Normal, Combination, Oily</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Normal, Dry</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Dry, Sensitive</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Oily, Acne-Prone</a>
                </div>
            </div>
            <div class="col-md-1 mt-5">
                <h1></h1>
            </div>

            {{-- PRODUCTS --}}
            <div class="col-md-9 mt-5">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <h3>Dior Products</h3>
                    </div>

                    {{-- Dynamic Product Cards --}}
                    @foreach($diorProducts as $product)
                    <div class="col-md-4 mt-3">
                        <div class="ProductCard fixed-size-card" style="width: 18rem;">
                            <img src="/img/{{ $product->product_img }}" class="card-img-top w-100" height="230px" alt="{{ $product->product_name }}">
                            <div class="ProductCard-body">
                                {{-- PRODUCT NAME --}}
                                <h5 class="ProductCard-title truncate-1-line">{{ $product->product_name }}</h5>
                                {{-- PRICE --}}
                                <p class="ProductCard-text">{{$product->product_price}}</p>

                                {{-- BUTTONS --}}
                                <div class="ProductCard-footer mt-2">
                                <a href="/productindex/{{ $product->id }}" class="btn btn-outline-secondary w-100"> <i class="fas fa-heart"></i> Add to Favorites</a>
                                <br>
                                <a href="/productindex/{{ $product->id }}" class="btn btn-outline-secondary w-100 mt-2"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <br><hr>
        {{-- ARTICLES --}}
        <div class="row">
            <div class="col-md-6 mt-3">
                <h3>Featured Articles:</h3>
            </div>

            <div class="col-md-6 mt-3">
                <h3>Tips:</h3>
            </div>

            {{-- Featured Articles Cards --}}
            <div class="col-md-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <img src="../homeimg/14.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Luxury Skincare 101</h5>
                        <a href="https://www.esteelauder.com/blog-article-luxury-skincare" class="btn">View article>></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <img src="../homeimg/13.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">The Beauty of Pride</h5>
                        <a href="https://www.esteelauder.com/blog-article-celebrating-pride-month" class="btn">View article>></a>
                    </div>
                </div>
            </div>

            {{-- Tips Cards --}}
            <div class="col-md-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <img src="../homeimg/12.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Guide to Firmer Skin</h5>
                        <a href="https://www.esteelauder.com/blog-article-firm-skin-tips" class="btn">View article>></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <img src="../homeimg/11.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Get The Look: Peach Makeup</h5>
                        <a href="https://www.esteelauder.com/blog-article-peach-makeup-tutorial" class="btn">View article>></a>
                    </div>
                </div>
            </div>
        </div>

        <br>
 
        <div class="signUpBanner">
            <img src="../homeimg/diorbanner2.jpg" class="about-img w-100" alt="...">
        </div>

        {{-- Newsletter and Join Dior Community Sections --}}
        <div class="row">
            <div class="col-md-6 mt-3">
                <!-- Newsletter Section -->
                <div class="newsletter-container">
                    <h5>Sign Up for Our Newsletter</h5>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Enter your email address" required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>

            <div class="col-md-6 mt-3">
                <!-- Join Dior Community Section -->
                <div class="join-container">
                    <h5>Join Dior Community</h5>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Enter your email address" required>
                        <button type="submit">Register Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
 
    @include('layout.footer')

    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- JAVASCRIPT not used on this page-->
    <!-- <script src="js/items.js"></script>
    <script src="js/main.js"></script> -->
</body>
</html>