@extends('layouts.main')
@section('title', 'Create category')
@section('content')

    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="name">Имя категории</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="description">Описание категории</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
                </div>
                <div class="form-group">
                    <label for="photo">Фото категории</label>
                    <input type="text" class="form-control" id="photo" name="photo" value="{{ old('photo') }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light mb-3" style="max-width: 100%;">
                    <div class="card-body">
                        <button type="submit" class="btn btn-dark btn-block">Сохранить</button>
                        <a href="{{ route('category.index') }}" class="btn btn-danger btn-block">Отмена</a>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection

