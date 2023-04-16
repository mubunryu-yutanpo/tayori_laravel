@extends('Layouts.parent')

@section('title', 'マイページ')

@section('header')

@section('main')
  <div class="">
    <img src="{{ $user->avatar }}" alt="">
    <a href="{{ route('prof_edit', $user->id) }}">プロフ編集</a>
  </div>
  <div class="c_main-title">
      <p class="c_main-title-text"><i class="fa-solid fa-poo fa-fw"></i>マイページ</p>
      <p class="c_main-title-about">※最新の日記のみ表示しています</p>
  </div>

  <div class="c_contents-card">
    <div class="c_contents-title">
        <h3 class="c_contents-title-text">ウンチ日記の最新のやつ</h3>
    </div>
    <div class="c_contents-diary">
            <p class="c_contents-diary-date">@if($poof !== null){{ $poof->date }}@endif</p>
            <p>@if($poof !== null){{ $poof->comment }}@endif</p>
    </div>
  </div>

  <div class="c_contents-card">
    <div class="c_contents-title">
        <h3 class="c_contents-title-text">おしっこ日記の最新のやつ</h3>
    </div>
    <div class="c_contents-diary">
            <p class="c_contents-diary-date">@if($pee !== null){{ $pee->date }}@endif</p>
            <p>@if($pee !== null){{ $pee->commnet }}@endif</p>
    </div>
  </div>

  <div class="c_contents-card">
    <div class="c_contents-title">
        <h3 class="c_contents-title-text">食べたもの日記の最新のやつ</h3>
    </div>
    <div class="c_contents-diary">
            <p class="c_contents-diary-date">@if($food !== null){{ $food->date }}@endif</p>
            <div class="c_contents-diary-img">
                <img src="{{ asset('images/4.jpeg') }}" alt="" class="c_contents-diary-img-item">
            </div>
            <p>@if($food !== null){{ $food->comment }}@endif</p>
    </div>
  </div>



@endsection

@section('footer')