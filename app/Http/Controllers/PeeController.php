<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
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

        //日記編集
        public function edit($id){
            if(!ctype_digit($id)){
                return redirect('/welcome')->with('flash_message', __('不正な操作が行われました'));
            }
    
            $user = Auth::user();
            $pee = DB::table('pee')->find($id);
            //dd($pee);
    
            return view('mypage/peeEdit', compact('user', 'pee'));
        }
    
}
