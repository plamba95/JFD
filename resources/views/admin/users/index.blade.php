@extends('layouts.app')

@section('title','Users')

@section('content')

<div class="container">
    <div class="row mb-2">
        <div class="col-sm-10 col-12">
            <h3>Users</h3>
        </div>
        <div class="col-sm-2 col-12">
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary float-right">Create new</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Roles</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                    <th scope="row">{{ $user->name }}</th>
                    <td>{{ $user->email }}</td>
                    <td>{{ ucwords(implode(', ', $user->roles()->get()->pluck('name')->toArray()),', ') }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-info mr-2">Edit</a>
                        <form class="deleteUserForm" id="deleteUserForm-{{ $user->id }}" style="display: inline" action="{{ route('admin.users.destroy', $user->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="button" class="btn btn-sm btn-danger deleteBtn" data-userName="{{ $user->name }}">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    {{ $users->links() }}
</div>

@include('partials.confirmationModal', [
    'modalID' => 'deleteConfirmationModal',
    'title' => 'Confirm deletion',
    'message' => 'Do you want to delete user <strong id="userToDelete"></strong>',
    'buttonText' => 'Delete',
    'buttonClass' => 'btn-danger'
    ]
)

@endsection
