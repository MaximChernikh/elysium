@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-8">
            <h5>Создание статьи</h5><hr>
            <form id="create_article" method="POST" action="{{ route('article-submit') }}">
                @csrf

                <label for="article_name">Название статьи</label>
                <input type="text" class="form-control" id="article_name" name="name" placeholder="Введите название статьи"><br>


                <label for="article_name">Текст статьи</label>
                <textarea form="create_article" class="form-control" name="content" id="article_name" rows="3"></textarea><br>

                <button type="submit" class="btn btn-outline-success" id="create_article_btn">Создать статью</button>
            </form>
        </div>
    </div>

@endsection
