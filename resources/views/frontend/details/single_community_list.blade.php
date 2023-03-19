@extends('frontend.master.post_master')

@section('content')

<div class="main-wrapperX container">
    @if($list->post_type== 'Want')
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
                <br>
                <div class=" ">
                    <span> <strong>Floor Area : </strong>{{$list->floor_size}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Floor Level : </strong>{{$list->floor_level}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Decore : </strong>{{$list->interior_condition}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Maximum Allocation : </strong>{{$list->seat}} people</span>
                </div>
                <div class=" ">
                    <span> <strong>Road width : </strong>{{$list->road_width}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Available From:</strong> {{$list->date}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Price:</strong> {{$list->price}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Additional Charge:</strong> {{$list->s_charge}}</span>
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
                @if($list->electricity != null)
                <div class="m-2">
                    <i class="fas fa-bolt"></i>
                    </i>
                    <h6>Electricity</h6>
                </div>
                @endif
                @if($list->gas != null)
                <div class="m-2">
                    <i class="fa-solid fa-fire"></i>
                    <h6>Gas</h6>
                </div>
                @endif
                @if($list->water != null)
                <div class="m-2">
                    <i class="fas fa-water">
                    </i>
                    <h6>Water</h6>
                </div>
                @endif
                @if($list->lift != null)
                <div class="m-2">
                    <i class="fas fa-elevator"></i>
                    <h6>Lift</h6>
                </div>
                @endif

                @if($list->generator != null)
                <div class="m-2">
                    <i class="fa-solid fa-car-battery"></i>
                    <h6>Generator</h6>
                </div>
                @endif

                @if($list->ac != null)
                <div class="m-2">
                    <i class="fas fa-wind"></i>
                    <h6>AC</h6>
                </div>
                @endif
                @if($list->wifi != null)
                <div class="m-2">
                    <i class="fas fa-wifi"></i>
                    <h6>Wifi</h6>
                </div>
                @endif
                @if($list->fire_safety != null)
                <div class="m-2">
                    <i class="fas fa-door-open"></i>
                    <h6>Fire Exit</h6>
                </div>
                @endif

                @if($list->parking != null)

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
                @if($list->photo != null)
                <a data-fancybox="gallery" href="{{asset('public/uploads/communities/'.$list->photo)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/communities/'.$list->photo)}}" alt="">
                </a>
                @endif
                @if($list->photo1 != null)
                <a data-fancybox="gallery" href="{{asset('public/uploads/communities/'.$list->photo1)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/communities/'.$list->photo1)}}" alt="">
                </a>
                @endif
                @if($list->photo2 != null)
                <a data-fancybox="gallery" href="{{asset('public/uploads/communities/'.$list->photo2)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/communities/'.$list->photo2)}}" alt="">
                </a>
                @endif
                @if($list->photo3 != null)
                <a data-fancybox="gallery" href="{{asset('public/uploads/communities/'.$list->photo3)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/communities/'.$list->photo3)}}" alt="">
                </a>
                @endif
                @if($list->photo4 != null)
                <a data-fancybox="gallery" href="{{asset('public/uploads/communities/'.$list->photo4)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/communities/'.$list->photo4)}}" alt="">
                </a>
                @endif
                @if($list->photo5 != null)
                <a data-fancybox="gallery" href="{{asset('public/uploads/communities/'.$list->photo5)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/communities/'.$list->photo5)}}" alt="">
                </a>
                @endif
                @if($list->photo6 != null)
                <a data-fancybox="gallery" href="{{asset('public/uploads/communities/'.$list->photo6)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/communities/'.$list->photo6)}}" alt="">
                </a>
                @endif
            </div>
            <div class="container">
                <div class="slider-nav mt-2">
                    @if($list->photo != null)

                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/communities/'.$list->photo)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo1 != null)

                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/communities/'.$list->photo1)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo2 != null)

                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/communities/'.$list->photo2)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo3 != null)

                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/communities/'.$list->photo3)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo4 != null)

                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/communities/'.$list->photo4)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo5 != null)

                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/communities/'.$list->photo5)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo6 != null)

                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/communities/'.$list->photo6)}}" alt="">
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
                <br>
                <div class=" ">
                    <span> <strong>Floor Area : </strong>{{$list->floor_size}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Floor Level : </strong>{{$list->floor_level}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Decore : </strong>{{$list->interior_condition}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Maximum Allocation : </strong>{{$list->seat}} people</span>
                </div>
                <div class=" ">
                    <span> <strong>Road width : </strong>{{$list->road_width}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Available From:</strong> {{$list->date}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Price:</strong> {{$list->price}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Additional Charge:</strong> {{$list->s_charge}}</span>
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
                @if($list->electricity != null)
                <div class="m-2">
                    <i class="fas fa-bolt"></i>
                    </i>
                    <h6>Electricity</h6>
                </div>
                @endif
                @if($list->gas != null)
                <div class="m-2">
                    <i class="fa-solid fa-fire"></i>
                    <h6>Gas</h6>
                </div>
                @endif
                @if($list->water != null)
                <div class="m-2">
                    <i class="fas fa-water">
                    </i>
                    <h6>Water</h6>
                </div>
                @endif
                @if($list->lift != null)
                <div class="m-2">
                    <i class="fas fa-elevator"></i>
                    <h6>Lift</h6>
                </div>
                @endif

                @if($list->generator != null)
                <div class="m-2">
                    <i class="fa-solid fa-car-battery"></i>
                    <h6>Generator</h6>
                </div>
                @endif

                @if($list->ac != null)
                <div class="m-2">
                    <i class="fas fa-wind"></i>
                    <h6>AC</h6>
                </div>
                @endif
                @if($list->wifi != null)
                <div class="m-2">
                    <i class="fas fa-wifi"></i>
                    <h6>Wifi</h6>
                </div>
                @endif
                @if($list->fire_safety != null)
                <div class="m-2">
                    <i class="fas fa-door-open"></i>
                    <h6>Fire Exit</h6>
                </div>
                @endif

                @if($list->parking != null)

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
