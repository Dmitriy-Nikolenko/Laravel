@extends('layouts.app')

@section('title', 'Admin')

@section('content')
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="mx-auto" style="margin-top: 300px; margin-bottom: 300px; text-align: center">
        <a href="{{ route('orders.index') }}" class="btn btn-dark btn-lg">Заказы</a>
        <a href="{{ route('feedbacks.index') }}" class="btn btn-dark btn-lg">Комментарии</a>
        <a href="{{ route('news.index') }}" class="btn btn-dark btn-lg">Новости</a>
        <a href="{{ route('category.index') }}" class="btn btn-dark btn-lg">Категории</a>
        <a href="{{ route('source.index') }}" class="btn btn-dark btn-lg">Источники</a>
        <a href="{{ route('user.index') }}" class="btn btn-dark btn-lg">Пользователи</a>
        <a href="{{ route('parser') }}" class="btn btn-dark btn-lg">Парсер</a>
        </div>
@endsection
