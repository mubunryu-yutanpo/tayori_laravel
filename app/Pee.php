<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pee extends Model
{
    //テーブルのカラムに挿入するものをfillable(もしくは動かしたくないのをguardedで指定)
    protected $fillable = ['user_id', 'date', 'time', 'title', 'comment', 'color', 'volume', 'frequency'];

    //他のモデル（テーブル）との関係性
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function keeppee(){
        return $this->hasMany('App\Models\KeepPee');
    }
}
