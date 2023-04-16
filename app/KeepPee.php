<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeepPee extends Model
{
    //テーブル名を指定
    protected $table = 'keep_pee';

    //テーブルのカラムに挿入するものをfillable(もしくは動かしたくないのをguardedで指定)
    protected $fillable = ['d_id', 'user_id', 'like_flg'];

    //他のモデル（テーブル）との関係性
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function pee(){
        return $this->belongsTo('App\Models\Pee');
    }
}
