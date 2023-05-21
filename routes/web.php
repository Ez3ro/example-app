<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
use App\Events\SendMessage;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/transmisiones-en-vivo', [SiteController:: class,'live'])->name( name: 'live-streams');
Route::get('/category/{category:slug}', [PostController:: class,'byCategory'])->name( name: 'by-category');
Route::get('/{post:slug}', [PostController:: class,'show'])->name( name: 'view');

Route::post("/chat/send", function(Request $request){
    $message = $request->input("message", null);
    $name = $request->input("name", null);
    $time = (new DateTime(now()))->format(DateTime::ATOM);
    if ($name == null) {
        $name = "Anonymous";
    }

    SendMessage::dispatch($name,$message,$time);

Route::get('/sockets/connect', 'SocketController@connect');

});
