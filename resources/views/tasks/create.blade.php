@extends('layouts.app')

@section('content')
    <h2>Add new task</h2>
    <form method="post" action="/tasks">

        {{csrf_field()}}
        <select name="project_id">
            @foreach($projects as $project)
                <option value="{{$project->id}}">{{$project->title}}</option>
            @endforeach
        </select>
        <hr>
        <input type="text" name="title" placeholder="Task title"/>
        <hr>
        <input type="text" name="duration" placeholder="Duration in minutes"/>
        <hr>
        <input type="submit" value="Add task" />

    </form>

@endsection