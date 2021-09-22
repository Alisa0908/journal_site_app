<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>
        <b>新規論文投稿</b>
    </h1>

    <form action="/articles" method="post">
        @csrf
        <p>
            <label for="title">論文タイトル</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </p>
        <p>
            <label for="body">本文</label>
            <textarea name="body">{{ old('title') }}</textarea>
        </p>
        <input type="submit" value="投稿">
    </form>
</body>

</html>
