<?php

namespace App\Http\Controllers\Backend;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Categorie;
use App\Models\Subcategorie;

class ItemController extends Controller
{
    public function index(){
        return view('admin.Item.list-item');
    }

    public function store(){
        $Categorie = Categorie::select('id')->get();
        $SubCategorie = Subcategorie::select('id')->get();
        $Brand = Brand::select('id')->get();
        return view('admin.Item.create-item',compact('Categorie','SubCategorie','Brand'));
    }

    public function edit($id){
        return view('admin.Item.edit-item',compact('id'));
    }

    public function delete($id){
        
        $item = Item::find($id);
    
     
        if ($item) {
            $item->delete(); 
            return response()->json(['success' => 'Item deleted successfully!']);
        } else {
            return response()->json(['error' => 'Item not found!'], 404); 
        }
    }

    }
