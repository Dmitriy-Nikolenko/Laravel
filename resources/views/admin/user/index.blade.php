@extends('layouts.app')
@section('title', 'Admin News')
@section('content')
    <h1>Пользователи</h1>

    @if(session('userAdd'))
        <div class="alert alert-success" role="alert">
           {{ session('userAdd') }}
        </div>
    @endif
    @if(session('userUpdate'))
        <div class="alert alert-success" role="alert">
            {{ session('userUpdate') }}
        </div>
    @endif
    @if(!$authUser->isAdmin())
        <div class="alert alert-danger" role="alert">
            Нет прав для доступа.
        </div>
    @else
    <a href="{{ route('user.create') }}" class="btn btn-dark mb-3 float-right" style="margin-left: 10px">Добавить пользователя</a>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Имя пользователя</th>
            <th scope="col">E-mail</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @forelse($users as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a href="{{ route('user.edit', ['user' => $item->id]) }}" class="text-dark mr-3"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></a>
                    <a href="#" class="text-danger delete-button" data-type="user" data-id="{{ $item->id }}"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>
                </td>
            </tr>
        @empty
            <h1>Нет пользователей</h1>
        @endforelse
        {{ $users->links() }}
        </tbody>
    </table>
    @endif
@endsection

