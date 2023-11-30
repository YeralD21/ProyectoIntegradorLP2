<?php

use App\Livewire\Admin\UserManagement;
use Illuminate\Support\Facades\Route;

Route::get('/users',UserManagement::class)->name('users');
