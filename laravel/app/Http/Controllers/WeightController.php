<?php

namespace App\Http\Controllers;

use App\Weight;  //Weight.phpモデル呼び出し

use Illuminate\Http\Request;

class WeightController extends Controller
{

    // グラフ画面
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


    // 4-3 新規登録画面
    public function create()
    {
        return view('articles.create');
    }
    // ここまで4-3


    // 編集画面
    public function show()
    {
        return view('articles.show');
    }
    //ここまで詳細画面


    // 削除確認画面
    public function confirm()
    {
        return view('weight.confirm');
    }
    // ここ削除画面まで


    // 【ジム会員新登録画面】
    public function registration()
    {
        return view('weight.registration');
    }
    // ここ削除画面まで


    // 【体重記録画面】
    public function record()
    {
        return view('weight.record');
    }


}




// M Modelを呼び出す Users.php   Article.php
// C ContorollerからBladeに渡す　 UsersController    ArticleController（ここ）
// V Bladeで表示する　graph.blade.php   index.blade.php。。
