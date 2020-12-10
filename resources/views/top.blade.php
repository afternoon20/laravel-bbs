@extends('layouts.template')

@section('content')
<div class="container">
      <span class="message red-text"></span>
      <h2 class="center center">掲示板</h2>
      <p class="center red-text">
        @auth
        @else
        ログインすると掲示板の作成、編集、削除ができます。
        @endauth
      </p>
      <main>
        <div class="entry-list">
          @auth
            <a href="{{ url('/create') }}" class="waves-effect waves-light btn blue"><i class="material-icons left">add</i>新規作成</a>
          @else
            <span class="btn disabled"><i class="material-icons left">add</i>新規作成</span>
          @endauth
          <!-- 一覧表示 -->
          @if ($items != null)
          @foreach($items as $item)
          <div class="entry">
            <header class="entry-header">
              <h3 class="entry-ttl">{{$item->title}}</h3>
              <div class="entry-date">
                投稿日：
                <time>{{$item->created_at}}</time>
              </div>
            </header>
            <div class="entry-body">
              {{$item->body}}
            </div>
            <div class="entry-more">
              <a href="/post?id={{$item->id}}">続きをみる</a>
              <div class="entry-comment">コメント (
                <span class="entory-comment__amount">
                  @if( $item->comments < 1 )
                    0
                  @else
                    {{$item->comments}}
                  @endif
                </span>)
              </div>
            </div>
          </div>
          @endforeach
          @endif
        </div>

        <ul class="pagination center">
          <li class="disabled">
            <a href="#!"><i class="material-icons">chevron_left</i></a>
          </li>
          <li class="active"><a href="#!">1</a></li>
          <li class="waves-effect"><a href="#!">2</a></li>
          <li class="waves-effect"><a href="#!">3</a></li>
          <li class="waves-effect"><a href="#!">4</a></li>
          <li class="waves-effect"><a href="#!">5</a></li>
          <li class="waves-effect">
            <a href="#!"><i class="material-icons">chevron_right</i></a>
          </li>
        </ul>
      </main>
    </div>

@endsection