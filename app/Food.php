<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //テーブルのカラムに挿入するものをfillable(もしくは動かしたくないのをguardedで指定)
    protected $fillable = ['user_id', 'date', 'time', 'title', 'comment', 'pic1', 'pic2', 'pic3'];

    //他のモデル（テーブル）との関係性
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function keepfood(){
        return $this->hasMany('App\Models\KeepFood');
    }

}
