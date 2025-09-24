@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Welcome, {{ auth()->user()->name }}!</h2>
    <p class="lead">This is your dashboard.</p>
</div>
@endsection
