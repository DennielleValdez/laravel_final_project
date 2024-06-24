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
                        <select name="product_brand" class="form-control">
                            <option value="Olay" {{ $editproduct->product_brand == 'Olay' ? 'selected' : '' }}>Olay</option>
                            <option value="Estee Lauder" {{ $editproduct->product_brand == 'Estee Lauder' ? 'selected' : '' }}>Estee Lauder</option>
                            <option value="Dior" {{ $editproduct->product_brand == 'Dior' ? 'selected' : '' }}>Dior</option>
                            <option value="Some By Mi" {{ $editproduct->product_brand == 'Some By Mi' ? 'selected' : '' }}>Some By Mi</option>
                            <option value="Clinique" {{ $editproduct->product_brand == 'Clinique' ? 'selected' : '' }}>Clinique</option>
                        </select>
                        
                        <label>Category:</label>
                        <select name="product_category" class="form-control">
                            <option value="Cleansers" {{ $editproduct->product_category == 'Cleansers' ? 'selected' : '' }}>Cleansers</option>
                            <option value="Moisturizers" {{ $editproduct->product_category == 'Moisturizers' ? 'selected' : '' }}>Moisturizers</option>
                            <option value="Serums" {{ $editproduct->product_category == 'Serums' ? 'selected' : '' }}>Serums</option>
                            <option value="Specialty Products" {{ $editproduct->product_category == 'Specialty Products' ? 'selected' : '' }}>Specialty Products</option>
                        </select>
                        
                        <label>Product Name:</label>
                        <input type="text" name='product_name' class="form-control" value="{{$editproduct->product_name}}">
                        
                        <label>Product Image:</label>
                        <input type="text" name='product_img' class="form-control" value="{{$editproduct->product_img}}">
                        
                        <label>Product Description:</label>
                        <input type="text" name='product_description' class="form-control" value="{{$editproduct->product_description}}">
                        
                        <label>Product Price:</label>
                        <input type="text" name='product_price' class="form-control" value="{{$editproduct->product_price}}">
                        
                        <label>Skin Type:</label>
                        <select name="skin_type" class="form-control">
                            <option value="All Skin Types" {{ $editproduct->skin_type == 'All Skin Types' ? 'selected' : '' }}>All Skin Types</option>
                            <option value="Sensitive Skin" {{ $editproduct->skin_type == 'Sensitive Skin' ? 'selected' : '' }}>Sensitive Skin</option>
                            <option value="Normal, Dry, Combination" {{ $editproduct->skin_type == 'Normal, Dry, Combination' ? 'selected' : '' }}>Normal, Dry, Combination</option>
                            <option value="Normal, Combination, Dry" {{ $editproduct->skin_type == 'Normal, Combination, Dry' ? 'selected' : '' }}>Normal, Combination, Dry</option>
                            <option value="Oily, Combination" {{ $editproduct->skin_type == 'Oily, Combination' ? 'selected' : '' }}>Oily, Combination</option>
                            <option value="Normal, Oily, Combination" {{ $editproduct->skin_type == 'Normal, Oily, Combination' ? 'selected' : '' }}>Normal, Oily, Combination</option>
                            <option value="Normal, Combination, Oily" {{ $editproduct->skin_type == 'Normal, Combination, Oily' ? 'selected' : '' }}>Normal, Combination, Oily</option>
                            <option value="Normal, Dry" {{ $editproduct->skin_type == 'Normal, Dry' ? 'selected' : '' }}>Normal, Dry</option>
                            <option value="Dry, Sensitive" {{ $editproduct->skin_type == 'Dry, Sensitive' ? 'selected' : '' }}>Dry, Sensitive</option>
                            <option value="Normal, Combination" {{ $editproduct->skin_type == 'Normal, Combination' ? 'selected' : '' }}>Normal, Combination</option>
                            <option value="Dry, Normal" {{ $editproduct->skin_type == 'Dry, Normal' ? 'selected' : '' }}>Dry, Normal</option>
                            <option value="Oily, Acne-Prone" {{ $editproduct->skin_type == 'Oily, Acne-Prone' ? 'selected' : '' }}>Oily, Acne-Prone</option>
                            <option value="Dry, Combination" {{ $editproduct->skin_type == 'Dry, Combination' ? 'selected' : '' }}>Dry, Combination</option>
                        </select>
                        
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