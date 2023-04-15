<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pee;


class PeeController extends Controller
{
    // 日記作成ページへ
    public function new(){
        return view('/mypage/newPee');
    }

    // 日記作成
    public function create(Request $request){
        $food = new Pee;
        $user_id = Auth::id();

        //フォームの内容をDBに保存
        $food->fill([
            'user_id' => $user_id,
            'date'    => $request->date,
            'time'    => $request->time,
            'title'   => $request->title,
            'comment' => $request->comment,
            'color'   => $request->color,
            'volume'  => $request->volume,
            'frequency' => $request->frequency,
        ])->save();

        //リダイレクト
        return redirect('/mypage')->with('flash_message', '登録しました！');
    }
}
