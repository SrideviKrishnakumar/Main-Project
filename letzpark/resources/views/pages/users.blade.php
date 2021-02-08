@extends('layouts.layout')

@section('title', 'Users')


@section('content')


    <div class="mainUsers">
        <div class="usersList">
            <h4>Users List</h4>
            <div class="inputStyle">
                <input type="text" name="userSearch" id="userSearch" placeholder="Search for a user">
                <i class="fas fa-search"></i>
            </div>
            <ul class="bigList">
                @if(count($users) > 0)
                @foreach($users as $user)
                <li>
                    {{-- <a id="searchName"href=""></a>
                    <p id="searchMail"></p> --}}
                    <a id="searchName"href="{{ route('user.detail', [$user->id]) }}">{{ $user->firstname}}</a>
                    <p id="searchMail">{{ $user->email}}</p>
                    <button class="btnSearch" value="{{$user->id}}">MORE</button>
                </li>
                @endforeach
                @endif
            </ul>
        </div>
        
       <div class="countInfo">
           <div class="usersCount">
               <h4>Total users on the site</h4>
               <div class="flexAjax">
                   <h3 id="usersAjax"> </h3> 
                   <h3>  Users</h3>
                </div>
               
            </div>
            
            <div class="singleUserCard">
                
            </div>
        </div> 
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
            $('#usersAjax').text(result[0]);
        })
        .fail(function(result){
            console.log;
        });
 });
})


</script> 

<script>


$('#userSearch').keyup(function(){
       let routeUsers = '{{ route('search.users')}}';  
       let query = $(this).val();
       let url = '{{ route("user.detail", ":id") }}';

        $.ajax({
         url:routeUsers,
         method:"POST",
         data:{query:query},
         headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        })
        .done(function(result){
            console.log(result);
            $('.bigList').html('');
            result.forEach(user => {
                url = url.replace(':id', user.id);
                $('.bigList').append('<li><a id="searchName"href="' + url +'">'+user.firstname+'</a><p id="searchMail">'+user.email+'</p><button class="btnSearch" value="'+user.id+'">MORE</button></li>');
          });
        })
        .fail(function(result){
            console.log;
        });
       
   });
</script>
<script>
$('.btnSearch').click(function(){
    let link = $(this).val();
    let routeUsers = "/user/"+link;
    
        $.ajax({
         url:routeUsers,
         method:"post",
         dataType: 'json',
         headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        })
        .done(function(result){
            $('.singleUserCard').html('<ul id="theUl"><div class="userInfo"><li><h5>'+result.firstname+'</h5></li><li>'+result.email+'</li></div><div class="timeStamps"><li><li><strong>Last Connection: '+result.updated_at+'</strong></li></div></ul>');
        }).fail(function(result){
            console.log;
        });
       
   });
</script>
@endsection


