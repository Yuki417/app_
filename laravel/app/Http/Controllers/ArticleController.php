<?php

namespace App\Http\Controllers;

//==========ここから追加==========ここを消してもlocalhostに繋がった
use App\Article;
//==========ここまで追加==========
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {

        //==========ここから追加==========17行目
        //$articles = Article::all()->sortByDesc('created_at');
        //$articles = Article::orderBy('created_at','desc')->get();
        //==========ここまで追加==========

        //return view('articles.index', ['articles' => $articles]);
        return view('articles.graph');

    }
}




// M Modelを呼び出す Article.php
// C ContorollerからBladeに渡す　ArticleController（ここ）
// V Bladeで表示する　index.blade.php
