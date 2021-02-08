<?php

namespace App\Http\Controllers;
use App\Models\Rental;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactBugs;
use App\Mail\ContactOwner;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function emailowner(Request $request,$id){

        $rental= Rental::where("id",$id)->first();
        $rentalName = $rental->rental_name; 
       // dd($rental);
        $ownerId= $rental->rental_user;
        $owner = User::where("id",$ownerId)->first();
        $emailOwner = $owner->email;
        $nameOwner = $owner->firstname;

       

       $result=Mail::to($emailOwner)->send(new ContactOwner($request->userEmail,$nameOwner,$rentalName,$request->textmsg));
         
        if($result){
            return redirect('rentals')->with('Message Sent to the Owner created successfully');
        }else{
            return redirect('rentals')->with('Message Not Sent');
        }


    }
}
