@extends('layouts.app')

@section('content')
<p><a href="/tasks/create" class="btn btn-primary btn-sm">Create task </a></p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Task title</th>
                <th>Task duration</th>
                <th>Project title</th>
                <th>Actions</th>
            </tr>
        </thead>
    <tbody>
    @foreach ($tasks as $task)
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
             {{$task->project->title}}
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