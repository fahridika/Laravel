@extends('layout.main')
@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    {{-- Mengambil data nama kategori pada fungsi category dari model Post --}}
    <p>By. Muhammad Fahri Dika Yuda in <a href='/category/{{ $post->category->slug }}'>{{ $post->category->name}}</a></p>
    {!! $post->body !!}
</article>
<a href='/blog'>Kembali ke Posts(blog)</a>
@endsection
