@extends('layouts.app')

@section('title','Create Article')

@section('content')
<div class="container">
    <div class="row mb-2">
        <div class="col-12">
            <h3>Create Article</h3>
        </div>
    </div>

    <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">

        @include('articles.form')

        <input type='submit' />
    </form>
</div>


@endsection
