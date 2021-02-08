<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Review;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use DB;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentalinfo = Rental::all();
        return view('pages.rentals',['rentalinfo'=>$rentalinfo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request,$folder)
    {
        $request->validated();
       
        // Rename the file with timestamp
        $fileName = time() . '.' . $request->file->extension();

        // Save the file in public/uploads folder
    
        $request->file->move(public_path('/pictures/'.$folder), $fileName);

      
        $rent = new Rental;
        $rent->rental_name = $request->placename;
        $rent->rental_address = $request->address;
        $rent->rental_neighborhood = $request->neighborhood;
        $rent->rental_description = $request->description;
        $rent->rental_cost = $request->cost;
        $rent->rental_image = $folder."/".$fileName;
        $rent->rental_current = 1;
        $rent->rental_user = $request->userId;
        
     
        
        $rent->save();

        return redirect('rentals')->with('success', $request->name . ' created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function select($id)
    {
        $rentals = Rental::find($id);

        return view('pages.rentals', ['rentals' => $rentals]);
        
    }
    public function show($id)
    {
        $rental = Rental::find($id);

        return view('pages.rental', ['rental' => $rental]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function review(Request $request, $id) {
        // Retrieve the rental
        //$rentalspot = Rental::find($id);

        // Create the review

        //return dd($request);
        $review = new Review;
        $review->reviews_subject = $request->subject;
        $review->reviews_stars = $request->stars;
        $review->reviews_message = $request->message;
        $review->reviews_parking = $id;
        $review->reviews_user= $request->userid;
       
      

        // Link the review to the rental and save it
      // $rentalspot->review()->save($review);
       $result = $review->save();
    
        //dd($result);
        $reviews=Review::where('reviews_parking',$id)->get();
        
        if($result){
            return $reviews->toJson(JSON_PRETTY_PRINT);
            
        }  
    }
}
