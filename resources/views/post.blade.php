@extends('layouts.main')

@section('contents')

<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 mb-4">
        <h2>{{ $post->title }}</h2>
        <p class=" mb-4"><small class="text-muted">By: <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none" >{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}</small></p>
        
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="..." >
     
        
        <article class="my-3">

            {!! $post->body !!}

        </article>
            <a href="/posts">back to posts</a>
  
      </div>
    </div>
  </div>



    
@endsection