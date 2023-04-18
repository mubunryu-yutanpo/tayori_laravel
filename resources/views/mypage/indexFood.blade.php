@extends('Layouts.parent')

@section('title', '食べたもの日記一覧')

@section('header')

@section('main')
  <div class="c_main-title">
      <p class="c_main-title-text"><i class="fa-solid fa-poo fa-fw"></i>食べたもの日記一覧</p>
  </div>

  @foreach($foods as $food)
  <div class="c_contents-card">
    <div class="c_contents-title">
        <h3 class="c_contents-title-text">{{ $food->title }}</h3>
    </div>
    <div class="c_contents-diary">
        <p class="c_contents-diary-date">@if($food !== null){{ $food->date }}@endif</p>

        <div class="c_contents-diary-img">
            <img src="{{ $food->pic1 }}" alt="" class="c_contents-diary-img-item">
        </div>

        <p>@if($food !== null){{ $food->comment }}@endif</p>
        <div class="c_submit ta-right margin-b-20">
          <button type="button" class="p_button-primary">
            <a href="{{ route('edit_food', $food->id) }}">編集</a>
          </button>
        </div>
    </div>
  </div>
  @endforeach

  <!-- ページネーション -->
  <div class="pagination">
    {{ $foods->links() }}
  </div>


@endsection

@section('footer')