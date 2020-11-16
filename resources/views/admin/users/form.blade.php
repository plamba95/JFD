
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $user->name }}"/>
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') ?? $user->email }}"/>
    @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" />
    @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    @if ($editing == true)
        <small class="form-text text-warning font-weight-bold">Fill in ONLY if you want to change the password!</small>
    @endif
  </div>

<label>
    Roles

    @error('roles')
        <small class="form-text text-danger">{{ $message }}</small>
    @enderror
</label>


@foreach ($roles as $role)
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="role_{{ $role->id }}" name="roles[]" value="{{ $role->id }}"
            {{ ($user->hasAnyRole($role->name) || in_array($role->id, old('roles') ?? array())) ? 'checked' : ''}}
        />
        <label class="form-check-label" for="role_{{ $role->id }}">{{ ucfirst($role->name) }}</label>
    </div>
@endforeach

@csrf


{!! $validator !!}
