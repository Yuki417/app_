<?php

namespace App\Http\Controllers;

//==========ここから追加==========ここを消してもlocalhostに繋がった
use App\Users;  //
//==========ここまで追加==========
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        $users = Users::all();



        //==========ここから追加==========17行目
        $users = Users::all()->sortByDesc('created_at');
        //$users = Users::orderBy('created_at','desc')->get();
        //==========ここまで追加==========

        //return view('articles.index', ['articles' => $articles]);
        return view('articles.graph', ['users' => $users]);

    }
}

// M Modelを呼び出す Article.php
// C ContorollerからBladeに渡す　ArticleController（ここ）
// V Bladeで表示する　index.blade.php（graph.blade.php）
