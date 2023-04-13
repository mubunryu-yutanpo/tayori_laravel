<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontAwsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    <title>@yield('title', 'home')</title>
</head>
<body>
    @section('header')
      <div class="header" style="background:#B68973;">
       <img src="{{ asset('images/unkokko.png') }}" alt="" style="width:50px;">

       <button class="">
         <img src="{{ asset('images/menu.png') }}" alt="">
       </button>
      </div>

      @if (Route::has('login'))
        <div class="">
          
          <div class="">
            <button class="">
              <i class="fa-solid fa-xmark"></i>
            </button>
          </div>

          <li class=""><a href="/" class="">TOP</a></li>
          <li class=""><a href="" class="">クイズをプレイ</a></li>
          @auth
              <li class=""><a href="" class="">マイページ</a></li>
              <li class=""><a href="" class="">クイズ作成</a></li>
              <li class=""><a href="" class="">プロフィール編集</a></li>
              <li class=""><a href="" class="">ログアウト</a></li>
          @else
              <li class=""> <a href="{{ route('login') }}" class="">{{ __('Login') }}</a></li>
              @if (Route::has('register'))
                <li class=""><a href="{{ route('register') }}" class="">{{ __('Register') }}</a></li>
              @endif
          @endauth
        </div>
        @endif
    @show

    <!-- フラッシュメッセージ -->
    @if (session('flash_message'))
      <div class="alert alert-primary text-center" role="alert">
        {{ session('flash_message') }}
      </div>
    @endif

    <div class="c_main" style="background:#FAF3E0;">
        @yield('main')
     </div>

    @section('footer')
      <div class="footer" style="background:#B68973;">
        <p>Copyright ©️ tayori. All Right Reserved.</p>
      </div>
    @show

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ secure_asset('js/menu.js') }}"></script>


</body>
</html>