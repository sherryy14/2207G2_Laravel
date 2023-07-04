@extends('template.section')
@push('title')
    <title>Home</title>
@endpush

@section('section')
    


<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/banner1.jpg" class="d-block w-100" alt="..." height="450">
      </div>
      <div class="carousel-item">
        <img src="images/banner2.jpg" class="d-block w-100" alt="..." height="450">
      </div>
      <div class="carousel-item">
        <img src="images/banner3.jpg" class="d-block w-100" alt="..." height="450">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

@endsection