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
    <input type="file" class="form-control-file" name="img">
    <label for="">Description:</label>
    <input type="text" class="form-control-file" name="description" value="{{$project->description}}">
    <label for="">Status</label>
    <select id="cars" class="form-control" name="status">
      <option value="1" >Borrador</option>
      <option value="2" >Publicado</option>
    </select>
    <label for="">Content</label>
    <textarea name="content" id="editor" cols="30" rows="10"  class="form-control">{{$project->content}}</textarea>
    <button class="btn btn-primary btn-lg btn-block mt-2" type="submit">Editar</button>
  </form>
@stop 

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js" ></script>
<script>
  ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
          console.error( error );
      } );
</script>

@stop