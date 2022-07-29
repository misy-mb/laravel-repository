@extends('frontend.layout.frontendCoffeeLayout')
@section('title', 'About us')
@section('style')
@endsection
@section('slider')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Welcome to <span>BOROM</span></h1>
                    <h2>Delivering great food for more than 18 years!</h2>

                    <div class="btns">
                        <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
                        <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in"
                    data-aos-delay="200">
                    <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="glightbox play-btn"></a>
                </div>

            </div>
        </div>
    </section><!-- End Hero -->
@endsection
@section('content')

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="assets/img/about.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                        </li>
                        <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                            aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat
                            nulla pariatur.</li>
                    </ul>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->
    <!-- Facts Start -->
    <div class="container-xxl py-6">
        <div class="container" data-aos="fade-up">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeIn" data-aos="zoom-in" data-aos-delay="100">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="bx bxs-certification fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Years Experience</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">50</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-aos="zoom-in" data-aos-delay="300">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="bx bxs-user fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Skilled Professionals</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">175</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-aos="zoom-in" data-aos-delay="500">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="bx bxl-product-hunt fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Total Products</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">135</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-aos="zoom-in" data-aos-delay="700">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="bx bx-cart fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Order Everyday</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">9357</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


@endsection
<style>
    /*** Facts ***/
    #main .container-xxl.py-6 {
        padding: 4% 6%;
    }

    #main .container-xxl.py-6 .fact-item {
        background-color: #1A1819 !important;
    }

    #main .container-xxl.py-6 .fact-item {
        transition: .5s;
        padding-top: 6rem;
        padding-bottom: 6rem;
        border: 1px solid #cda45e;
    }

    #main .container-xxl.py-6 .fact-item:hover {
        margin-top: -10px;
        /*background: #cda45e !important;*/
        box-shadow: 0 0 45px rgba(0, 0, 0, .07) !important;
        color: #FFFFFF !important;
    }

    /*#main .container-xxl .bg-light {*/
    /*    padding: 10% 6%;*/
    /*    !*background-color: fixed;*!*/
    /*}*/


    #main .container-xxl.py-6 .bx {
        font-size: 4.1rem;
        color: #cda45e !important;
    }

    /*#main .container-xxl.py-6:hover .bx {*/
    /*    color:#fff !important;*/
    /*}*/
</style>
