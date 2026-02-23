<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    public function store(Request $request)
    {
        Posts::create([
        "name" => $request->name,
        "surname" => $request->surname,
        "email" => $request->email,
        ]);

        /* Posts::create([
            "name"=>$request->name,
            "surname"=>$request->surname,
            "email"=>$request->email,
        ]); */

        return view("posts");
    }

    public function create ()
    {
        return view ("posts.create");
    }

    public function index ()
    {
        $posts = Posts::all();

        return view ("get.posts", ["posts" => $posts]);
    }

    public function edit ()
    {
        return view("put.edit");
    }
}
