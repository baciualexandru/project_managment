@extends('layouts.app')

@section('content')
<h2>Edit project</h2>
<form method="post" action="/projects/{{$project->id}}">
     {{ method_field('PUT') }}
    {{csrf_field()}}
    <input type="text" name="title" value="{{$project->title}}">
    <br>
    <input type="submit" value="Edit project">

</form>

@endsection