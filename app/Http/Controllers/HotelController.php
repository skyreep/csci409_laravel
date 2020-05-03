<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index(){
        $hotels = Hotel::all();
        return view('hotels')->with('hotels', $hotels);
    }

    public function create(Request $request){
        return view('hotelform');
    }

    public function store(Request $request){
        Hotel::create([
            'name' => $request->input('name'),
            'address_1' => $request->input('address_1'),
            'address_2' => $request->input('address_2'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'zip' => $request->input('zip'),
            'description' => $request->input('description'),
            'image' => $request->input('image')
        ]);

        return redirect('/hotels');
    }
}
