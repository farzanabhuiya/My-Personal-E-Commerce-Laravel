<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Ratting;
use Illuminate\Http\Request;

class RattingController extends Controller
{
    

    public function store(Request $request, $productId)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
            'rating' => 'required|min:1|max:5',
        ]);

            $ratting = new Ratting();
            $ratting->product_id = $productId;
            $ratting->name = $request->name;
            $ratting->email = $request->email;
            $ratting->comment = $request->comment;
            $ratting ->rating = $request->rating;
            $ratting->save();
    
            return redirect()->back()->with('success', 'Ratting submitted successfully.');
    }
}

