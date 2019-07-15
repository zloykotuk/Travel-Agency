<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\SalesHotel;
use Auth;

class HotelControler extends Controller
{
    //

    public function getHotel(Hotel $hotel)
    {
      return view('hotel_single', ['hotel' => $hotel]);
    }

    public function setSales(Request $request)
    {

    }

    public function test()
    {
      return view('test');
      //return Auth::user()->id;
    }

    public function testpost(Request $request)
    {

        $validatedData = $request->validate([
             'date_from' => 'required|date',
             'date_to' => 'required|date',
             'guest' => 'required|integer',
             'children' => 'required|integer',
             'id_hotel' => 'required|integer'
         ]);
         
         $new_sales = new SalesHotel([
           'date_from' =>  $validatedData['date_from'],
           'date_to' => $validatedData['date_to'],
           'guest' => $validatedData['guest'],
           'children' => $validatedData['children'],
           'hotel_id' => $validatedData['id_hotel'],
           'user_id' => Auth::user()->id,
           'status' => 0,
         ]);

         $new_sales->save();

         return 'You data saved';

    }

}
