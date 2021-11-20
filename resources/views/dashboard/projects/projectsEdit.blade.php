@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CRUD Projects</h1>
@stop

@section('content')
 
  <form action="{{route('projects.update', $project->id)}}" method="post" class='form-group' enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="">Title:</label>
    <input type="text" class="form-control" name="title" value="{{$project->title}}">
    <label for="">Image:</label>
    <input type="text" class="form-control" name="img">
    <label for="">Description:</label>
    <input type="text" class="form-control" name="description" value="{{$project->description}}">
    <label for="">Status</label>
    <select id="cars" class="form-control" name="status">
      <option value="1" >Borrador</option>
      <option value="2" >Publicado</option>
    </select>
    <label for="">Content</label>
    <textarea name="content" id="mytextarea" cols="30" rows="30"  class="form-control">{{$project->content}}</textarea>
    <button class="btn btn-primary btn-lg btn-block mt-2" type="submit">Editar</button>
  </form>
@stop 

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

<script>
  var simplemde = new SimpleMDE({ element: document.getElementById("mytextarea") });
  </script>

@stop