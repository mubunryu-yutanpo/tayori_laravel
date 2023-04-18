@extends('layouts.parent')

@section('title', 'HOME')

@section('header')

@section('main')
  <div class="c_contents-card">
    <div class="c_contents-title">
        <h3 class="c_contents-title-text">流しちゃう前にチェック</h3>
    </div>
    <div class="c_contents-about">
        <div class="c_cotents-about-img">
            <img src="{{ asset('images/1.png') }}" alt="" style="height:75px;">
        </div>
        <div class="c_contents-about-text">
            <p>ウンチやおしっこからは意外と多くの情報が得られます</p>
            <p>カラダから日々届けられる便りを目をとおしてみましょう</p>
        </div>
    </div>
  </div>

  <div class="c_contents-card">
    <div class="c_contents-title">
        <h3 class="c_contents-title-text">毎日の状態を記録しよう</h3>
    </div>
    <div class="c_contents-about">
        <div class="c_cotents-about-img">
            <img src="{{ asset('images/2.png') }}" alt="" style="height:75px;">
        </div>
        <div class="c_contents-about-text">
            <p>便りを記録することで健康管理に役立ちます</p>
            <p>Tayoriはそれをお手伝いするためのアプリです</p>
        </div>
    </div>
  </div>

  <div class="c_contents-card">
    <div class="c_contents-title">
        <h3 class="c_contents-title-text">照らし合わせてみよう</h3>
    </div>
    <div class="c_contents-about">
        <div class="c_cotents-about-img">
            <img src="{{ asset('images/3.png') }}" alt="" style="height:75px;">
        </div>
        <div class="c_contents-about-text">
            <p>「なんか調子悪い」</p>
            <p>そんな時には記録している食事とお通じの状態をチェックしてみましょう</p>
        </div>
    </div>
  </div>

  <div class="c_submit ta-center">
    <button class="p_button-primary color1">
        <a href="" class="">今日の便りを記録する</a>
    </button>
    <p style="margin: 20px 0;">※完全無料でご利用いただけます</p>
  </div>

@endsection

@section('footer')