<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
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
            {{-- CAROUSEL --}}
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="../homeimg/15.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="../homeimg/16.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="../homeimg/17.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
            </div>

            {{-- SIGN UP FORM --}}
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1>Sign-Up Now!</h1>
                        <hr>
                        <form action="/signup" method="POST">
                            @csrf
                            <label>First Name:</label>
                            <input type="text" class="form-control" name="fname">

                            <label>Last Name:</label>
                            <input type="text" class="form-control" name="lname">

                            <label>Email:</label>
                            <input type="email" class="form-control" name="email">
                          
                            <label>Password:</label>
                            <input type="password" class="form-control" name="password">
                            <br>
                            <input type="submit" class="btn btn-outline-secondary w-100" value="Sign up">
                            <hr>
                            <input type="submit" class="btn btn-outline-secondary w-100" value="Sign in with Google">
                            <br> <br>
                            <div class="loginText d-flex justify-content-center align-items-center">
                            <h6>Already have and account? Log in</h6>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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