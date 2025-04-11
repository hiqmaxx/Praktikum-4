<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    // Coba ambil nama dari session atau cookie
    $name = session('name', request()->cookie('name', 'Guest'));
    return view('salam', compact('name'));
});

Route::post('/submit-name', function (Request $request) {
    $name = $request->input('name');
    // Simpan nama ke session dan cookie
    session(['name' => $name]);
    return redirect('/salam')->withCookie(cookie('name', $name, 60));
});