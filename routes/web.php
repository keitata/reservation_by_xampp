<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MeetingRoomController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('hello');
});



// Route::get('/meeting-rooms', [MeetingRoomController::class, 'index'])->name('meeting-rooms');

// Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
// Route::get('/meeting_rooms/{id}', [MeetingRoomController::class, 'show']);





Route::get('/meeting_rooms', [MeetingRoomController::class, 'index'])->name('meeting_rooms.index');     // 会議室一覧画面
Route::get('/meeting_rooms/{id}', [MeetingRoomController::class, 'show'])->name('meeting_rooms.show'); //会議室詳細（予約できる）

// 予約一覧画面
// Route::get('/reservations', [ReservationController::class, 'index']);     //予約一覧画面
// Route::get('/reservations/{id}', [ReservationController::class, 'show']);
// Route::get('/reservations/{id}/edit', [ReservationController::class, 'edit']);       予約日時変更
// Route::post('/reservations/{id}/update', [ReservationController::class, 'update']);
// Route::post('/reservations/{id}/cancel', [ReservationController::class, 'cancel']);    //予約キャンセル

// 予約作成画面
// Route::get('/reservations/create', [ReservationController::class, 'create']);
// Route::post('/reservations', [ReservationController::class, 'store']);
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

// ログイン画面
// Route::get('/login', [LoginController::class, 'showLoginForm']);
// Route::post('/login', [LoginController::class, 'login']);


