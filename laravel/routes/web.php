<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\WeightController;

Auth::routes();
Route::get('/', 'WeightController@index')->name('weight'); // 【グラフ画面】
Route::resource('/articles', 'WeightController'); //->middleware('auth');  /* 4-2 ArticleController → WeightControllerに変更している。middlewareは未ログインユーザーに他の画面を表示させないようにする。後々設定が必要になる4-3 【ログイン画面】*/

Route::get('/', 'WeightController@show')->name('show'); // 【編集画面】
// resources/views/articles/  参考サイトhttps://qiita.com/kamome_susume/items/10f6774329ac289b7fbe

Route::get('/', 'WeightController@confirm')->name('confirm'); // 【削除画面】
