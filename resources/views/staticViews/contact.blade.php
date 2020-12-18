@extends('layouts.app')


@section('content')

  <div class="fh5co-more-contact">
  				<div class="fh5co-narrow-content">
  					<div class="row">
  						<div class="col-md-4">
  							<div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
  								<div class="fh5co-icon">
  									<i class="icon-globe"></i>
  								</div>
  								<div class="fh5co-text">
  									<p><a href="#">saclub.org</a></p>
  								</div>
  							</div>
  						</div>
  						<div class="col-md-4">
  							<div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
  								<div class="fh5co-icon">
  									<i class="icon-map"></i>
  								</div>
  								<div class="fh5co-text">
  									<p>Route Forestière Du Pavé de Meudon<br>
                      92360 Meudon-La-Forêt, France</p>
  								</div>
  							</div>
  						</div>
  						<div class="col-md-4">
  							<div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
  								<div class="fh5co-icon">
  									<i class="icon-phone"></i>
  								</div>
  								<div class="fh5co-text">
  									<p><a href="tel://">+33 (0)1 46 26 16 09</a><br>
                      <a href="mailto:contact@saclub.org" target="_blank">contact@saclub.org</a>
                    </p>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">

  				<div class="row">
  					<div class="col-md-4">
  						<h2>Get In Touch</h2>
  					</div>
  				</div>
  				<form action="">
  					<div class="row">
  						<div class="col-md-12">
  							<div class="row">
  								<div class="col-md-6">
  									<div class="form-group">
  										<input type="text" class="form-control" placeholder="Name">
  									</div>
  									<div class="form-group">
  										<input type="text" class="form-control" placeholder="Email">
  									</div>
  									<div class="form-group">
  										<input type="text" class="form-control" placeholder="Phone">
  									</div>
  								</div>
  								<div class="col-md-6">
  									<div class="form-group">
  										<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
  									</div>
  									<div class="form-group">
  										<input type="submit" class="btn btn-primary btn-md" value="Send Message">
  									</div>
  								</div>

  							</div>
  						</div>

  					</div>
  				</form>
  			</div>

        {{-- Mapbbox map --}}

        <div class="container">
            <div id='map' style='max-width: 100%; max-height: 500px;'></div>
        </div>


        <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoicm9jcGVsaWNhbiIsImEiOiJjanN3N3lzZXQwN3BqNDNvZmYwM2hybWd6In0.flGOgYQ1ae6VnI00gUoL5A';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
            center: [2.22102, 48.80601], // starting position [lng, lat]
            zoom: 11 // starting zoom
        });


        var marker = new mapboxgl.Marker({
            color: "#006633",
            draggable: true
          }).setLngLat([2.22102, 48.80601])
          .addTo(map);
        </script>








@endsection
