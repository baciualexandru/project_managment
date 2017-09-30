@extends('layouts.app')

@section('content')
    <h2>Add new log</h2>
    <form method="post" action="/usertasklogs">

        {{csrf_field()}}
        <select name="task_id">
            @foreach( $tasks as $task )
                <option value="{{$task->id}}">{{ $task->title  }}</option>
            @endforeach
        </select>
        <hr>
        <input type="text" name="user_id" value="{{ Auth::user()->id }}"/>
        <hr>
        <input type="text" name="duration" placeholder="30"/>
        <hr>
        <input type="submit" value="Add log" />
    </form>

@endsection