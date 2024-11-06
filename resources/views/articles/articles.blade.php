@extends('layouts.app')

@section('content')

    <div>
        <div class="container" id="article">
            <h3>Лента статей</h3><hr>
            <br><hr1>
                @foreach($account_article as $el)
                    <div style="max-width: 70%" class="alert alert-info">
                        <h5>{{ $el->name }}</h5><br>
                        <span>Автор статьи: {{ $el->get_users->name }}</span><br>
                        <span>Создано: {{ $el->created_at }}</span><br>
                        <span>Обновлено: {{ $el->updated_at }}</span><br>
                        <a style="margin-left: 85%" href="{{ route('article', $el->id) }}" class="btn btn-outline-dark">Детальнее</a>
                    </div>
                @endforeach
            </hr1>
        </div>
    </div>


@endsection
