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

/* ここではRouteファサードのgetというメソッドに、2つの引数を渡しています。
Route::getの第一引数には、URLを文字列で渡します。
第二引数には、どのコントローラーで何のメソッドを実行するのかを文字列で渡します。コントローラー名とメソッド名の間には@を入れます。

以上により、/というURLにリクエスト(ブラウザなどからのアクセス)があったら、ArticleControllerのindexアクションメソッドを動かす、ということが定義されます。
ArticleControllerは、まだ作成していませんので、次のパートで作成します。
なお、LaravelやRuby on Railsなどでは、ルーティングによって動くことになるコントローラーの各メソッドのことを、アクションメソッドあるいはアクションとよく呼びます。
本教材では、アクションメソッドという呼び方をしていきます。 */

Route::get('/', 'WeightController@index')->name('weight');
// あ
