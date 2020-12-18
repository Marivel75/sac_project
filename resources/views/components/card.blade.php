
<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
  <div class="blog-entry">
    @if ($post->image)
      <a href="posts/{{ $post->id}}" class="blog-img">
        <img src="{{ Voyager::image($post->image) }}" class="img-responsive" alt="" >
      </a>
    @else
      <a href="#" class="blog-img"><img src="./card-images/default_view.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
    @endif
    <div class="desc">
      <h3><a href="posts/{{ $post->id}}">{!! $post->fragmentTitle() !!}</a></h3>
      <h4 class="badge rounded-pill bg-primary">#News</h4>
        @if ($post->tags)
          @php
            $chunks = $post->tags->take(2);
          @endphp
          @foreach ($chunks as $tag)
            <h4 class="badge rounded-pill bg-green">#{{ $tag->name }}</h4>
          @endforeach
        @endif
      <p>{!! $post->fragmentBody() !!}
      <p><small>{{ $post->created_at->format('d/m/Y') }}</small></p>
      <a href=""posts/{{ $post->id}}"" class="lead"><strong>Read More <i class="icon-arrow-right3"></i></strong></a>
    </div>
  </div>
</div>
