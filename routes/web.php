<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/who-we-are',function () {
    return view('who-we-are');
})->name('who-we-are');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/medias', function () {
    return view('medias');
})->name('medias');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/market', function () {
    return view('market');
})->name('market');

Route::get('/bot/{id}', function ($id) {
    return view('bot', ['id' => $id]);
})->name('bot');

Route::get('/article/{id}', function ($id) {
    // Récupérer les détails de l'article depuis la base de données en fonction de l'ID
    // Par exemple :
    // $article = App\Models\Article::find($id);
    // return view('article', ['article' => $article]);

    // Pour cet exemple, nous utilisons des données fictives
    return view('article', [
        'id' => $id,
        'title' => "Titre de l'Article $id",
        'content' => "Contenu détaillé de l'article $id...",
        'published_at' => '1er mai 2024',
        'image' => '/assets/pic/article-image.jpg'
    ]);
})->name('article');

Route::get('/register', function () {
    return view('auth.register');
})->name('register-form');

Route::post('/register', [RegisterController::class, 'register'])->name('register');