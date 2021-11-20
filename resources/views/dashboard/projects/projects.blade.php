@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CRUD Projects</h1>
@stop

@section('content')
<a href="{{route('projects.create')}}"><button class="btn btn-success mb-2">Create Project</button></a>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">User</th>
        <th scope="col">Title</th>
        <th scope="col">Image</th>
        <th scope="col">Description</th>
        <th scope="col">Status</th>
        <th scope="col">Acctions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr>
            <th scope="row">{{$project->id}}</th>
            <td>{{$project->users->name}}</td>
            <td>{{$project->title}}</td>
            <td><img src="{{$project->img}}" alt="" width="250px"></td>
            <td>{{$project->description}}</td>
            <td>{{$project->status}}</td>
            <td>
     
              <a href="{{route('projects.edit', $project->id)}}"><button class="btn btn-warning btn-block" type="submit">Edit</button></a>
          
              <form action="{{route('projects.destroy', $project->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-block mt-2" type="submit">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      
    </tbody>
  </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop