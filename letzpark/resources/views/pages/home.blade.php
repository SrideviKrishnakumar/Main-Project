@extends('layouts.layouthome')

@section('title', 'Lëtz Park')
    
@section('header')

@if (Auth::check())

@if (Auth::User()->email_verified_at == null)
<div id="verifyEmailNotif">
      <a href="{{route('verification.notice')}}"> Click here to verify your email</a>
</div>
@endif

<div class="headerRegistered">

    {{-- <img id="mobileImage" src=" {{ asset("images/phone_header.jpg") }}" alt="">
    <img id="tabletImage" src=" {{ asset("images/tablet_header.jpg") }}" alt="">
    <img id="webImage" src=" {{ asset("images/web_header.jpg") }}" alt=""> --}}
    <div class="positionRl">
    <h4>Find parking in seconds</h4>
    <p>The right place for you in Luxembourg at your reach</p>

        <div class="headerLinks">
            <a id="nearMe">Near Me</a>
            <a id="destination">Destination</a>
        </div>
        <div class="nearMeFather">

            <div class="nearMeLink">
                <form action="{{ url('/spot+me/{id}')}}" method="post">
                    <p>Use geolocation to find the closest parking place near you</p>
                </div>
                <input class="btnStyle" type="submit" name="headerBtn" id="btnNear" value="Find near me">
            </form>
        </div>
        <div class="destinationFather">

            <form action="" method="post">
                <div class="destinationLink">
                    <h5>PARKING AT</h5>
                    <input type="text" name="searchImput" id="searchImput" value="" placeholder="Where do you want to park?">
                    <p>Search for parking spots near destination</p>
                </div>
                <input class="btnStyle"type="submit" name="headerBtn" id="headerBtn" value="Show results">
            </form>
        </div>
    </div>
</div>
@endif
@if (!Auth::check())
<div class="header">
    {{-- <img id="mobileImage" src=" {{ asset("images/phone_header.jpg") }}" alt="">
    <img id="tabletImage" src=" {{ asset("images/tablet_header.jpg") }}" alt="">
    <img id="webImage" src=" {{ asset("images/web_header.jpg") }}" alt=""> --}}
    <div class="positionRl">

        <h4>Find parking in seconds</h4>
        <p>The right place for you in Luxembourg at your reach</p>
        <div class="headerLinks">
            <a href="#">Find</a>
            <a href="{{url('/parking+list')}}">Parking List</a>
        </div>
        <div class="formStyle">
            <h5>PARKING AT</h5>
            <form action="" method="post">
                <input type="text" name="searchImput" id="searchImput" value="" placeholder="Where do you want to park?">
            </div>
                <input class="btnStyle" type="submit" name="headerBtn" id="headerBtn" value="Show results">
            </form>
    </div>
</div>
@endif
@endsection

@section('content')
    <!-- Slideshow container -->

    <div id="carouselExampleDark" class="carousel carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <h3>Parking <br>made easy</h3>
            <img src="{{ asset("images/map_icon.png") }}" class="d-block " alt="...">
            <div class="carousel-caption">
                <h5>Everywher, any time</h5>
                <p>The right solution for all Luxembourg residents</p>
                <span>Find the best option for your trip</span>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <h3>Parking <br>made easy</h3>
            <img src="{{ asset("images/magnifying_icon.png") }}" class="d-block " alt="...">
            <div class="carousel-caption">
              <h5>All you need</h5>
              <p>View the address, accessibility options, payment methods and more!</p>
              <span>Filter though your results</span>
            </div>
          </div>
          <div class="carousel-item">
            <h3>Parking <br>made easy</h3>
            <img src="{{ asset("images/web_icon.png") }}" class="d-block " alt="...">
            <div class="carousel-caption">
              <h5>Accesible</h5>
              <p>Enjoy a seamless experience when looking for a parking place</p>
              <span>Navigate the site without issue</span>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </a>
    </div>

    <div class="noCarrosel">
        <h3>Parking made easy</h3>
        <div class="slides">
            <div class="slide">
                <img src="{{ asset("images/map_icon.png") }}" alt="...">
                    <div class="slide1-caption">
                      <h5>Everywher, any time</h5>
                      <p>The right solution for all Luxembourg residents</p>
                      <span>Find the best option for your trip</span>
                    </div>
            </div>
            <div class="slide">
                <img src="{{ asset("images/magnifying_icon.png") }}" alt="...">
                    <div class="slide2-caption">
                        <h5>All you need</h5>
                        <p>View the address, accessibility options, payment methods and more!</p>
                        <span>Filter though your results</span>
                    </div>
            </div>
            <div class="slide">
                <img src="{{ asset("images/web_icon.png") }}"alt="...">
                    <div class="slide3-caption">
                        <h5>Accesible</h5>
                        <p>Enjoy a seamless experience when looking for a parking place</p>
                        <span>Navigate the site without issue</span>
                    </div>
            </div>
        </div>
    </div>




  <div class="usersSay">
    <img id="mobileImage" src=" {{ asset("images/driver.jpg") }}" alt="">
        <div class="positionRel">
            <h3>What <strong>users</strong> are saying</h3>
            <p>Don't forget to check other people's reviews before making your choice.<br>
            You can also help other users by leaving a review after your experience<br>
            To do so you must register first!</p>
        </div>
      
  </div>

  <div class="yourParkingSpace">
    <div class="rentoutDescription">
        <h3><strong>Rent out</strong> your parking space</h3>
        <p>Get in contact with other users to rent out your parking space. It's free to list and it only takes a few minutes to get up and running.</p>
    </div>
    <img id="phone" src=" {{ asset("images/phone_mockup.png") }}" alt="">
  </div>

<div class="featuresBugs">
    {{-- <img id="parking" src=" {{ asset("images/parking.jpg") }}" alt=""> --}}
    @if (!Auth::check())
    <div class="moreFeatures">

        <h3>Access <strong>more</strong> features</h3>
       
        <p>Find places near you with geo location, save your parking spot and much more!</p>
        <p><strong><a href="">Register</a></strong> to have access to more options.</p>
        <p>Or <strong><a href="">Log In</a></strong> if you already have an account</p>
    </div>
    @endif
        
        @if (Auth::check())
        <div class="bug">
            <h3>We want to hear from you!</h3>
           
            <p>You can leave reviews for the parking places you have used in the past for other users to be informed and make better choices.</p>
        </div>
        @endif
</div>
        

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@endsection



@section('js')
<script>

$("#destination").on('click', function(){
   $(".nearMeFather").hide();
   $(".destinationFather").show();
});
$("#nearMe").on('click', function(){
   $(".nearMeFather").show();
   $(".destinationFather").hide();
});



</script>
    
@endsection
