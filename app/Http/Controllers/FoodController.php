<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Food;


class FoodController extends Controller
{
    // 日記作成ページへ
    public function new(){
        return view('/mypage/newFood');
    }

    // 日記作成
    public function create(Request $request){
        $food = new Food;
        $user_id = Auth::id();

        //フォームの内容をDBに保存
        $food->fill([
            'user_id' => $user_id,
            'date'    => $request->date,
            'time'    => $request->time,
            'title'   => $request->title,
            'comment' => $request->comment,
            'pic1'    => $request->pic1,
            'pic2'    => $request->pic2,
            'pic3'    => $request->pic3,
        ])->save();

        //リダイレクト
        return redirect('/mypage')->with('flash_message', '登録しました！');
    }

    //日記編集
    // public function edit($id){}


}
