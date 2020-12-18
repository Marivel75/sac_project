@extends ('layouts.app')

@section('content')

  <x-article-heading title="Latest News" />
  <div class="fh5co-narrow-content">
    <div class="row row-bottom-padded-md">
      @foreach ($posts as $key => $post)
        <x-card :post="$post" />
      @endforeach
    </div>
  </div>
@endsection
