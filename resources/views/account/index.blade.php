@extends('layouts.app')

@section('content')
    <style>
        .form-control{
            display: block;
            width: 50%;
            max-width: 100%;
        }
        .form-select{
            display: block;
            width: 50%;
            max-width: 100%;
        }
        #personalData{
            margin-right: 50px;
        }
    </style>

    <div class="container" id="personalData">
        <div class="row">
            <div class="col-6">
            <h5>Личный кабинет</h5><hr>
            <form id="data" method="POST" action="{{ route('account-update', $personalData->id) }}">
                @csrf

                <label for="create_name" class=""> Имя </label>
                <input id="create_name" type="text" class="form-control" name="name" value="{{ $personalData->name }}" required>

                <label for="create_email" class="" > Почта </label>
                <input id="create_email" type="text" class="form-control" name="email" value="{{ $personalData->email }}" required>

                <label for="create_country" class="form-label" > Страна </label>
                <select form="data" class="form-select" id="create_country" name="country">
                    <option @if (!@isset($personalData->country_id)) selected @endif disabled >Выберите...</option>
                    @foreach($countries as $country)
                        <option @if($personalData->country_id == $country->id) selected @endif value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>

                <label for="create_gender" class="" id="create_gender"> Пол</label><br>
                @if( $personalData->gender==1 )

                    <input type="radio" class="btn-check" name="gender" id="male" value="1" checked>
                    <label class="btn btn-outline-primary" for="male">Мужской</label>
                    <input type="radio" class="btn-check" name="gender" id="female" value="2" >
                    <label class="btn btn-outline-primary" for="female">Женский</label><br>

                @elseif( $personalData->gender==2 )

                    <input type="radio" class="btn-check" name="gender" id="male" value="1">
                    <label class="btn btn-outline-primary" for="male">Мужской</label>
                    <input type="radio" class="btn-check" name="gender" id="female" value="2" checked>
                    <label class="btn btn-outline-primary" for="female">Женский</label><br>

                @elseif( $personalData->gender==0 )

                    <input type="radio" class="btn-check" name="gender" id="male" value="1">
                    <label class="btn btn-outline-primary" for="male">Мужской</label>
                    <input type="radio" class="btn-check" name="gender" id="female" value="2" >
                    <label class="btn btn-outline-primary" for="female">Женский</label><br>

                @endif

                <label for="create_occupation" class="" > Профессия </label>
                <input id="create_occupation" type="text" class="form-control" name="occupation" value="{{ $personalData->occupation }}">

                <label for="create_year_of_birth" class="" > Год рождения </label>
                <input id="create_year_of_birth" type="date" class="form-control" name="year_of_birth" value="{{ $personalData->year_of_birth }}"><br/>

                <button type="submit" class="btn btn-outline-info" >Обновить </button>
            </form>
            </div>
                <div style="margin-left: 5%" class="col-4">
                    <h5>Боковая панель</h5><hr>
                    <a class="btn btn-outline-dark" type="button" href="{{ route('article-create') }}">Создать статью</a>
                    <a class="btn btn-outline-dark" type="button" href="{{ route('my-articles') }}">Мои статьи</a>
                </div>
        </div>
    </div>


@endsection
