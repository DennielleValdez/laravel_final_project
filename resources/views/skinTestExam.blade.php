<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin Test Exam</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/test.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    @include('layout.navbar')

    <div class="container mt-5">
        <div class="card">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h2 class="text-center">Skin Type Test</h2>
                    <br>
                    <form action="{{ route('skinTestExam.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="q1">How does your skin feel immediately after cleansing?</label>
                            <select name="q1" id="q1" class="form-control" required>
                                <option value="">Select</option>
                                <option value="Tight and dry">Tight and dry</option>
                                <option value="Soft and smooth">Soft and smooth</option>
                                <option value="Shiny and greasy">Shiny and greasy</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="q2">How often do you experience breakouts or acne?</label>
                            <select name="q2" id="q2" class="form-control" required>
                                <option value="">Select</option>
                                <option value="Rarely">Rarely</option>
                                <option value="Occasionally">Occasionally</option>
                                <option value="Frequently">Frequently</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="q3">How does your skin react to sun exposure?</label>
                            <select name="q3" id="q3" class="form-control" required>
                                <option value="">Select</option>
                                <option value="Burns easily and feels sensitive">Burns easily and feels sensitive</option>
                                <option value="Tans evenly without burning">Tans evenly without burning</option>
                                <option value="Gets very oily and prone to breakouts">Gets very oily and prone to breakouts</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="q4">How does your skin look and feel by midday?</label>
                            <select name="q4" id="q4" class="form-control" required>
                                <option value="">Select</option>
                                <option value="Dry and flaky">Dry and flaky</option>
                                <option value="Balanced and smooth">Balanced and smooth</option>
                                <option value="Shiny and oily">Shiny and oily</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="q5">How visible are your pores?</label>
                            <select name="q5" id="q5" class="form-control" required>
                                <option value="">Select</option>
                                <option value="Hardly visible">Hardly visible</option>
                                <option value="Moderately visible">Moderately visible</option>
                                <option value="Very visible and large">Very visible and large</option>
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-outline-secondary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    @include('layout.footer')




</body>
<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- JAVASCRIPT not used on this page-->
<!-- <script src="js/items.js"></script>
<script src="js/main.js"></script> -->

</html>