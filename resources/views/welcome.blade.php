@extends('layouts.master')
@section('content')

  <div class="carousel slide carousel-fade carousel-fullscreen" id="featured" data-ride="carousel">

    <ul class="carousel-indicators">
      <li data-target="#featured" data-slide-to="0" class="active"></li>
      <li data-target="#featured" data-slide-to="1"></li>
      <li data-target="#featured" data-slide-to="2"></li>
    </ul>

    <div class="carousel-inner">

      <div class="carousel-item active slide-1">
        <div class="overlay"></div>
        <div class="carousel-caption">
          <h1>Welcome to Frivizn Resort</h1>
          <p class="lead pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit similique enim</p>
        </div>
      </div>

      <div class="carousel-item slide-2">
        <div class="overlay"></div>
        <div class="carousel-caption">
          <h1>Enjoy Luxury Experience</h1>
          <p class="lead pt-3">Nihil pariatur labore maiores officiis animi iure quia cum nemo</p>
        </div>
      </div>

      <div class="carousel-item slide-3">
        <div class="overlay"></div>
        <div class="carousel-caption">
          <h1>A Place to Stay and Relax</h1>
          <p class="lead pt-3">Doloribus dolorum at esse accusamus libero dignissimos quo eum debitis</p>
        </div>
      </div>

    </div><!-- carousel-inner -->

    <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true">
        <span class="sr-only">Previus</span>
      </span>
    </a>

    <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true">
        <span class="sr-only">Next</span>
      </span>
    </a>

  </div> <!-- carousel -->

  <!-- End of Image Slider -->

  <!-- About -->

  <div class="container">
    <div class="row py-5">

      <div class="col-md-6 d-block-sm pb-4">
        <h2>About Us</h2>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione error sed aut sapiente expedita
          provident praesentium autem ut.</p>
        <div>
          <a href="about.html" class="btn btn-primary text-uppercase pb-2 active" role="button" aria-pressed="true">Read
            more</a>
        </div>
      </div>

      <div class="col-md-6 d-block-sm">
        <img class="w-100" src="{{ asset('front/images/hotel-lobby.jpg') }}" alt="Hotel lobby">
      </div>

    </div> <!-- row -->
  </div> <!-- container -->

  <!-- End of About -->

  <!-- Rooms -->

  <div class="container">
    <div class="row">

      <h2 class="col-sm-12 text-center py-5">Rooms</h2>

      @foreach ($rooms as $room )
          <div class="col-sm-6">
            <section class="card mb-5">
              <img class="card-img-top img-fluid" src="{{ asset('images/'.$room->image_path) }}" alt="Hotel bedroom">
              <div class="card-body">
                <h3 class="card-title py-2">{{ $room->name }}</h3>
                <h4 class="card-subtitle">{{ $room->type }}</h4>
                <p class="card-text">{{$room->description}}</p>
                <div>
                  <a href="#" class="btn btn-primary text-uppercase pb-2 active" role="button"
                    aria-pressed="true">${{$room->price}}</a>
                </div>
              </div>
            </section>
          </div>

      @endforeach


    </div> <!-- row -->
  </div> <!-- container -->

  <!-- End of Rooms -->

  <!-- Blog -->
  <div class="container">
    <div class="row">

      <h2 class="col-sm-12 text-center py-5">Blog</h2>

      <div class="col-md-4">
        <section class="mb-5">
          <img class="img-fluid" src="{{ asset('front/images/hotel-indoors.jpg') }}" alt="Hotel indoors">
          <h3 class="blog-title py-2">Our Strategy for Tomorrow</h3>
          <p class="py-2">Vivamus eget feugiat mauris suspendisse lacus dolor, feugiat quis consectetur ut, finibus at
            lorem
            phasellus.</p>
          <div>
            <a href="blog-article.html" class="btn btn-primary text-uppercase pb-2 active" role="button"
              aria-pressed="true">Read
              more</a>
          </div>
        </section>
      </div>

      <div class="col-md-4">
        <section class="mb-5">
          <img class="img-fluid" src="{{ asset('front/images/hotel-restaurant.jpg') }}" alt="Hotel restaurant">
          <h3 class="blog-title py-2">Fresh and Delicious Food</h3>
          <p class="py-2">Aliquam bibendum augue aliquam, bibendum orci at, accumsan dui sed lorem neque, hendrerit eget
            iaculis.
          </p>
          <div>
            <a href="blog-article.html" class="btn btn-primary text-uppercase pb-2 active" role="button"
              aria-pressed="true">Read
              more</a>
          </div>
        </section>
      </div>

      <div class="col-md-4">
        <section class="mb-5">
          <img class="img-fluid" src="{{ asset('front/images/hotel-bar.jpg') }}" alt="Hotel bar">
          <h3 class="blog-title py-2">Hotel Restaurant and Bar</h3>
          <p class="py-2">Donec in odio libero proin vulputate urna ut libero auctor ornare. Orci varius natoque
            penatibus.</p>
          <div>
            <a href="blog-article.html" class="btn btn-primary text-uppercase pb-2 active" role="button"
              aria-pressed="true">Read
              more</a>
          </div>
        </section>
      </div>

    </div><!-- row -->
  </div> <!-- container -->

  <!-- End of Blog -->

  <!-- Book Now Modal -->

  <div class="modal fade" id="servicesmodal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

          <h2 class="modal-title text-center pb-4">Book Now</h2>

          <form>

            <fieldset class="form-group">

              <div class="form-group form-row">
                <div class="form-group col">
                  <label class="col-form-label" for="check-in">Check In</label>
                  <input class="form-control" type="date" id="check-in" value="2019-08-19">
                </div><!-- form-group -->

                <div class="form-group col">
                  <label class="col-form-label" for="check-out">Check Out</label>
                  <input class="form-control" type="date" id="check-out" value="2019-08-20">
                </div><!-- form-group -->
              </div><!-- form-group -->

              <div class="form-group form-row">
                <div class="form-group col">
                  <label class="col-form-label">Adults</label>
                  <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div><!-- form-group -->

                <div class="form-group col">
                  <label class="col-form-label">Children</label>
                  <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- form-group -->

              <div class="form-group row w-100 mx-auto">
                <label class="col-form-label">Room</label>
                <select class="form-control">
                  <option>Luxury Suite</option>
                  <option>Signature Room</option>
                  <option>Classic Room</option>
                  <option>Deluxe Room</option>
                </select>
              </div><!-- form-group -->

              <div class="form-group row pt-5">
                <div class="col-auto">
                  <button class="btn btn-primary" type="submit">Submit</button>
                </div>
              </div>

            </fieldset> <!-- form-group -->

          </form>

        </div> <!-- modal body -->
      </div> <!-- modal content -->
    </div> <!-- modal dialog -->
  </div> <!-- modal -->

  <!-- End of Book Now Modal -->

  <!-- Footer -->
@endsection
  