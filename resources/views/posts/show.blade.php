@extends('layouts.app')

@section('content')

  <div class="fh5co-narrow-content">

    <p><a href="/posts" class="btn btn-success">Back to the news</a></p>

    <br>
    <div class="cold-md-12 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
        <h2 class="fh5co-heading-colored">{{ $post->title }}</h2>
        @foreach ($post->tags as $tag)
          <h4 class="badge rounded-pill bg-green">#{{ $tag->name }}</h4>
        @endforeach
        <hr class="divider">
        <article class="">
          <p> {!! $post->body !!}</p>
        </article>
    </div>

    <div class="cold-md-12 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
        @if ($post->image)
          <img src="{{ Voyager::image($post->image)}}" class="img-responsive" alt="">
        @endif
    </div>

  </div>


@endsection
