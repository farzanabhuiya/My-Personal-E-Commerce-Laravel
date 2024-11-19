<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorie;

class BrandController extends Controller
{


    public function index()
    {
    
        return view('admin.Brand.list-brand');
    }

    public function store()
    {
        $Categorie = Categorie::select('id')->get();
        
        
        return view('admin.Brand.create-brand',compact('Categorie'));
    }


    public function edit($id)
    {
        return view('admin.Brand.edit-brand', compact('id'));
    }

    public function delete(Request $request, $id)
    {
       
        $brand = Brand::find($id);
    
     
        if ($brand) {
            $brand->delete(); 
            return response()->json(['success' => 'Brand deleted successfully!']);
        } else {
            return response()->json(['error' => 'Brand not found!'], 404); 
        }
    }

    
    
}