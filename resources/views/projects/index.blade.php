@extends('layouts.app')

@section('content')
    <p><a href="/projects/create" class="btn btn-primary btn-sm">Create project</a></p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Project name</th>
                <th>Nr. tasks</th>
                <th>Actions</th>
            </tr>
        </thead>
    <tbody>

        @foreach ($projects as $project)
            <tr>
                <td>
                    {{ $project->id }} 
                </td>
                <td>
                    {{ $project->title }}
                </td>
                <td>
                    {{ $project->tasks->count() }}
                </td>
                <td>
                    <a href="/projects/{{$project->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                    <a href="/projects/{{$project->id}}/tasks" class="btn btn-primary btn-sm">View tasks</a>
                    <a href="/projects/{{$project->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbod>
    </table>

@endsection