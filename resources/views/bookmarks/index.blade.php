@foreach ( $bookmarks as $bookmark)
    <p>{{ $bookmark->id}}</p>
    <p>{{ $bookmark->task_id}}</p>
    <p>{{ $bookmark->user_id}}</p>
    <p>{{ $bookmark->created_at}}</p>
@endforeach