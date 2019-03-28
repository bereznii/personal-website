@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Open letter #{{$letter->id}}</div>
    <div class="card-body">
        <p><strong>Subject:</strong> {{$letter->subject}}.</p>
        <p><strong>From:</strong> {{$letter->name}}, {{$letter->email}}.</p>
        <hr>
        <p>Hello!</p>
        <p>The reason i'm writing to you is {{$letter->reason}}.</p>
        <p>{{$letter->message}}</p>
        <p>Best regards,<br>{{$letter->name}}.</p>
    </div>
</div>
@endsection