<?php

namespace App\Http\Controllers\Backend;

use App\Models\Subcategorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorie;

class SubCategorieController extends Controller
{
    public function index(){


      
      $subcategories = Subcategorie::with('categorie')->get();
      $categories = Categorie::with('Subcategorie')->select('id','name')->latest()->get();
        return view('admin.Subcategorie.create',compact('categories','subcategories'));
    }


    public function store(){
        return view('admin.Subcategorie.list-subcategorie');
    }

    public function edit($id){
        return view('admin.Subcategorie.edit-subcategory',compact('id'));
    }
    
    
    ///product page subcategorie
   public function getSubcategories(Request $request){
    $subcategories= Subcategorie::where('categorie_id',$request->categoryId)->get();
    return $subcategories;
  }

  


// ==================DELETE SUBCATEGORIE =======================//


  public function delete(Request $request, $id)
  {
     
    $Subcategorie=  Subcategorie::find($id);
   
      if ($Subcategorie) {
          $Subcategorie->delete(); 
          return response()->json(['success' => 'Categorie deleted successfully!']);
      } else {
          return response()->json(['error' => 'Categorie not found!'], 404); 
      }
  }


// ==================DELETE SUBCATEGORIE END =======================//





}
