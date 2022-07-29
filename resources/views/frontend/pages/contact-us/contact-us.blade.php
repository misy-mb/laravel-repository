@extends('frontend.layout.frontendCoffeeLayout')
@section('title', 'Contact us')
@section('style')

@endsection
@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div>
        </div>

        <div class="container" data-aos="fade-up">
            <iframe style="border:0; width: 100%; height: 350px;"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31270.74137098702!2d104.894469!3d11.563134!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109510a48c53e7d%3A0xc0a9568a0b0c4f35!2zMjAwIOGeleGfkuGem-GevOGenOGem-GfgeGegSDhn6Hhn6Xhn6YsIOGemuGetuGeh-GekuGetuGek-GeuOKAi-Gel-GfkuGek-GfhuGeluGfgeGeiQ!5e0!3m2!1skm!2skh!4v1657032268798!5m2!1skm!2skh"
                frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container" data-aos="fade-up">
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p> No.200 St.156, Teuk La ark 2, Toul Kork, 120405, Phnom Penh, Kingdom of Cambodia </p>
                        </div>

                        <div class="open-hours">
                            <i class="bi bi-clock"></i>
                            <h4>Open Hours:</h4>
                            <p>
                                Monday-Sunday:<br>
                                8:00 AM - 8:00 PM
                            </p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-left"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->
@endsection
