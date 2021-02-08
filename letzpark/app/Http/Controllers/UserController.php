<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
//Connected
use App\Models\Rental;
use App\Models\Review;
use App\Models\Spot;
use App\Models\Online;
use App\Models\Bug;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // return view('pages.users');
        $users = User::all();

        return view('pages.users', ['users' => $users]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('pages.users', ['user' => $user]);
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
    /**
     * Used to get the total users in the DB, the rentals finished, and the number of reviews on the site.
     *
     * @return \Illuminate\Http\Response
     */
    public function count()
    {
        $users = User::count();
        $rentals = Rental::where('rental_current', 0)->count();
        $reviews = Review::count();
        return [$users, $rentals, $reviews];
    }

    /**
     * Used to get the values as we type on the input
     * 
     */
    public function search(Request $request)
    {
        $request->ajax();
        $query = $request->get('query');
        $users = User::select("id", "firstname", "email")->where("firstname", "LIKE", "%" . $query . "%")->get();

        return response()->json($users);
    }


    /**
     * Used to get the id out of the btnSearch
     * 
     */

    public function btnSearch($id)
    {
        $user = User::find($id);

        return $user->toJson(JSON_PRETTY_PRINT);
    }
}
