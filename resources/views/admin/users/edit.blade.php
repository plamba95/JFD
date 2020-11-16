@extends('layouts.app')

@section('title','Edit User')

@section('content')
<div class="container">
    <div class="row mb-2">
        <div class="col-12">
            <h3>Edit User</h3>
        </div>
    </div>

    <form action="{{ route('admin.users.update', $user->id) }}" method="post">
        @method('PATCH')

        @include('admin.users.form')

        <button type="submit" class="btn btn-success">Update User</button>
    </form>
</div>
@endsection
