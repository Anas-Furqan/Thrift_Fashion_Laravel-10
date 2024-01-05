@extends('layout.MainLayout')
@section('hf')

@section('link')
    <!-- ALL LINKS -->
    <link rel="stylesheet" href="../assets/css/about.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/product.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/about_style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- ALL SCRIPTS -->
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/bootstrap/popper.min.js"></script>
    <script src="../assets/bootstrap/jquery.slim.min.js"></script>
    <script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
@endsection



<hr>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center ">
                <!-- <h2 class="heading-section">Contact Form #02</h2> -->
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 shadow p-0 mb-3 bg-body rounded">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                            <div class="contact-wrap w-100 p-md-5 p-4 rounded-right">
                                <h3 class="mb-4">Contact Us </h3>
                                @if (session('SuccessMessage'))
                                    <div class="alert alert-success w-75">
                                        {{ session('SuccessMessage') }}
                                    </div>
                                @endif
                                <form method="POST" action="/contactForm" id="contactForm" name="contactForm"
                                    class="contactForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="name">Full Name</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">Email Address</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="subject">Subject</label>
                                                <input type="text" class="form-control" name="subject" id="subject"
                                                    placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="#">Message</label>
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Send Message" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap bg-primary w-100 p-md-5 p-4 rounded-left">
                                <h3>Thrift Fashion</h3>
                                <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <i class="bi bi-telephone-inbound"></i>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="bi bi-envelope"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Email:</span> <a
                                                href="mailto:info@thridtfashion.com">info@thriftfashion.com</a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <i class="bi bi-info-circle-fill"></i>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Website</span> <a href="#">ThriftFahsion.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section>
    <div class="container">
        <div class="row">

            <div class="col-md-4 about">

                <div class="row ">
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

                <div class="row ">
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
</section>
<hr>
<!-- f -->
<section class="banner">


    <div class="container">
        <h1>THANKS FOR VISITING</h1>
        <h3>Read more about ThriftFashion by clicking below!</h3>
        <a href="">Read More </a>


    </div>


</section>



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
