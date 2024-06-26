<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin Test Result</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body> 
    @include('layout.navbar')
    
    <div class="container mt-5">
        <h1>Your Skin Type</h1>
        <p>Your skin type is: {{ $skinType }}</p>

        <h2>Recommended Products</h2>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('img/' . $product->product_img) }}" class="card-img-top" alt="{{ $product->product_name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->product_name }}</h5>
                            <p class="card-text">{{ $product->product_description }}</p>
                            <p class="card-text">₱ {{ $product->product_price }}</p> <!-- Added peso sign here -->

                            {{-- BUTTONS --}}
                            <div class="ProductCard-footer mt-2">
                                <!-- Add to FAVORITES Button -->
                                <form action="{{ route('favorites.add', $product->id) }}" method="POST" class="mt-2">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-secondary w-100"><i class="fas fa-heart"></i> Add to Favorites</button>
                                </form>

                                <!-- Add to Cart Button -->
                                <form action="{{ route('cart.add', $product->id) }}" method="POST" class="mt-2">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-secondary w-100"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('layout.footer')

    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>