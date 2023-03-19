@extends('frontend.master.post_master')

@section('content')

<div class="main-wrapperX container">
    @if($list->post_type == 'Want')
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="slider-for d1">
            @if ($list->user->photo == null )
                @if($list->user->gender == 'Male' )
                <img src="{{asset('public/man-dummy.png') }}" class=" mx-auto img-img" alt="" srcset="">
                @else
                <img src="{{asset('public/dummy-female.jpg') }}" class=" mx-auto img-img" alt="" srcset="">
                @endif
                @else
                <img src="{{asset('public/uploads/registers') }}/{{($list->user->photo)}}" class=" mx-auto img-img" alt="" srcset="" id="test">
                </a>
                @endif
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 product-div-right">
            <div>
                <span class="product-name">
                    {{$list->title}}
                </span>
                <div class=" ">
                    <span> <strong>Post For : </strong>{{$list->post_type}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Spot Area : </strong>{{$list->floor_area}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Road Width : </strong>{{$list->road_width}}</span>
                </div>
                <div class=" ">
                    <span> <strong>available From:</strong> {{$list->date}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Price:</strong> {{$list->price}} / Month</span>
                </div>
            </div>
            <br>

            <p class="product-description">
                <span class="fw-bold mb-2">Description:</span> {{$list->description}}
            </p>
            <p class="product-description">
                <span class="fw-bold mb-2">Video Link:</span> {{$list->video}}
            </p>

           
            @if(Auth::user())
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                <i class="far fa-address-book mt-1 me-1"></i>View Address
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body d-flex justify-content-between align-items-center">
                            <h4>Address : {{$list->address}} </h4>
                            <button type="button" class="btn btn-sm btn-primary-outline copy-button p-1" >Copy</button>
                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#call">
                   <i class="fas fa-phone"></i> Call
            </button>
            <!-- Call Modal -->
            <div class="modal fade" id="call" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body d-flex justify-content-between align-items-center">
                            <span>Contact Number :</span><h4> {{$list->phone}} </h4>  
                            <button type="button" class="btn btn-sm btn-primary-outline copy-button p-1" >Copy</button>
                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="far fa-address-book mt-1 me-1"></i>View Address
                </button>
                <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#call">
                   <i class="fas fa-phone"></i> Call
                </button>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">
                            <div class="modal-body p-4">
                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                <h3 class="font-weight-bold"><a href="{{url('/#login')}}"> <i class="fa-solid fa-circle-exclamation me-3"></i>Login First...! </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                

                <!--Call Modal -->
                <div class="modal fade" id="call" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">
                            <div class="modal-body p-4">
                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                <h3 class="font-weight-bold"><a href="{{url('/#login')}}"> <i class="fa-solid fa-circle-exclamation me-3"></i>Login First...! </a></h3>
                            </div>
                        </div>
                    </div>
                </div> 
            @endif

            <!-- <div class="btn-groups d-flex flex-lg-row flex-md-row flex-sm-column flex-column">
                <button type="button" class="btn btn-primary text-white rounded-pill  me-2 mt-2">
                    <i class="fas fa-shopping-cart"></i>
                    Add to My Shortlist
                </button>
                <button type="button" onclick="location.href='tel:{{$list->phone}}'" class="btn btn-dark rounded-pill text-white me-2 mt-sm-2 mt-2">
                    <i class="fas fa-phone"></i>
                    Call
                </button>
            </div> -->
            <h2 class="amenities">Amenities</h2>
            <div class="icon1 flex-wrap">
                @if($list->electricity == null)
                <div class="d-none">
                    <i class="fas fa-tools">
                    </i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-bolt"></i>
                    </i>
                    <h6>Electricity</h6>

                </div>
                @endif
                @if($list->gas == null)
                <div class="d-none">
                    <i class="fas fa-tools">
                    </i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fa-solid fa-fire"></i>
                    <h6>Gas</h6>

                </div>
                @endif
                @if($list->water == null)
                <div class="d-none">
                    <i class="fas fa-tools">
                    </i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-water">
                    </i>
                    <h6>Water</h6>

                </div>
                @endif
                @if($list->lift == null)
                <div class="d-none">
                    <i class="fas fa-elevator"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-elevator"></i>
                    <h6>Lift</h6>
                </div>
                @endif

                @if($list->shed == null)
                <div class="d-none">
                    <i class="fas fa-umbrella-beach"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-umbrella-beach"></i>
                    <h6>Shed</h6>
                </div>
                @endif
                @if($list->change_room == null)
                <div class="d-none">
                    <i class="fas fa-person-booth"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-person-booth"></i>
                    <h6>Changing Room</h6>
                </div>
                @endif

                @if($list->generator == null)
                <div class="d-none">
                    <i class="fas fa-soap"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fa-solid fa-car-battery"></i>
                    <h6>Generator</h6>
                </div>
                @endif

                @if($list->dining == null)
                <div class="d-none">
                    <i class="fas fa-tools">
                    </i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-utensils"></i>
                    <h6>Dining Facility</h6>

                </div>
                @endif

                @if($list->toilet == null)
                <div class="d-none">
                    <i class="fas fa-toilet"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-toilet"></i>
                    <h6>Toilet</h6>
                </div>
                @endif

                @if($list->parking == null)
                <div class="d-none">
                    <i class="fas fa-parking"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-parking"></i>
                    <h6>Parking</h6>
                </div>
                @endif
            </div>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="slider-for d1">
                @if($list->photo == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/shootings/'.$list->photo)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/shootings/'.$list->photo)}}" alt="">
                </a>
                @endif
                @if($list->photo1 == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/shootings/'.$list->photo1)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/shootings/'.$list->photo1)}}" alt="">
                </a>
                @endif
                @if($list->photo2 == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/shootings/'.$list->photo2)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/shootings/'.$list->photo2)}}" alt="">
                </a>
                @endif
                @if($list->photo3 == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/shootings/'.$list->photo3)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/shootings/'.$list->photo3)}}" alt="">
                </a>
                @endif
                @if($list->photo4 == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/shootings/'.$list->photo4)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/shootings/'.$list->photo4)}}" alt="">
                </a>
                @endif
                @if($list->photo5 == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/shootings/'.$list->photo5)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/shootings/'.$list->photo5)}}" alt="">
                </a>
                @endif
                @if($list->photo6 == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/shootings/'.$list->photo6)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/shootings/'.$list->photo6)}}" alt="">
                </a>
                @endif
            </div>
            <div class="container">
                <div class="slider-nav mt-2">
                    @if($list->photo == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/shootings/'.$list->photo)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo1 == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/shootings/'.$list->photo1)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo2 == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/shootings/'.$list->photo2)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo3 == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/shootings/'.$list->photo3)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo4 == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/shootings/'.$list->photo4)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo5 == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/shootings/'.$list->photo5)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo6 == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/shootings/'.$list->photo6)}}" alt="">
                    </a>
                    @endif

                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 product-div-right">
            <div>
                <span class="product-name">
                    {{$list->title}}
                </span>
                <div class=" ">
                    <span> <strong>Post For : </strong>{{$list->post_type}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Spot Area : </strong>{{$list->floor_area}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Road Width : </strong>{{$list->road_width}}</span>
                </div>
                <div class=" ">
                    <span> <strong>available From:</strong> {{$list->date}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Price:</strong> {{$list->price}} / Month</span>
                </div>
            </div>
            <br>

            <p class="product-description">
                <span class="fw-bold mb-2">Description:</span> {{$list->description}}
            </p>
            <p class="product-description">
                <span class="fw-bold mb-2">Video Link:</span> {{$list->video}}
            </p>

            
            @if(Auth::user())
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                <i class="far fa-address-book mt-1 me-1"></i>View Address
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body d-flex justify-content-between align-items-center">
                            <h4>Address : {{$list->address}} </h4>
                            <button type="button" class="btn btn-sm btn-primary-outline copy-button p-1" >Copy</button>
                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#call">
                   <i class="fas fa-phone"></i> Call
            </button>
            <!-- Call Modal -->
            <div class="modal fade" id="call" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body d-flex justify-content-between align-items-center">
                            <span>Contact Number :</span><h4> {{$list->phone}} </h4>  
                            <button type="button" class="btn btn-sm btn-primary-outline copy-button p-1" >Copy</button>
                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="far fa-address-book mt-1 me-1"></i>View Address
                </button>
                <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#call">
                   <i class="fas fa-phone"></i> Call
                </button>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">
                            <div class="modal-body p-4">
                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                <h3 class="font-weight-bold"><a href="{{url('/#login')}}"> <i class="fa-solid fa-circle-exclamation me-3"></i>Login First...! </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                

                <!--Call Modal -->
                <div class="modal fade" id="call" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">
                            <div class="modal-body p-4">
                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                <h3 class="font-weight-bold"><a href="{{url('/#login')}}"> <i class="fa-solid fa-circle-exclamation me-3"></i>Login First...! </a></h3>
                            </div>
                        </div>
                    </div>
                </div> 
            @endif

            <!-- <div class="btn-groups d-flex flex-lg-row flex-md-row flex-sm-column flex-column">
                <button type="button" class="btn btn-primary text-white rounded-pill  me-2 mt-2">
                    <i class="fas fa-shopping-cart"></i>
                    Add to My Shortlist
                </button>
                <button type="button" onclick="location.href='tel:{{$list->phone}}'" class="btn btn-dark rounded-pill text-white me-2 mt-sm-2 mt-2">
                    <i class="fas fa-phone"></i>
                    Call
                </button>
            </div> -->
            <h2 class="amenities">Amenities</h2>
            <div class="icon1 flex-wrap">
                @if($list->electricity == null)
                <div class="d-none">
                    <i class="fas fa-tools">
                    </i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-bolt"></i>
                    </i>
                    <h6>Electricity</h6>

                </div>
                @endif
                @if($list->gas == null)
                <div class="d-none">
                    <i class="fas fa-tools">
                    </i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fa-solid fa-fire"></i>
                    <h6>Gas</h6>

                </div>
                @endif
                @if($list->water == null)
                <div class="d-none">
                    <i class="fas fa-tools">
                    </i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-water">
                    </i>
                    <h6>Water</h6>

                </div>
                @endif
                @if($list->lift == null)
                <div class="d-none">
                    <i class="fas fa-elevator"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-elevator"></i>
                    <h6>Lift</h6>
                </div>
                @endif

                @if($list->shed == null)
                <div class="d-none">
                    <i class="fas fa-umbrella-beach"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-umbrella-beach"></i>
                    <h6>Shed</h6>
                </div>
                @endif
                @if($list->change_room == null)
                <div class="d-none">
                    <i class="fas fa-person-booth"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-person-booth"></i>
                    <h6>Changing Room</h6>
                </div>
                @endif

                @if($list->generator == null)
                <div class="d-none">
                    <i class="fas fa-soap"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fa-solid fa-car-battery"></i>
                    <h6>Generator</h6>
                </div>
                @endif

                @if($list->dining == null)
                <div class="d-none">
                    <i class="fas fa-tools">
                    </i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-utensils"></i>
                    <h6>Dining Facility</h6>

                </div>
                @endif

                @if($list->toilet == null)
                <div class="d-none">
                    <i class="fas fa-toilet"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-toilet"></i>
                    <h6>Toilet</h6>
                </div>
                @endif

                @if($list->parking == null)
                <div class="d-none">
                    <i class="fas fa-parking"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-parking"></i>
                    <h6>Parking</h6>
                </div>
                @endif
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
