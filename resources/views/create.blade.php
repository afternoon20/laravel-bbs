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
      <h2 class="center center">新規作成</h2>
      <p class="center"><br /></p>
      <main>
        <div class="form-wrapper">
          <form action="/create" method="POST" >
          　@CSRF
            <label>タイトル</label>
            <input type="text" name="title" required/>
            <label>内容</label>
            <textarea name="body" class="materialize-textarea" cols="30" rows="10"></textarea>
            <div class="center form__btn">
              <input class="btn" name="create" type="submit" value="作成する" />
            </div>
          </form>
        </div>
      </main>
    </div>
@endsection