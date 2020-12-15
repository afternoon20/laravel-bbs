@extends('layouts.template')

@section('content')
<div class="container">
      <a href="/" class="teal-text lighten-3 breadcrumbs">
        <span class="icon">
          <i class="material-icons">home</i>
        </span>
        ホーム
      </a>
      <span>&gt;</span>
      <h2 class="center">ログイン</h2>
      <p class="center">ログインIDとパスワードを入力してログインします。</p>
      @error('login_id')
        <p class="center red-text">
          入力内容に不備があります。
        </p>
    　 @enderror
      <main>
        <div class="form-wrapper">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="login_id">ログインID</label>
            <input type="text" name="login_id" class="@error('login_id') is-invalid @enderror" required/>
            
            <label class="password" for="password">
              パスワード
              <input type="password" name="password" class="@error('password') is-invalid @enderror" required/>
              <span class="password-toggler"><i class="material-icons left">visibility</i></span>
            </label>

            <div class="center form__btn">
              <input class="btn" type="submit" value="ログイン" />
            </div>
          </form>
        </div>
      </main>
</div>

@endsection
