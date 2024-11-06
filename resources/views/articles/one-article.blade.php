@extends('layouts.app')

@section('content')

    <div>
        <div class="container" id="createArticle">

            <h5>{{ $article->name }}</h5>
            <hr>
            <h6>Автор статьи: {{ $article->get_users->name }}</h6>
            <hr>
            <p>{{ $article->content }}</p>
            <hr>
            <h6>Создана: {{ $article->created_at }}</h6>
            <h6>Обновлена: {{ $article->updated_at }}</h6>
            <hr>
            <div class="col-3">
                <a href="{{ route('comments') }}" type="button" class="btn btn-outline-info">Открыть комментарии</a><hr>
            </div>
            <h5>Оставить комментарий</h5><br>
            <div class="col-6">
                <div>
                    <form id="create_comment" method="POST" action="{{ route('comment-submit', $article->id) }}">
                        @csrf

                        <textarea placeholder="введите комментарий" form="create_comment" class="form-control" name="comment" id="comment_text" rows="3"></textarea><br>

                        <button type="submit" class="btn btn-outline-success" id="create_comment_btn">Оставить комментарий</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
