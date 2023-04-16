<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeepFood extends Model
{
    //テーブル名を指定
    protected $table = 'keep_food';

    //テーブルのカラムに挿入するものをfillable(もしくは動かしたくないのをguardedで指定)
    protected $fillable = ['d_id', 'user_id', 'like_flg'];

    //他のモデル（テーブル）との関係性
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function food(){
        return $this->belongsTo('App\Models\Food');
    }

}
