<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>
        <b>論文投稿編集</b>
    </h1>
    <form action="/articles/{{ $article->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">論文タイトル</label>
            <input type="text" name="title" value="{{ old('title', $article->title) }}">
        </p>
        <p>
            <label for="body">本文</label>
            <textarea name="body">{{ old('body', $article->body) }}</textarea>
        </p>
        <input type="submit" value="更新">
    </form>
</body>

</html>
