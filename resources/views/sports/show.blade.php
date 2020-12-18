@extends('layouts.app')

@section('content')



<x-article-heading :title='$sport->name' />

<div class="fh5co-narrow-content">

    <p><a href="/sports" class="btn btn-success">Back to the sports</a></p>

  <br>
  <div class="cold-md-12 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
      <h2 class="fh5co-heading-colored">{{ $sport->title }}</h2>
      <hr class="divider">
      @if ($sport->description)
        <article class="">
          <p> {!! $sport->description !!}</p>
        </article>
      @endif
  </div>

  <div class="cold-md-12 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
      @if ($sport->image)
        <img src="{{ Voyager::image($sport->image)}}" class="img-responsive" alt="">
      @endif
  </div>

@if ($sport->competition)
  <div class="cold-md-12 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
    <article class="">
      <p> {!! $sport->competition !!}</p>
    </article>
  </div>
  <hr class='divider'>
@endif

@if ($sport->coaching)
  <div class="cold-md-12 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
    <article class="">
      <p> {!! $sport->coaching !!}</p>
    </article>
  </div>
  <hr class='divider'>
@endif

@if ($sport->children)
  <div class="cold-md-12 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
    <article class="">
      <p> {!! $sport->children !!}</p>
    </article>
  </div>
  <hr class='divider'>
@endif

@if ($sport->club_rules)
  <div class="cold-md-12 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
    <article class="">
      <p> {!! $sport->club_rules !!}</p>
    </article>
  </div>
  <hr class='divider'>
@endif


@endsection
