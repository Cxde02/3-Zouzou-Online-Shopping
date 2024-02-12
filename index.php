<?php require_once("config.php"); ?>


<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3Zouzou | Online Shopping</title>
    <link rel="icon" type="image/x-icon" href="images/e.png">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="carousel.css">
    <link rel="stylesheet" href="bubblespeech.css">
    <link rel="stylesheet" href="featuredBrandSlider.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

<div class="header" id="headdd">

    <video autoplay loop muted controls class="back-video">
        <source src="images/cartoon-seamless-clouds-background-loop.mp4" type="video/mp4">
    </video>

    <div class="container">

        <?php include("navbar.php") ?>
        <div id="teddy">
            <img class="gif" src="images/waveteddy.gif">
        </div>
        <div id="SpeechBubble">Hello there! Happy Shopping!</div>

        <div class="row">
            <div class="col-2-nav">
                <h1>Your Child's Happiness<br>Is Our Happiness!</h1>
                <p id="textnav">We have the latest toys for kids of all ages. Be it from 1 to 17 years old!!!</p>
                <p id="textnav"> Just imagine and we provide!</p>

                <a id="explorebtn" href="#carouselsection" class="btn-nav">Explore Now &#8595;</a>

            </div>
            <!-- <div class="col-2">
                 <img src="images/image1.png">
             </div> -->

        </div>

    </div>
</div>

<div class="featuredBrand">
    <h2>Our Featured brands</h2>
    <div class="bwrapper">
        <a href="#" class="partner">
            <img src="brands/LEGO_logo.svg.png" width="110" alt="Brandlogo">
        </a>
        <a href="#" class="partner">
            <img src="brands/hot-wheels-logo.png" width="110" alt="Brandlogo">
        </a>
        <a href="#" class="partner">
            <img src="brands/barbie-logo-2-removebg-preview.png" width="110" alt="Brandlogo">
        </a>
        <a href="#" class="partner">
            <img src="brands/DC-Logo-Logo-PNG-File.png" width="110" alt="Brandlogo">
        </a>
        <a href="#" class="partner">
            <img src="brands/Disney.png" width="110" alt="Brandlogo">
        </a>
        <a href="#" class="partner">
            <img src="brands/download-removebg-preview.png" width="110" alt="Brandlogo">
        </a>
        <a href="#" class="partner">
            <img src="brands/Marvel_Logo.svg.png" width="110" alt="Brandlogo">
        </a>
        <a href="#" class="partner">
            <img src="brands/Naruto_logo.svg.png" width="110" alt="Brandlogo">
        </a>
        <a href="#" class="partner">
            <img src="brands/Nerf_logo.svg.png" width="110" alt="Brandlogo">
        </a>
        <a href="#" class="partner">
            <img src="brands/sw.png" width="110" alt="Brandlogo">
        </a>
    </div>
</div>

<div class="gif">
    <img class="one" src="//cdn.shopify.com/s/files/1/0272/0985/9095/files/maneki.gif?v=1614333630">
    <img class="two" src="//cdn.shopify.com/s/files/1/0272/0985/9095/files/maneki.gif?v=1614333630">
</div>


<div class="carousel" id="carouselsection">
    <h2 id="CarouText">Some of our finest toys!</h2>


    <!--image slider start-->
    <div class="slider">
        <div class="slide active">
            <img src="images/NerfSlide.jpg" alt="">
            <div class="info">
                <h2>Nerf Elite 2.0 Eaglepoint RD-8 Blaster</h2>
                <p>Dart Drum, Detachable Scope and Barrel, 16 Nerf Darts, Bolt Action</p>
            </div>
        </div>
        <div class="slide">
            <img src="images/MonoSlide.jpg" alt="">
            <div class="info">
                <h2>Monopoly Classic</h2>
                <p>Games & puzzles for Families and Friends, Toys for Kids, Boys and Girls Ages 8 and Up, Classic
                    fantasy Gameplay</p>
            </div>
        </div>
        <div class="slide">
            <img src="images/LegoSlide.jpg" alt="">
            <div class="info">
                <h2>LEGO Set Build</h2>
                <p>Build different sets from legos! From houses to robots, everything is possible with LEGO!</p>
            </div>
        </div>
        <div class="slide">
            <img src="images/barbieslide.jpg" alt="">
            <div class="info">
                <h2>Barbie Dollhouse</h2>
                <p>With 2 Levels & 4 Play Areas, Fully Furnished, Gift For 3 To 7 Year Olds</p>
            </div>
        </div>
        <div class="slide">
            <img src="images/puzzleslide.png" alt="">
            <div class="info">
                <h2>Disney Castle 3D Jigsaw Puzzle</h2>
                <p>216 Pieces 3D Jigsaw Puzzle for Kids and Adults - Easy Click Technology Means Pieces Fit Together
                    Perfectly</p>
            </div>
        </div>
        <div class="navigation">
            <i class="fas fa-chevron-left prev-btn"></i>
            <i class="fas fa-chevron-right next-btn"></i>
        </div>
        <div class="navigation-visibility">
            <div class="slide-icon active"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
        </div>
    </div>

    <script type="text/javascript">
        const slider = document.querySelector(".slider");
        const nextBtn = document.querySelector(".next-btn");
        const prevBtn = document.querySelector(".prev-btn");
        const slides = document.querySelectorAll(".slide");
        const slideIcons = document.querySelectorAll(".slide-icon");
        const numberOfSlides = slides.length;
        var slideNumber = 0;

        //image slider next button
        nextBtn.addEventListener("click", () => {
            slides.forEach((slide) => {
                slide.classList.remove("active");
            });
            slideIcons.forEach((slideIcon) => {
                slideIcon.classList.remove("active");
            });

            slideNumber++;

            if (slideNumber > (numberOfSlides - 1)) {
                slideNumber = 0;
            }

            slides[slideNumber].classList.add("active");
            slideIcons[slideNumber].classList.add("active");
        });

        //image slider previous button
        prevBtn.addEventListener("click", () => {
            slides.forEach((slide) => {
                slide.classList.remove("active");
            });
            slideIcons.forEach((slideIcon) => {
                slideIcon.classList.remove("active");
            });

            slideNumber--;

            if (slideNumber < 0) {
                slideNumber = numberOfSlides - 1;
            }

            slides[slideNumber].classList.add("active");
            slideIcons[slideNumber].classList.add("active");
        });

        //image slider autoplay
        var playSlider;

        var repeater = () => {
            playSlider = setInterval(function () {
                slides.forEach((slide) => {
                    slide.classList.remove("active");
                });
                slideIcons.forEach((slideIcon) => {
                    slideIcon.classList.remove("active");
                });

                slideNumber++;

                if (slideNumber > (numberOfSlides - 1)) {
                    slideNumber = 0;
                }

                slides[slideNumber].classList.add("active");
                slideIcons[slideNumber].classList.add("active");
            }, 4000);
        }
        repeater();

        //stop the image slider autoplay on mouseover
        slider.addEventListener("mouseover", () => {
            clearInterval(playSlider);
        });

        //start the image slider autoplay again on mouseout
        slider.addEventListener("mouseout", () => {
            repeater();
        });
    </script>


</div>

<div class="bg">
<div class="small-container">
    <a href="products.php" class="title1">Latest Products</a>
    <div class="row" >
        <?php get_four_products(); ?>
    </div>

</div>
</div>

<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="uploads/bugatti.png" class="offer-img">
            </div>
            <div class="col-22">
                <div class="trending">
                <p>Trending at the moment!</p>
                </div>
                <h1>Lego Technic Bugatti Chiron</h1>
                <small>The perfect gift for car lovers and future engineers! Build and experience a quintessential
                    collectible sports car – the LEGO Technic Bugatti Chiron! Developed in partnership with Bugatti
                    Automobiles S.A.S, this is a faithful recreation of the real car.</small>
                <br>
                <a href="product_detail.php?id=27" class="btn">Buy Now &#8594;</a>
            </div>
            <div class="col-3-bugatti">
                <iframe width="700" height="345" src="https://www.youtube.com/embed/AO_IH0P4GG0?controls=1&autoplay=0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
            </div>
            <a id="yttext">Lego Technic Bugatti Chiron</a>

        </div>
    </div>

</div>

<br>
<br>


<?php include("footer.php") ?>


   
