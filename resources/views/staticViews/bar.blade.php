@extends('layouts.app')



@section('content')

<x-article-heading title="Have a Drink and Eat" />
<div class="fh5co-narrow-content">

  <x-about-content :category="$category" />


</div>




@endsection
