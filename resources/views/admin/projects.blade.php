@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">PROJECTS</div>

    <div class="card-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Language</th>
              <th scope="col">Created</th>
              <th scope="col">Last Commit</th>
              <th scope="col">Size (kb)</th>
              <th scope="col">Commits</th>
              <th scope="col">Updated at</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            @foreach($projects as $project)
              <td><a href='{{$project->html_url}}'>{{$project->name}}</a></th>
              <td>{{$project->description}}</td>
              <td>{{$project->language}}</td>
              <td>{{$project->created}}</td>
              <td>{{$project->updated}}</td>
              <td>{{$project->size}}</td>
              <td>{{$project->commits}}</td>
              <td>{{$project->updated_at}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>
@endsection