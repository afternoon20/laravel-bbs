<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
<header>
      <nav>
        <div class="nav-wrapper teal lighten-3">
          <div class="container">
            <a href="{{ url('/') }}" class="header-ttl brand-logo">Laravel-bbs</a>
              <ul class="right hide-on-med-and-down">
              @guest
                <li><a href="{{ route('login') }}" class="white-text waves-effect waves-light btn-flat">ログイン</a></li>
                <li><a href="{{ route('register') }}" class="white-text waves-effect waves-light btn-flat">登録する</a></li>
              </ul>
            <!-- ドロップダウンリスト -->
            <a class="dropdown-trigger right" href="#" data-target="dropdown"><i class="material-icons">apps</i></a>
            <ul id="dropdown" class="dropdown-content">
              <li><a href="{{ route('login') }}">ログイン</a></li>
              <li><a href="{{ route('register') }}">登録する</a></li>
            </ul>
            @else
            <li class="header-txt">こんにちは、{{ Auth::user()->name }}さん</li>
              <li>
              <a class="white-text waves-effect waves-light btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              ログアウト
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
              <li><a class="white-text waves-effect waves-light btn-flat modal-trigger" href="#modal">退会する</a></li>
              <!-- ポップアップ表示 -->
              <div id="modal" class="modal ">
                <div class="modal-content post-modal">
                  <h3 class="modal-txt">本当に退会しますか？</h3>
                  <p class="modal-txt">一度退会すると、復元はできません。<br />掲示板の作成、編集、削除ができなくなります。</p>
                </div>
                <div class="modal-footer">
                  <form action="../deleteForm.html" method="post">
                    <!-- <input type="hidden" name="post_id" value="<?php //echo $entry[post_id];?>" /> -->
                    <input class="btn red" type="submit" value="削除する" />
                  </form>
                </div>
              </div>
            </ul>
            <!-- ドロップダウンリスト -->
            <a class="dropdown-trigger right" href="#" data-target="dropdown"><i class="material-icons">apps</i></a>
            <ul id="dropdown" class="dropdown-content">
              <li>
                <div class="center dropdown-txt">
                  <i class="material-icons tiny">person</i>
                  田中太郎
                </div>
              </li>
              <li class="divider" tabindex="-1"></li>
              <li><a href="logoutForm.html">ログアウト</a></li>
              <li><a class="grey-text lighten-1 modal-trigger" href="#modal-mb">退会する</a></li>
            </ul>
            @endguest

            
          </div>
        </div>
      </nav>
    </header>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    <footer class="teal lighten-3">
      <div class="footer-content">
        <p class="center white-text">©Copyright2020 Afternoon-Web.All Rights Reserved.</p>
      </div> 
    </footer>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>

    </div>
</body>
</html>
