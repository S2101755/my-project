<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForRent;
use App\Models\Register;

class PropertiesController extends Controller
{
    public function prop()
    {
        return view('list');
    }
    
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'propertyName' => 'required|string|max:255',
            'propertyOwner' => 'required|string|max:255',
            'amenities' => 'nullable|string|max:255',
            'sqfeet' => 'required|integer',
            'description' => 'nullable|string',
            'price' => 'required|decimal:0,2',
        ]);
        
    $newList = ForRent::create($validatedData);

    return redirect(route('home'));
    }

    public function listing()
    {
        $forrent = ForRent::all();
        return view('listings', ['forrent' => $forrent]);
    }
    
    

   

}