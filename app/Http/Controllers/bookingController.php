<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\bookingsRequest;
use App\Models\booking;

use Illuminate\Support\Facades\Auth;

class bookingController extends Controller
{
    public function show()
    {
      $bookings=booking::get();
    
      return view('booking', [
	  		'bookings' => $bookings
	  	]);
    }
}
