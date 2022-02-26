<?php

namespace App\Http\Controllers;

use App\Weight;  //Weight.phpモデル呼び出し

use Illuminate\Http\Request;

class WeightController extends Controller
{

    public function index()
    {
        $weights = Weight::all();



        //==========ここから追加==========17行目
        //$weights = Weight::all()->sortByDesc('created_at');
        //$users = Users::orderBy('created_at','desc')->get();
        //==========ここまで追加==========

        //return view('articles.index', ['articles' => $articles]);
        return view('articles.graph', ['weight' => $weights]);

    }
}

// M Modelを呼び出す Users.php   Article.php
// C ContorollerからBladeに渡す　 UsersController    ArticleController（ここ）
// V Bladeで表示する　graph.blade.php   index.blade.php
