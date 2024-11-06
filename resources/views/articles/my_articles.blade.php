@extends('layouts.app')

@section('content')

    <div>
        <div class="container" id="article">
            <h3>Мои статьи</h3><hr>
            <br><hr1>
                @foreach($my_articles as $el)
                    <div style="max-width: 70%" class="alert alert-info">
                        <h5>{{ $el->name }}</h5><br>
                        <span>Создано: {{ $el->created_at }}</span><br>
                        <span>Обновлено: {{ $el->updated_at }}</span><br>
                        <a style="margin-left: 80%" href="{{ route('my-article', $el->id) }}" class="btn btn-outline-dark">Редактировать</a>
                    </div>
                @endforeach
            </hr1>
        </div>
    </div>

@endsection
