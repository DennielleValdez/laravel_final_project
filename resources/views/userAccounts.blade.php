<!DOCTYuE html>
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
</head>

<body>
     {{-- <div class="d-flex"> --}}
        <div class="sidebar">
            @include('layout.adminNavbar')
        </div>

        <!-- Product Table -->
        
        <br>
        <div class="container mt-5">   
            <div class="row">
                <div class="col-md-8">
                    <h2>Accounts List:</h2>
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
                            <th>User First Name</th>
                            <th>User Last Name</th>
                            <th>User Email</th>
                            <th></th>
                        </tr>  
                    </thead>    
                </div>
                <tbody>
                    @foreach ($user as $u)
                    <tr>
                        {{-- Here we will put numbering using js? --}}
                        <td></td>

                        <td>{{$u -> user_fname}}</td>
                        <td>{{$u -> user_lname}}</td>
                        <td>{{$u -> user_email}}</td>  
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>

</body>
<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/items.js"></script>
<script src="js/main.js"></script>
</html>