<?php

use Illuminate\Support\Facades\Route;

Route::get('ping', function(){
    return csrf_token();
});

Route::post('create_book', [\App\Http\Module\Book\Presentation\Controller\BookController::class, 'createBook']);