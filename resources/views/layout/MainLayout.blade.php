<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>THRIFT FASHION</title>
  <link rel="shortcut icon" href="../assets/images/Thrift-Fashion-favicon.png" type="image/x-icon">

  @yield('link')


</head>

<body>
  <!-- navbar -->
  <section class="newnavbar">

    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./assets/images/thrift fashion logo-01.png" style="width:100%;height:150px;" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/"><i class="bi bi-house-door"></i>&nbsp;Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/productPage"><i class="bi bi-shop"></i>&nbsp;Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contactPage"><i class="bi bi-envelope"></i>&nbsp;Contact Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-list-stars"></i>&nbsp;Categories
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="/productPage">Men</a></li>
                <li><a class="dropdown-item" href="/productPage">Women</a></li>
                <li><a class="dropdown-item" href="/productPage">Kids</a></li>
                <li><a class="dropdown-item" href="/productPage">Footwear</a></li>
                <li><a class="dropdown-item" href="/productPage">Bags</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <a class=" a" href="/about"><i class="bi bi-info"></i>&nbsp;About</a>

        <a class=" a" href="/checkout"><i class="bi bi-cart"></i>&nbsp;Check Out</a>

        <a href="/form" class="a"><button type="button" class=" modalbutton "><i class="bi bi-person"></i></button></a>

        


      </div>
    </nav>



  </section>
  <!-- navbar -->


  @yield('hf')


   <!-- footer -->
   <footer>
    <div class="row">
      <div class="col-md-3">
        <h4 style="color: #FFA500; !important">Thrift Fashion</h4>
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
          <a href=""><i class="bi bi-facebook"></i></a> <a href=""><i class="bi bi-instagram"></i></a> <a href=""><i class="bi bi-linkedin"></i></a> <a href=""><i class="bi bi-twitter"></i></a>
        </div>
      </div>
      <div class="col-md-3">
        <h4 style="color: #FFA500; !important">About</h4>
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
        <h4 style="color: #FFA500; !important">Contact</h4>
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
          <h4 style="color: #FFA500; !important">Thanks For Visiting</h4>
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
@yield('script')
</html>
