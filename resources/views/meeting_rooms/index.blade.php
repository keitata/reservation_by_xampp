
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
        <p>会議室一覧</p>
        <ul>
            @foreach ($meetingRooms as $meetingRoom)
            <li>
                <h2>{{ $meetingRoom->name }}</h2>
                <p>収容人数: {{ $meetingRoom->capacity }}</p>
                <a href="{{ route('meeting_rooms.show', ['id' => $meetingRoom->id]) }}">
                {{ "詳細(予約する)" }}
                </a>
            </li>
            @endforeach
        </ul>
    </main>
    <footer>
        &copy; 
    </footer>
</body>
</html>


