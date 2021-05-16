<a href="{{ route('users.show', $user->id) }}"></a> -> user w tabeli users
<a href="{{ route('users.show', Auth::user()) }}"></a> -> zalogowany
