
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>会議室予約</title>
</head>
<body>
    <header>
        <div class="site-title">会議室</div>
    </header>
    <main class="container">
        <h1>会議室一覧</h1>
        <ul>
            @foreach ($meetingRooms as $meetingRoom)
            <li>
                <h2>{{ $meetingRoom->room_name }}</h2>
                <p>収容人数: {{ $meetingRoom->capacity }}</p>
                @if ($meetingRoom->is_reserved == 0)
                    <form action="{{ route('reservations.create') }}" method="GET">
                    <input type="hidden" name="meeting_room_id" value="{{ $meetingRoom->id }}">
                    <button type="submit">予約する</button>
                @else
                    <p>予約済み</p>
                @endif
            </li>
            @endforeach
        </ul>
    </main>
    <footer>
        &copy; 
    </footer>
</body>
</html>


