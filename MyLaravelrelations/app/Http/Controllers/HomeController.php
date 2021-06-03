<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

class HomeController extends Controller
{
    public function home(){

        $cars = Car::all();

        return view('pages.home', compact('cars'));
    }
}
