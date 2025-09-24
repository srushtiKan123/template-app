@extends('layouts.app')

@section('content')
<div class="container mt-5" style="max-width:400px;">
    <h3 class="mb-4">Login</h3>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
            @error('email')<small class="text-danger">{{ $message }}</small>@enderror
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
            @error('password')<small class="text-danger">{{ $message }}</small>@enderror
        </div>
        <button class="btn btn-primary w-100">Login</button>
        <p class="mt-3">No account? <a href="{{ route('register') }}">Register</a></p>
    </form>
</div>
@endsection
