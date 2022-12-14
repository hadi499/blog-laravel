@extends('layouts.main')


@section('contents')

<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="card mb-3">
    
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="..." >
  
  
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
      <p><small class="text-muted">By: <a href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none" >{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
      
    </div>
  </div>   

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4">
            <div class="card mb-3" >
                <div class="position-absolute bg-dark p-2 " style="background-color: rgba(0, 0, 0, 0.2)">
                   <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a> 
                </div>               
                <img src="https://source.unsplash.com/600x400?{{ $post->category->name }}" class="card-img-top" alt="...">
                     
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p><small class="text-muted">By: <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none" >{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}</small></p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
              </div>

        </div>
    </div>
    @endforeach
</div>
@endsection