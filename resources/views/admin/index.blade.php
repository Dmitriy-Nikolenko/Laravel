@extends('layouts.main')

@section('title', 'Admin')

@section('content')
    <div class="mx-auto" style="margin-top: 300px; margin-bottom: 300px; text-align: center">
        <a href="{{ route('orders.index') }}" class="btn btn-dark btn-lg">Заказы</a>
        <a href="{{ route('feedback.index') }}" class="btn btn-dark btn-lg">Комментарии</a>
        <a href="{{ route('news.index') }}" class="btn btn-dark btn-lg">Новости</a>
        <a href="{{ route('category.index') }}" class="btn btn-dark btn-lg">Категории</a>
        <a href="{{ route('source.index') }}" class="btn btn-dark btn-lg">Источники</a>
    </div>
@endsection
