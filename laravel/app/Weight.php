<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//==========ここから追加==========
use Illuminate\Database\Eloquent\Relations\BelongsTo;
//==========ここまで追加==========

class Weight extends Model
{
    // テーブル名　福4:17~
    protected $table = 'weights';

    // 可変項目
    protected $fillable = [
        'weight',
        'weight_date'
    ];

    //==========ここから追加==========
    public function weight(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
    //==========ここまで追加==========
}
