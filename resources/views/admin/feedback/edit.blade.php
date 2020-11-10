@extends('layouts.main')
@section('title', 'Edit feedback')
@section('content')

    <form action="{{ route('feedback.update', ['feedback' => $feedback->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="user">Имя пользователя</label>
                    <input type="text" class="form-control" id="user" name="user" value="{{ old('user', $feedback->user) }}">
                </div>
                <div class="form-group">
                    <label for="feedback">Текст отзыва</label>
                    <textarea class="form-control" id="feedback" name="feedback" rows="7">{{ old('feedback', $feedback->feedback) }}</textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light mb-3" style="max-width: 100%;">
                    <div class="card-body">
                        <button type="submit" class="btn btn-dark btn-block">Сохранить</button>
                        <a href="{{ route('feedback.index') }}" class="btn btn-danger btn-block">Отмена</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
