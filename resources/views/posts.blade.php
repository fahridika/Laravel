@extends('layout.main')
@section('container')
<h1 class='mb-5'> {{ $title }} </h1>

@if($posts->count())
<div class="card mb-3 text-center">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    <div class="card-body">
        <h3 class="card-title">
            <a href="/posts/{{ $posts[0]->slug}}" class='text-decoration-none text-dark'>
                {{ $posts[0]->title }}
            </a>
        </h3>
        <p>
            <small class='text-muted'>
                By. <a href="/authors/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in <a href='/category/{{ $posts[0]->category->slug }}' class='text-decoration-none'>{{ $posts[0]->category->name}}</a>
            </small>
            {{ $posts[0]->created_at->diffForHumans() }}
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href='/posts/{{ $posts[0]->slug}}' class='text-decoration-none btn btn-primary'> Read more...</a>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
</div>
@else
<p class="text-center fs-4">No post found.</p>
@endif


<div class='container'>
    <div class='row'>
        @foreach($posts->skip(1) as $post)
        <div class='col-md-4 mb-5'>
            <div class="card">
                <div class="position-absolute bg-dark px-2 py-2 " style="background-color: rgba(0,0,0,0.7)"> 
                <a href="/category/{{ $post->category->slug }}" class="text-white text-decoration-none ">{{ $post->category->name }}
                </a> 
                </div>
                 
                <img src="https://source.unsplash.com/400x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p>
                        <small class='text-muted'>
                            By. <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}
                        </small>
                        {{ $post->created_at->diffForHumans() }}
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug}}" class="btn btn-primary">Read Mode</a>
                </div>
            </div>
        </div>
        @endforeach($posts as $post)
    </div>
</div>


@endsection
