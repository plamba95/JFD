@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row mb-2">
        <div class="col-12">
            <h3>Latest Articles</h3>
        </div>
    </div>

    <div class="row">
        @foreach ($articles as $article)
            @include('partials.articleShortCard', ['article' => $article])
        @endforeach
    </div>
</div>
@endsection
