@extends('Layouts.parent')

@section('title', 'おしっこ日記一覧')

@section('header')

@section('main')
  <div class="c_main-title">
      <p class="c_main-title-text"><i class="fa-solid fa-poo fa-fw"></i>おしっこ日記一覧</p>
  </div>

  @foreach($pees as $pee)
  <div class="c_contents-card">
    <div class="c_contents-title">
        <h3 class="c_contents-title-text">{{ $pee->title }}</h3>
    </div>
    <div class="c_contents-diary">
            <p class="c_contents-diary-date">@if($pee !== null){{ $pee->date }}@endif</p>
            <p>@if($pee !== null){{ $pee->comment }}@endif</p>
            <div class="c_submit ta-right">
               <button type="button" class="p_button-primary">
                  <a href="{{ route('edit_pee', $pee->id) }}">編集</a>
                </button>
            </div>
    </div>
  </div>
  @endforeach

  <!-- ページネーション -->
  <div class="pagination">
    {{ $pees->links() }}
  </div>


@endsection

@section('footer')