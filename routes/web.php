<?php



use App\Livewire\Users\UsersList;
use Illuminate\Support\Facades\Route;
use App\Livewire\Saving;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/users', UsersList::class)->name('users.index');

    Route::get('/saving', saving::class)->name('savings');
});
