<?php

namespace App\Http\Controllers\Backend;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Livewire\Categorie\Categorie;


class CategoryController extends Controller
{
     public function index(){
        return view('admin.Category.create');
     }


   //   public function store(){
   //    $categories = Category::get();
   //    return view('admin.Category.list',compact('categories'));
   //   }

   public function store(){

      return view('admin.Category.Show-All');
     }

     public function edit($id){
     return view('admin.Category.edit',compact('id'));
     }


     public function delete(Request $request, $id)
     {
        
         $Categorie = Categorie::find($id);
     
      
         if ($Categorie) {
             $Categorie->delete(); 
             return response()->json(['success' => 'Categorie deleted successfully!']);
         } else {
             return response()->json(['error' => 'Categorie not found!'], 404); 
         }
     }




}
