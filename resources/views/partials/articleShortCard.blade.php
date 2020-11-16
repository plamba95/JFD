<div class="col-sm-12 col-md-4">
    <div class="card mb-3">
        <a href="{{ route('articles.show', ['id' => $article->id]) }}">
            <img src="{{ asset($article->image) }}" class="card-img-top" alt="{{ $article->title }}">
        </a>
        <div class="card-body">
            <h5 class="card-title mb-2">
                <a href="{{ route('articles.show', ['id' => $article->id]) }}">{{ $article->title }}</a>
            </h5>
            <small class="card-text mb-2 text-muted">
                <div class="mb-1"><i class="fa fa-user"></i> by {{ $article->user->name }}</div>
                <div><i class="fa fa-calendar"></i> Posted on {{ $article->created_at }}</div>
            </small>
        </div>
    </div>
</div>
