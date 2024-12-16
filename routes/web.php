<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home-Page');
});

Route::get('/login', [
    HomeController::class,
    'Page_Login'
]);

Route::get('/about', function () {
    return view('about_us', $data = [
        'Title' => 'D3 Statistika | Tentang Kami',
    ]);
});

Route::get('/visi-misi', [
    HomeController::class,
    'VisiMisi'
]);

Route::get('/blog_one', [
    HomeController::class,
    'blog_one'
]);

Route::get('/profile_lulusan', [
    HomeController::class,
    'ProfileLulusan'
]);

Route::get('/struktur_organisasi', [
    HomeController::class,
    'StrukturOrg'
]);

Route::get('/dosen_pengajar', [
    HomeController::class,
    'DosenStatistika'
]);

Route::get('/sejarah', [
    HomeController::class,
    'Sejarah'
]);

Route::get('/kurikulum', [
    HomeController::class,
    'Kurikulum'
]);

Route::get('/landasan_kurikulum', [
    HomeController::class,
    'landasan_kurikulum'
]);

Route::get('/tracer-study', [
    HomeController::class,
    'Tracer_Study'
]);

Route::get('/evaluasi-kurikulum', [
    HomeController::class,
    'evaluasi'
]);


Route::get('/Rencana_Pembelajaran_Semester', [
    HomeController::class,
    'Rps'
]);

Route::get('/struktur matkul', [
    HomeController::class,
    'SM'
]);

Route::get('/form-asisten', [
    HomeController::class,
    'form_asisten'
]);

Route::get('/mitra', [
    HomeController::class,
    'mitra'
]);
