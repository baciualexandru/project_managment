@extends('layouts.app')

@section('content')

<form method="post" action="/projects">
    {{csrf_field()}}
    @if(count($errors) > 0)
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        <ul>
    @endif
    <input type="text" name="title" placeholder="Enter title">
    <br>
    <input type="submit" value="Create project">

</form>

@endsection