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
            <img src="../homeimg/olaypage.png" class="about-img w-100" alt="...">
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
            </div>
            <div class="col-md-1 mt-5">
                <h1></h1>
            </div>

            {{-- PRODUCTS /These are sample cards/Will edit and get data from database--}}
            <div class="col-md-9 mt-5">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <h3>All Products</h3>
                    </div>

                    <div class="col-md-4 mt-3">
                        <div class="card" style="width: 18rem;">
                            <img src="../homeimg/article1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Mineral Vs. Chemical Sunscreens</h5>
                            <a href="https://www.olay.com/skin-care-tips-and-articles/mineral-vs-chemical-sunscreens" class="btn">View article>></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-3">
                        <div class="card" style="width: 18rem;">
                            <img src="../homeimg/article1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Mineral Vs. Chemical Sunscreens</h5>
                            <a href="https://www.olay.com/skin-care-tips-and-articles/mineral-vs-chemical-sunscreens" class="btn">View article>></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-3">
                        <div class="card" style="width: 18rem;">
                            <img src="../homeimg/article1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Mineral Vs. Chemical Sunscreens</h5>
                            <a href="https://www.olay.com/skin-care-tips-and-articles/mineral-vs-chemical-sunscreens" class="btn">View article>></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-3">
                        <div class="card" style="width: 18rem;">
                            <img src="../homeimg/article1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Mineral Vs. Chemical Sunscreens</h5>
                            <a href="https://www.olay.com/skin-care-tips-and-articles/mineral-vs-chemical-sunscreens" class="btn">View article>></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-3">
                        <div class="card" style="width: 18rem;">
                            <img src="../homeimg/article1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Mineral Vs. Chemical Sunscreens</h5>
                            <a href="https://www.olay.com/skin-care-tips-and-articles/mineral-vs-chemical-sunscreens" class="btn">View article>></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-3">
                        <div class="card" style="width: 18rem;">
                            <img src="../homeimg/article1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Mineral Vs. Chemical Sunscreens</h5>
                            <a href="https://www.olay.com/skin-care-tips-and-articles/mineral-vs-chemical-sunscreens" class="btn">View article>></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
    </div>
    @include('layout.footer')




</body>
<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- JAVASCRIPT not used on this page-->
<!-- <script src="js/items.js"></script>
<script src="js/main.js"></script> -->

</html>