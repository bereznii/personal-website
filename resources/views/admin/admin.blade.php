@extends('layouts.app')

@section('content')
<div class="card border-primary">
    <div class="card-header">Dashboard</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        Welcome back, Dmytro!
    </div>
</div>
@endsection