<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController; 
use App\Http\Controllers\ContactFormController; 
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('home');
});

// Route::get('/contact', function(){
//     return view('contact');
// });

// Route::get('about', function (){
//     return view ('about');
// });

//Route::view('/contact','contact');
Route::view('about','about');
// ---------------------------------
// Route for sending the mail
// Route::get('/contact', [ContactFormController::class,'create']); // Nav menu routing for sending the mail
// Route::post('/contact', [ContactFormController::class, 'store']);

// Named Route for sending mail
Route::get('/contact', [ContactFormController::class,'create'])->name('contact.create'); // Nav menu routing for sending the mail
Route::post('/contact-us', [ContactFormController::class, 'store'])->name('contact.store');

// ------------------------------------------

//WAY 1:. Route level authentication
 // Route::view('about','about')->middleware('auth'); 
 // Route::view('contact','contact')->middleware('auth');

// Checking custom middleware with the indivual route
 Route::view('about','about')->middleware('test');
// --------------------------------------------

// Static customer view
// Route::get("/customers", function(){
//   return view ("customers.index");
// });

// Route::get('/customers', function(){
//     // Passing Array Details to the view
//     $customers = ['Johnny','Ronny','Monny','Lionny','Pionny'];
//     return view ('customers.index',['customerlist'=>$customers]);
//         // Passing associative array to blade view
// });

// -------------------------------------------------------------

// Routing for inserting the record - Calls store() in CustomersController class
//Route::post('customers',[CustomersController::class,'store']);
//Route::post('customers','App\Http\Controllers\CustomersController@store'); 
// --------------------------------------------------------------

// To call Customers Controller 
    Route::get('customers', [CustomersController::class, 'index']);
    Route::get('/customers.create',[CustomersController::class,'create']);
    Route::post('customers',[CustomersController::class,'store']);
    Route::get('/customers/{customer}',[CustomersController::class,'show']);
    Route::get('/customers/{customer}/edit',[CustomersController::class,'edit']);
   Route::patch('/customers/{customer}',[CustomersController::class, 'update']);
    Route::delete('/customers/{customer}',[CustomersController::class,'destroy']);

// WAY 1:. Route level authentication for specific action in resource
// Route::get('/customers/{customer}/edit',[CustomersController::class,'edit'])->middleware('auth);
//    Route::patch('/customers/{customer}',[CustomersController::class, 'update'])->middleware('auth);
//    Route::delete('/customers/{customer}',[CustomersController::class,'destroy'])->middleware('auth);
// --------

//Resource Route automatically does all the actions when everything named properly
// Route::resource('customers',CustomersController::class); 

// ---------
// ---------------------------------------------------------
// Basic controller routing -- Resource
// Route::get('customers',[CustomersController::class,'index']); // Basics of Restful controllers -- Not working Laravel 9 and above
//Route::get('customers','App\Http\Controllers\CustomersController@index'); // Basics of Restful controllers
// ----------------------------------------------------------------------
// WAY 1:. Route level authentication for resource
//Route::resource('customers',CustomersController::class)->middleware('auth'); 

//Apply custom middleware with customer resource
// Route::resource('customers',CustomersController::class)->middleware('test'); // Apply cus 


// The following 2 lines are created automatically when authentication is attached
// Keep the following codes to activate all types of authentication
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

