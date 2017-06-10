@extends('layouts.app')

@section('content')

<form method="post" action="/projects">
    {{csrf_field()}}
    <input type="text" name="title" placeholder="Enter title">
    <br>
    <input type="submit" value="Create project">

</form>

@endsection