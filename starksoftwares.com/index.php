<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Stark Softwares</title>
 
    <!-- All Stylesheets -->
    <?php include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php include_once('includes/header.inc.php'); ?> 

    <main>
        <!-- header wrapper start -->
        <section class="header__wrapper container-fluid px-0 position-relative">
            <!-- <img src="assets/images/common/hero-banner.webp" class="position-absolute top-0 start-0 w-100 h-100 img-fluid banner object-fit-cover" alt="banner image"> -->
            <video src="assets/video/intro-video.mp4" autoplay muted loop class="position-absolute top-0 start-0 w-100 h-100 img-fluid banner object-fit-cover"></video>
            <div class="bg__overlay position-absolute top-0 start-0 w-100 h-100"></div>
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center z-1">
                <div class="container">
                    <div class="col-xxl-8 col-xl-9 text-center text-md-start"> 
                        <p class="text-white fw-800 fs-5 mb-0">#Revolutionizing Industries</p>
                        <h1 class="display-3 fw-900 text-white lh-sm">
                            Custom Product & Software Development Focused On Your Success
                        </h1> 
                        <p class="fs-5 text-white mb-4">We help product teams at scale-ups and SMBs release better products faster & cut development costs.</p>
                        <a href="contact.php" class="btn btn-primary text-uppercase" aria-label="get in touch">
                            <span>get in touch</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M14.816 4.457a.75.75 0 0 1 1.06.026l6.667 7a.75.75 0 0 1 0 1.034l-6.667 7a.75.75 0 1 1-1.086-1.034l5.46-5.733H2a.75.75 0 0 1 0-1.5h18.25l-5.46-5.733a.75.75 0 0 1 .026-1.06" clip-rule="evenodd"/></svg>
                        </a>
                    </div>                        
                </div>
            </div>  
        </section>
        <!-- header wrapper end -->

        <!-- about wrapper start -->
        <section class="py-5 position-relative">
            <img src="assets/images/common/about-left-water-bg.svg" alt="Who we are" class="img-fluid position-absolute top-25 start-0" width="100" height="242" loading="lazy">
            <img src="assets/images/common/about-right-water-bg.svg" alt="Who we are" class="img-fluid position-absolute top-50 translate-middle-y end-0" width="300" height="454" loading="lazy">
            <div class="container py-md-4 py-lg-5 my-xxl-5 position-relative z-3">
                <div class="row g-4 gx-lg-5">
                    <div class="col-lg-5 col-md-8 order-lg-2 d-flex">
                        <img 
                            src="assets/images/common/who-we-are.webp" 
                            alt="About banner"
                            class="img-fluid w-100 object-fit-cover"
                            width="512" height="616" loading="lazy"
                        >  
                    </div>
                    <div class="col-lg-7 order-lg-1 d-flex align-items-center">
                        <div class="py-lg-4"> 
                            <p class="fw-medium text-dark mb-1">Who we are</p>
                            <h2 class="fs-1 fw-bold text-dark mb-3">
                                Your Trusted Partner for Digital Transformation
                            </h2>
                            <p class="lead-sm">At Stark Softwares, we drive innovation by crafting cutting-edge software solutions tailored to your unique needs. Our dedicated team merges expertise with creativity to deliver robust, user-friendly applications that elevate businesses. </p>
                            <p class="lead-sm">Committed to excellence and customer satisfaction, we’re your trusted partner in navigating the digital landscape.</p>
                            <div class="d-flex gap-3 mb-4">
                                <div class="display-4 lh-1 fw-bold text-dark">525+</div>
                                <div class="col">
                                    <p class="lead-sm fw-medium m-0 text-dark">Give Best Feedback</p>
                                    <p class="fs-15 fw-medium m-0">Lorem Ipsum Dolor</p>
                                </div>
                            </div>
                            <a href="about-us.php" class="btn btn-primary">
                                <span>Read More</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M14.816 4.457a.75.75 0 0 1 1.06.026l6.667 7a.75.75 0 0 1 0 1.034l-6.667 7a.75.75 0 1 1-1.086-1.034l5.46-5.733H2a.75.75 0 0 1 0-1.5h18.25l-5.46-5.733a.75.75 0 0 1 .026-1.06" clip-rule="evenodd"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!--./container-->
        </section>
        <!-- about wrapper end -->

        <!-- service wrapper start -->
        <section class="py-5 bg-light">
            <div class="container">
                <p class="lead-sm fw-medium text-dark mb-1">Check all our services</p>
                <h2 class="text-dark fs-1 fw-semibold">Discover Our Services</h2>

                <div class="row g-4 mt-2 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3">
                    <div class="d-flex">
                        <div class="service__card first card card-body p-md-4 rounded-4 transition">
                            <h3 class="fs-3 fw-light lh-sm title">
                                <a href="#">
                                    Digital product <br> development
                                </a>
                            </h3>
                            <div class="d-flex align-items-end">
                                <div class="col">
                                    <a href="#" class="d-inline-flex gap-2 align-items-center fs-5 fw-medium link">
                                        <span>Read more</span>
                                        <?php include('includes/components/arrow-right-white-icon.inc.php'); ?>
                                    </a>
                                </div>
                                <div class="icon__box">
                                    <img src="assets/images/icons/product-development.svg" alt="Iocn" class="img-fluid" width="80" height="80">
                                </div>
                            </div>
                        </div>
                    </div><!--.col-->
                    <div class="d-flex">
                        <div class="service__card second card card-body p-md-4 rounded-4 transition">
                            <h3 class="fs-3 fw-light lh-sm title">
                                <a href="#">
                                    MT4 MT5 AI <br> Trading Bot
                                </a>
                            </h3>
                            <div class="d-flex align-items-end">
                                <div class="col">
                                    <a href="#" class="d-inline-flex gap-2 align-items-center fs-5 fw-medium link">
                                        <span>Read more</span>
                                        <?php include('includes/components/arrow-right-white-icon.inc.php'); ?>
                                    </a>
                                </div>
                                <div class="icon__box">
                                    <img src="assets/images/icons/trading-bot.svg" alt="Iocn" class="img-fluid" width="80" height="80">
                                </div>
                            </div>
                        </div>
                    </div><!--.col-->
                    <div class="d-flex">
                        <div class="service__card third card card-body p-md-4 rounded-4 transition">
                            <h3 class="fs-3 fw-light lh-sm title">
                                <a href="#">
                                    ⁠Campus Management <br> System
                                </a>
                            </h3>
                            <div class="d-flex align-items-end">
                                <div class="col">
                                    <a href="#" class="d-inline-flex gap-2 align-items-center fs-5 fw-medium link">
                                        <span>Read more</span>
                                        <?php include('includes/components/arrow-right-white-icon.inc.php'); ?>
                                    </a>
                                </div>
                                <div class="icon__box">
                                    <img src="assets/images/icons/management.svg" alt="Iocn" class="img-fluid" width="80" height="80">
                                </div>
                            </div>
                        </div>
                    </div><!--.col-->
                    <div class="d-flex">
                        <div class="service__card four card card-body p-md-4 rounded-4 transition">
                            <h3 class="fs-3 fw-light lh-sm title">
                                <a href="#">
                                    UI UX design <br>services
                                </a>
                            </h3>
                            <div class="d-flex align-items-end">
                                <div class="col">
                                    <a href="#" class="d-inline-flex gap-2 align-items-center fs-5 fw-medium link">
                                        <span>Read more</span>
                                        <?php include('includes/components/arrow-right-white-icon.inc.php'); ?>
                                    </a>
                                </div>
                                <div class="icon__box">
                                    <img src="assets/images/icons/ui-ux.svg" alt="Iocn" class="img-fluid" width="80" height="80">
                                </div>
                            </div>
                        </div>
                    </div><!--.col-->
                    <div class="d-flex">
                        <div class="service__card five card card-body p-md-4 rounded-4 transition">
                            <h3 class="fs-3 fw-light lh-sm title">
                                <a href="#">
                                    Block Chain Wallet
                                </a>
                            </h3>
                            <div class="d-flex align-items-end">
                                <div class="col">
                                    <a href="#" class="d-inline-flex gap-2 align-items-center fs-5 fw-medium link">
                                        <span>Read more</span>
                                        <?php include('includes/components/arrow-right-white-icon.inc.php'); ?>
                                    </a>
                                </div>
                                <div class="icon__box">
                                    <img src="assets/images/icons/wallet.svg" alt="Iocn" class="img-fluid" width="80" height="80">
                                </div>
                            </div>
                        </div>
                    </div><!--.col-->
                    <div class="d-flex">
                        <div class="service__card six card card-body p-md-4 rounded-4 transition">
                            <h3 class="fs-3 fw-light lh-sm title">
                                <a href="#">
                                    Online Gaming <br> Platform
                                </a>
                            </h3>
                            <div class="d-flex align-items-end">
                                <div class="col">
                                    <a href="#" class="d-inline-flex gap-2 align-items-center fs-5 fw-medium link">
                                        <span>Read more</span>
                                        <?php include('includes/components/arrow-right-white-icon.inc.php'); ?>
                                    </a>
                                </div>
                                <div class="icon__box">
                                    <img src="assets/images/icons/game.svg" alt="Iocn" class="img-fluid" width="80" height="80">
                                </div>
                            </div>
                        </div>
                    </div><!--.col-->
                </div><!--.row-->
            </div><!--./container-->
        </section>
        <!-- service wrapper end -->

        <!-- promo wrapper start -->
        <?php include_once('includes/bring-your-idea.inc.php'); ?> 
        <!-- promo wrapper end -->

        <!-- why choose wrapper start -->
        <section class="py-5 position-relative">
            <img src="assets/images/common/about-left-water-bg.svg" alt="Image" class="img-fluid position-absolute top-25 start-0" width="100" height="242" loading="lazy"> 
            <div class="container py-md-4 pb-lg-5 position-relative z-3">  
                <p class="fw-medium text-dark mb-1">Why Choose Us</p>
                <h2 class="fs-1 fw-bold text-dark mb-3">
                    Digital marketing is the key to lead generation, online visibility, and conversion
                </h2>
                  
                <div class="row g-3 g-lg-4 row-cols-1 row-cols-lg-2 mt-2">
                    <div class="d-flex">
                        <div class="choose__card w-100 rounded-3 transition">
                            <div class="p-3 d-flex align-items-center gap-3 bg-white rounded-3"> 
                                <figure class="icon__box mb-0 bg-dark rounded-3 d-flex justify-content-center align-items-center">
                                    <img src="assets/images/icons/lock.svg" alt="security" class="img-fluid" width="46" height="64">
                                </figure>
                                <div class="col">
                                    <h3 class="fs-4 fw-semibold text-dark">Enterprise-level security</h3>
                                    <p class="mb-0">Massa a egestas sodales porta iaculis maecenas dapibus penatibus lacus ante fames.</p>
                                </div>
                            </div>
                        </div>
                    </div><!--.item-->
                    <div class="d-flex">
                        <div class="choose__card w-100 rounded-3 transition">
                            <div class="p-3 d-flex align-items-center gap-3 bg-white rounded-3"> 
                                <figure class="icon__box mb-0 bg-dark rounded-3 d-flex justify-content-center align-items-center">
                                    <img src="assets/images/icons/folder.svg" alt="scalability" class="img-fluid sm" width="46" height="64">
                                </figure>
                                <div class="col">
                                    <h3 class="fs-4 fw-semibold text-dark">Global scalability</h3>
                                    <p class="mb-0">Massa a egestas sodales porta iaculis maecenas dapibus penatibus lacus ante fames.</p>
                                </div>
                            </div>
                        </div>
                    </div><!--.item-->
                    <div class="d-flex">
                        <div class="choose__card w-100 rounded-3 transition">
                            <div class="p-3 d-flex align-items-center gap-3 bg-white rounded-3"> 
                                <figure class="icon__box mb-0 bg-dark rounded-3 d-flex justify-content-center align-items-center">
                                    <img src="assets/images/icons/payment-card.svg" alt="payment" class="img-fluid sm" width="46" height="64">
                                </figure>
                                <div class="col">
                                    <h3 class="fs-4 fw-semibold text-dark">Easy Payment Gateway</h3>
                                    <p class="mb-0">Massa a egestas sodales porta iaculis maecenas dapibus penatibus lacus ante fames.</p>
                                </div>
                            </div>
                        </div>
                    </div><!--.item-->
                    <div class="d-flex">
                        <div class="choose__card w-100 rounded-3 transition">
                            <div class="p-3 d-flex align-items-center gap-3 bg-white rounded-3"> 
                                <figure class="icon__box mb-0 bg-dark rounded-3 d-flex justify-content-center align-items-center">
                                    <img src="assets/images/icons/onboard.svg" alt="onboarding" class="img-fluid sm" width="46" height="64">
                                </figure>
                                <div class="col">
                                    <h3 class="fs-4 fw-semibold text-dark">Customer onboarding team</h3>
                                    <p class="mb-0">Massa a egestas sodales porta iaculis maecenas dapibus penatibus lacus ante fames.</p>
                                </div>
                            </div>
                        </div>
                    </div><!--.item-->
                </div><!--.row-->
            </div><!--./container-->
        </section>
        <!-- why choose wrapper end -->

        <!-- promo wrapper start -->
        <section class="py-5 position-relative overflow-hidden">
            <img src="assets/images/common/counter-bg-image.webp" alt="Bg image" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover img-fluid z-0" width="1920" height="581">
            <div class="position-absolute top-0 start-0 w-100 h-100 z-1" style="background-image: linear-gradient(-90deg, #0018655C, #001865);"></div>
            <div class="container py-4 py-md-5 position-relative z-3">
                <div class="col-xl-8 text-center mx-auto">  
                    <h2 class="display-6 fw-bold text-white mb-3">We create sales, leads, and new business opportunities for our clients.</h2>
                    <p class="text-white col-xxl-9 mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    <div class="mt-4">
                        <a href="#" class="btn btn-primary text-uppercase" aria-label="Discover more">
                            <span>Discover more</span>
                        </a>
                    </div>
                </div>

                <div class="row g-3 row-cols-2 row-cols-sm-2 row-cols-md-4 text-center mt-4 mt-lg-5">
                    <div>
                        <p class="mb-0 display-4 fw-bold text-white"><span class="counter" data-count="14">0</span>K+</p>
                        <p class="mb-0 text-white opacity-75">Project Done</p>
                    </div><!--.item-->
                    <div>
                        <p class="mb-0 display-4 fw-bold text-white"><span class="counter" data-count="6">0</span>K+</p>
                        <p class="mb-0 text-white opacity-75">Happy Clients</p>
                    </div><!--.item-->
                    <div>
                        <p class="mb-0 display-4 fw-bold text-white"><span class="counter" data-count="4.7">0</span>K+</p>
                        <p class="mb-0 text-white opacity-75">User Ratings</p>
                    </div><!--.item-->
                    <div>
                        <p class="mb-0 display-4 fw-bold text-white"><span class="counter" data-count="15">0</span>K+</p>
                        <p class="mb-0 text-white opacity-75">Years of Experience</p>
                    </div><!--.item-->
                </div><!--.row-->
            </div><!--.container-->
        </section>
        <!-- promo wrapper end -->
 
    </main>


    <!-- testimonial wrapper start -->
    <?php include('includes/testimonials.inc.php'); ?> 
    <!-- testimonial wrapper end --> 
     
    <!-- contact wrapper start -->
    <?php include('includes/contact-section.inc.php'); ?>
    <!-- contact wrapper end -->
   
    <!-- Footer and Script List --> 
    <?php include_once('includes/footer.inc.php'); ?> 
    <!-- counter script -->
    <?php include('includes/counter-script.inc.php'); ?>
 
</body>
</html>
 