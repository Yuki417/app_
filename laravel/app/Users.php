<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//==========ここから追加==========
use Illuminate\Database\Eloquent\Relations\BelongsTo;
//==========ここまで追加==========

class Users extends Model
{
    //==========ここから追加==========
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
    //==========ここまで追加==========
}




























/* Article.php モデル　消す予定-
<?php
*/

/* namespace App; */

/* use Illuminate\Database\Eloquent\Model; */
//==========ここから追加・Techpit教材参考==========
/* use Illuminate\Database\Eloquent\Relations\BelongsTo; */
//==========ここまで追加==========



/* class Article extends Model
{ */
    //==========ここから追加・Techpit教材参考==========
/*     public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    } */
    //==========ここまで追加==========
    /* } */




/*
// 福 4:20~
class graph extends Model
{
    // テーブル名
    protected = $table = 'weights'

    // 可変項目
    protected $fillable =
    [
        'weight'
        'weight_date'
    ];
}
 */
