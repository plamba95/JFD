@extends('layouts.app')

@section('title', $article->title)

@section('content')
<div class="container">
    <h1 class="blog-post-title">{{ $article->title }}
        @hasroles(['admin','author'])
            <a class='btn btn-info' href='{{ route("articles.edit", $article->id) }}'>Edit</a>
        @endhasroles
        @hasrole('admin')
            <form class="deleteArticleForm" id="deleteArticleForm-{{ $article->id }}" style="display: inline" action="{{ route('articles.destroy', $article->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button type="button" class="btn btn-danger deleteBtn" data-articleTitle="{{ $article->title }}">Delete</button>
            </form>
        @endhasroles
    </h1>
    <div class="blog-post-meta text-muted">
        <span><i class="fa fa-user"></i> by {{ $article->user->name }}</span>
        <span><i class="fa fa-calendar"></i> Posted on {{ $article->created_at }}</span>
    </div>
    <img src="{{ asset($article->image) }}" class="img-fluid">
    <div class="mt-3 content">
        {!! $article->content !!}
    </div>
</div>


@include('partials.confirmationModal', [
    'modalID' => 'deleteConfirmationModal',
    'title' => 'Confirm deletion',
    'message' => 'Do you want to delete article <strong id="articleToDelete"></strong>',
    'buttonText' => 'Delete',
    'buttonClass' => 'btn-danger'
    ]
)
@endsection
