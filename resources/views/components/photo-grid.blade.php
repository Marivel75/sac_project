<div class="col-md-3 col-sm-6 col-padding text-center animate-box">
  <a href="/sports/{{ $sport->id }}" class="work image-popup" style="background-image: url({{ Voyager::image($sport->image) }});">
    <div class="desc">
      <h3>{{ $sport->name }}</h3>
      <span>Discover</span>
    </div>
  </a>
</div>
