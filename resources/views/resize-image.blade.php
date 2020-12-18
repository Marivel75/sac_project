@extends('layouts.app')


@section('content')

  <section style="padding-top: 60px;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="card-header">

          </div>
          <div class="card-body">
            <form class="" action="{{ route('image.resize') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="file">Choose Image</label>
                <input type="file" name="file" value="" class="form-control">
              </div>
              <button type="submit" name="button" class="btn btn-success">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
