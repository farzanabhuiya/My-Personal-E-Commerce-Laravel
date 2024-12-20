<?php

namespace App\Http\Controllers\Backend;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index(){
        return view('admin.Page.ListPage');
    }


    public function story(){
        return view('admin.Page.CreatePage');
    }


    public function edit($id){
        return view('admin.Page.EditPage',compact('id'));
    }

    public function delete($id){
         
        $page = Page::find($id);
    
     
        if ($page) {
            $page->delete(); 
            return response()->json(['success' => 'page deleted successfully!']);
        } else {
            return response()->json(['error' => 'page not found!'], 404); 
        }
    }

       

    public function PageDetail($id){
        return view('admin.Page.PageDetails',compact('id'));
    }

}
