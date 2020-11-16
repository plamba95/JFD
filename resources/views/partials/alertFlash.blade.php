@if(session('success'))
<div class="alert alert-absolute alert-timed alert-success alert-dismissible fade show mt-3" role="alert">
    {!! session('success') !!}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if(session('warning'))
<div class="alert alert-absolute alert-timed alert-warning alert-dismissible fade show mt-3" role="alert">
    {!! session('warning') !!}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if(session('danger'))
<div class="alert alert-absolute alert-timed alert-danger alert-dismissible fade show mt-3" role="alert">
    {!! session('danger') !!}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
