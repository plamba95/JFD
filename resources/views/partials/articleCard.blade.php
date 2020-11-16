<div class="card mb-3">
    <div class="row no-gutters">
        <div class="col-md-4">
            <a href="{{ route('articles.show', ['id' => $article->id]) }}">
                <img src="{{ asset($article->image) }}" class="card-img-top" alt="{{ $article->title }}">
            </a>
        </div>

        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title mb-0">
                    <a href="{{ route('articles.show', ['id' => $article->id]) }}">{{ $article->title }}</a>
                </h5>
                <small class="text-muted">
                    <span class="mr-1"><i class="fa fa-user"></i> by {{ $article->user->name }}</span>
                    <span><i class="fa fa-calendar"></i> Posted on {{ $article->created_at }}</span>
                </small>
                <p class="mt-2 card-text">{!! Str::words(strip_tags($article->content),40) !!}</p>
            </div>
        </div>
    </div>
</div>
