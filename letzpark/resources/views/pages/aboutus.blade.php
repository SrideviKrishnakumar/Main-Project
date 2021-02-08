@extends('layouts/layout');

@section('title')
    About Us
@endsection

@section('content')
<div class="mainabout">
    <!--Header-->
    <section class="position-relative overflow-hidden p-0" id="about">
        <div id="infoAbout">
            <h1><span>About</span> Us</h1>
            <div id="line"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </section>
    
    <!--Section with numbers-->
    <section id="numbersAbout">
        <div class="row text-center" id="containerNumbers">
            <div class="col-lg-4 my-4">
                <h1 id="usersNumber">0000000</h1>
                <h2>Users Registered</h2>
            </div>
            <div class="col-lg-4 my-4">
                <h1 id="rentalsNumber">0000000</h1>
                <h2>Parking Spots Rented</h2>
            </div>
            <div class="col-lg-4 my-4">
                <h1 id="reviewsNumber">0000000</h1>
                <h2>Reviews</h2>
            </div>
        </div>
    </section>
    <section id="devTeam">
        <div class="container pt-5">
            <h1 class="my-4 text-center">Development Team</h1>
            <div id="line"></div>
            <div class="row mt-3 text-center">
                <div class="col-lg-4 mb-4">
                    <img class="rounder-cirlce" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="placeholder">
                    <h3 class="text-secondary font-weight-bold mt-4">Johny Dias</h3>
                    <h5 class="text-primary mb-4">Web Developer</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad   minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia     deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-4 mb-4">
                    <img class="rounder-cirlce" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="placeholder">
                    <h3 class="text-secondary font-weight-bold mt-4">SriDevi Jagannathan</h3>
                    <h5 class="text-primary mb-4">Web Developer</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad   minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia     deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-4 mb-4">
                    <img class="rounder-cirlce" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="placeholder">
                    <h3 class="text-secondary font-weight-bold mt-4">David Da Mota</h3>
                    <h5 class="text-primary mb-4">Web Developer</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad   minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia     deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="row text-center d-flex justify-content-around">
                <div class="col-lg-4 mb-4">
                    <img class="rounder-cirlce" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="placeholder">
                    <h3 class="text-secondary font-weight-bold mt-4">Cyriaque Yedagne</h3>
                    <h5 class="text-primary mb-4">Web Developer</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad   minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia     deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-4 mb-4">
                    <img class="rounder-cirlce" src="{{asset('images/brenda.jpg')}}" alt="placeholder">
                    <h3 class="text-secondary font-weight-bold mt-4">Brenda Cayzac</h3>
                    <h5 class="text-primary mb-4"> Web Developer, Graphic Designer & Illustrator</h5>
                    <p>A curious professional seeking to integrate a wide variety of techniques and knowledge to offer high quality solutions for communication strategies and projects</p>
                </div>
            </div>
        </div>
    </section>
    
    <!--API-->
    <section class="position-relative overflow-hidden my-5 py-5" id="apiInfo">
        <div id="api" class="text-center">
            <h1 class="text-secondary mb-4">API Documentation</h1>
            <div id="line"></div>
            <div class="row">
                <div class="col-md-6 my-4 px-3">
                    <h3>Transport For Luxembourg API</h3>
                    <p>This API offers access to the occupation status of carparks data flowing through Transport for Luxembourg. Currently they're providing data from Ville de Luxembourg's car parks only, but hope  to integrate occupancy of buses running in Luxembourg city soon.</p>
                    <p>Made by Daniel Duton & Thierry Degeling from ION Network Solutions.</p>
                </div>
                <div class="col-md-6 my-4 px-3">
                    <h3>Google API</h3>
                    <p>A group of application programming interfaces developed by Google which allow communication with Google Services and their integration   to other services. For this project the Google Maps API was the main focus.
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
        
@section('js')
    <script>
        //Update DB information
        $(function(){
        $(document).ready(function(e){
        let route = '{{route('count.users')}}';
        $.ajax({
            url: route,
            type: 'post',
            dataType:'json',
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
            .done(function(result){
                //console.log(result);
                //Array reference: [$users, $rentals, $reviews];
                $('#usersNumber').text(result[0]);
                $('#rentalsNumber').text(result[1]);
                $('#reviewsNumber').text(result[2]);
                })
            .fail(function(result){
                console.log;
            });
         });
    })
</script> 
@endsection