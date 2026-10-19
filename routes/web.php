<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/partners', function () {
    return view('partners');
});

Route::get('/video-stream', function () {
    $path = public_path('videos/coderun_moments.mp4');
    if (!file_exists($path)) {
        abort(404);
    }
    return response()->file($path, [
        'Accept-Ranges' => 'bytes',
        'Content-Type' => 'video/mp4',
    ]);
});
