<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <!-- ALL LINKS -->
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/product.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/bootstrap/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- ALL SCRIPTS -->
    <script src="./assets/js/bootstrap.js"></script>
    <script src="./assets/js/jquery-3.6.0.js"></script>
    <script src="./assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>

<body>
    <!-- header nav -->
    <section class="newnavbar">

        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img
                        src="./assets/images/thrift fashion logo-01.png"style="width:100%;height:150px;"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ URL::TO('/') }}"><i
                                    class="bi bi-house-door"></i>&nbsp;Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::TO('productPage') }}"><i
                                    class="bi bi-shop"></i>&nbsp;Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::TO('contactPage') }}"><i
                                    class="bi bi-envelope"></i>&nbsp;Contact Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-list-stars"></i>&nbsp;Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ URL::TO('productPage') }}">Men</a></li>
                                <li><a class="dropdown-item" href="{{ URL::TO('productPage') }}">Women</a></li>
                                <li><a class="dropdown-item" href="{{ URL::TO('productPage') }}">Kids</a></li>
                                <li><a class="dropdown-item" href="{{ URL::TO('productPage') }}">Footwear</a></li>
                                <li><a class="dropdown-item" href="{{ URL::TO('productPage') }}">Bags</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <a class=" a" href="{{ URL::TO('about') }}"><i class="bi bi-info"></i>&nbsp;About</a>

                <a class=" a" href="{{ URL::TO('checkout') }}"><i class="bi bi-cart"></i>&nbsp;Check Out</a>

                <button type="button" class=" modalbutton " data-toggle="modal" data-target="#myModal"><i
                        class="bi bi-search"></i></button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                                <p>This is a large modal.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </nav>



    </section>
    <hr>
    <!-- heading -->
    <center>

        <h1
            style="background:linear-gradient(rgba(247, 203, 10, 0.822),rgba(0, 0, 0, 0.404)),url(./assets/images/product-1.jpg);color:white; padding: 30px;background-position: center;background-size:cover ;">
            Products</h1>


    </center>
    <hr>
    <div class="container-fluid">



        <div class="col-md-12">
            <div class="row">

                <div class="col-md-3 " id="first-card">
                    <span data-testid="grid-filter-DEPARTMENTS"><span aria-label="Departments filter">
                            <div></div><br>
                            <div class="bord"
                                style=" box-shadow: 0 0 20px rgba(128, 128, 128, 0.726); padding: 10px;border: 4px solid orange; border-radius: 8px;">
                                <div>
                                    <div style="box-shadow: 0 0 20px gray; background-color: black;border-radius:8px;">
                                        <center><strong
                                                style="padding:10px;font-size: 35px;color:rgb(243, 237, 237);text-shadow: 2px 2px gray;">CATEGORIES</strong>
                                        </center>
                                    </div>
                                    <hr>
                                    <div><label>
                                            <input type="checkbox" class="">
                                            <span style="font-size:20px ;color: rgb(0, 0, 0);">Shirts</span></label>
                                    </div>
                                </div>
                                <hr>
                                <div>
                                    <div><label><input class="inputes" type="checkbox"><span
                                                style="font-size:20px ;color: rgb(0, 0, 0);"> T-Shirts</span></label>
                                    </div>
                                </div>
                                <hr>
                                <div>
                                    <div><label><input type="checkbox"><span
                                                style="font-size:20px ;color: rgb(0, 0, 0);"> Loafer Shoes for Boys
                                            </span></label></div>
                                </div>
                                <hr>
                                <div>
                                    <div><label><input type="checkbox"><span
                                                style="font-size:20px ;color: rgb(0, 0, 0);"> Loafer Shoes for Girls
                                            </span></label></div>
                                </div>
                                <hr>
                                <div>
                                    <div><label><input type="checkbox"><span
                                                style="font-size:20px ;color: rgb(0, 0, 0);"> Sandal For
                                                Boys</span></label></div>
                                </div>
                                <hr>
                                <div>
                                    <div><label><input type="checkbox"><span
                                                style="font-size:20px ;color: rgb(0, 0, 0);"> Sandal For
                                                Girls</span></label></div>
                                </div>
                                <hr>
                                <div>
                                    <div><label><input type="checkbox"><span
                                                style="font-size:20px ;color: rgb(0, 0, 0);"> Joggers
                                                Shoes</span></label></div>
                                </div>
                                <hr>
                                <div>
                                    <div><label><input type="checkbox"><span
                                                style="font-size:20px ;color: rgb(0, 0, 0);"> School
                                                Bags</span></label></div>
                                </div>
                                <hr>
                                <div>
                                    <div><label><input type="checkbox"><span
                                                style="font-size:20px ;color: rgb(0, 0, 0);"> Travel
                                                Bags</span></label></div>
                                </div>
                                <hr>
                                <div>
                                    <div><label><input type="checkbox"><span
                                                style="font-size:20px ;color: rgb(0, 0, 0);"> Hand Bags</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="col-md-3 reveal">
                                    <div class="box">
                                        <div class="s-banner">

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="container">
                                <div class="col-md-3 reveal">
                                    <div class="box">
                                        <div class="l-banner">

                                        </div>
                                    </div>

                                </div>
                            </div>
                </div>
                <!-- filter end -->
                <!-- products start -->

                {{-- <div class="col-md-9">
                    <div class="row">
                        @foreach ($products as $pro)
                            <div class="col-md-3 ">

                                <center>
                                    <div class="cards">

                                        <img src="../{{ $pro->image }}" alt="">
                                        <h5 id="name">{{ $pro->name }}</h5>
                                        <h6 id="description">{{ $pro->description }}</h6>
                                        <p>PRICE: <b>${{ $pro->price }}</b></p>
                                        
                                </center>
                            </div>
                        @endforeach



                    </div>

                </div> --}}

            </div>


        </div>
    </div>

    <!-- products end -->
    <!-- pagination -->
    <hr>
    <center>


        <div class="center reveal">
            <div class="pagination">
                <a href="#">&laquo;</a>
                <a href="{{ URL::TO('productPage') }}">1</a>
                <a href="{{ URL::TO('productPage2') }}">2</a>
                <a href="{{ URL::TO('productPage3') }}">3</a>
                <a href="{{ URL::TO('productPage') }}">4</a>
                <a href="{{ URL::TO('productPage2') }}">5</a>
                <a href="{{ URL::TO('productPage3') }}">6</a>
                <a href="#">&raquo;</a>
            </div>
        </div>
    </center>
    <hr>
    <!-- end -->
    <section class="banner">


        <div class="container">
            <h1>THANKS FOR VISITING</h1>
            <h3>Read more about ThriftFashion by clicking below!</h3>
            <a href="">Read More </a>


        </div>


    </section>
    <!-- footer -->
    <footer>
        <div class="row">
            <div class="col-md-3">
                <h4>Thrift Fashion</h4>
                <ul>
                    <li>
                        <a href="">shoes</a>
                    </li>
                    <li>
                        <a href="">T-shirt</a>
                    </li>
                    <li>
                        <a href="">Pants</a>
                    </li>
                    <li>
                        <a href="">Accessories</a>
                    </li>
                </ul>
                <div class="logos">
                    <a href=""><i class="bi bi-facebook"></i></a> <a href=""><i
                            class="bi bi-instagram"></i></a> <a href=""><i class="bi bi-linkedin"></i></a> <a
                        href=""><i class="bi bi-twitter"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <h4>About</h4>
                <ul>
                    <li>
                        <a href="">About website</a>
                    </li>
                    <li>
                        <a href="">Payment method</a>
                    </li>
                    <li>
                        <a href="">Info</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4>Contact</h4>
                <ul>
                    <li>
                        <span>Email:</span> <a href="">anas2207e@aptechgdn.net</a>
                    </li>
                    <li>
                        <span>Address</span> <a href="">Aptech Garden Center</a>
                    </li>
                    <li>
                        <span>Phone:</span><a href="">+92 317 4724801</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <center>
                    <h4>Thanks For Visiting</h4>
                </center><br>
                <ul>
                    <li>
                        <input type="search" placeholder="Search items...">
                    </li><br>
                    <li>

                        <button type="submit" class="search">Search</button>
                    </li>

                </ul>
            </div>
        </div>
        <hr>
        <center>

            <p>All Rights Reserved ThriftFashion 2023.</p>
        </center>
    </footer>




</body>

</html>
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
    $(document).ready(function() {
        fetch('./data.json')
            .then(response => response.json())
            .then(data => {
                console.log('data is here');
                console.log(data.table);

                $("#name").text(data.table[0].name);
                $("#description").text(data.table[0].description);
                $("#price").text(data.table[0].price);

                $("#name2").text(data.table[1].name);
                $("#description2").text(data.table[1].description);
                $("#price2").text(data.table[1].price);

                $("#name3").text(data.table[2].name);
                $("#description3").text(data.table[2].description);
                $("#price3").text(data.table[2].price);

                $("#name4").text(data.table[3].name);
                $("#description4").text(data.table[3].description);
                $("#price4").text(data.table[3].price);

                $("#name5").text(data.table[4].name);
                $("#description5").text(data.table[4].description);
                $("#price5").text(data.table[4].price);

                $("#name6").text(data.table[5].name);
                $("#description6").text(data.table[5].description);
                $("#price6").text(data.table[5].price);

                $("#name7").text(data.table[6].name);
                $("#description7").text(data.table[6].description);
                $("#price7").text(data.table[6].price);

                $("#name8").text(data.table[7].name);
                $("#description8").text(data.table[7].description);
                $("#price8").text(data.table[7].price);

                $("#name9").text(data.table[8].name);
                $("#description9").text(data.table[8].description);
                $("#price9").text(data.table[8].price);

                $("#name10").text(data.table[9].name);
                $("#description10").text(data.table[9].description);
                $("#price10").text(data.table[9].price);


                $("#name11").text(data.table[10].name);
                $("#description11").text(data.table[10].description);
                $("#price").text(data.table[10].price);

                $("#name12").text(data.table[11].name);
                $("#description12").text(data.table[11].description);
                $("#price12").text(data.table[11].price);

                $("#name13").text(data.table[12].name);
                $("#description13").text(data.table[12].description);
                $("#price13").text(data.table[12].price);

                $("#name14").text(data.table[13].name);
                $("#description14").text(data.table[13].description);
                $("#price14").text(data.table[13].price);

                $("#name15").text(data.table[14].name);
                $("#description15").text(data.table[14].description);
                $("#price15").text(data.table[14].price);

                $("#name16").text(data.table[15].name);
                $("#description16").text(data.table[15].description);
                $("#price16").text(data.table[15].price);



            })
            .catch(err => {
                console.log('in error');
                console.log(err);
            })
    });
</script>
