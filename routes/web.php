<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Livewire\Users\UserIndex;
use App\Livewire\Users\UserCreate;
use App\Livewire\Users\UserEdit;
use App\Livewire\Users\UserShow;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('users', UserIndex::class)->name('users.index');
    Route::get('users/create', UserCreate::class)->name('users.create');
    Route::get('users/{id}/edit', UserEdit::class)->name('users.edit');
    Route::get('users/{id}', UserShow::class)->name('users.show');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
