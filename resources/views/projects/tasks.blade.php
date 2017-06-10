@extends('layouts.app')

@section('content')
<h1>{{$project->title}} tasks.</h1>
<h2>Total time: {{$total_time}} minutes</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Task title</th>
                <th>Task duration</th>
                <th>Actions</th>
            </tr>
        </thead>
    <tbody>
    @foreach ( $project->tasks as $task )
        <tr>
            <td>
                {{$task->id}}
            </td>
            <td>
              {{$task->title}}   
            </td>
            <td>
               {{$task->duration}} minutes
            </td>
            <td>
                <a href="/tasks/{{$task->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                <a href="/tasks/{{$task->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
            </td>
        <tr>
    @endforeach
    </tbody>
    </table>


@endsection