<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function commentStore(Request $request){
        
        $comment = new Comment();
        $comment->user_id = auth()->user()->id;
        $comment->product_id = $request->product_id;
        $comment->parent_id = $request->parent_id ?? null;
        $comment->comment = $request->comment;
        $comment->save();
        return back();

    }
}
