<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>
        <b>論文一覧</b>
    </h1>
    @foreach ($articles as $article)
        <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
    @endforeach
    <button type="button" onclick="location.href='/articles/create'">新規論文投稿</button>
</body>
</html>