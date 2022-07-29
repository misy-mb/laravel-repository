@extends('frontend.layout.frontendCoffeeLayout')
@section('title', 'Menu')
@section('style')

@endsection
@section('content')
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Menu</h2>
                <p>Check Our Tasty Menu</p>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="menu-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-starters">Starter</li>
                        <li data-filter=".filter-salads">Salads</li>
                        <li data-filter=".filter-specialty">Specialty</li>
                        <li data-filter=".filter-coffee">Coffee</li>
                        <li data-filter=".filter-food">Food</li>
                        <li data-filter=".filter-noodle">Noodle</li>
                    </ul>
                </div>
            </div>
            <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
                {{-- noodle --}}
                <div class="col-lg-6 menu-item filter-noodle">
                    <img src="assets/img/menu/borom/yellow-noodle.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Fried Noodle</a><span>$5.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>
                <div class="col-lg-6 menu-item filter-food">
                    <img src="assets/img/menu/borom/duck.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Duck egg</a><span>$5.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>
                <div class="col-lg-6 menu-item filter-food">
                    <img src="assets/img/menu/borom/duck.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Troyor</a><span>$2.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>
                <div class="col-lg-6 menu-item filter-coffee">
                    <img src="assets/img/menu/borom/hot-capuchino.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Ice Latte</a><span>$2.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>
                <div class="col-lg-6 menu-item filter-starters">
                    <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Lobster Bisque</a><span>$5.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>
                <div class="col-lg-6 menu-item filter-specialty">
                    <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Bread Barrel</a><span>$6.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>
                <div class="col-lg-6 menu-item filter-starters">
                    <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Crab Cake</a><span>$7.95</span>
                    </div>
                    <div class="menu-ingredients">
                        A delicate crab cake served on a toasted roll with lettuce and tartar sauce
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-salads">
                    <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Caesar Selections</a><span>$8.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-specialty">
                    <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Tuscan Grilled</a><span>$9.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Grilled chicken with provolone, artichoke hearts, and roasted red pesto
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-starters">
                    <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Mozzarella Stick</a><span>$4.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-salads">
                    <img src="assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Greek Salad</a><span>$9.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Fresh spinach, crisp romaine, tomatoes, and Greek olives
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-salads">
                    <img src="assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Spinach Salad</a><span>$9.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-specialty">
                    <img src="assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Lobster Roll</a><span>$12.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Menu Section -->
    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Reservation</h2>
                <p>Book a Table</p>
            </div>

            <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form"
                data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control" name="phone" id="phone"
                            placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="text" name="date" class="form-control" id="date" placeholder="Date"
                            data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="text" class="form-control" name="time" id="time" placeholder="Time"
                            data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="number" class="form-control" name="people" id="people"
                            placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm
                        your reservation. Thank you!</div>
                </div>
                <div class="text-left"><button type="submit">Book a Table</button></div>
            </form>
        </div>
    </section><!-- End Book A Table Section -->
@endsection
