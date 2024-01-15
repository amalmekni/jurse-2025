@extends('layouts.app')


<!DOCTYPE html>
<html lang="en">

  <head>
     <!-- Google tag (gtag.js) -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=G-BD3C8E34SP"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-BD3C8E34SP');
        </script>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/dark.css" type="text/css" />
        <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="css/animate.css" type="text/css" />
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

        <link rel="stylesheet" href="css/custom.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="images/favicon.ico">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-GLhlTQ8iNl7U6ipN6MX+MDaQ5l9MzGLL2wD9BR5MlE3Y6p4Pe5QV8tM1tMz9lHJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* Add your custom styles here */
        .bg-footer {
            background-color:  #2E4053;
            color: white;
        }

        .social-icon {
            color: white;
            margin-right: 10px;
        }

        .white {
            color: white;
        }

        .footer-text {
            color: white;
        }
    </style>
    <title>Welcom-Event</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BD3C8E34SP"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-BD3C8E34SP');
        </script>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
<link rel="stylesheet" href="assets/css/owl.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
<!--

 

TemplateMo 574 Mexant

https://templatemo.com/tm-574-mexant

-->
  </head>


   
<body>
@section('title', 'venue')
@section('content')
  <section id="slider" class="slider-element vh-50" style="background-image":src="assets/images/amigo.jpg" center center; background-size: cover;"></section>
  <div class="section mt-0 py-5">
            <div class="container">
                <h3 class="mb-0">
                    Conference Venue
                </h3>
            </div>
        </div>
        <div class="py-1 mb-3">
            <div class="container">
                
                <p>
                    The conference will take place at the <a class="text-decoration-underline" href="https://www.cccc.gr/en" target="_blank">Cultural Conference Center of Heraklion</a> in Crete, Greece.
                </p>

                <div class="row">

                    <div class="col-md-9 mt-0">
                        <h4 class="mb-4">About</h4>
                        <p>
                            A place of excellent possibilities and 
                            infrastructure, a center of promotion as well as production of culture, that gives space to artistic expression 
                            in all the arts and cultures. The fruit of a long and multi-faceted effort, the Cultural and Conference Center 
                            of Heraklion (PSKI) is a boast and a cultural stake for the municipal council which supported all stages of this project since 1975, starting from the decision and reaching the completion of its 
                            construction and its delivery to the citizens of Heraklion, Crete, Greece, the Mediterranean. 
                        </p>
                    </div>

                    <div class="col-md-3">
                        <img src="assets/images/amigo.jpg"/>
                    </div>

                </div>

            </div>
        </div>
        <div class="py-1 mb-5">
            <div class="container">
                <div class="row">

                    <div class="col-md-3">
                        <img id="venue-image" src="assets/images/venue.jpg" alt="hh"/>
                    </div>

                    <div class="col-md-9 mt-0">
                        <h4 class="mb-0">Facilities</h4>
                        <p>
                            </p><ul class="my-list">
                                <li> <i class="icon-ok-sign"></i>&nbsp; The <b class="underline" onclick="showVenueImage('images/hall.png')">Concert Hall</b> has a capacity of 215 seats, and includes the required stage space and technical equipment.</li>
                                <li> <i class="icon-ok-sign"></i>&nbsp; The <b class="underline" onclick="showVenueImage('images/stage.png')">Experimental Stage</b> with 180 seats and a stage dedicated to movie screenings, chamber music concerts, recitals, plays, lectures and other presentations.</li>
                                <li> <i class="icon-ok-sign"></i>&nbsp; The <b class="underline" onclick="">Seminar Room</b> with 180 seats and equipment supporting the organization of conferences, workshops, exhibitions, etc., with the ability to be divided into two sections of equal capacity.</li>
                            </ul>
                        <p></p>
                    </div>

                </div>

                


        <div class="section mt-0 py-5">
            <div class="container">
                <h3 class="mb-0">
                    Heraklion & Crete
                </h3>
            </div>
        </div>

        <div class="py-1">
            <div class="container">

                <h3>The island of <span class="gradient-horizon gradient-text">Crete</span></h3>

                <p>
                    Crete is the most southern region of Greece and Europe, separating the Aegean Sea from 
                    the Libyan Sea, it marks a physical boundary between Europe and Africa. 
                    It is the largest Greek island and one of the largest in the Mediterranean basin, 
                    with a total surface of 8,336 km², 1,100 km of coastline and approximately 623,000 inhabitants.
                </p>

                <p>
                    The island of Crete boasts a long and turbulent history and a fascinating culture. Cultural 
                    influences from other civilizations of the West and the East, as well as the remains of the 
                    glorious Minoan civilization (c. 2700-1420 BC), are found across the island. This mix of 
                    civilizations has marked contemporary Cretan culture, which is still vibrant and 
                    distinctive as it has always been.
                </p>

                <p>
                    The Cretan land encompasses an amazing variety of landscapes and landforms. Crete is renowned 
                    for its breathtaking mountain ranges, fertile valleys, the plethora of caves, gorges and 
                    plateaus of exceptional beauty as well as for its long sandy beaches and clear blue seas. 
                    Historic and cultural attractions, Cretan traditions, traditional settlements, monuments, 
                    archaeological sites, social mores, the local proceedings, the Cretan cuisine, the natural 
                    environment, the folkloric richness, remarkable ecosystems and unique landscapes <b><a class="text-decoration-underline" href="https://www.incrediblecrete.gr/en/" target="_blank">are waiting to be discovered</a></b>.
                </p>

                <p>
                    The climate of Crete is characterized as mild and Mediterranean with four distinct seasons. 
                    It is dry and warm, which means lots of sunshine all year round, very small seasonal changes 
                    in temperatures and no extreme weather phenomena.  The average year temperature is 19°C. 
                    During May, expect the temperature to range between 20°C (at night) and 30°C, with occasional rain.
                </p>

                <div class="row mb-5">
                    <div class="col-lg-4">
                        <img src="assets/images/moun.jpg" alt="">
                    </div>
                    <div class="col-lg-4">
                        <img src="assets/images/dat.jpg" alt="">
                    </div>
                    <div class="col-lg-4">
                        <img src="assets/images/heal.jpg" alt="">
                    </div>
                </div>

                <div class="divider divider-center"><i class="icon-globe-africa"></i></div>

                <h3>Heraklion, <span class="gradient-horizon gradient-text">the capital of Crete</span></h3>

                <p>
                    Heraklion, is the capital of Crete, the largest urban centre in Crete and the economic centre of the 
                    island with approximately 200,000 people. The town of Heraklion is a vibrant small metropolis and 
                    combines urban scenery, archaeological and cultural heritage with natural beauty.
                </p>

                <p>
                    The first European civilization, the Minoan civilization, flourished on this land 5000 years ago and can 
                    still be experienced today by visiting the ancient palace of <a class="text-decoration-underline" href="http://odysseus.culture.gr/h/3/eh351.jsp?obj_id=2369" target="_blank">Knossos Archaeological Site</a> 
                    and the <a class="text-decoration-underline" href="https://heraklionmuseum.gr" target="_blank">Archeological Museum of Heraklion</a>.
                </p>

                <p>
                    During the last 20 years, the city has also made remarkable advances in the academic and technological fields 
                    as it hosts the University of Crete and the Foundation of Research and Technology-Hellas.
                </p>

                <div class="row mb-5">
                    <div class="col-lg-4">
                        <img src="assets/images/tal.jpg" alt="">
                    </div>
                    <div class="col-lg-4">
                        <img src="assets/images/moun.jpg" alt="">
                    </div>
                    <div class="col-lg-4">
                        <img src="assets/images/venue.jpg"alt="">
                    </div>
                </div>

                <div class="divider divider-center"><i class="icon-globe-africa"></i></div>

                <h3>Getting to <span class="gradient-horizon gradient-text">Heraklion</span></h3>

                <h4>By air</h4>

                <p>
                    The principal airport in Crete is Heraklion International Airport, “Nikos Kazantzakis” (airport code: HER). <b>It is the closest airport to the venue.</b>
                </p>

                <p>
                    It is located about 5 km east of the city centre of Heraklion and is directly connected to Athens International Airport (airport code: ATH) 
                    with several daily domestic flights run by Aegean Airlines, and SkyExpress Airlines. The flight duration from/to Athens is about 35min. 
                    During the summer period, there are also many direct scheduled airline connections from major European cities as well as many charter 
                    flights from most European countries.
                </p>

                <p>
                    The website of Nikos Kazantzakis International Airport is <a class="text-decoration-underline" href="www.heraklion-airport.info" target="_blank">www.heraklion-airport.info</a>.
                </p> 
                
                <h4>By boat</h4>

                <p>
                    It is also possible to arrive by boat from Piraeus (major port of Greece) to Heraklion as Minoan lines and ANEK lines provide 
                    daily ferry services from and towards Crete. In particular, at least two ferry boats sail daily to Heraklion from Piraeus. 
                    The boats sail in the evening (usually around 9-10 pm) and reach their destination early in the morning (around 5:30-6:00 am) after an 8-9 hour journey.
                </p>

            </div>
        </div>


        <div class="divider divider-center"><i class="icon-globe-africa"></i></div>

<div class="fluid-width-video-wrapper" style="padding-top: 26.8817%;"><iframe class="w-100 mt-1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2301.5594938632066!2d25.12992566584432!3d35.333394494779704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x149a5987e50bedd9%3A0xab0037183204b1d2!2sCultural%20Conference%20Center%20of%20Heraklion!5e0!3m2!1sen!2sgr!4v1650026080910!5m2!1sen!2sgr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="fitvid0"></iframe></div>

</div>
</div>






        
        <script>
            document.getElementById("year").innerHTML = new Date().getFullYear();
        </script>
        <script src="js/jquery.js"></script>
        <script src="js/plugins.min.js"></script>
        <script src="js/functions.js"></script>
        <script src="js/venue.js"></script>
<!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>

    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        var interleaveOffset = 0.5;

      var swiperOptions = {
        loop: true,
        speed: 1000,
        grabCursor: true,
        watchSlidesProgress: true,
        mousewheelControl: true,
        keyboardControl: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        on: {
          progress: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              var slideProgress = swiper.slides[i].progress;
              var innerOffset = swiper.width * interleaveOffset;
              var innerTranslate = slideProgress * innerOffset;
              swiper.slides[i].querySelector(".slide-inner").style.transform =
                "translate3d(" + innerTranslate + "px, 0, 0)";
            }      
          },
          touchStart: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = "";
            }
          },
          setTransition: function(speed) {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = speed + "ms";
              swiper.slides[i].querySelector(".slide-inner").style.transition =
                speed + "ms";
            }
          }
        }
      };

      var swiper = new Swiper(".swiper-container", swiperOptions);
    </script> 
                </body>
                @endsection

</html>







