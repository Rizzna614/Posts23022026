<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/posts/create", [PostController::class, "create"]);

Route::post("/posts/formcompleted", [PostController::class, "store"]);

Route::get("/get/posts", [PostController::class, "index"]);

Route::put("/put/edit/{posts}", [PostController::class, "update"]);