@extends('layout.main')
@section('container')
<h1> Halaman Blog</h1>
@foreach($posts as $post)
<article>

    <h2>
        <a href='/posts/{{ $post->id }}'>{{ $post->title }}</a>
    </h2>
    <h3>{{ $post->author}}</h3>
    {{ $post->excerpt }}
</article>


@endforeach($posts as $post)


@endsection
