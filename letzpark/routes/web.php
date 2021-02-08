<?php

use Illuminate\Support\Facades\Route;

// Request the Controllers
use App\Http\Controllers\ApiController;
use App\Http\Controllers\BugController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OnlineController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SpotController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FileController;

use App\Mail\ContactOwner;
//mailer
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/home', function () {
    return view('pages.home');
})->name('home');




Route::get('/account', function () {
    return view('pages.account');
})->name('account');;  // This will display the home page

Route::get('/destination/{id}', [ApiController::class, 'index'])->name('destination.full');  // This route will display a certain location radius ( ID received from google API)

Route::get('/spot+me/{id}', [ApiController::class, 'index'])->name('spotme.full'); // This route will display the available parkings on a certain radius (ex:10km)

Route::get('/spot+me/detail/{id}', [ApiController::class, 'show'])->name('spotme.detail');  // This route will display one selected parking on the map

Route::get('/parking+list', [ApiController::class, 'index'])->name('parking.list');  // This route will retrieve the parking list

Route::get('/destination', [ApiController::class, 'index'])->name('destination');  // This route it is used when the user accesses the destination page through the navbar will show default parkings

Route::get('/about', function () {
    return view('pages.aboutus');
})->name('about');  // This route will only display the about us view (about us page)

Route::get('/bugs', [BugController::class, 'index'])->name('bugs');   //This route will display the page with all the bugs (Admin only, , Cyriaque will do check)

Route::get('/bugs/submit', [BugController::class, 'store'])->name('bugs');   //Will submit the bug that the user wants to complain about

Route::get('/parking/{id}', [ApiController::class, 'show'])->name('parking.detail');   //This route will show us the single parking detail page

Route::get('/rentals', [RentalController::class, 'index'])->name('rentals');  //This route will show us the list of the rentable places
Route::get('/rentals/{id}', [RentalController::class, 'select'])->name('rentals.neighbourhood'); 



Route::get('/rental/{id}', [RentalController::class, 'show'])->name('rentals.detail');   //This route will show us the details of one/chosen rentable place

// Route for Automated email
Route::post('/rental/{id}/email',[MailController::class,'emailowner'])->name('emailowner');

//Route::get('/test/{id}',[MailController::class,'emailowner'])->name('emailowner');

Route::post('/rentals/{folder}', [RentalController::class, 'store'])->name('create');   //This route will trigger the form to add a new place to rent

Route::post('/rental/email', [MailController::class, '?']);   //This route will send and automatic email to the owner of the spot

Route::post('/bugs/email', [MailController::class, '?']);   //This route will send allow the admin top send an email to the user

Route::get('/users', [UserController::class, 'index']);   //This route will display all the users (list the users)

//Route::get('/users', [UserController::class, 'count']);   //This route will display all the users (list the users)

Route::get('/users/{$id}', [UserController::class, 'show'])->name('user.detail');   //This route will display all the users (list the users)

Route::post('/users/update', [UserController::class, 'update']);   //This route will get the data on the form to update the user info

Route::post('/rental/update', [RentalController::class, 'update']);   //This route will get the data on the form to update the rental info

Route::post('/spot/update', [SpotController::class, 'update']);   //This route will get the data on the form to update the spot info

Route::post('/parking/detail/{id}/spot', [SpotController::class, 'update']);   //This route will get the data on the form to update the spot info

//About us AJAX.
Route::post('/about', [UserController::class, 'count'])->name('count.users');   //This route will tell the total of users registered
// Users Ajax
Route::post('/users', [UserController::class, 'search'])->name('search.users');   //This route will tell the total of users registered
// Users detail info
Route::post('/user/{id}', [UserController::class, 'btnSearch'])->name('user.details');

// to upload a file

Route::get('file-upload/{folder}',[FileController::class,'fileUpload'])->name('file.upload');
Route::post('fileupload/{folder}',[FileController::class,'fileUploadSubmit'])->name('file.upload.post');

//To Review 
Route::post('/rental/{id}/review', [RentalController::class, 'review'])->name('rental.review');




//Email routes go here
Route::get('/email', function () {
    return new ContactOwner('brendacayzac@gmail.com', 'Andrea', 'Rue des Romains 28');
});










Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
