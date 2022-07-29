@extends('frontend.layout.frontendCoffeeLayout')
@section('title', 'Service')
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
                <div class="col-lg-6 order-1 order-lg-1" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="assets/img/menu/borom/banner-cafe.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content">
                    <h3>What Do We Offer For You?</h3>
                    <p class="fst-italic">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
                        ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <p>
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
                        ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i>Quality Products</li>
                        <li><i class="bi bi-check-circle"></i> Custom Products</li>
                        <li><i class="bi bi-check-circle"></i>Online Order</li>
                        <li><i class="bi bi-check-circle"></i> Home Delivery</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
    <!-- Product Start -->
    <div class="container-xxl-p py-6" id="bg-product-overlay">
        <div class="container" data-aos="fade-up">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-aos="zoom-in" data-aos-delay="100"
                style="max-width: 500px;">
                {{-- <p class="text-primary text-uppercase mb-2">// Bakery Products</p> --}}
                <h1 class="display-6 mb-4">We Bake Every Item From The Core Of Our Hearts</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-aos="zoom-in" data-aos-delay="300">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">$11 - $99</div>
                            <h3 class="mb-3">Cake</h3>
                            <span>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</span>
                        </div>
                        <div class="position-relative mt-auto text-center">
                            <img class="img-fluid" src="assets/img/menu/borom/chicken-rice.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="">
                                    <i class='bx bx-low-vision'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-aos="zoom-in" data-aos-delay="500">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">$11 - $99</div>
                            <h3 class="mb-3">Bread</h3>
                            <span>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</span>
                        </div>
                        <div class="position-relative mt-auto text-center">
                            <img class="img-fluid" src="assets/img/menu/borom/duck.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="">
                                    <i class='bx bx-low-vision'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-aos="zoom-in" data-aos-delay="700">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">$11 - $99</div>
                            <h4 class="mb-3">Cookies</h4>
                            <span>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</span>
                        </div>
                        <div class="position-relative mt-auto text-center">
                            <img class="img-fluid" src="assets/img/menu/borom/prohet.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="">
                                    <i class='bx bx-low-vision'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->
    <!-- Product Start -->
    <div class="container-xxl-p py-6" id="bg-product-overlay">
        <div class="container" data-aos="fade-up">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-aos="zoom-in" data-aos-delay="100"
                style="max-width: 500px;">
                {{-- <p class="text-primary text-uppercase mb-2">// Bakery Products</p> --}}
                <h1 class="display-6 mb-4">We Bake Every Item From The Core Of Our Hearts</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-aos="zoom-in" data-aos-delay="300">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">$11 - $99</div>
                            <h3 class="mb-3">Ice Latte</h3>
                            <span>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</span>
                        </div>
                        <div class="position-relative mt-auto text-center">
                            <img class="img-fluid" src="assets/img/menu/borom/prohet.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="">
                                    <i class='bx bx-low-vision'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-aos="zoom-in" data-aos-delay="500">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">$11 - $99</div>
                            <h3 class="mb-3">Bread</h3>
                            <span>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</span>
                        </div>
                        <div class="position-relative mt-auto text-center">
                            <img class="img-fluid" src="assets/img/menu/borom/passion.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="">
                                    <i class='bx bx-low-vision'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-aos="zoom-in" data-aos-delay="700">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">$11 - $99</div>
                            <h4 class="mb-3">Cookies</h4>
                            <span>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</span>
                        </div>
                        <div class="position-relative mt-auto text-center">
                            <img class="img-fluid" src="assets/img/menu/borom/prohet.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="">
                                    <i class='bx bx-low-vision'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->
@endsection
<style>
    /*** Product ***/
    #main .container-xxl-p.py-6 {
        background-size: cover;
        padding: 6% 6%;
        position: relative;

    }

    #main .container-xxl-p.py-6 .about:before {
        content: "";
        background: rgba(0, 0, 0, 0.8);
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
    }

    #main .container-xxl-p.py-6 .product-item {
        transition: .5s;
        background-color: #1A1819 !important;
        border: 1px solid #cda45e;
    }

    #main .container-xxl-p.py-6 .product-item:hover {
        background: #cda45e !important;
    }

    #main .container-xxl-p.py-6 .product-item:hover * {
        color: #FFFFFF;
    }

    #main .container-xxl-p.py-6 .product-item:hover .border-primary {
        border-color: #FFFFFF !important;
    }

    #main .container-xxl-p.py-6 .product-item .product-overlay {
        position: absolute;
        width: 100%;
        height: 0;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, .5);
        overflow: hidden;
        opacity: 0;
        transition: .5s;
    }

    #main .container-xxl-p.py-6 .product-item:hover .product-overlay {
        height: 100%;
        opacity: 1;
    }
</style>
