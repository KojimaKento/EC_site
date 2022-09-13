<!doctype html>
<head>
  <link href="../../css/heater.css" rel="stylesheet" type="text/css">
</head>


<div class="heater_body">
  <div class="title_search">
    <div class="heater_title">
      <a class="heater_text" href="{{ url('/') }}">creation</a>
    </div>
    <div class="heater_search">
      <form action="{{ route('search') }}" method="POST">
        @csrf
        <input class="search_input" type="text" name="input" placeholder="クリエイターを探す" value="@if (isset($input)) {{ $input }} @endif" >
        <button type="submit" class="search_btn">検索</button>
      </form>
    </div>
  </div>
  <div class="login_register_contents">
    @guest
      @if (Route::has('login'))
        <div class="login"><a class="login_text" href="{{ route('login') }}">ログイン</a></div>
      @endif

      @if (Route::has('register'))
        <div class="register"><a class="register_text" href="{{ route('register') }}">新規登録</a></div>
      @endif
    @else
      <div class="login_user_contents">
        
        <div class="login_user">
          <a class="username_text" href="{{ route('home') }}">{{ Auth::user()->username }}</a>

          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            <!-- {{ __('Logout') }} -->
            ログアウト
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        </div>
      </div>
    @endguest
  </div>
</div>
<div class="main">
  @yield('content')
</div>
</html>