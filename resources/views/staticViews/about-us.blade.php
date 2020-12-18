@extends('layouts.app')


@section('content')
  <x-article-heading title="Welcome" />

  <x-about-content :category="$category" />

  <div class="fh5co-narrow-content">
    <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Services & Facilities</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
          <div class="fh5co-icon">
            <i class="icon-plus-outline"></i>
          </div>
          <div class="fh5co-text">
            <h3>Sports facilities</h3>
            <p>Excellent and numerous sports facilities</p>
            <a class="btn btn-primary">Discover</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
          <div class="fh5co-icon">
            <i class="icon-wine"></i>
          </div>
          <div class="fh5co-text">
            <h3>Food & Drink</h3>
            <p>The Century Oak Bar, Sunday Brunches, dinner dances, barbecues...</p>
            <a class="btn btn-primary">Discover</a>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
          <div class="fh5co-icon">
            <i class="icon-paperplane"></i>
          </div>
          <div class="fh5co-text">
            <h3>Children</h3>
            <p>Children's playgrounds, coaching sessions and parties for all ages</p>
            <a class="btn btn-primary">Discover</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
          <div class="fh5co-icon">
            <i class="icon-globe"></i>
          </div>
          <div class="fh5co-text">
            <h3>International</h3>
            <p>Made up of both permanent residents and expatriates.</p>
            <a class="btn btn-primary">Discover</a>
          </div>
        </div>
      </div>

    </div>
    <hr class="divider">
  </div>

  <div class="fh5co-narrow-content">
    <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">General Information</h2>
    <div class="row">
      <div class="col-md-12">
        <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
          <div class="fh5co-text">
            <p>The Club is run by a Management Committee which is appointed at each Annual General Meeting. The clubhouse is the responsibility of the House Committee and each Sports Section has its own committee.   It is a tradition of the Standard Athletic Club that it is managed by volunteer members on behalf of all the members. If you feel you can devote some time to the Club, you will be more than welcome. This is also an excellent way to meet other members.</p>
          </div>
        </div>
      </div>
    </div>
    <hr class="divider">
  </div>

  <div class="fh5co-narrow-content">
    <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Subscriptions</h2>
    <div class="row">
      <div class="col-md-12">
        <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
          <div class="fh5co-text">
            <p>Members pay an annual subscription fee and a one-off joining fee which is refunded pro-rata if you leave the Club within three years. There are reduced rates for students, young adults, and children. Please check the subscriptions page or ring the Secretary for details.</p>
          </div>
        </div>
      </div>
    </div>
    <hr class="divider">
  </div>

  <div class="fh5co-narrow-content">
    <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">How to find out more</h2>
    <div class="row">
      <div class="col-md-12">
        <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
          <div class="fh5co-text">
            <p>Feel free to contact the Office on 01 46 26 16 09 if you require any additional information. You are welcome to come and visit the Club on any weekend at teatime (4.30pm) - Be our Guest- just let the Office know in advance so they can make sure there is someone ready to welcome you. They can also advise you of the best route from your home. Directions to how to get to us can be found on the Directions to the Standard Athletic Club page.</p>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection
