@extends('layouts.app')

@section('content')
<p><a href="/usertasklogs/create" class="btn btn-primary btn-sm">Create log </a></p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Task title</th>
                <th>User name</th>
                <th>Project title</th>
                <th>Duration</th>
            </tr>
        </thead>
    <tbody>
    @foreach ($logs as $log)
        <tr>
            <td>
                {{$log->id}}
            </td>
            <td>
              {{$log->task_id}}   
            </td>
            <td>
              {{$log->user_id}}   
            </td>
            <td>
              
            </td>
            <td>
             {{$log->duration}} minutes
            </td>
        <tr>
    @endforeach

    </tbody>
    </table>
@endsection