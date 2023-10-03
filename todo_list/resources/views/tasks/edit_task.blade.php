@extends("layout")

@section("title")
    Edit task
@endsection

@section("content")
    <h1>Edit task</h1>
    <hr>
    <form action="/dashboard/edit/{{$task->id}}" method="post">
        @csrf
        <span>Title:</span>
        <input type="text" value="{{ $task->title }}" name="title" class="form-control"><br>
        <span>Description:</span>
        <textarea class="form-control" name="description">{{ $task->description }}</textarea><br>
        <button class="btn btn-primary" type="submit">Edit</button>
    </form>
@endsection
