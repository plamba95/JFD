@extends('layouts.app')

@section('title','Edit Article')

@section('content')
<div class="container">
    <div class="row mb-2">
        <div class="col-12">
            <h3>Edit Article</h3>
        </div>
    </div>

    <form action="{{ route('articles.update', $article->id) }}" method="post" enctype="multipart/form-data">
        @method('PATCH')

        @include('articles.form')

        <input type='submit' class="btn btn-success" value="Update Article"/>
    </form>
</div>

@endsection
