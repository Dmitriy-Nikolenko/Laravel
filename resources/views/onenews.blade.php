@extends('layouts.main')
@section('title', 'News page')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">{{ $news->title }}</h1>
            <img src="{{ $news->photo }}" class="img-fluid" alt="Responsive image" style="width: 100%">
            <p class="text-justify">{{ $news->text }}</p>
            @foreach($newsSource as $item)
                @if($news->source_id == $item->id)
                    <p><i>Источник: {{ $item->name }}</i></p>
                @endif
            @endforeach
        </div>
    </div>
@endsection
