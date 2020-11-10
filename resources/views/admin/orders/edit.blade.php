@extends('layouts.main')
@section('title', 'Edit orders')
@section('content')

    <form action="{{ route('orders.update', ['order' => $orders->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="user">Имя пользователя</label>
                    <input type="text" class="form-control" id="user" name="user" value="{{ old('user', $orders->user) }}">
                </div>
                <div class="form-group">
                    <label for="phone">Контактный телефон</label>
                    <input type="text" class="form-control" id="phone" name="title" value="{{ old('phone', $orders->phone) }}">
                </div>
                <div class="form-group">
                    <label for="email">Электронная почта</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $orders->email) }}">
                </div>
                <div class="form-group">
                    <label for="info">Текст отзыва</label>
                    <textarea class="form-control" id="info" name="info" rows="7">{{ old('info', $orders->info) }}</textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light mb-3" style="max-width: 100%;">
                    <div class="card-body">
                        <button type="submit" class="btn btn-dark btn-block">Сохранить</button>
                        <a href="{{ route('orders.index') }}" class="btn btn-danger btn-block">Отмена</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
