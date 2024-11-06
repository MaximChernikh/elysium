<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    //
    public function index($id){

        $article = Article::with('get_users')->where('id', '=', $id)->first();

        return view('articles.one-article', [
            'article' => $article,
        ]);
    }

    public function myArticle($id){

        $article = Article::with('get_users')->where('id', '=', $id)->first();

        return view('articles.my_article', [
            'article' => $article,
        ]);
    }

    public function create(ArticleRequest $request){
        $article = new Article();
        $article->user_id = Auth::user()->id;
        $article->name = $request->input('name');
        $article->content = $request->input('content');
        $article->save();

        return redirect()->route('message');
    }

    public function update(ArticleRequest $request, $id){
        $article = Article::find($id);
        $article->name = $request->input('name');
        $article->content = $request->input('content');
        $article->save();

        return redirect()->route('message');
    }

    public function allArticles(){
        $account_article = Article::with('get_users')->get();
        return view('articles.articles', [
            'account_article' => $account_article
        ]);
    }

    public function showMyArticles(){
        $my_articles = Article::where('user_id', '=', Auth::id())->with('get_users')->get();

        return view('articles.my_articles', [
            'my_articles' => $my_articles,
        ]);
    }

    public function creatingArticle(){
        $account_article = Article::all();

        return view('articles.create_article', [
            'account_article' => $account_article,
        ]);
    }

}
