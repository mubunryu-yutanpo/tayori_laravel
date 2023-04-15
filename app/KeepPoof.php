<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeepPoof extends Model
{
    //テーブルのカラムに挿入するものをfillable(もしくは動かしたくないのをguardedで指定)
    protected $fillable = ['d_id', 'user_id', 'like_flg'];

    //他のモデル（テーブル）との関係性
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function poof(){
        return $this->belongsTo('App\Models\Poof');
    }
}
