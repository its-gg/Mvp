<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vmake</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('/images/logo.png') ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('styles/style.css') ?>">

</head>

<body>

        <nav class="navbar" style="background-color:gray;" >
            <div class="logo">
                <img src="<?= base_url('/images/logo.png') ?>"
                        alt="Logo Image" style="height:5rem;margin-top:15px;">
                <h1 class="com-name" style = "font-size:2.5rem;margin-top:15px;" ><a href="/" class="com-name"><span style="color:#ff5c5c" >V</span><span style="color:#6C84C6">m</span><span style="color:#666666">a</span><span style="color:#FBDA89">k</span><span style="color:#EA85AC">e</span></a></h1>
            </div>
            <div class="hamburger" style="margin:1rem;" >
                <div class="line1" style="background:black;" ></div>
                <div class="line2" style="background:black;" ></div>
                <div class="line3" style="background:black;" ></div>
            </div>
            <ul class="nav-links"style="margin-top:15px;">
                <li><a href="/Home/products">Designs</a></li>
                <li><a href="/Home/about">About us</a></li>
                <li><a href="/Home/showtestimonial">VMake</a></li>
<li><a href="/Home/testimonial">Write Feedback</a></li>
                <li><a href="/Home/login">Login</a></li>
                <li><a href="/Home/contact">Contact us</a></li>


            </ul>
        </nav>

    <?= $this->renderSection('content') ?>
    <footer class="flex" >
        <!-- <div class="location flex">

            <iframe class="maps" scrolling="no" marginheight="0" marginwidth="0"
                src="https://maps.google.com/maps?width=auto25&amp;height=300&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                 frameborder="0"><a href="https://www.gps.ie/truck-gps/">delivery trucks
                    gps</a></iframe>
            <span class="location_info flex">
                <h3 class="footer_head" style="margin: 15px 0;">Location</h3>


                <h3>Some where in india</h3>
                <p style="display:inline;">Lorem ipsum dolor sit amet consectetur <br>
                    adipisicing elit
                    Lorem ipsum
                    dolor sit amet consectetur <br> adipisicing elit. Deleniti, odio!
                    Commodi,
                    dolor.</p>
                <p style="display:inline;">Lorem ipsum dolor sit amet consectetur <br>
                    adipisicing elit
                    Lorem ipsum
                    dolor sit amet consectetur <br> adipisicing elit. Deleniti, odio!
                    Commodi,
                    dolor.</p>
                <p style="display:inline;">Lorem ipsum dolor sit amet consectetur <br>
                    adipisicing elit
                    Lorem ipsum
                    dolor sit amet consectetur <br> adipisicing elit. Deleniti, odio!
                    Commodi,
                    dolor.</p>
                <p style="display:inline;">Lorem ipsum dolor sit amet consectetur <br>
                    adipisicing elit
                    Lorem ipsum
                    dolor sit amet consectetur <br> adipisicing elit. Deleniti, odio!
                    Commodi,
                    dolor.</p>


            </span>
        </div> -->

        <span class="footer_info flex">

            <div>
                <h3 class="footer_head">Shop by</h3>
                <ul>
                    <li>
                        <a href="#">Men</a>
                    </li>
                    <li>
                        <a href="#">Women</a>
                    </li>
                    <li>
                        <a href="#">Kids</a>
                    </li>
                    <li>
                        <a href="#">Indie</a>
                    </li>
                    <li>
                        <a href="#">Stores</a>
                    </li>
                    <li>
                        <a href="#">New arrivals</a>
                    </li>
                    <li>
                        <a href="#">Home</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="footer_head">Follow us</h3>

                <ul>
                    <li>
                        <a href="#">Frequenly asked Questions</a>
                    </li>
                    <li>
                        <a href="#">Returns</a>
                    </li>
                    <li>
                        <a href="#">Cancellations</a>
                    </li>
                    <li>
                        <a href="#">Payments</a>
                    </li>
                    <li>
                        <a href="#">Customer care</a>
                    </li>
                    <li>
                        <a href="#">How Do I Redeem My Coupon</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="footer_head">Follow us</h3>
                <ul>
                    <li>
                        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i>
                            Instagram</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                            Facebook</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                            Twitter</a>
                    </li>
                    <li>
                        <a href="#"> <i class="fa fa-pinterest" aria-hidden="true"></i>
                            Pinterest</a>
                    </li>
                </ul>
            </div>

            </div>
    </footer>
    <script>
    const hamburger = document.querySelector(".hamburger");
    const navLinks = document.querySelector(".nav-links");
    const links = document.querySelectorAll(".nav-links li");
    hamburger.addEventListener('click', () => {
        //Animate Links
        navLinks.classList.toggle("open");
        links.forEach(link => {
            link.classList.toggle("fade");
        });
        //Hamburger Animation
        hamburger.classList.toggle("toggle");
    });
    </script>
    <script src="https://kit.fontawesome.com/506b713f8c.js" crossorigin="anonymous"></script>

    <style>
   @media screen and (max-width:800px) {
       .nav-links{
           margin-top:0px !important;
       }
   }
    </style>
</body>

</html>