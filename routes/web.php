<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/create/article', [ArticleController::class, 'create'])->name('create.article');

// Indice di tutti gli articoli
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

// Dettaglio del singolo articolo
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');

// Filtro per categoria
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');