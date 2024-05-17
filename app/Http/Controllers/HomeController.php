<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    $appName = "HIYAAVAHI";
    $appTitle = "The Future of Property Rentals in the Maldives";
    $appCaption = '"Your dream home is just a click away"';
    $registerBtnText = "Click Here to Get Started";
    $loginBtnText = "Already Registered";

    $slides = [
        '/storage/images/img 0.jpg',
        '/storage/images/img 1.jpg',
        '/storage/images/img 2.jpg',
        '/storage/images/img 3.jpg',
        // Add more image paths as needed
    ];
    
    $features = [
        ['title' => 'RENT A PROPERTY', 'description' => 'Rent from the largest collection of property listings in the Maldives.'],
        ['title' => 'LIST YOUR PROPERTY', 'description' => 'List your properties included in the most extensive index of property listings in the Maldives. '],
        ['title' => 'RATE YOUR STAY', 'description' => 'Experience our stellar rating system and discover the power to \'Rate Your Stay\' like never before!'],
    ];

    return view('home', compact('appName', 'appTitle', 'appCaption', 'registerBtnText', 'loginBtnText', 'slides', 'features'));
}

}
