<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<head>
    <!-- Add your meta tags, title, and CSS links here -->
</head>
<body>
    @include('layout.navbar')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Sign-Up Form</h1>
                <hr>
                <form action="/signup" method="POST">
                    @csrf
                    <label>First Name:</label>
                    <input type="text" class="form-control" name="fname">
                    <br>
                    <label>Last Name:</label>
                    <input type="text" class="form-control" name="lname">
                    <br>
                    <label>Email:</label>
                    <input type="email" class="form-control" name="email">
                    <br>
                    <label>Password:</label>
                    <input type="password" class="form-control" name="password">
                    <br>
                    <hr>
                    <input type="submit" class="btn btn-primary w-100">
                </form>
            </div>
        </div>
    </div>

    @include('layout.footer')
</body>
</html>