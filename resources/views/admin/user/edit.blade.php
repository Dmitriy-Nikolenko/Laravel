@extends('layouts.app')
@section('title', 'Edit news')
@section('content')
    <h1>Редактирование пользователя</h1>
    @if(session('userNoUpdate'))
        <div class="alert alert-success" role="alert">
            {{ session('userNoUpdate') }}
        </div>
    @endif
    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="name">Имя пользователя</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
                </div>
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
                </div>
                <div class="form-group">
                    <label for="password_old">Текущий пароль</label>
                    <input type="password" class="form-control" id="password_old" name="password_old">
                </div>
                <div class="form-group">
                    <label for="password_new">Новый пароль</label>
                    <input type="password" class="form-control" id="password_new" name="password_new">
                </div>
                <div class="form-group">
                    <label for="password-confirmation">Подтверждение пароля</label>
                    <input type="password" class="form-control" id="password-confirmation" name="password-confirmation">
                </div>
                <div class="form-group">
                    <label for="is_admin">Сделать администратором</label>
                    <input type="checkbox" class="form-control" id="is_admin" name="is_admin" value="Сделать администратором">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light mb-3" style="max-width: 100%;">
                    <div class="card-body">
                        <button type="submit" class="btn btn-dark btn-block">Сохранить</button>
                        <a href="{{ route('user.index') }}" class="btn btn-danger btn-block">Отмена</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection

