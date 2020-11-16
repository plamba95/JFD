<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
        value="{{ old('title') ?? $article->title }}" />
    @error('title')
        <span id="title-error" class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Cover</label>
    @if ($article->image)
        <div class="mb-3"><img src="{{ asset($article->image) }}" class='img-thumbnail' style="width: 200px;" /></div>
    @endif
    <div class="input-group">
        <div class="custom-file">
            <input type="file" class="form-control custom-file-input @error('image') is-invalid @enderror" id="image" name="image"
                accept="image/*">
            <label class="custom-file-label" for="image">Choose image</label>
        </div>
    </div>
    @error('image')
        <div class="invalid-feedback" style="display: block">{{ $message }}</div>
    @enderror
    @if($editing)
        <div class="form-text text-warning">Select new file if you want to change the cover image!</div>
    @endif
</div>

<div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control summernote @error('content') is-invalid @enderror" id="content" name="content"
        rows="10">{{ old('content') ?? $article->content }}</textarea>
    @error('content')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

@csrf

{!! $validator->ignore(':hidden:not(.summernote),.note-editable.card-block') !!}

