@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Letters</div>

    <div class="card-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Reason</th>
              <th scope="col">Email</th>
              <th scope="col">Date</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
            @foreach($letters as $record)
              <td><strong>{{$record->id}}</strong></th>
              <td>{{$record->name}}</td>
              <td>{{$record->reason}}</td>
              <td>{{$record->email}}</td>
              <td>{{$record->created_at}}</td>
              <td><a href="{{route('letter', ['id' => $record->id])}}"><i class="fas fa-envelope-open"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $letters->links() }}
    </div>
</div>
@endsection