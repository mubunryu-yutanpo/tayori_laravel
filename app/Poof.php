<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poof extends Model
{
    //テーブル名を指定
    protected $table = 'poof';

    //テーブルのカラムに挿入するものをfillable(もしくは動かしたくないのをguardedで指定)
    protected $fillable = ['user_id', 'date', 'time', 'title', 'comment', 'color', 'shape', 'smell'];

    //他のモデル（テーブル）との関係性
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function keeppoof(){
        return $this->hasMany('App\Models\KeepPoof');
    }
}
