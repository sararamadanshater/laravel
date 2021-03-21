@extends('layout.app')
@section('title') 
show page
@endsection
@section('content')
<div class="card my-5">
  <div class="card-header">
    Post Info
  </div>
  <div class="card-body">
  <p class="card-text"><b>Title :- </b>{{ $post['title'] }}</p>
     <h5 class="card-title">Description:</h5>
      <p class="card-text">{{ $post['description'] }}</p>
      
      
    
  </div>
</div>

<div class="card">
  <div class="card-header">
    Post Creator Info
  </div>
  <div class="card-body">
    <p class="card-text"><b>Name :- </b>{{ $post['posted_by'] }}</p>
    <p class="card-text"><b>Email :- </b>{{ $post['email'] }}</p>
    <p class="card-text"><b>Created At :- </b>{{ $post['created_at'] }}</p>
    
  </div>
</div>
@endsection 