    <h1>
        <b>論文詳細</b>
    </h1>
    <p>タイトル:{{ $article->title }}</p>
    <p>{{ $article->body }}</p>
    
    <a href="/articles/{{ $article->id }}/edit"><button>編集する</button></a>
    <a href="/articles"><button>一覧に戻る</button></a>

    <form action="/articles/{{ $article->id }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか?')){return false};">
    </form>


    