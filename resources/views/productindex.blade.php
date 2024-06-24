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
    
    {{-- MAIN CONTENT --}}
    {{-- <div class="container mt-5"> --}}
        <div class="main-content">
            <h1>Create Product</h1>
            <br>
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
        
                <button type="submit" class="btn btn-secondary">Create Product</button>
            </form>
        
            <br><hr>
            {{-- SUMMARY --}}
            <div class="container mt-3">
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <p>Total number of products:</p>
                    </div>

                    <div class="col-md-3">
                        <p>Out of stock:</p>
                    </div>

                    <div class="col-md-3">
                        <p>Total number of items:</p>
                    </div>
                    
                    <div class="col-md-3">
                        <p>Categories:</p>
                    </div>

                    {{-- DATA  --}}
                    <div class="col-md-3">
                        <h3>10</h3>
                    </div>

                    <div class="col-md-3">
                        <h3>2</h3>
                    </div>

                    <div class="col-md-3">
                        <h3>100</h3>
                    </div>
                    
                    <div class="col-md-3">
                        <h3>4</h3>
                    </div>
                </div>
            </div>

            <br><hr>
            <!-- Product Table -->
        
            <br>
            
            <div class="row">
                <div class="col-md-8">
                    <h2>Product List:</h2>
                </div>

                <div class="col-md-4">
                     <!-- SEARCH BAR -->
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>

            <br>
            <table class="table table-hover table-bordered">
                <div class="d-flex justify-content-center align-items-center">
                <thead class="table-secondary">
                    <tr>
                        <th></th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Skin Type</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>  
                </thead>
            </div>
                <tbody>
                    @foreach ($product as $p)
                    <tr>
                        {{-- Here we will put numbering using js? --}}
                        <td></td>

                        <td>{{$p -> product_brand}}</td>
                        <td>{{$p -> product_category}}</td>
                        <td>{{$p -> product_name}}</td>
                        <td class="d-flex justify-content-center align-items-center"><img src="img/{{$p -> product_img}}" alt="" class="w-80" height="60vh"></td>
                        <td>{{$p -> product_description	}}</td>
                        <td>{{$p -> product_price}}</td>
                        <td>{{$p -> skin_type}}</td>
                        <td>
                            {{-- <a class="btn btn-primary" href="productindex/{{$p -> id}}">
                                View
                            </a> --}}
                            <a class="btn" href="productindex/{{$p->id}}">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                        <td>
                            {{-- <a class="btn btn btn btn-primary" href="product/edit_product/{{$p -> id}}">
                                Edit
                            </a> --}}
                            <a class="btn" href="product/edit_product/{{$p->id}}">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <form action="productindex/{{$p -> id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                {{-- <input class="btn btn-outline-primary" type="submit" value="DELETE"> --}}
                                <button type="submit" name="deletebtn" class="btn">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>     
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    {{-- </div> --}}
   

</body>
<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/items.js"></script>
<script src="js/main.js"></script>
</html>