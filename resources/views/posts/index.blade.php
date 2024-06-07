<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー登録アプリ</title>
</head>
<body>
  <header>
    <nav>
      <div>
        <a href="{{route('posts.index')}}">ユーザー登録アプリ</a>
      </div>
    </nav>
  </header>

  <main>
    <article>
      <div>
        <h1>ユーザー登録一覧</h1>

        @if (session('flash_message'))
          <p>{{session('flash_message')}}</p>
        @endif

        <div>
          <a href="{{route('posts.create')}}">新規登録</a>
        </div>

        @foreach($posts as $post)
            <div>
              <div>
                <h1>{{$post->username}}</h1>

                <div>
                  <a href="{{route('posts.edit',$post)}}">編集</a>

                  <form action="{{route('posts.destroy',$post)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">削除</button>
                  </form>
                </div>
              </div>
            </div>
        @endforeach
      </div>
    </article>
  </main>

  <footer>
    <p>&copy; ユーザー登録アプリ All rights reserved.</p>
  </footer>
</body>
</html>