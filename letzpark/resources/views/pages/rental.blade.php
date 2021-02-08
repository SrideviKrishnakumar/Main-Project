@extends('layouts.layout');
@section('filter')

@endsection

@section('content')

    <div class="googleMap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10341.203941391725!2d6.09991273085149!3d49.61093007397989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47954ed2e0de192b%3A0x2600d1d7cdc24bb1!2sBelair%2C%20Luxembourg!5e0!3m2!1sen!2slu!4v1608588134048!5m2!1sen!2slu" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <div class="namebar">
         <h2>{{$rental->rental_name}}</h2>
    </div>

    <article class="photo-detail">
        <div class="info-link">
           <div class="detail">
            
             <h5>Address:{{$rental->rental_address}}</h5>
             <h5>Neighbourhood:{{$rental->rental_neighborhood}}</h5>
             <h5>Cost:{{$rental->rental_cost}}</h5>
             <h5>{{$rental->rental_description}}</h5>
            </div>
            <div class="desktop">
                <div class="msg">
                <!-- <a href="">Message Owner</a> --> 
                   <button id="owner">Messgae Owner</button>   
                </div>
                <div class="back">
                   <a href="{{url()->previous()}}" id="goback">GoBack</a> 
                </div>
            </div>
            
        </div>
        <div class="photo">
            <img src="{{ asset('pictures/' . $rental->rental_image) }}" >  
         </div>
    </article>

    <div class="namebar">
        <h3>REVIEWS</h3>
    </div>
     
    <div id="review">
        
          <label for="subject">Subject</label>
          <input type="text" id="subject" name="subject" placeholder="Your Subject..">
      
          <label for="Message">Reviews</label>
          <input type="text" id="message" name="message" placeholder="Your Reviews">
      
          <label for="stars">Your Stars</label>
          <select id="rate" name="rate">
            <option value=1>*</option>
            <option value=2>**</option>
            <option value=3>***</option>
            <option value=4>****</option>
            <option value=5>*****</option>
          </select>
          <input type="hidden" name="userId" id="userId" value="{{Auth::user()->id}}"> 
           <input type="hidden" name="id" id="id" value="{{$rental->id}}">
        
          <input type="button" value="Post Your Reviews" id="mybtn">
    </div>
    
    <div class="showresult" style="width: 750px; margin: 0 auto;">
        

    </div>
    
      
    
        
    
 
 <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div id="msgtouser">
               <p>Please write your message below
               The Owner will reply to you soon </p>
            </div>
           <span class="close">&times;</span>
           <form action="{{route('emailowner',$rental->id)}}" method="post">
            @csrf
                <textarea rows="10" cols="50" name="textmsg"></textarea>
                
                <div class="desktop-modal">
                    <div class="msg">
                    <!-- <a href="">Message Owner</a> --> 
                        <input type="hidden" name="userEmail" value="{{Auth::user()->email}}">
                        <input type="submit" id= "savebt" name="savebt" value="Post your Message">
                    </div>
                    <div class="back">
                       <a href="{{url()->previous()}}" id="modal-back">GoBack</a> 
                    </div>
                </div>
           </form>
        </div>
    </div>
    

    
@endsection
@section('js')
<script>
    // for goback

    function goBack(){
        windows.history.back();
    }
    
    // Get the modal
    let modal = document.querySelector("#myModal");
    
    // Get the button that opens the modal
    /*let btn = document.querySelector("#owner");
    btn.onclick = function() {
    modal.style.display = "block";
    }*/

    // Get the <span> element that closes the modal
    let span = document.querySelector(".close")[0];
    
    // When the user clicks the button(owner), open the modal
    $('#owner').on('click', function (event) { 
     modal.style.display = "block";
    });
    
    // When the user clicks on <span> (x), close the modal
    $('.close').on('click', function (event) {
        modal.style.display = "none";
    });
    
    // Ajax Call for insertion of reviews
    $(function(){
        $('#mybtn').click(function(e){

            let id=$('#id').val();
            let route = '/rental/'+id+'/review';
            console.log(route);

            let formSubject=$('#subject').val();
            let formMessage=$('#message').val();
            let formRates=$('#rate').val();
            let formUser=$('#userId').val();
            let formParking=id;
            console.log(formSubject,formMessage,formRates,formUser,formParking);
            $.ajax({
                url: route,
                type: 'post',
                dataType: 'json',
                data:{
                    subject: formSubject,
                    message: formMessage,
                    stars:  formRates,
                    parking: formParking,
                    userid:  formUser
                },
                headers: {
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr
                    ('content')
                }
                })
                .done(function(reviews){
                    console.log(reviews);
                    reviews.forEach(review=> {
                        if(review.reviews_stars==1){
                            $('.showresult').append('<h3>Rating : <i class="fas fa-star"></i> </h3>');
                        }
                        if(review.reviews_stars==2){
                            $('.showresult').append('<h3>Rating : <i class="fas fa-star"></i>  <i class="fas fa-star"></i> </h3>');
                        }
                        if(review.reviews_stars==3){
                            $('.showresult').append('<h3>Rating : <i class="fas fa-star"></i> <i class="fas fa-star"></i>  <i class="fas fa-star"></i> </h3>');
                        }
                        if(review.reviews_stars==4){
                            $('.showresult').append('<h3>Rating :  <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>  <i class="fas fa-star"></i> </h3>');
                        }
                        if(review.reviews_stars==5){
                            $('.showresult').append('<h3>Rating :  <i class="fas fa-star"></i><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>  <i class="fas fa-star"></i> </h3>');
                        }
                       $('.showresult').append('<h2>Message : ' + review.reviews_message + '</h2>');  
                       $('.showresult').append('<hr>');  
                    });
                })
                .fail(function(result){
                    console.log('Ajax Error');
                });
         });
    });
    
    </script>
@endsection
