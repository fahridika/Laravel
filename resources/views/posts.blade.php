
@extends('layout.main')
@section('container')
    <h1> Halaman Blog</h1>  
    @foreach($posts as $post)
    <article>
    
    <h2>
    <a href ='/posts/{{ $post['slug'] }}'>{{ $post['title'] }}</a>
    </h2>
    <h3>{{ $post['author'] }}</h3>
    <p>{{ $post['body'] }}</p>
    </article>
    
        
    @endforeach($posts as $post)
        
    
@endsection
