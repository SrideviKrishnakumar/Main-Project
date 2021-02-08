@extends('layouts.layout');

@section('filter')


<div class="nav1 bg-dark mt-5 m-0 d-flex">
  <h3> RentalList </h3>
</div>

<ul class="nav bg-primary mt-0 m-0 d-flex">
   <!-- <li class="nav-item d-flex justify-content-start"></li>  -->
      <li><img class="filterimg mt-4 ml-3"src="{{asset("images/filter.png")}}" alt="FilterIcon" id="filtericon" width="50px" height="30px"></li>
        <div class="dropdown">
           <li><button class="dropbtn">Filter</button></li>
             <div class="dropdown-content">
                @foreach ($rentalinfo as $info)
                  <p id="select" class="neighbourhood">{{$info->rental_neighborhood}}</p>
                @endforeach 
              </div>
        </div>    
        
</ul>

@endsection

@section('content')

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif


@if($message = Session::get('success'))
<strong class="success">{{ $message }}</strong>
@endif

@if($message = Session::get('error'))
<strong class="error">{{ $message }}</strong>
@endif 

<div id="desktop">
<article id="rentallist">
  
  @foreach ($rentalinfo as $info)  
  <div id=rentalinfo>
      <div class="map">
        <!--<img src="{{ asset('images/' . $info->rental_image) }}" >  -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10341.203941391725!2d6.09991273085149!3d49.61093007397989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47954ed2e0de192b%3A0x2600d1d7cdc24bb1!2sBelair%2C%20Luxembourg!5e0!3m2!1sen!2slu!4v1608560133608!5m2!1sen!2slu" width="200" height="100" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="card {{$info->rental_neighborhood}}" style="height:25%">
          <div class="card-body w3-hover-shadow w3-padding-64 w3-center">
            <h5 class="card-title">{{$info->rental_name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Address:{{$info->rental_address}}</h6>
            <h6 class="card-text">Neighbourhood:{{$info->rental_neighborhood}}</p>
            <div class="cost">
              <i class="far fa-credit-card">Cost:{{$info->rental_cost}}</i>
            </div>
            <div class="moreinfo">
              <a href="{{route('rentals.detail',[$info->id])}}">More Information</a>
            </div>  
         </div>
    </div>  
  </div>
  @endforeach
  
</article>

<!-- ARTICLE FORM -->
  <article id=formlist>
      <!--form to post the rental details-->
      <div id="post-rent">
        <h3>Post your parking spot</h3>
      </div>

      <div class="form-container">
        <h3>Post a parking spot to rent</h3>
        <form action="{{route('create',[Auth::user()->firstname.Auth::user()->id])}}" method="POST" enctype="multipart/form-data">
          
        @csrf
        <div class="row"> 
          <div class="col-25">
            <label for="fname">PlaceName</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="placename" placeholder="Your Place..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="address">Address</label>
          </div>
          <div class="col-75">
           <input type="text" id="address" name="address" placeholder="Your address">
          </div>
          <div class="col-25">
            <label for="lname">Neighbourhood</label>
          </div>
          <div class="col-75">
            <input type="text" id="neighborhood" name="neighborhood" placeholder="Your neighborhood">
          </div>
          <div class="col-25">
            <label for="Rentalcost">cost</label>
          </div>
          <div class="col-75">
            <input type="number" step=0.01 id="cost" name="cost" placeholder="Rental Amount">
          </div>
        </div>
    
        <div class="row">
          <div class="col-25">
            <label for="description">Description</label>
          </div>
          <div class="col-75">
            <textarea id="desc" name="description" placeholder="Write something.." style="height:200px"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-25-upload">
            <label for="filechoose">Choose a file</label>
          </div>
          <div class="col-75-upload">
            <input type="file" name="file" class="form-control" placeholder="UPLOAD">          
          </div>
        </div>
        
        <div class="row">
         <h4> Your email will not be disclosed on the listing</h4>
        </div>
        <input type="hidden" name="userId" value="{{Auth::user()->id}}"> 

        <div class="row">
          <input type="submit" value="Post" id="mybtn">
        </div>
   
       </form>
      </div>  

    </article>
</div>  


@endsection
<!-- ajax call for selecting drop-down neighbourhood -->
@section('js')
<script>

  $(function(){
    $('.neighbourhood').click(function(e){
    const selectCatagory = $(this).text();
    console.log(selectCatagory);
    $(".card").hide();
    $(".photo").hide();
    $("."+selectCatagory).show();

  });
});

</script>
@endsection 
