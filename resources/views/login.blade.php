<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/login.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<head>
    <!-- Add your meta tags, title, and CSS links here -->
</head>
<body>
    @include('layout.navbar')
    
    <div class="container d-flex justify-content-center align-items-center mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="loginCard">
                    <div class="loginCard-body">
                        <h1>Welcome back!</h1>
                        <h2>Enter your credentials to log in</h2>
                        <br>
                        <form action="/login" method="POST">
                            @csrf
                            <label>Username</label>
                            <input type="text" name="username" class="form-control">
                            <br>
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                            <br><hr>
                            <input type="submit" class="btn btn-outline-secondary w-100" value="Log in">
                            <br><br>
                            <div class="loginText d-flex justify-content-center align-items-center">
                                <h6>Forgot password?</h6>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>
    <div class="container fixed-bottom">
        <hr>
        <div class="text-center py-2">
            <p class="mb-0">&copy; 2024 RadiantRituals. All rights reserved.</p>
        </div>
    </div>
</body>
<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- JAVASCRIPT not used on this page-->
<!-- <script src="js/items.js"></script>
<script src="js/main.js"></script> -->

</html>