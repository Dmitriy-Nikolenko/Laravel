@extends('layouts.main')
@section('title', 'Admin Source')
@section('content')
    <a href="{{ route('source.create') }}" class="btn btn-dark mb-3 float-right" style="margin-left: 10px">Добавить источник новости</a>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Название источника</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @forelse($source as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <a href="{{ route('source.edit', ['source' => $item->id]) }}" class="text-dark mr-3"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></a>
                    <a href="#" class="text-danger"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>
                </td>
            </tr>
        @empty
            <h1>Нет источников</h1>
        @endforelse
        {{ $source->links() }}
        </tbody>
    </table>

@endsection
