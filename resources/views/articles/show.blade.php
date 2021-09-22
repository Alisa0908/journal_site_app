<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1>
        <b>論文詳細</b>
    </h1>
    <p>タイトル : {{ $article->title }}</p>
    <p>{{ $article->body }}</p>

    <button type="button" onclick="location.href='/articles'">一覧へ戻る</button>
    <button type="button" onclick="location.href='/articles/{{ $article->id }}/edit'">編集する</button>
    <input type="submit" value="削除する" onclick="if(!confirm('本当に削除しますか?')){return false}" form="delete">
    <form action="/articles/{{ $article->id }}" method="post" id="delete">
        @csrf
        @method('DELETE')
    </form>
</body>

</html>
