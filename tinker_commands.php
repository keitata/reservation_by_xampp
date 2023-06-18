// モデルのインポート
use App\Models\Reservation;
use App\Models\MeetingRoom;

$room1 = new App\Models\MeetingRoom();
$room1->name = '会議室A';
$room1->capacity = 10;
$room1->save();

$room2 = new App\Models\MeetingRoom();
$room2->name = '会議室B';
$room2->capacity = 8;
$room2->save();


$reservation1 = new App\Models\Reservation()
$reservation1->start = '2023-06-22 09:00:00';
$reservation1->end = '2023-06-22 10:00:00';
$reservation1->room_id = 1;
$reservation1->save();

$reservation2 = new Reservation();
$reservation2->start = '2023-06-23 14:00:00';
$reservation2->end = '2023-06-23 15:00:00';
$reservation2->room_id = 2;
$reservation2->save();


