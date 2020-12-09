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
          <div class="entry">
            <header class="entry-header">
              <h3 class="entry-ttl">吾輩は猫である</h3>
              <div class="entry-date">
                投稿日：
                <time>2020.7.20</time>
              </div>
            </header>
            <div class="entry-body">
              吾輩は猫である。名前はまだ無い。 どこで生れたか頓と見當がつかぬ。何でも薄暗いじめじめした所でニヤーニヤー泣いて居た事丈は記憶して居る。
              吾輩はこゝで始めて人間といふものを見た。然もあとで聞くとそれは書生といふ人間中で一番獰悪な種族であつたさうだ。
              此書生といふのは時々我々を捕へて煮て食ふといふ話である。然し其當時は何といふ考もなかつたから別段恐しいとも思はなかつた。
            </div>
            <div class="entry-more">
              <a href="post.html">続きをみる</a>
              <div class="entry-comment">コメント (<span class="entory-comment__amount">3</span>)</div>
            </div>
          </div>
          <div class="entry">
            <header class="entry-header">
              <h3 class="entry-ttl">タイトル</h3>
              <div class="entry-date">
                投稿日：
                <time>2020.５.20</time>
              </div>
            </header>
            <div class="entry-body">
              ここにテキストを入力します。 データベースにテキストが入っています。
            </div>
            <div class="entry-more">
              <a href="post.html">続きをみる</a>
              <div class="entry-comment">コメント (<span class="entory-comment__amount">3</span>)</div>
            </div>
          </div>
          <div class="entry">
            <header class="entry-header">
              <h3 class="entry-ttl">吾輩は猫である</h3>
              <div class="entry-date">
                投稿日：
                <time>2020.7.20</time>
              </div>
            </header>
            <div class="entry-body">
              吾輩は猫である。名前はまだ無い。 どこで生れたか頓と見當がつかぬ。何でも薄暗いじめじめした所でニヤーニヤー泣いて居た事丈は記憶して居る。
              吾輩はこゝで始めて人間といふものを見た。然もあとで聞くとそれは書生といふ人間中で一番獰悪な種族であつたさうだ。
              此書生といふのは時々我々を捕へて煮て食ふといふ話である。然し其當時は何といふ考もなかつたから別段恐しいとも思はなかつた。
            </div>
            <div class="entry-more">
              <a href="post.html">続きをみる</a>
              <div class="entry-comment">コメント (<span class="entory-comment__amount">3</span>)</div>
            </div>
          </div>
          <div class="entry">
            <header class="entry-header">
              <h3 class="entry-ttl">タイトル</h3>
              <div class="entry-date">
                投稿日：
                <time>2020.５.20</time>
              </div>
            </header>
            <div class="entry-body">
              ここにテキストを入力します。 データベースにテキストが入っています。
            </div>
            <div class="entry-more">
              <a href="post.html">続きをみる</a>
              <div class="entry-comment">コメント (<span class="entory-comment__amount">3</span>)</div>
            </div>
          </div>
          <div class="entry">
            <header class="entry-header">
              <h3 class="entry-ttl">タイトル</h3>
              <div class="entry-date">
                投稿日：
                <time>2020.５.20</time>
              </div>
            </header>
            <div class="entry-body">
              ここにテキストを入力します。 データベースにテキストが入っています。
            </div>
            <div class="entry-more">
              <a href="post.html">続きをみる</a>
              <div class="entry-comment">コメント (<span class="entory-comment__amount">3</span>)</div>
            </div>
          </div>
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