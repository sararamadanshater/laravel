<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;



use App\Models\Post;
use App\Models\User;

class postController extends Controller
{
    public function index ()
    {
        $allPosts=Post::paginate(10);
        return view('posts.index',['posts'=>$allPosts]);
    }
    public function show($post)
    {
        $post =Post::find($post);

        return view('posts.show',['post'=>$post]);
    }
    public function create()
    {
        return view('posts.create',[
            'users'=>User::all()
        ]);
    }
    public function edit($post)
    {
        $post = Post::find($post) ;
        return view('posts.edit',['post'=>$post,'users'=>User::all()]);
    }
    public function store(StorePostRequest $request)
    {
        $allRequest=$request->all();
        Post::create($allRequest);
        return redirect()->route('posts.index');
    }
    

    public function update (UpdatePostRequest $request ,$postId)
{   
    
    $post = Post::findorfail($postId);
    $post->update([
        'title'=>$request['title'],
        'description'=>$request['description'],
        'user_id'=> $request['user_id'],
        
    ]);
    
    return redirect()->route('posts.index');
    

}
public function destroy($postId){

$post = Post::findorfail($postId);

$post->delete();
return redirect()->route('posts.index');

}



}
