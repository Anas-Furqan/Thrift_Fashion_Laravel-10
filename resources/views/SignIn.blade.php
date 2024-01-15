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



<style>
    .signUpFormIllustration{
        
    }
</style>

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
                                <h3 class="mb-4">Log In To Your Account </h3>
                                @if (session()->has('SuccessMessage'))
                                    <div class="alert alert-success w-75">
                                        {{ session()->get('SuccessMessage') }}
                                    </div>
                                @endif
                                @if (session()->has('ErrorMessage'))
                                    <div class="alert alert-danger w-75">
                                        {{ session()->get('ErrorMessage') }}
                                    </div>
                                @endif
                                <form method="POST" action="/SignInForm" id="SignInForm" name="SignInForm"
                                    class="contactForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 mt-3">
                                            <div class="form-group">
                                                <label class="label" for="#">Email Address</label>
                                                <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                                            </div>
                                        </div> 
                                        <div class="col-md-12 mt-3">
                                            <div class="form-group">
                                                <label class="label" for="name">Password</label>
                                                <input type="password" class="form-control" name="pass" id="pass"
                                                    placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary rounded">Login</button>
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <div class="form-group">
                                                <a href="/form" class="ms-5 btn btn-info">Create new account</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap bg-primary w-100 rounded-left">
                                <img src="../assets/images/signUpFormIllustration.jpg" height="534.59px" width="388px" class="signUpFormIllustration" alt="">
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
    </script>
@endsection

@endsection
