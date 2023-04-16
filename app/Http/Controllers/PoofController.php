<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Poof;


class PoofController extends Controller
{
    // 日記作成ページへ
    public function new(){
        return view('/mypage/newPoof');
    }

    // 日記作成
    public function create(Request $request){
        $food = new Poof;
        $user_id = Auth::id();

        //フォームの内容をDBに保存
        $food->fill([
            'user_id' => $user_id,
            'date'    => $request->date,
            'time'    => $request->time,
            'title'   => $request->title,
            'comment' => $request->comment,
            'color'   => $request->color,
            'shape'  => $request->shape,
            'smell' => $request->smell,
        ])->save();

        //リダイレクト
        return redirect('/mypage')->with('flash_message', '登録しました！');
    }

}
