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
      <div class="header">
        <div class="header-logo">
          <img src="{{ asset('images/unkokko.png') }}" alt="">
          <p class="header-logo-text">Tayori</p>
        </div>

       <button class="header-menu-btn">
         <img src="{{ asset('images/menu.png') }}" alt="" class="header-menu-img">
       </button>
      </div>

      @if (Route::has('login'))
        <div class="p_menu">
          
          <div class="p_menu-close">
            <button class="p_menu-close-btn">
              <i class="fa-solid fa-xmark"></i>
            </button>
          </div>

          <li class="p_menu-list"><a href="/" class="p_menu-link">TOP</a></li>
          @auth
              <li class="p_menu-list"><a href="/mypage" class="p_menu-link">マイページ</a></li>
              <li class="p_menu-list"><a href="/newPoof" class="p_menu-link">ウンチ日記作成</a></li>
              <li class="p_menu-list"><a href="/index/poof" class="p_menu-link">ウンチ日記編集</a></li>
              <li class="p_menu-list"><a href="/newPee" class="p_menu-link">オシッコ日記作成</a></li>
              <li class="p_menu-list"><a href="/index/pee" class="p_menu-link">オシッコ日記編集</a></li>
              <li class="p_menu-list"><a href="/newFood" class="p_menu-link">食べたもの日記作成</a></li>
              <li class="p_menu-list"><a href="/index/food" class="p_menu-link">食べたもの日記編集</a></li>
              <li class="p_menu-list"><a href="{{ route('logout') }}" class="p_menu-link">ログアウト</a></li>
          @else
              <li class="p_menu-list"> <a href="{{ route('login') }}" class="p_menu-link">ログイン</a></li>
              @if (Route::has('register'))
                <li class="p_menu-list"><a href="{{ route('register') }}" class="p_menu-link">登録</a></li>
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