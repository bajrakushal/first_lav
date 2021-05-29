<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('front/fonts/fontawesome/css/all.css')}}">
  <link rel="stylesheet" href="{{ asset('front/css/style.min.css') }}">
  <title>Frivizn Hotel | Home</title>
</head>

<body>

  <!-- Navigation -->

  <nav class="navbar bg-dark navbar-dark navbar-expand-md fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">Frivizn</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myTogglerNav"
        aria-controls="myTogglerNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="myTogglerNav">
        <div class="navbar-nav ml-auto pt-1">
          <a class="nav-item nav-link active" href="index.html">Home</a>
          <a class="nav-item nav-link" href="about.html">About</a>
          <a class="nav-item nav-link" href="rooms.html">Rooms</a>
          <a class="nav-item nav-link" href="blog.html">Blog</a>
          <a class="nav-item nav-link" href="contact.html">Contact</a>
          <div class="mb-1">
            <button type="button" class="btn btn-primary pb-2 text-uppercase" data-toggle="modal"
              data-target="#servicesmodal">Book
              Now</button>
          </div>
          @if(Auth::user())
          <div class="mb-1 ml-3">
            <a class="btn btn-success pb-2 text-uppercase" href="{{ route('logout') }}"
              onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
               </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
           </form>
          </div>
          @else
          <div class="mb-1 ml-3">
            <a href="/login"  class="btn btn-success pb-2 text-uppercase" >login
            </a>
          </div>
          @endif
    
          </div>
        </div> <!-- navbar-nav -->
      </div> <!-- collapse -->
    </div> <!-- container -->
  </nav> <!-- navbar -->

  @yield('content')

  <footer class="page-footer font-small text-center text-md-left">

    <!-- Footer Links -->
    <div class="container py-5">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Links -->
          <h3 class="font-weight-bold text-uppercase mt-3 mb-4">Address</h3>

          <div>
            <p>Main Street 123</p>
            <p>New York, NY, USA</p>
            <a href="contact.html"><small>Get direction</small></a>
          </div>

        </div> <!-- col-md-4 mx-auto -->

        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Links -->
          <h3 class="font-weight-bold text-uppercase mt-3 mb-4">Reservation</h3>

          <div>
            <p>Phone: 111-234-5678</p>
            <p>Email: friviznhotel@gmail.com</p>
            <div>
              <button type="button" class="btn btn-primary pb-2 text-uppercase" data-toggle="modal"
                data-target="#servicesmodal">Book
                Now</button>
            </div>
          </div>

        </div> <!-- col-md-4 mx-auto -->

        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Links -->
          <h3 class="font-weight-bold text-uppercase mt-3 mb-4">Newsletter</h3>

          <form class="justify-content-center mx-5 mx-md-0">
            <div class="form-group">
              <label class="form-control-label sr-only" for="email">Email address</label>
              <input class="form-control" type="email" id="email" aria-describedby="email" placeholder="Your email">
            </div><!-- form-group -->

            <div class="input-group-append">
              <button class="btn btn-sm btn-outline-white my-0" type="button">Sign up</button>
            </div>
          </form>

          <div class="icons d-flex justify-content-between mx-5 mx-md-0">
            <a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a>
            <a href="http://www.facebook.com"><i class="fab fa-facebook-square"></i></a>
            <a href="http://www.twitter.com"><i class="fab fa-twitter-square"></i></a>
            <a href="http://www.youtube.com"><i class="fab fa-youtube-square"></i></a>
          </div>

        </div> <!-- col-md-4 mx-auto -->

      </div> <!-- row -->

    </div> <!-- container -->

    <!-- Footer Links -->

    <!-- Copyright -->

    <div class="footer-copyright text-center bg-dark text-light py-3">© 2019
      <a class="text-light" href="https://mdbootstrap.com/education/bootstrap/"> Frivizn Studio</a>
    </div>

    <!-- Copyright -->

  </footer>

  <!-- End of Footer -->


  <script src="{{ asset('front/js/jquery.js') }}"></script>
  <script src="{{ asset('front/js/popper.js') }}"></script>
  <script src="{{ asset('front/js/bootstrap.js') }}"></script>
  <script src="{{ asset('front/js/main.min.js') }}"></script>

</body>

</html>