@extends('layouts.app')



@section('content')

<x-article-heading title="Children" />
<div class="fh5co-narrow-content">

  <x-about-content :category="$category" />

  <div class="fh5co-narrow-content">
    @foreach ($sports as $key => $sport)
      @if ($sport->children)
        <div class="row row-bottom-padded-md">
          <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
            <h2 class="fh5co-heading-colored">Junior {{ $sport->name }}</h2>
              {!! $sport->children !!}
          </div>
        </div>
      @endif
    @endforeach
  </div>

</div>




@endsection
