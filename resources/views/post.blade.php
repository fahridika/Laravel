@extends('layout.main')
@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    {{-- Mengambil data nama kategori pada fungsi category dari model Post --}}
    <p>By. <a href="#">{{ $post->user->name }}</a> in <a href='/category/{{ $post->category->slug }}'>{{ $post->category->name}}</a></p>
    {!! $post->body !!}
</article>
<a href='/blog' class='d-block-mt-3'>Kembali ke Posts(blog)</a>
@endsection
