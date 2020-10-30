@extends('layouts.main')
@section('title', 'news')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">{{ $category['name'] }}</h1>
        </div>
    </div>

    @forelse ($news as $oneNews)
        <div class="row mt-3">
            <div class="col-md-6">
                <img src="{{ $oneNews['photo'] }}" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-6 module">
                <h2><a href="{{ route('newsId', ['id' => $oneNews['id']]) }}" class="badge badge-light"
                       style="white-space: normal">{{ $oneNews['preview'] }}</a></h2>
                <p class="line-clamp">{{ $oneNews['text'] }}</p>
            </div>
        </div>
        <hr>
    @empty
        <h1>Новостей нет.</h1>
    @endforelse


@endsection