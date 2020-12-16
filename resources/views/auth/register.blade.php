@extends('layouts.template')
@section('title', '新規登録')
@section('content')
  <div class="container">
      <a href="/" class="teal-text lighten-3 breadcrumbs">
        <span class="icon">
          <i class="material-icons">home</i>
        </span>
        ホーム
      </a>
      <span>&gt;</span>
      <h2 class="center center">登録</h2>
      <p class="center">ログインIDとパスワードを入力して登録してください。</p>
      <main>
        <div class="form-wrapper">
          <form action="{{ route('register') }}" method="POST">
            @csrf
            <label for="login_id">ログインID(半角英数字のみ)
              <input id="login_id" type="text" name="login_id"  class="@error('login_id') is-invalid @enderror" value="{{ old('login_id') }}" required />
              @error('login_id')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </label>
            <label for="name">ニックネーム
              <input id="name" type="text" name="name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required />
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong class="red-text">{{ $message }}</strong>
                </span>
              @enderror
            </label>
            <label for="password" class="password">
              パスワード(半角英数字のみ)
              <input type="password" name="password" class="@error('password') is-invalid @enderror" required autocomplete="new-password"/>
              <span class="password-toggler"><i class="material-icons left">visibility</i></span>
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong class="red-text">パスワードは8文字以上である必要があります。</strong>
                </span>
              @enderror
            </label>
            <div class="center form__btn">
              <input class="btn" name="register" type="submit" value="登録する" />
            </div>
          </form>
        </div>
      </main>
    </div>
@endsection
