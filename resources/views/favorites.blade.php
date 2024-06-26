<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorites Page</title>
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
        <h3>Favorites:</h3>
        <br>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('favorites') && !empty(session('favorites')))
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Add to Cart</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(session('favorites') as $id => $details)
                        <tr>
                            <td class="d-flex justify-content-center align-items-center"><img src="/img/{{ $details['image'] }}" height="80px" width="90px"></td>
                            <td>{{ $details['name'] }}</td>
                            <td>₱ {{ $details['price'] }}</td>
                            <td>{{ $details['quantity'] }}</td>
                            <td>₱ {{ $details['total'] }}</td>
                            {{-- ADD TO CART BUTTON FROM FAVORITES--}}
                            <td>
                                <form action="{{ route('cart.add', $id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn"><i class="fas fa-shopping-cart"></i> </button>
                                </form>
                            </td>
                            {{-- DELETE FAVORITES --}}
                            <td>
                                <form action="{{ route('favorites.remove', $id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                <h4>Total Amount: ₱ {{ $total }}</h4>
            </div>
        @else
            <p>Your favorites is empty.</p>
        @endif
    </div>

    @include('layout.footer')
</body>
<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
