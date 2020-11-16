@extends('layouts.app')
@section('title', 'Edit source')
@section('content')
    <h1>Редактирование источника</h1>
    <form action="{{ route('source.update', ['source' => $source->id]) }}" method="POST">
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
                    <label for="name">Название источника</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $source->name) }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light mb-3" style="max-width: 100%;">
                    <div class="card-body">
                        <button type="submit" class="btn btn-dark btn-block">Сохранить</button>
                        <a href="{{ route('source.index') }}" class="btn btn-danger btn-block">Отмена</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
