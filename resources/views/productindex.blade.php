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
    


    <div class="container">
        <h1>Create Product</h1>
    
        <form action="/productindex" method="POST" enctype="multipart/form-data">
            @csrf
    
            <div class="mb-3">
                <label for="product_brand" class="form-label">Product Brand</label>
                <select class="form-select" id="product_brand" name="product_brand" required>
                    <option value="">Select Brand</option>
                    <option value="Olay" @if(old('product_brand') == 'Olay') selected @endif>Olay</option>
                    <option value="Estee Lauder" @if(old('product_brand') == 'Estee Lauder') selected @endif>Estee Lauder</option>
                    <option value="Dior" @if(old('product_brand') == 'Dior') selected @endif>Dior</option>
                    <option value="Some By Mi" @if(old('product_brand') == 'Some By Mi') selected @endif>Some By Mi</option>
                    <option value="Clinique" @if(old('product_brand') == 'Clinique') selected @endif>Clinique</option>
                </select>
            </div>
    
            <div class="mb-3">
                <label for="product_category" class="form-label">Product Category</label>
                <select class="form-select" id="product_category" name="product_category" required>
                    <option value="">Select Category</option>
                    <option value="Cleansers" @if(old('product_category') == 'Cleansers') selected @endif>Cleansers</option>
                    <option value="Moisturizers" @if(old('product_category') == 'Moisturizers') selected @endif>Moisturizers</option>
                    <option value="Serums" @if(old('product_category') == 'Serums') selected @endif>Serums</option>
                    <option value="Specialty Products" @if(old('product_category') == 'Specialty Products') selected @endif>Specialty Products</option>
                </select>
            </div>
    
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" value="{{ old('product_name') }}" required>
            </div>
    
            <div class="mb-3">
                <label for="product_img" class="form-label">Product Image</label>
                <input type="file" class="form-control" id="product_img" name="product_img" accept="image/*">
            </div>
    
            <div class="mb-3">
                <label for="product_description" class="form-label">Product Description</label>
                <textarea class="form-control" id="product_description" name="product_description" rows="4">{{ old('product_description') }}</textarea>
            </div>
    
            <div class="mb-3">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" class="form-control" id="product_price" name="product_price" value="{{ old('product_price') }}" required>
            </div>
    
            <div class="mb-3">
                <label for="skin_type" class="form-label">Skin Type</label>
                <select class="form-select" id="skin_type" name="skin_type">
                    <option value="All Skin Types">All Skin Types</option>
                    <option value="Sensitive Skin">Sensitive Skin</option>
                    <option value="Normal, Dry, Combination">Normal, Dry, Combination</option>
                    <option value="Normal, Combination, Dry">Normal, Combination, Dry</option>
                    <option value="Oily, Combination">Oily, Combination</option>
                    <option value="Normal, Oily, Combination">Normal, Oily, Combination</option>
                    <option value="Normal, Combination, Oily">Normal, Combination, Oily</option>
                    <option value="Normal, Dry">Normal, Dry</option>
                    <option value="Dry, Sensitive">Dry, Sensitive</option>
                    <option value="Oily, Acne-Prone">Oily, Acne-Prone</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
    
            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
    
        <!-- Product Table -->
        <hr>
        <h2>Product List</h2>

        <table class="table table-hovered table-bordered">
            @foreach ($product as $p)
            <tr>
                <td>{{$p -> product_brand}}</td>
                <td>{{$p -> product_category}}</td>
                <td>{{$p -> product_name}}</td>
                <td>{{$p -> product_img}}</td>
                <td>{{$p -> product_description	}}</td>
                <td>{{$p -> product_price}}</td>
                <td>{{$p -> skin_type}}</td>
                <td>
                    <a class="btn btn-outline-warning" href="productindex/{{$p -> id}}">
                        View
                    </a>
                </td>
                <td>
                    <a class="btn btn-outline-dark" href="teacher/edit_teacher/{{$p -> Employee_ID}}">
                        Edit
                    </a>
                </td>
                <td>
                    <form action="teacher/{{$p -> Employee_ID}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-outline-primary" type="submit" value="DELETE">
                    </form>
                </td>     
            </tr>
            @endforeach
        </table>


    </div>

</body>
<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/items.js"></script>
<script src="js/main.js"></script>
</html>