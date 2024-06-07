<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー編集</title>
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
        <h1>ユーザー編集</h1>

        @if ($errors->any())
          <div>
            <ul>
              @foreach($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <div>
          <a href="{{route('posts.index')}}">&lt;戻る</a>
        </div>

        <form action="{{route('posts.update',$post)}}" method="post">
          @csrf
          @method('patch')  
          <div>
              <label for="username">ユーザー名</label>
              <input type="text" name="username" value="{{ old('username' ,$post->username)}}">
          </div>  
          <button type="submit">更新</button>
                
        </form>
      </div>
    </article>
  </main>

  <footer>
    <p>&copy; ユーザー登録アプリ All rights reserved.</p>
  </footer>
</body>
</html>