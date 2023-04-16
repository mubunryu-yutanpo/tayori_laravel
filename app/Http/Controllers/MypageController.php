<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Poof;
use App\Pee;
use App\Food;


class MypageController extends Controller
{
    //マイページへ
    public function mypage(){
        //それぞれのDB情報を取得して渡す
        $user = Auth::user();
        $user_id = $user->id;
        //nullだからいけてない↓
        //$avatar = DB::table('users')->where($user)->get('avatar');

        //まだデータがない場合はnullを入れとく（allで全データを取得して大量のデータがあると動作に影響するらしいので先頭だけ取得）
        $poof = null;
        $pee  = null;
        $food = null;

        if(Poof::latest()->first() !== null){
            $poof = Poof::latest()->first();
        }
        if(Pee::latest()->first() !== null){
            $pee = Pee::latest()->first();
        }
        if(Food::latest()->first() !== null){
            $food = Food::latest()->first();
        }
        return view('mypage/mypage', compact('user', 'poof', 'pee', 'food') );
    }

    // プロフィール編集画面へ
    public function profEdit($id){
        if(!ctype_digit($id)){
            return redirect('/welcome')->with('flash_message', __('Invalid operation was performed'));
        }

        $user = Auth::user($id);
        return view('mypage/profEdit', compact('user') );
    }

    // プロフィール更新
    public function profUpdate(Request $request, $id){
        if(!ctype_digit($id)){
            return redirect('/welcome')->with('flash_message', __('Invalid operation was performed'));
        }

        // 情報を更新
        User::where('id', $id)->update([
            'name'   => $request->name,
            'email'  => $request->email,
            'avatar' => $request->avatar,
        ]);

        return redirect('/mypage')->with('flash_message', 'プロフィールを変更しました！');
    }


}
