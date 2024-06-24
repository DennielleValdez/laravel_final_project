<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
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
            <img src="../homeimg/allproductspage.png" class="about-img w-100" alt="...">
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
                        <h3>All Products</h3>
                    </div>

                    {{-- PAGINATION --}}
                    <div class="col-md-12 mt-3 d-flex justify-content-center align-items-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="?page=1" class="previous">Previous</a>
                                <li class="page-item"><a class="page-link" href="?page=1">1</a>
                                <li class="page-item"><a class="page-link" href="?page=2">2</a>
                                <li class="page-item"><a class="page-link" href="?page=3">3</a>
                                <li class="page-item"><a class="page-link" href="?page=4">4</a>
                                <li class="page-item"><a class="page-link" href="?page=5">5</a>
                                <li class="page-item"><a class="page-link" href="?page=6">6</a>
                                <li class="page-item"><a class="page-link" href="?page=7">7</a>
                                <li class="page-item"><a class="page-link" href="?page=8">8</a>
                                <li class="page-item"><a class="page-link" href="?page=" class="next">Next</a>
                            </ul>
                        </nav>
                    </div>
                  

                    @foreach($products as $product)
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
                <br>
                {{-- PAGINATION --}}
                <div class="col-md-12 mt-3 d-flex justify-content-center align-items-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="?page=1" class="previous">Previous</a>
                            <li class="page-item"><a class="page-link" href="?page=1">1</a>
                            <li class="page-item"><a class="page-link" href="?page=2">2</a>
                            <li class="page-item"><a class="page-link" href="?page=3">3</a>
                            <li class="page-item"><a class="page-link" href="?page=4">4</a>
                            <li class="page-item"><a class="page-link" href="?page=5">5</a>
                            <li class="page-item"><a class="page-link" href="?page=6">6</a>
                            <li class="page-item"><a class="page-link" href="?page=7">7</a>
                            <li class="page-item"><a class="page-link" href="?page=8">8</a>
                            <li class="page-item"><a class="page-link" href="?page=" class="next">Next</a>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    @include('layout.footer')

</body>
<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>