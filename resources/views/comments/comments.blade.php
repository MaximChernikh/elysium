@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-6">
            <h5>Комментарии</h5>
            <hr>
            @foreach($comments as $comment)
                <div class="alert alert-info">
                    <h8>{{ $comment->get_users->name }}</h8>
                    <h4>{{ $comment->comment }}</h4>
                    <span>создано: {{ $comment->created_at }}</span><br>
                    <span>обновлено: {{ $comment->updated_at }}</span>
                </div>
            @endforeach
        </div>
    </div>


@endsection
