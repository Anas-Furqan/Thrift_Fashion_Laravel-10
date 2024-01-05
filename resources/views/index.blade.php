@extends('layout.MainLayout')
@section('hf')

@section('link')

<!-- ALL LINKS -->
<link rel="stylesheet" href="./assets/css/aos.css">
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="./assets/css/bootstrap.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- ALL SCRIPTS -->
<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="	https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection
    <hr>
    <!-- slider -->
    <section class="slide">


        <div class="row">
            <div class="col-md-6 col-12">
                <div id="carouselExampleIndicators" style="width: 100%;" class="carousel slide carousel-fade "
                    data-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./assets/images/pro1.webp" alt="...">
                            <div class="carousel-caption">
                                <h1 class="animated fadeInRight  caption1" style="animation-delay: 0.1s;">FASHION</h1>
                                <h2 class="caption2 animated fadeInLeft " style="animation-delay: 0.2s;">IS</h2>
                                <h3 class="caption3 animated fadeInRight " style="animation-delay: 0.1s;">EVERYTHING</h3>
                                <a href="" class="caption4 animated fadeInDown" style="animation-delay: 0.3s;">VISIT
                                    MORE</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/images/pro2.jpeg" alt="...">
                            <div class="carousel-caption">
                                <h1 class="animated fadeInUp  caption7" style="animation-delay: 0.2s;">BRANDED </h1>
                                <h2 class="caption6 animated fadeInLeft" style="animation-delay: 0.3s;">ITEMS</h2>
                                <h3 class="caption8 animated fadeInDown" style="animation-delay: 0.4s;">LESS PRICE</h3>
                                <a href="" class="caption10">VISIT MORE</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/images/pro3.jpeg" alt="...">
                            <div class="carousel-caption">
                                <h1 class="animated fadeInUp  caption12" style="animation-delay: 0.2s;">NEED OUTFIT?</h1>
                                <h2 class="caption11 fadeInDown" style="animation-delay: 0.3s;">WE HAVE</h2>
                                <h3 class="caption3 fadeInLeft" style="animation-delay: 0.4s;">EVERYTHING</h3>
                                <a href="" class="caption4">VISIT MORE</a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">

                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">

                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-md-3 col-6 container-fluid">

                <div class="titles">

                    <div class="back">
                        <h1 id="text">Men's Fashion</h1>
                        <a href="" id="text2">BUY NOW</a>

                    </div>
                </div>


                <div class="titles">

                    <div class="back3">
                        <h1 id="text3">Women's fashion</h1>
                        <a href="" id="text4">BUY NOW</a>

                    </div>
                </div>

            </div>
            <div class="col-md-3 col-6 container">
                <div class="titles2">

                    <div class="back3">
                        <h1 id="text">Foot-Wears</h1>
                        <a href="" id="text6">BUY NOW</a>

                    </div>


                </div>
                <div class="titles2">

                    <div class="back">
                        <h1 id="text">Kid's Fashion</h1>

                        <a href="" id="text5">BUY NOW</a>

                    </div>
                </div>
            </div>
        </div>


        </div>
        <hr>
    </section>

    <!-- section2 -->
    <br>
    <section class="tags">

        <div class="container">

            <div class="row">


                <div class="col-md-2 col-6"><a href="">JACKETS</a></div><br>

                <br>
                <div class="col-md-2 col-6 "><a href="">SUITS</a></div>
                <br>
                <div class="col-md-2 col-6"><a href="">JACKETS</a></div><br>

                <br>
                <div class="col-md-2 col-6 "><a href="">SUITS</a></div>
                <br>
                <div class="col-md-2 col-6"><a href="">JACKETS</a></div><br>

                <br>
                <div class="col-md-2 col-6 "><a href="">SUITS</a></div>
                <br>




            </div>

        </div>


    </section><br>
    <hr>
    <!-- section2 -->
    <section class="arrivals ">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-3 col-6">

                    <div class="titles3">

                        <div class="back2">
                            <h1 id="text">New Arrivals</h1>
                            <a href="" id="text5">BUY NOW</a>

                        </div>
                    </div>


                </div>

                <div class="col-md-8">



                    <div class="row">

                        <div class="col-md-3 col-6 ">




                            <center>
                                <div class="cards">

                                    <img src="./assets/images/pro6.png" alt="">



                                    <h5>DENIM JACKET</h5>
                                    <h6>Denim jacket for men.</h6>
                                    <p>PRICE: <b>$4.00</b></p>
                                    <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                                </div>
                            </center>

                        </div>
                        <div class="col-md-3 col-6  ">




                            <center>
                                <div class="cards">

                                    <img src="./assets/images/pro8.png" alt="">



                                    <h5>DENIM JACKET</h5>
                                    <h6>Denim jacket for men.</h6>
                                    <p>PRICE: <b>$4.00</b></p>
                                    <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                                </div>
                            </center>

                        </div>
                        <div class="col-md-3 col-6 ">




                            <center>
                                <div class="cards">

                                    <img src="./assets/images/pro7.png" alt="">



                                    <h5>DENIM JACKET</h5>
                                    <h6>Denim jacket for men.</h6>
                                    <p>PRICE: <b>$4.00</b></p>
                                    <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                                </div>
                            </center>

                        </div>
                        <div class="col-md-3 col-6 ">




                            <center>
                                <div class="cards">

                                    <img src="./assets/images/3.png" alt="">



                                    <h5>DENIM JACKET</h5>
                                    <h6>Denim jacket for men.</h6>
                                    <p>PRICE: <b>$4.00</b></p>
                                    <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                                </div>
                            </center>

                        </div>


                    </div>
                </div>












            </div>

        </div>



        </div>






    </section><br>
    <hr>

    <!-- arrivals -->


    <section class="upcoming">


        <div class="container">
            <h1>MONTHLY DEALS</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing <br> elit. Officia quasi incidunt officiis expedita
                ratione dolorum esse, placeat quod dignissimos quidem rem <br> ab doloremque similique debitis inventore
                minima qui enim reprehenderit?</p>
            <div class="timer">

                <div id="DAY">N/A</div>

                <div id="HOUR">N/A</div>
                <div id="MINUTES">N/A</div>
                <div id="SECONDS">N/A</div>


            </div>


        </div>





    </section>

    <!-- popular -->
    <br>
    <hr>
    <section class="pro">
        <div class="container-fluid">


            <div class="container">
                <h1>Popular Products</h1>
                <br>
                <div class="row">

                    <div class="col-md-3  reveal">




                        <center>
                            <div class="cards2">

                                <img src="./assets/images/pro0.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>
                    <div class="col-md-3  reveal">




                        <center>
                            <div class="cards2">

                                <img src="./assets/images/5.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>
                    <div class="col-md-3   reveal">




                        <center>
                            <div class="cards2">

                                <img src="./assets/images/8.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>
                    <div class="col-md-3  reveal">




                        <center>
                            <div class="cards2">

                                <img src="./assets/images/9.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div><br>
                </div><br>
                <hr>
                <div class="row">


                    <div class="col-md-3 reveal">
                        <center>
                            <div class="cards2">

                                <img src="./assets/images/19.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>

                    <br>
                    <div class="col-md-3 reveal">
                        <center>
                            <div class="cards2">

                                <img src="./assets/images/16.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>
                    <br>
                    <div class="col-md-3  reveal">




                        <center>
                            <div class="cards2">

                                <img src="./assets/images/23.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>
                    <br>
                    <div class="col-md-3  reveal">




                        <center>
                            <div class="cards2">

                                <img src="./assets/images/24.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>
                </div>
            </div>


        </div>
    </section>



    <br>
    <hr>


    <!-- popular -->
    <section class="sliders">
        <div class="row">
            <div class="col-md-6 tag">

                <br>
                <center></center>
            </div>

            <div class="col-md-6">



                <div class="owl-carousel ">
                    <div class="item">




                        <center>
                            <div class="cards4">

                                <img src="./assets/images/23.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>
                    <div class="item">




                        <center>
                            <div class="cards4">

                                <img src="./assets/images/23.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>
                    <div class="item">




                        <center>
                            <div class="cards4">

                                <img src="./assets/images/23.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>
                    <div class="item">




                        <center>
                            <div class="cards4">

                                <img src="./assets/images/23.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>
                    <div class="item">




                        <center>
                            <div class="cards4">

                                <img src="./assets/images/23.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>
                    <div class="item">




                        <center>
                            <div class="cards4">

                                <img src="./assets/images/23.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>
                    <div class="item">




                        <center>
                            <div class="cards4">

                                <img src="./assets/images/23.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>
                    <div class="item">




                        <center>
                            <div class="cards4">

                                <img src="./assets/images/23.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <br>
    <hr>
    <!-- popular -->

    <!-- deals -->
    <section class="pro">
        <div class="container-fluid">


            <div class="container">
                <h1>Deals Of The Week</h1>
                <br>
                <div class="row">

                    <div class="col-md-3 reveal">




                        <center>
                            <div class="cards2">

                                <img src="./assets/images/pro0.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>
                    <div class="col-md-3 reveal">




                        <center>
                            <div class="cards2">

                                <img src="./assets/images/5.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>
                    <div class="col-md-3 reveal">




                        <center>
                            <div class="cards2">

                                <img src="./assets/images/8.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>
                    <div class="col-md-3 reveal">




                        <center>
                            <div class="cards2">

                                <img src="./assets/images/9.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div><br>



                </div><br>
                <hr>
                <div class="row">


                    <div class="col-md-3 reveal">




                        <center>
                            <div class="cards2">

                                <img src="./assets/images/19.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>



                    <br>
                    <div class="col-md-3 reveal">




                        <center>
                            <div class="cards2">

                                <img src="./assets/images/16.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>
                    <br>
                    <div class="col-md-3 reveal">




                        <center>
                            <div class="cards2">

                                <img src="./assets/images/23.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>
                    <br>
                    <div class="col-md-3 reveal">




                        <center>
                            <div class="cards2">

                                <img src="./assets/images/24.png" alt="">



                                <h5>DENIM JACKET</h5>
                                <h6>Denim jacket for men.</h6>
                                <p>PRICE: <b>$4.00</b></p>
                                <a href=""><i class="bi bi-cart-check"></i>&nbsp;Add To Cart</a>
                            </div>
                        </center>

                    </div>
                </div>
            </div>


        </div>
    </section><br>


    <hr>
    <section>
        <div class="container">
            <div class="row">

                <div class="col-md-4 about">

                    <div class="row reveal">
                        <div class="col-md-4">
                            <center><img src="https://img.icons8.com/dotty/50/000000/discount.png" /></center>
                        </div>
                        <div class="col-md-8">
                            <h3>Weekly Discounts</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 about">

                    <div class="row reveal">
                        <div class="col-md-4">
                            <center><img src="https://img.icons8.com/ios/50/000000/card-security.png" /></center>
                        </div>
                        <div class="col-md-8">
                            <h3>Secure Payments.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 about abouts">

                    <div class="row reveal">
                        <div class="col-md-4">
                            <center><img src="https://img.icons8.com/ios/50/000000/last-24-hours.png" /></center>
                        </div>
                        <div class="col-md-8">
                            <h3>Deliver At time.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section><br><br>
    <!-- aboutsection -->
    <section class="banner">


        <div class="container">
            <h1>THANKS FOR VISITING</h1>
            <h3>Read more about ThriftFashion by clicking below!</h3>
            <a href="">Read More </a>

        </div>

    </section>

    <!-- ase -->

@section('script')
    <script>
        window.addEventListener('scroll', reveal);

        function reveal() {

            var reveals = document.querySelectorAll('.reveal');
            for (var i = 0; i < reveals.length; i++) {



                var windowheight = window.innerHeight;

                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;


                if (revealtop < windowheight - revealpoint) {


                    reveals[i].classList.add('active');

                } else {
                    reveals[i].classList.remove('active');
                }


            }

        }


        // timer


        var countdate = new Date('Aug 20,2022 00:00:00').getTime();

        function WeeklyDeals() {
            var now = new Date().getTime();
            gap = countdate - now;

            var second = 1000;
            var minute = second * 60;
            var hour = minute * 60;
            var day = hour * 24;
            var d = Math.floor(gap / (day));
            var h = Math.floor((gap % (day)) / (hour));
            var m = Math.floor((gap % (hour)) / (minute));
            var s = Math.floor((gap % (minute)) / (second));

            document.getElementById('DAY').innerHTML = d;
            document.getElementById('HOUR').innerHTML = h;
            document.getElementById('MINUTES').innerHTML = m;
            document.getElementById('SECONDS').innerHTML = s;




        }
        setInterval(function() {
            WeeklyDeals();
        }, 1000)

        // endtimer

        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })

        // carousel

        $('.owl-carousel').owlCarousel({
            loop: false,
            margin: 10,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3


                }
            }
        })
    </script>
@endsection


@endsection
