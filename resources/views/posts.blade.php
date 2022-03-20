@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center ">{{ $title }}</h1>

<div class="row justify-content-center">
  <div class="col-md-6 mb-3">
    <form action="/blog">

      @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      @if (request('author'))
        <input type="hidden" name="author" value="{{ request('author') }}">
      @endif

      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Temukan Postingan.." name="search" value="{{ request('search') }}">
        <button class="btn btn-info text-light" type="submit"><i class="bi bi-search"></i></button>
      </div>
    
    
    </form>
  </div>
</div>

@if ($posts->count())

<div class="card mb-3 align-content-center">
  @if ($posts[0]->image)
    <div style="max-height: 350px; max-width: 100%; overflow:hidden; min-width: 80%px;">
        <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
    </div>
  @else
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
  @endif




    <div class="card-body text-center">
      <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"class="text-decoration-none text-dark" >{{ $posts[0]->title }}</a></h3>
      <p>
      <small class="text-muted">
      By. <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }} </a> {{ $posts[0]->created_at->diffForHumans() }} 
    </small>
    </p>

      <p class="card-text">{{ $posts[0]->excerpt }}</p>

      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Selengkapnya <i class="bi bi-arrow-right"></i></a>

    </div>
  </div>

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)

        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2 text-light" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none text-light"> {{ $post->category->name }}</a></div>

                @if ($post->image)
                  <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                @else
                  <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                @endif


                
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p>
                    <small class="text-muted">
                        By. <a href="/blog?author={{ $post->author->username }}"    class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }} 
                  </small>
                  </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
        </div>

        @endforeach

    </div>

</div>

@else
    <p class="text-center fs-4">Tidak ada postingan</p>
    
@endif

<div class="d-flex justify-content-end">

  {{ $posts->links() }}

</div>    

@endsection
