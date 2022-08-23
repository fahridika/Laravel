@extends('layout.main')
@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
            <h2 class="mb-3">{{ $post->title }}</h2>
            {{-- Mengambil data nama kategori pada fungsi category dari model Post --}}
            <p>By. <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href='/category/{{ $post->category->slug }}'>{{ $post->category->name}}</a></p>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>

            <a href='/blog' class='d-block-mt-3'>Kembali ke Posts(blog)</a>

        </div>
    </div>
</div>


@endsection
