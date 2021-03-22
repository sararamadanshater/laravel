@extends('layouts.app')
@section('title') 
index page
@endsection
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{route('posts.update',['post' => $post['id']])}}" >
@csrf
@method('PUT')
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"> Title</label>
  <input name="title" value="{{$post->title}}"  type="text" class="form-control" id="exampleFormControlInput1">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$post->description}}</textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Post Creator</label>
  <select name="user_id"  class="form-control" id="post_creator">
  @foreach($users as $user)
          <option value="{{$user->id}}">{{$user->name}}</option>
     @endforeach     
          <!-- <option value="{{$post->user_id}}">{{$post->user->name}}</option> -->
</select>
</div>
<button  type="submit" class="btn btn-primary">UPdate</button>
</form>


@endsection 