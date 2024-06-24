<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/admin.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body>
    {{-- <div class="d-flex"> --}}
    <div class="sidebar">
        @include('layout.adminNavbar')
    </div>
    
    <div class="container">
        <div class="SinglePageContainer mt-5">
        <h3>Product details:</h3>
            <div class="card mt-3">
                <div class="card-body">
                    <form action="/view_product"  enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        {{-- DETAILS --}}
                        <div class="col-md-6">
                            <p><b>Product Brand:</b><h5>{{$product->product_brand}}</h5></p>
                            <p><b>Category:</b><h5>{{$product->product_category}}</h5></p>
                            <p><b>Product Name:</b><h5>{{$product->product_name}}</h5></p>
                            <p><b>Product Description:</b><h5>{{$product->product_description}}</h5></p>
                            <p><b>Product Price:</b><h5>{{$product->product_price}}</h5></p>
                        </div>
                        {{-- IMAGE --}}
                        <div class="col-md-6">
                            <b>Product Image:</b><br><img src="/img/{{$product->product_img}}" alt="" class="w-60" height="400vh">
                        </div>
                        <br>
                        <hr><br>
                        {{-- GO BACK BUTTON --}}
                        <div class="col-md-12">
                            <a class="btn btn-outline-secondary w-100" href="{{url('productindex')}}">Go back</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    

</body>
<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/items.js"></script>
<script src="js/main.js"></script>
</html>