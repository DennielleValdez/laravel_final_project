<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit product</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/admin.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container mt-5">
        <div class="EditPageContainer mt-5">
        <div class="card">
            <div class="card-body">
                <h1>Edit Details:</h1>
                <form action="/productindex/{{$editproduct->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <label>Product Brand:</label>
                    <input type="text" name='product_brand' class="form-control" value="{{$editproduct->product_brand}}">

                    <label>Category:</label>
                    <input type="text" name='product_category' class="form-control" value="{{$editproduct->product_category}}">

                    <label>Product Name:</label>
                    <input type="text" name='product_name' class="form-control" value="{{$editproduct->product_name}}">

                    <label>Product Image:</label>
                    <input type="" name='product_img' class="form-control" value="{{$editproduct->product_img}}">

                    <label>Product Description:</label>
                    <input type="text" name='product_description' class="form-control" value="{{$editproduct->product_description}}">

                    <label>Product Price:</label>
                    <input type="text" name='product_price' class="form-control" value="{{$editproduct->product_price}}">

                    <label>Skin Type:</label>
                    <input type="text" name='skin_type' class="form-control" value="{{$editproduct->skin_type}}">
                   
                    <hr>
                    <input type="submit" class="btn btn-outline-secondary w-100" value="Save Changes">
                </form>
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