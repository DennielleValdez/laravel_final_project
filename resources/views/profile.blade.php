<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page - Radiant Ritual</title>
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
        <div class="card">
            <div class="WelcomeCard-body">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center align-items-center">
                        <h2>Welcome to Radiant Rituals</h2>
                    </div>
                    <div class="col-md-12">
                        <hr>
                        <p><b>Hello, {{ Session::get('fname') }} {{ Session::get('lname') }}!</b></p>
                        <p>We're thrilled to have you join our community of skincare enthusiasts. At Radiant Rituals, we're dedicated to helping you discover the best products for your unique skincare needs. Whether you're looking to pamper yourself with luxurious treatments or find everyday essentials, we've got you covered.</p>
                        <br>
                        <p>
                            To get started on your radiant journey, head over to our homepage and take our personalized skincare exam. It’s designed to help us tailor recommendations just for you!
                        </p>
                        <br>
                    </div>

                   
                    {{-- BUTTONS --}}
                    <div class="col-md-6">
                        <!-- SKIP -->
                        <div class="container mt-5">
                            <a href="/" class="btn btn-outline-secondary w-100">Skip</a>
                        </div>
                    </div>
                
                    <div class="col-md-6">
                    {{-- TAKE THE EXAM --}}
                        <div class="container mt-5">
                            <!-- Button that acts as a link -->
                            <a href="/skinTestExam" class="btn btn-outline-secondary w-100">Take the exam</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div> 

    @include('layout.footer')

    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>