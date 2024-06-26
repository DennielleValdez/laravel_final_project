<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/about.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    @include('layout.navbar')

    {{-- CONTENT --}}
    <div class="container">
        <div class="row">
            {{-- ABOUT US --}}

            <div class="col-md-12 d-flex justify-content-center align-items-center mt-5">
                <h2>ABOUT US</h2>
            </div>

            <div class="col-md-6">
                <div class="aboutImg">
                    <img src="../homeimg/aboutus.webp" class="d-block w-100" alt="...">
                </div>
            </div>

            <div class="col-md-6">
                <div class="aboutText">
                    <h3>Welcome to Radiant Rituals, where luxury meets efficacy, and skincare becomes a celebration of you.</h3><br>
                    <p>Our mission is to empower you with the confidence that comes from healthy, radiant skin through a curated collection of high-quality, effective skincare products. At Radiant Rituals, we believe that skincare is not just a routine but a ritual—a moment of self-care and rejuvenation that should be cherished and celebrated.</p>
                </div>
            </div>
            <br><hr>

            {{-- OUR STORY --}}
            <div class="col-md-6">
                <div class="aboutText">
                    <h2>Our Story</h2><br>
                    <p>Radiant Rituals was born from a passion for beauty and wellness. Our founder realized the transformative power of skincare during a personal journey of self-discovery. After years of struggling to find products that were both effective and gentle on the skin, We set out to create a brand that embodied purity, luxury, and efficacy.<br><br>Our journey began with a commitment to research and innovation. We collaborate with top dermatologists, skincare experts, and scientists to develop products that meet the highest standards of quality and performance. Every product we offer is meticulously crafted using the finest natural ingredients, combined with cutting-edge scientific advancements.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="journeyImg">
                    <img src="../homeimg/ourjourney.jpg" class="d-block w-100" alt="...">
                </div>
            </div>

            <br><hr>

            {{-- 3rd Row --}}
            <div class="col-md-12 d-flex justify-content-center align-items-center mt-5">
                <h3>Our Philosophy</h3>
            </div>
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <p>At Radiant Rituals, we uphold four core principles that guide everything we do:</p>
            </div>

            {{-- ICONS --}}

            
            {{-- PURITY --}}
            <div class="col-md-3 mt-3">
                <div class="card-icon">
                    <img src="../homeimg/6.png" class="card-img fixed-size-image" alt="...">
                </div>
            </div>

            {{-- EFFICACY --}}
            <div class="col-md-3 mt-3">
                <div class="card-icon">
                    <img src="../homeimg/7.png" class="card-img fixed-size-image" alt="...">
                </div>
            </div>

            {{-- SUSTAINABILITY --}}
            <div class="col-md-3 mt-3">
                <div class="card-icon">
                    <img src="../homeimg/8.png" class="card-img fixed-size-image" alt="...">
                </div>
            </div>

             {{-- INCLUSIVITY --}}
             <div class="col-md-3 mt-3">
                <div class="card-icon">
                    <img src="../homeimg/9.png" class="card-img fixed-size-image" alt="...">
                </div>
            </div>

            {{-- TEXT --}}
            <div class="col-md-6">
                <div class="philosophyText">
                    
                    <p><b>Purity: </b>Our products are formulated to deliver visible results. Through rigorous research and development, we ensure that every product is not only gentle on the skin but also highly effective. We use clinically-proven active ingredients that address various skin concerns, from hydration and anti-aging to brightening and acne prevention.</p>
                
                    <p><b>Efficacy: </b> We are committed to using only the highest quality, natural ingredients. Our products are free from harmful chemicals, parabens, sulfates, and synthetic fragrances. We believe in the power of pure, unadulterated nature to heal and rejuvenate the skin.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="philosophyText">
                    <p><b>Sustainability: </b>We care deeply about the environment and strive to make a positive impact. Our packaging is designed to be eco-friendly, using recyclable materials wherever possible. We also prioritize sustainable sourcing practices, ensuring that our ingredients are harvested responsibly and ethically.</p>
                
                    <p><b>Inclusivity: </b> Beauty is universal, and our products are designed to cater to all skin types and tones. We celebrate diversity and aim to make everyone feel beautiful and confident in their skin. Our range includes products suitable for sensitive skin, dry skin, oily skin, and everything in between.</p>
                </div>
            </div>
            <br><hr>

            {{-- COMMITMENT --}}
            <div class="col-md-6">
                <div class="commitmentText">
                    <h3>Our Commitment to You</h3><br>
                    <p>At Radiant Rituals, your satisfaction is our priority. We are dedicated to providing exceptional customer service and support. Our team of skincare experts is always available to offer personalized advice and recommendations tailored to your unique skin needs. We believe in the transformative power of skincare and are here to help you achieve your best skin ever.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="joinText">
                    <h3>Join Our Community</h3><br>
                    <p>We invite you to become a part of the Radiant Rituals community. Follow us on social media for the latest news, skincare tips, and exclusive offers. Share your Radiant Rituals journey with us using #RadiantRituals, and connect with others who share your passion for skincare and self-care. <br>Thank you for choosing Radiant Rituals. Together, let’s celebrate the beauty of healthy, glowing skin. Here’s to radiant skin and timeless beauty!</p>
                </div>
            </div>

            <br><hr>

            <!-- CONTACT FORM -->
            <div class="col-md-6 mt-5" id="contact-form">
                <div class="container p-5 pt-0">
                    <h2 class="text-center mb-4">Contact Us</h2>
                    <form>
                    <div class="form-row">
                        <div class="form-group col-md-6 mt-2">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control mt-2" id="name" placeholder="Your Name">
                        </div>
                        <div class="form-group col-md-6 mt-2">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control mt-2" id="email" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label for="subject">Subject:</label>
                        <input type="text" class="form-control mt-2" id="subject" placeholder="Subject">
                    </div>
                    <div class="form-group mt-2">
                        <label for="message">Message:</label>
                        <textarea class="form-control mt-2" id="message" rows="4" placeholder="Your Message"></textarea>
                    </div>
                    <input type="submit" class="mt-3" value="Submit">
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="joinText">
                    <h3>MAP</h3><br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15445.062576224576!2d121.04845749951073!3d14.583933274404933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8142994ce0b%3A0xf7f3251bc576fd13!2sOrtigas%20Center%2C%20Pasig%2C%20Metro%20Manila%2C%20Philippines!5e0!3m2!1sen!2sus!4v1719392235040!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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