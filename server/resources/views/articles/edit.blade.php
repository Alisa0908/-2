<h1>投稿論文編集</h1>

<form action="/articles/{{ $article->id }}" method='post'>
@csrf
@method('PUT')
<input type="hidden" name="id" value="{{ $article->id }}">
<p>論文タイトル<br>
<input type="text" name="title" value="{{ $article->title }}">
</p>
<p>本文
<input type="text" name="body" value="{{ $article->body }}">
</p>

<input type="submit" value="更新">
</form>