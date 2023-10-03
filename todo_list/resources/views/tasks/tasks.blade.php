@extends("layout")

@section("title")
    Tasks
@endsection

@section("content")
    <h1>Tasks</h1>
    <hr>
    <form action="/tasks" method="post">
        @csrf
        <span>Title:</span>
        <input type="text" name="title" class="form-control"><br>
        <span>Description:</span>
        <textarea class="form-control" name="description"></textarea><br>
        <button class="btn btn-primary" type="submit">Create</button>
    </form>
    <hr>
    <div class="container">
        @foreach ($tasks as $task)
            <div><span>Title:</span> {{ $task->title }}<br> <span>Description:</span> {{$task->description}} <input name="completed" type="checkbox">
                <a href="/edit/{{$task->id}}">edit</a> <a href="/delete/{{$task->id}}" class="text-danger">delete</a></div>
            <hr>
        @endforeach
    </div>
@endsection
