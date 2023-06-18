@extends('layouts.app')

@section('content')
    <p>会議室詳細</p>

    <p>会議室名: {{ $meetingRoom->name }}</p>
    <p>収容人数: {{ $meetingRoom->capacity }}</p>

    <h2>現在の予約</h2>

    @if ($currentReservation)
        <p>予約日時: {{ $currentReservation->start }} - {{ $currentReservation->end }}</p>
    @else
        <p>現在予約はありません</p>
    @endif


    <h2>予約作成</h2>
    {{-- 予約フォームのデータを reservations.store ルートにPOSTメソッドで送信する --}}
    <form action="{{ route('reservations.store') }}" method="POST"> 

    <input type="hidden" name="meeting_room_id" value="{{ $meetingRoom->id }}">
    <div>
        <label for="start_time">開始時刻:</label>
        <input type="datetime-local" id="start_time" name="start_time">
    </div>

    <div>
        <label for="end_time">終了時刻:</label>
        <input type="datetime-local" id="end_time" name="end_time">
    </div>

    <button type="submit">予約する</button>

    </form>
@endsection





