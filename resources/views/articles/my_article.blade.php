@extends('layouts.app')

@section('content')

    <div>
        <div class="container" id="createArticle">
            <div class="col-8">
                <h5>Редактирование статьи</h5><hr>
                <form id="create_article" method="POST" action="{{ route('my-article-update', $article->id) }}">
                    @csrf

                    <label for="article_name">Название статьи</label>
                    <input type="text" class="form-control" id="article_name" name="name" placeholder="Введите название статьи" value="{{ $article->name }}"><br>

                    <label for="article_name">Текст статьи</label>
                    <textarea form="create_article" class="form-control" name="content" id="article_name" rows="15">{{ $article->content }}</textarea><br>

                    <button type="submit" class="btn btn-outline-success" id="create_article_btn">Обновить</button>
                </form>
            </div>
        </div>
    </div>


@endsection
