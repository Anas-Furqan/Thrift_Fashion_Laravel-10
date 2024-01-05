@extends('layout.MainLayout')
@section('hf')

@section('link')
    <!-- ALL LINKS -->
    <link rel="stylesheet" href="../assets/css/aos.css">
    <link rel="stylesheet" href="../assets/css/checkout.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
        integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- ALL SCRIPTS -->
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection




<hr>
<div class="container d-lg-flex">
    <div class="box-1 bg-light user">

        <div class="box-inner-1 pb-3 mb-3 ">
            <div class="d-flex justify-content-between mb-3 userdetails">
                <h1 class="fw-bold">Checkout</h1>

            </div>
            <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel"
                data-bs-interval="2000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#my" data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#my" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#my" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/images/pic1.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/images/pic2.jpg" class="d-block w-100 h-100">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/images/pic4.jpg" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#my" data-bs-slide="prev">
                    <div class="icon">
                        <span class="fas fa-arrow-left"></span>
                    </div>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#my" data-bs-slide="next">
                    <div class="icon">
                        <span class="fas fa-arrow-right"></span>
                    </div>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <p class="dis info my-3">Follow all fashion trends by shopping with Thrift shopping store. We give foremost
                priority to our customers because we solely exist to provide value for you. Share your stories or
                experiences with us, we are always all ears for you.
            </p>


            <div class="">
                <span class=""></span>
                <div style="padding: 20px;">
                    <i class="bi bi-bag-heart-fill" style="color: blue;font-size:80px; margin: 5px;"></i>
                    <i class="bi bi-shop" style="color: rgba(231, 5, 35, 0.747);font-size:80px ; margin: 5px;"></i>
                    <i class="bi bi-cart3" style="color: rgba(6, 100, 6, 0.555);font-size:80px; margin: 5px;"> </i>

                </div>

                </label>
                <label for="two" class="box py-2 second">
                    <div class="d-flex">
                        <span class="circle"></span>
                        <div class="course">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="fw-bold">
                                    Men Collection
                                </span>
                                <span>30% OFF</span>
                            </div>
                            <span>New Summar Sales</span>
                        </div>
                    </div>
                </label>
                <label for="three" class="box py-2 third">
                    <div class="d-flex">
                        <span class="circle"></span>
                        <div class="course">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="fw-bold">
                                    Women Collection
                                </span>
                                <span>30% OFF</span>
                            </div>
                            <span>New Summar Sales</span>
                        </div>
                    </div>
                </label>
            </div>
        </div>
    </div>
    <div class="box-2">
        <div class="box-inner-2">
            <div>
                <p class="fw-bold">Payment Details</p>
                <p class="dis mb-3">Complete your purchase by providing your payment details</p>
            </div>
            <form action="">
                <div class="mb-3">
                    <p class="dis fw-bold mb-2">Email address</p>
                    <input class="form-control" type="email" value="">
                </div>
                <div>
                    <p class="dis fw-bold mb-2">Card details</p>
                    <div class="d-flex align-items-center justify-content-between card-atm border rounded">
                        <div class="fab fa-cc-visa ps-3"></div>
                        <input type="text" class="form-control" placeholder="Card Details">
                        <div class="d-flex w-50">
                            <input type="text" class="form-control px-0" placeholder="MM/YY">
                            <input type="password" maxlength=3 class="form-control px-0" placeholder="CVV">
                        </div>
                    </div>
                    <div class="my-3 cardname">
                        <p class="dis fw-bold mb-2">Cardholder name</p>
                        <input class="form-control" type="text">
                    </div>
                    <div class="address">
                        <p class="dis fw-bold mb-3">Billing address</p>
                        <select class="form-select" aria-label="Default select example">
                            <option selected hidden>Country</option>
                            <option value="1">Pakistan</option>
                            <option value="2">UAE</option>
                            <option value="3">China</option>
                        </select>
                        <div class="d-flex">
                            <input class="form-control zip" type="text" placeholder="ZIP">
                            <input class="form-control state" type="text" placeholder="State">
                        </div>
                        <div class=" my-3">
                            <p class="dis fw-bold mb-2">VAT Number</p>
                            <div class="inputWithcheck">
                                <input class="form-control" type="text" value="">
                                <span class="fas fa-check"></span>

                            </div>
                        </div>
                        <div class="d-flex flex-column dis">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p>Subtotal</p>
                                <p><span class="fas fa-dollar-sign"></span></p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p>VAT<span>(30%)</span></p>
                                <p><span class="fas fa-dollar-sign"></span></p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="fw-bold">Total</p>
                                <p class="fw-bold"><span class="fas fa-dollar-sign"></span>35.80</p>
                            </div>
                            <div class="btn btn-primary mt-2">Pay<span class="fas fa-dollar-sign px-1"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- fsdfs -->

<hr>
<section>
    <div class="container">
        <div class="row">

            <div class="col-md-4 about">

                <div class="row">
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

                <div class="row ">
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

                <div class="row">
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
</section><br><br> <!-- aboutsection -->
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
