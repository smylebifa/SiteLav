@extends('layout')

@section('title')Отзывы@endsection

@section('main_content')
    <h1>Форма добавления отзыва</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/review/check">
        @csrf
        <input type="email" id="email" name="email" placeholder="Введите email" class="form-control"><br>
        <input type="subject" id="subject" name="subject" placeholder="Введите отзыв" class="form-control"><br>
        <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea><br>
        <button type="submit" class="btb btn-success">Отправить</button>

    </form>

@endsection
