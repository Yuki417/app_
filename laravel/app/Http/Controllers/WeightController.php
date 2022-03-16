<?php

namespace App\Http\Controllers;

/* use App\Customer;
use App\Weight;  //Weight.phpモデル呼び出し
 *///Modelからデータを取ってくるのに今後必要になると思う？
use App\Customer as AppCustomer;
use App\Models\Customer;
use App\Models\Weight;


use Illuminate\Http\Request;


/* 今日追加　削除機能のとき */
use DB;
use Illuminate\support\Facades\Log;


class WeightController extends Controller
{


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

        $customers = Customer::all();
        return view('WeightRegistrations.index', ['customers' => $customers]);
    }

        //クエリビルダ？
/*         $customers = DB::table('customers')
        ->select('id','name','birthday', 'gender')
        ->get();
 */        // ->paginate(20);
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


    // 削除確認画面 ダイアログなので必要ない？
    public function confirm()
    {
        return view('WeightRegistrations.confirm');
    }
    // ここまで




    public function destroy($id)
    {
        $input = Customer::find($id);

        $input->delete();

        return redirect()->action('WeightRegistrationController@index');
    }

}




// M Modelを呼び出す Users.php   Article.php
// C ContorollerからBladeに渡す　 UsersController    ArticleController（ここ）
// V Bladeで表示する　graph.blade.php   index.blade.php。。
