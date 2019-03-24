<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>D Bereznii</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="{{asset('css/creative.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#page-top">Dmytro Bereznii</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse shift" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item text-center">
            <a class="nav-link" href="{{route('mywork')}}">My Work</a>
          </li>
          <li class="nav-item text-center">
            <a class="nav-link" href="{{route('software')}}">Software</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center" href="{{route('contact')}}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('page')

  <!-- Footer -->
  <!-- Contact Section -->
  <section class="bg-dark page-section py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h5 class="mt-0 pb-4 text-light text-uppercase">Stay Connected</h5>
          <a href='https://www.instagram.com/bereznii_/'><img class='contact-icon' src="{{asset('img/instagram.svg')}}"></a>
          <a href='https://www.facebook.com/profile.php?id=100008971929484'><img class='contact-icon' src="{{asset('img/facebook.svg')}}"></a>
          <a href='https://www.linkedin.com/in/%D0%B4%D0%BC%D0%B8%D1%82%D1%80%D0%B8%D0%B9-%D0%B1%D0%B5%D1%80%D0%B5%D0%B7%D0%BD%D0%B8%D0%B9-75173b177/'><img class='contact-icon' src="{{asset('img/linkedin.svg')}}"></a>
          <a href="{{route('contact')}}"><img class='contact-icon' src="{{asset('img/mail.svg')}}"></a>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-black py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col col-md"><a class='text-light' href="{{route('mywork')}}">My Work</a></div>
        <div class="col col-md text-light">|</div>
        <div class="col col-md"><a class='text-light' href="{{route('software')}}">Software</a></div>
        <div class="col col-md text-light">|</div>
        <div class="col col-md"><a class='text-light' href="{{route('contact')}}">Contact</a></div>
      </div>
      <!--<div class="small text-center text-muted">Copyright &copy; {{date("Y")}} - Dmytro Bereznii</div>-->
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Plugin JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>