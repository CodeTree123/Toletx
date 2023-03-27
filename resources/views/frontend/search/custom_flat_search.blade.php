@extends('frontend.master.search_master')
@section('content')
<div class="col-lg-8 col-md-8 col-sm-12 col-12 slider-center slide-show ">
  <div class="container">
    <a class="col-small d-flex flex-column justify-content-center align-items-center me-2 p-3 mb-2 text-center " href="{{route('flat')}}" style="width:150px;">
      <span class="icon-flat service_item "></span>
      <span class="service_item_name"> Flat</span>
    </a>
  </div>
  <div class="items">

    @if($array->isNotEmpty())
    @foreach($array as $arrays)
    @if($arrays->post_type == 'Rent')
    <div class="card ml-3 mr-4 slick-slider-card" style="width: 12rem">
      <img src="{{ asset('public/uploads/flats') }}/{{ $arrays->photo }}" class="card-img-top" alt="..." />
      <div class="card-body main-slider-body main-slider-body">
        <h5 class="card-title main-slider">{{ $arrays->price }}/Night</h5>
        <p class="card-text main-slider">{{ $arrays->flat_size }}</p>
        <p class="card-text main-slider">{{ $arrays->address }}</p>
        <span class=" main-slider">
          <i class="fas fa-shower"></i>
          <i class="fas fa-wifi"></i>
          <i class="fas fa-smoking"></i>
        </span>
        <p class="mt-3 main-slider">
          <i class="fas fa-border-all"></i>
          <span>3600 sqft</span>
        </p>

        <a href="{{ url('/flat/details/') }}/{{ $arrays->id }}" class="btn btn btn-custom-color2 check-detail mt-2  ">Check Details</a>


      </div>
    </div>
    @else
    <div class="card ml-3 mr-4 slick-slider-card" style="width: 12rem">
      @if (auth()->user()->image == null )
      @if(auth()->user()->gender == 'Male' )
      <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
      @else
      <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
      @endif
      @else
      <img src="{{asset('public/uploads/registers') }}/{{(Auth::user()->image)}}" class="card-img-top" alt="...">
      @endif
      <!-- <img src="{{ asset('public/uploads/rooms') }}/{{ $arrays->photo }}"  /> -->
      <div class="card-body main-slider-body main-slider-body">
        <h5 class="card-title main-slider">{{ $arrays->price }}/Night</h5>
        <p class="card-text main-slider">{{ $arrays->title }}</p>
        <p class="card-text main-slider">{{ $arrays->address }}</p>
        <span class=" main-slider">
          <i class="fas fa-shower"></i>
          <i class="fas fa-wifi"></i>
          <i class="fas fa-smoking"></i>
        </span>
        <p class="mt-3 main-slider">
          <i class="fas fa-border-all"></i>
          <span>{{ $arrays->room_size }}</span>
        </p>
        <a href="{{ url('/room/details') }}/{{ $arrays->id }}" class="btn btn btn-custom-color2 check-detail mt-2  ">Check Details</a>
      </div>
    </div>
    @endif
    @endforeach
    @else
    <div>
      <h2>No posts found</h2>
    </div>
    @endif
  </div>
</div>
<!-- slider section -->
@endsection