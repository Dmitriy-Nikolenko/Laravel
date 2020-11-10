@extends('layouts.main')

@section('title', 'Welcome page')

@section('content')
    <div class="mx-auto" style="margin-top: 300px; margin-bottom: 300px">
        <h1 class="text-center">Добро пожаловать на новостной портал</h1><br>
        <p class="text-center"><a href="/category " class="btn btn-dark btn-lg">Перейти к категориям новостей</a></p>
    </div>
@endsection
