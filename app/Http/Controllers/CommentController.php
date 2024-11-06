<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //
    public function create(CommentRequest $request, $article_id){
        $article = new Comment();
        $article->user_id = Auth::user()->id;
        $article->article_id = $article_id;
        $article->comment = $request->input('comment');
        $article->save();

        return redirect()->route('message');
    }

    public function allComments(){
        $comments = Comment::with('get_users')->get();

        return view('comments.comments', [
            'comments' => $comments
        ]);
    }
}
