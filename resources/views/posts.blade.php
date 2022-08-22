@extends('layout.main')
@section('container')
<h1 class='mb-5'> Halaman Blog</h1>

@foreach($posts as $post)
<article class='mb-5 border-bottom pb-5'>
    <h2>
        <a href='/posts/{{ $post->slug}}' class='text-decoration-none'>{{ $post->title }}</a>
    </h2>
    <p>By. Muhammad Fahri Dika Yuda in <a href='/category/{{ $post->category->slug }}' class='text-decoration-none'>{{ $post->category->name}}</a></p>

    <p>{{ $post->excerpt }}</p>
    <a  href='/posts/{{ $post->slug}}' class='text-decoration-none'> Read more...</a>
</article>


@endforeach($posts as $post)


@endsection
