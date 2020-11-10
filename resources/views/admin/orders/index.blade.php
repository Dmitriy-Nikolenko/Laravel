@extends('layouts.main')
@section('title', 'Admin Orders')
@section('content')

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Имя пользователя</th>
            <th scope="col">Телефон</th>
            <th scope="col">Электронная почта</th>
            <th scope="col">Заказ</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @forelse($orders as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->user }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->info }}</td>
                <td>
                    <a href="{{ route('orders.edit', ['order' => $item->id]) }}" class="text-dark mr-3"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></a>
                    <a href="#" class="text-danger"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>
                </td>
            </tr>
        @empty
            <h1>Нет отзывов</h1>
        @endforelse
        {{ $orders->links() }}
        </tbody>
    </table>


@endsection

