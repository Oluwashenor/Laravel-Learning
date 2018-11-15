<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class RestaurantController extends Controller
{
    public function index(){
        $restaurants = Restaurant::all();
        return view('Restaurant',compact('restaurants'));

    }
}
