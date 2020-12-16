@extends('layouts.template')
@section('title', "$item->title")
@section('content')
<div class="container">
      <a href="/" class="teal-text lighten-3 breadcrumbs">
        <span class="icon">
          <i class="material-icons">home</i>
        </span>
        ホーム
      </a>
      <span>&gt;</span>
      <span>{{$item->title}}</span>
      <div class="post__btn">
        @auth
        <a href="{{ url('/edit?id=') }}{{ $item-> id }}" class="waves-effect waves-light btn blue">編集する</a>
        <a class="waves-effect waves-light btn grey lighten-1 modal-trigger" href="#modal-del">削除</a>
        @else
        <span class="btn disabled">編集する</span>
        <span class="btn disabled" href="#modal-del">削除</span>
        @endauth
      </div>
      <main>
        @auth
        @else
        <p class="center red-text">ログインすると、掲示板の作成、編集、削除ができます。</p>
        @endauth
        <div class="entry">
          <header class="entry-header entry-header--post">
            <h3 class="entry-ttl">{{$item->title}}</h3>
            <div class="entry-date">
              投稿日：
              <time>{{$item->created_at}}</time>
            </div>
          </header>
          <div class="entry-body">
          {!! nl2br(e($item->body)) !!}
          </div>

          <div class="comment-wrapper">
            <form action="{{ url('/comment') }}" method="POST">
            @csrf
              <label>
                コメント
                <textarea name="body" class="materialize-textarea" cols="30" rows="10" required></textarea>
              </label>
              <input type="hidden" name="post_id" value="{{$item->id}}" />
              <input type="hidden" name="login_id" value= @auth{{ Auth::user()-> login_id }}@endauth >
              <div class="center form__btn">
                <input class="btn" type="submit" value="コメントする" />
              </div>
            </form>

            <!-- コメント一覧 -->
            <div class="comment-list">
              @if ($comments != null)
              @foreach($comments as $comment)
              <div class="comment">
                <div class="comment-header">
                  <span class="comment__num">{{$loop->iteration}}</span>
                  <span class="comment__name">
                  @if ($comment-> name != null)
                    {{$comment->name}}
                  @else 
                    名無し
                  @endif
                  </span>
                  <div class="comment__date">
                    投稿日：
                    <time>{{$comment->created_at}}</time>
                  </div>
                </div>
                <div class="comment-body">
                {{$comment->body}}
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>
          {{ $comments->links('vendor.pagination.materialize') }}
        </div>
      </main>
       <!-- ポップアップ表示 -->
       <div id="modal-del" class="modal">
          <div class="modal-content post-modal">
            <h3>この投稿を削除しますか？</h3>
            <p>一度削除すると、復元はできません。<br>コメントも削除されます。</p>
          </div>
          <div class="modal-footer">
            <form action="{{ url('/delete') }}" method="POST">
              @csrf
              <input type="hidden" name="post_id" value="{{$item->id}}">
              <input class="btn red" type="submit" value="削除する" />
            </form> 
          </div>
        </div>
    </div>
@endsection