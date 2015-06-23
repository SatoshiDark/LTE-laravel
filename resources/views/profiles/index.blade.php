
@extends('layouts.master')

@section('content')

    <form action="add" method="post" enctype="multipart/form-data">
        <input type="file" name="filefield">
        <input type="submit">
    </form>

    <h1> Pictures list</h1>

    <div class="row">

        <ul>
            @foreach($profile as $task)
                <h3>{{ $task->title }}</h3>
                <p>{{ $task->description}}</p>
                <p>
                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">View Task</a>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
                </p>
                <hr>
            @endforeach
            {{--@foreach($entries as $entry)--}}
                {{--<li>{{entry->filename}}</li>--}}
            {{--@endforeach--}}
        </ul>
    </div>

@endsection