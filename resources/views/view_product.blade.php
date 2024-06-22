<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/login.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body>
    

    <div class="container d-flex justify-content-center align-items-center">
        <div class="card mt-5">
            <div class="card-body">
                <p>Product Brand:<h1>{{$product->product_brand}}</h1></p>
                <p>Category:<h1>{{$product->product_category}}</h1></p>
                <p>Product Name:<h1>{{$product->product_name}}</h1></p>
                <p>Product Image:<h1>{{$product->product_img}}</h1></p>
                <p>Product Description:<h1>{{$product->product_description}}</h1></p>
                <p>Product Price:<h1>{{$product->product_price}}</h1></p>
                <a class="btn btn-outline-warning w-100" href="{{url('productindex')}}">Go back</a>
            </div>
        </div>
    </div>
    

</body>
<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/items.js"></script>
<script src="js/main.js"></script>
</html>