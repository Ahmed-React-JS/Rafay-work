
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Includes compatibility.php -->
    <?php include('includes/compatibility.php');?>

    <!-- Includes compatibility.php -->
    <?php include('includes/style.php');?>

    <title>PSD Final Attempt</title>
</head>

<body>
    <!-- header -->
    <?php include('includes/header.php');?>


<div class="tmp-nav">
    <div class="container flex justify-content-space">
        <h1>Contact</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
</div>

<section class="location">
    <i class="fa fa-location-dot"></i>
</section>

<section class="contact-form">
    <div class="container text-center">
        <h4>Get in touch with us</h4>
        <p>We possess within us two minds. So far I have written only of the conscious mind. I would now like to
            introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains
            such power and complexity that it literally staggers the imagination.</p>

        <div class="flex gap-50">
            <div class="form-container">
                <input type="text" required placeholder="Name">
                <input type="email" required placeholder="E-mail">
                <input type="text" required placeholder="Subject">
                <textarea cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <div class="contact-info">
                <div>
                    <h5>INFORMATION</h5>
                    <div class="flex gap-15">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Little Lonsdale St, Talay
                            Victoria 8011 Philippines</p>
                    </div>
                    <div class="flex gap-15">
                        <i class="fa-solid fa-phone"></i>
                        <p><a href="tel: +1 (800) 888 5260 52 63">+1 (800) 888 5260 52 63</a></p>
                    </div>
                    <div class="flex gap-15">
                        <i class="fa-solid fa-envelope"></i>
                        <p><a href="mailto: hello@agency.com">hello@agency.com</a></p>
                    </div>
                </div>
                <div class="business-info">
                    <h5>Business hours</h5>
                    <p>Monday – Friday: 9am to 20 pm
                    </p>
                    <p>Saturday: 9am to 17 pm</p>
                    <p>Sunday: day off</p>

                    <ul class="flex gap-10">
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <li><a href="#"><i class="fa-brands fa-google"></i></a>
                        <li><a href="#"><i class="fa-brands fa-pinterest"></i></a>
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


   <!-- footer -->
   <?php include('includes/footer.php');?>


    
<!-- Scripts Js -->
<?php include('includes/scripts.php');?>

</body>

</html>
