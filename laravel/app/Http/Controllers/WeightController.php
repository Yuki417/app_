<?php

namespace App\Http\Controllers;

use App\Weight;  //Weight.phpモデル呼び出し

use Illuminate\Http\Request;

class WeightController extends Controller
{


/*     // グラフ画面  モックプレゼンで作成したやつ
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
    // ここまで
 */


    // グラフ画面
     public function graph()
    {
        $weights = Weight::all();
        return view('WeightRegistrations.graph', ['weight' => $weights]);
    }
    // ここまで


        // TOP画面
    public function index()
    {
        return view('WeightRegistrations.index');
    }
    //ここまで





    // 4-3 新規登録画面
    public function create()
    {
        return view('WeightRegistrations.create');
    }
    // ここまで4-3


    // 編集画面
    public function edit()
    {
        return view('WeightRegistrations.edit');
    }
    //ここまで

    // 削除確認画面 ダイアログなので必要ない？
    public function confirm()
    {
        return view('WeightRegistrations.confirm');
    }
    // ここまで


    // 【ジム会員新登録画面】
    public function registration()
    {
        return view('WeightRegistrations.registration');
    }
    // ここまで


    // 【体重記録画面】
    public function record()
    {
        return view('WeightRegistrations.record');
    }
    // ここまで


}




// M Modelを呼び出す Users.php   Article.php
// C ContorollerからBladeに渡す　 UsersController    ArticleController（ここ）
// V Bladeで表示する　graph.blade.php   index.blade.php。。
