@extends('layouts.app')

@section('content')
    <h2>Edit task</h2>
    <form method="post" action="/tasks/{{$task->id}}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <select name="project_id">
            @foreach($projects as $project)
                @if($project->id == $task->project->id)
                    <option selected value="{{$project->id}}">{{$project->title}}</option>
                @else
                    <option value="{{$project->id}}">{{$project->title}}</option>
                @endif
            @endforeach
        </select>
        <hr>
        <input type="text" name="title" value="{{$task->title}}"/>
        <hr>
        <input type="text" name="duration" value="{{$task->duration}}"/>
        <hr>
        <input type="submit" value="Edit task" />

    </form>

@endsection