@extends('layouts.app')

@section('title','View Article')

@section('content')
    <div class="container">

        <div class="row mb-2">
            <div class="col-12">
                <h3>Articles</h3>
            </div>
        </div>

        @foreach ($articles as $article)
            @include('partials.articleCard', ['article' => $article])
        @endforeach
        {{ $articles->links() }}
    </div>
@endsection
