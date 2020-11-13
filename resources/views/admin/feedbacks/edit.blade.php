@extends('layouts.main')
@section('title', 'Edit feedback')
@section('content')
    <h1>Редактирование отзыва</h1>
    <form action="{{ route('feedbacks.update', ['feedback' => $feedbacks->id]) }}" method="POST">
        @csrf
        @if(isset($errors) && !empty($errors))
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        @method('PUT')
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="user">Имя пользователя</label>
                    <input type="text" class="form-control" id="user" name="user" value="{{ old('user', $feedbacks->user) }}">
                </div>
                <div class="form-group">
                    <label for="feedback">Текст отзыва</label>
                    <textarea class="form-control" id="feedback" name="feedback" rows="7">{{ old('feedbacks', $feedbacks->feedback) }}</textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light mb-3" style="max-width: 100%;">
                    <div class="card-body">
                        <button type="submit" class="btn btn-dark btn-block">Сохранить</button>
                        <a href="{{ route('feedbacks.index') }}" class="btn btn-danger btn-block">Отмена</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection