<?php

namespace App\Http\Controllers\Api;
use App\Http\Requests\StorePostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\postResource;

class postController extends Controller
{
    public function index()
    {
        $posts =Post::all();
        return postResource::collection($posts);
    }
    public function show(Post $post)
    {
       return new postResource($post);
    }
    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->all());

        return new PostResource($post);
    }
}
