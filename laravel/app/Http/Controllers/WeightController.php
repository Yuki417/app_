<?php

namespace App\Http\Controllers;

use App\Weight;  //Weight.phpモデル呼び出し

use Illuminate\Http\Request;

class WeightController extends Controller
{
    public function index()
    {
        $weights = Weight::all();

        //ここから17行目
        //$weights = Weight::all()->sortByDesc('created_at');
        //$users = Users::orderBy('created_at','desc')->get();
        //ここまで

        //return view('articles.index', ['articles' => $articles]);【グラフ画面】
        return view('articles.graph', ['weight' => $weights]);
    }


    // 4-3 ここから【】
    public function create()
    {
        return view('articles.create');
    }
    // ここまで4-3


    // 詳細画面
    public function show()
    {
        return view('articles.show');
    }
    //ここまで詳細画面

    // 削除画面
    public function confirm()
    {
        return view('articles.confirm');
    }
    // ここ削除画面まで

}




// M Modelを呼び出す Users.php   Article.php
// C ContorollerからBladeに渡す　 UsersController    ArticleController（ここ）
// V Bladeで表示する　graph.blade.php   index.blade.php。。
