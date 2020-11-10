@extends('layouts.main')
@section('title', 'Admin Category')
@section('content')
    <a href="{{ route('category.create') }}" class="btn btn-dark mb-3 float-right" style="margin-left: 10px">Добавить категорию</a>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Имя категории</th>
            <th scope="col">Описание категории</th>
            <th scope="col">Фото категории</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @forelse($category as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->photo }}</td>
                <td>
                    <a href="{{ route('category.edit', ['category' => $item->id]) }}" class="text-dark mr-3"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></a>
                    <a href="#" class="text-danger"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>
                </td>
            </tr>
        @empty
            <h1>Нет категорий</h1>
        @endforelse
        {{ $category->links() }}
        </tbody>
    </table>

@endsection
