<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/posts/create", [PostController::class, "create"]);

Route::post("/posts/formcompleted", [PostController::class, "store"]);

Route::get("/get/posts", [PostController::class, "index"])->name("allPosts");

Route::get("/put/{post}/edit", [PostController::class, "editView"])->name("put.edit");

Route::put("/put/{post}", [PostController::class, "edit"])->name("put.edited");

Route::get("/delete/{post}", [PostController::class, "destroy"])->name("delete");