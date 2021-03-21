@extends('layout.app')
@section('title') 
index page
@endsection
@section('content')
<form method="POST" action="{{route('posts.store')}}">
@csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"> Title</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Post Creator</label>
  <select class="form-control" id="post_creator">
          <option>sara</option>
</select>
</div>
<button type="submit" class="btn btn-success">Create</button>
</form>


@endsection 