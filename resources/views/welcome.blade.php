<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pharmacy</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/owl.carousel.min.css" rel="stylesheet">

    <link href="css/owl.theme.default.min.css" rel="stylesheet">

    <link href="css/templatemo-medic-care.css" rel="stylesheet">
    <!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
</head>

<body id="top">

    <main>

        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
            <div class="container">
                <a class="navbar-brand mx-auto d-lg-none" href="/">
                    Pharmacy
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            @auth
                                <a class="nav-link" href="{{ url('/dashboard') }}"
                                    style="font-size: 18px; font-weight: bold;">Dashboard</a>
                            </li>
                        @else
                            <a class="navbar-brand d-none d-lg-block" href="/">
                                Pharmacy Management System
                            </a>


                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"
                                    style="font-size: 18px; font-weight: bold;">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"
                                        style="font-size: 18px; font-weight: bold;">Register</a>
                                </li>
                            @endif
                        @endauth


                    </ul>
                </div>

            </div>
        </nav>

        <section class="hero" id="hero">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/slider/portrait-successful-mid-adult-doctor-with-crossed-arms.jpg"
                                        class="img-fluid" alt="">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/slider/young-asian-female-dentist-white-coat-posing-clinic-equipment.jpg"
                                        class="img-fluid" alt="">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/slider/doctor-s-hand-holding-stethoscope-closeup.jpg"
                                        class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="heroText d-flex flex-column justify-content-center">

                            <h1 class="mt-auto mb-2">
                                Better
                                <div class="animated-info">
                                    <span class="animated-item">health</span>
                                    <span class="animated-item">days</span>
                                    <span class="animated-item">lives</span>
                                </div>
                            </h1>

                            <p class="mb-4">"The pharmacy management system streamlines inventory control, tracks
                                medication dispensing, and enhances stock management for efficient and accurate
                                pharmaceutical operations."</p>

                            <div class="heroLinks d-flex flex-wrap align-items-center">
                                <a class="custom-link me-4" href="#about" data-hover="Learn More">Learn More</a>

                                <p class="contact-phone mb-0"><i class="bi-phone"></i> 0991052097</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section-padding" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-12 mx-auto">
                        <div
                            class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                            <p class="featured-text"><span class="featured-number">Thank</span> You<br> For Choosing Us
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="gallery">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-6 ps-0">
                        <img src="images/gallery/medium-shot-man-getting-vaccine.jpg" class="img-fluid galleryImage"
                            alt="get a vaccine" title="get a vaccine for yourself">
                    </div>

                    <div class="col-lg-6 col-6 pe-0">
                        <img src="images/gallery/female-doctor-with-presenting-hand-gesture.jpg"
                            class="img-fluid galleryImage" alt="wear a mask" title="wear a mask to protect yourself">
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/scrollspy.min.js"></script>
    <script src="js/custom.js"></script>
    <!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
</body>

</html>
