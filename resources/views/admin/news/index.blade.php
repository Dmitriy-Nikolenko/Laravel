@extends('layouts.main')
@section('title', 'Admin News')
@section('content')
    <a href="{{ route('news.create') }}" class="btn btn-dark mb-3 float-right" style="margin-left: 10px">Добавить новость</a>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Текст</th>
            <th scope="col">Фотография</th>
            <th scope="col">Категория</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @forelse($news as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->preview }}</td>
                <td><img src="{{ $item->photo }}" alt="" style="max-width: 300px;"></td>
                <td>{{ $item->category->name }}</td>

                <td>
                    <a href="{{ route('news.edit', ['news' => $item->id]) }}" class="text-dark mr-3"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></a>
                    <a href="#" class="text-danger delete-button" data-type="news" data-id="{{ $item->id }}"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>
                </td>
            </tr>
        @empty
            <h1>Нет новостей</h1>
        @endforelse
        {{ $news->links() }}
        </tbody>
    </table>

@endsection
