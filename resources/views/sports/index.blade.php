@extends('layouts.app')


@section('content')

<x-article-heading title="Sports and Activities" />
<div class="fh5co-narrow-content">
  <div class="row row-bottom-padded-md">
    @foreach ($sports as $key => $sport)
      <x-photo-grid :sport="$sport" />
    @endforeach
  </div>
</div>



@endsection
