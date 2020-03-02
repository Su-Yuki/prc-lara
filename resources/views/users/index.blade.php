@foreach ( $users as $user)
    <p>{{ $user->id}}</p>
    <p>{{ $user->name}}</p>
    <p>{{ $user->email}}</p>
    <p>{{ $user->email_verified_at}}</p>
    <p>{{ $user->password}}</p>
    <p>{{ $user->created_at}}</p>
@endforeach
