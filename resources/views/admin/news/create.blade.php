@extends('layouts.app')
@section('title', 'Add News')
@section('content')

    <h1>Добавление новой новости</h1>
    <form action="{{ route('news.store') }}" method="POST">
        @csrf
        @if(isset($errors) && !empty($errors))
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="category_id">Категория</label>
                    <select class="form-control" id="category_id" name="category_id">
                        @foreach($category as $item)
                            <option value="{{ $item->id }}"> {{ $item->id }} / {{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="photo">Фотография</label>
                    <input type="text" class="form-control" id="photo" name="photo" placeholder="Ссылка..."
                           value="{{ old('photo') }}">
                </div>
                <div class="form-group">
                    <label for="preview">Короткий текст</label>
                    <textarea class="form-control" id="preview" name="preview" rows="3">{{ old('preview') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="text">Полный текст</label>
                    <textarea class="form-control" id="text" name="text" rows="7">{{ old('text') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="source_id">Источник новости</label>
                    <select class="form-control" id="source_id" name="source_id">
                        @foreach($source as $item)
                            <option value="{{ $item->id }}">{{ $item->id }} / {{ $item->link_rss }}</option>
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

    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    {{--    <script src="{{ mix('/js/app.js') }}"></script>--}}

    <script>
        let options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Image',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Image&token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&token=',
        };
    </script>
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            CKEDITOR.replace('text', options);
            CKEDITOR.replace('preview', options);
        });
    </script>
@endsection

