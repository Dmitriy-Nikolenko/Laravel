@extends('layouts.app')
@section('title', 'Edit category')
@section('content')
    <h1>Редактирование категории</h1>
    <form action="{{ route('category.update', ['category' => $category->id]) }}" method="POST">
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
                    <label for="name">Название категории</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}">
                </div>
                <div class="form-group">
                    <label for="description">Описание категории</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $category->description) }}">
                </div>
                <div class="form-group">
                    <label for="photo">Фото категории</label>
                    <input type="text" class="form-control" id="photo" name="photo" value="{{ old('photo', $category->photo) }}">
                </div>
                <div class="form-group">
                    <label for="source_id">Источник новости</label>
                    <select class="form-control" id="source_id" name="source_id">
                        @foreach($source as $item)
                            <option
                                value="{{ $item->id }}"
                                @if($item->id == $category->source_id) selected @endif
                            > {{ $item->id }} / {{ $item->link_rss }}</option>
                        @endforeach
                    </select>
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

