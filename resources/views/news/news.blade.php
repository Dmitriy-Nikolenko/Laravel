@extends('layouts.app')
@section('title', 'News')
@section('content')

    {{ $news->links() }}
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">{{ $category->name }}</h1>
        </div>
    </div>

    @forelse ($news as $item)
        <div class="row mt-2">
{{--            <div class="col-md-6">--}}
{{--                <img src="{{ $item->photo }}" class="img-fluid" alt="Responsive image">--}}
{{--            </div>--}}
            <div class="col-md-12 module">
                <h2><a href="{{ route('newsId', ['id' => $item->id]) }}" class="badge badge-light"
                       style="white-space: normal">{!! $item->preview !!} </a></h2>
                <p class="line-clamp">{!! $item->text !!}</p>
            </div>
        </div>
        <hr>
    @empty
        <h1>Новостей нет.</h1>
    @endforelse

@endsection
