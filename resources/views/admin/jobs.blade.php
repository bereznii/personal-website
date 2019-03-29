@extends('layouts.app')

@section('content')
<div class="card border-primary">
    <div class="card-header">History of background jobs</div>

    <div class="card-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Type</th>
              <th scope="col">Payload</th>
              <th scope="col">Done at</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            @foreach($history as $key => $record)
              <td><strong>{{$record->id}}</strong></th>
              <td>{{$record->type}}</td>
              <td style='max-width: 30em;'><ul>
                @foreach($payloads[$key] as $field => $datum)
                  <li><strong>{{$field}}:</strong> {{$datum}}</li>
                @endforeach
              </ul></td>
              <td>{{$record->created_at}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $history->links() }}
    </div>
</div>
@endsection