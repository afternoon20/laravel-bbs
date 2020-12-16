@extends('layouts.template')
@section('title', $item->title."の編集")
@section('content')
<div class="container">
      <a href="/" class="teal-text lighten-3 breadcrumbs"><span class="icon"><i class="material-icons">home</i></span>ホーム</a>
      <span>&gt;</span>
      <a class="teal-text lighten-3" href="/post/{{$item->id}}">{{$item->title}}</a>
      <h2 class="center center">編集する</h2>
      <p class="center"><br /></p>
      <main>
        <div class="form-wrapper">
          <form action="{{ url('/edit') }}" method="post">
            @csrf
            <label>タイトル</label>
            <input type="text" name="title" value="{{$item->title}}" required />
            <label>内容</label>
            <textarea name="body" class="materialize-textarea" cols="30" rows="10">{!! nl2br(e($item->body)) !!}</textarea>
            <input type="hidden" name="id" value="{{$item->id}}" />
            <div class="center form__btn">
              <input class="btn" type="submit" value="編集する" />
            </div>
          </form>
        </div>
      </main>
    </div>
@endsection