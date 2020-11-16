@extends('layouts.app')

@section('title','Create User')

@section('content')
<div class="container">
    <div class="row mb-2">
        <div class="col-12">
            <h3>Create User</h3>
        </div>
    </div>

    <form action="{{ route('admin.users.store') }}" method="post">

        @include('admin.users.form')

        <button type="submit" class="btn btn-success">Create User</button>
    </form>
</div>
@endsection
