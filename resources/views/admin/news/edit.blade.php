@extends('layouts.main')
@section('title', 'Edit news')
@section('content')

    <form action="{{ route('news.update', ['news' => $news->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $news->title) }}">
                </div>
                <div class="form-group">
                    <label for="category">Категория</label>
                    <select class="form-control" id="category" name="category">
                        @foreach($category as $item)
                            <option
                                value="{{ $item->id }}"
                                @if($item->id == $news->category_id) selected @endif
                            >{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="photo">Фотография</label>
                    <input type="text" class="form-control" id="photo" name="photo" placeholder="Ссылка..." value="{{ old('photo', $news->photo) }}">
                </div>
                <div class="form-group">
                    <label for="preview">Короткий текст</label>
                    <textarea class="form-control" id="preview" name="preview" rows="3">{{ old('preview', $news->preview) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="text">Полный текст</label>
                    <textarea class="form-control" id="text" name="text" rows="7">{{ old('text', $news->text) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="source">Источник новости</label>
                    <select class="form-control" id="source" name="source">
                        @foreach($source as $item)
                            <option
                                value="{{ $item->id }}"
                                @if($item->id == $news->source_id) selected @endif
                            >{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light mb-3" style="max-width: 100%;">
                    <div class="card-body">
                        <button type="submit" class="btn btn-dark btn-block">Сохранить</button>
                        <a href="{{ route('news.index') }}" class="btn btn-danger btn-block">Отмена</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
