    <h1>論文一覧</h1>
    <ul>
        @foreach ($articles as $article)
        <li>
        <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
        </li>
        @endforeach

        <a href="/articles/create"><button>新規論文投稿</button></a>
    </ul>

