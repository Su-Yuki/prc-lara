@foreach ( $tasks as $task)
    <p>{{ $task->id}}</p>
    <p>{{ $task->title}}</p>
    <p>{{ $task->contents}}</p>
    <p>{{ $task->image_at}}</p>
    <p>{{ $task->user_at}}</p>
    <p>{{ $task->created_at}}</p>
@endforeach