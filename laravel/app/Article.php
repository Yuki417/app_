<!--
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//==========ここから追加==========
//use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany; // hasManyは1対多の関係（3箇所）

//==========ここまで追加==========

class Article extends Model
{
    //==========ここから追加==========
    public function user(): hasMany // hasManyは1対多の関係（3箇所）
    {
        return $this->hasMany('App\User'); // hasManyは1対多の関係（3箇所）
    }
    //==========ここまで追加==========
}
 -->
 // M モデル



// ↓シンプル参照
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
    * 複数代入する属性
    *
    * @var array
    */
    protected $fillable = [
        'customer_id',
    ];

    //「１対多」の「多」側 → メソッド名は複数形
    public function customer_id()
    {
        //リレーションの設定
        return $this->belongsTo('App\Models\customer_id');
    }
}
