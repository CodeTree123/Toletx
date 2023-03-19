@extends('admin.admin_master')
@push('custom-css')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
@endpush

<style>
    .fancybox__container {
        z-index: 1200;
    }
</style>

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Building list</h2>
    <!-- Button trigger modal -->
</div>

@include('admin.include.errors')

<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>SL</th>
            <th>User id</th>
            <th>From</th>
            <th>price</th>
            <th>Service Charge</th>
            <th>Building type</th>
            <th>Building Size</th>
            <th>Address</th>
            <th>Details</th>
        </tr>
    </thead>
    <tbody>
        @foreach($buildings as $key => $building)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$building->back_user->unique_id}}</td>
            <td>{{ Carbon\Carbon::parse($building->date)->format('d/m/Y') }}</td>
            <td>{{$building->price}}</td>
            <td>{{$building->s_charge}}</td>
            <td>{{$building->t_build}}</td>
            <td>{{$building->building_size}}</td>
            <td>{{$building->address}}</td>
            <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$building->id}}">
                    Details
                </button>

                <!-- Modal -->
                <div class="modal fade userbuildingModal" id="exampleModal{{$building->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    building Details ( Title : {{$building->building_name}} )
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row ">
                                    <div class="col-12">
                                        <div class="main-wrapperX container">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <h3>Amenities</h3>
                                                    <div class="">
                                                        <div class="icon1 admin_posted_amnities_wrapper position-relative d-flex flex-wrap border shadow p-3">
                                                            <div class="m-2 p-2 amnity_box text-center border">
                                                                @if($building->electricity != null)
                                                                <i class="fas fa-bolt"></i>
                                                                </i>
                                                                <h6>Electricity</h6>
                                                                @endif
                                                            </div>
                                                            <div class="m-2 p-2 amnity_box text-center border">
                                                                @if($building->gas != null)
                                                                <i class="fa-solid fa-fire"></i>
                                                                <h6>Gas</h6>
                                                                @endif
                                                            </div>
                                                            <div class="m-2 p-2 amnity_box text-center border">
                                                                @if($building->water != null)
                                                                <i class="fas fa-water">
                                                                </i>
                                                                <h6>Water</h6>
                                                                @endif
                                                            </div>
                                                            <div class="m-2 p-2 amnity_box text-center border">
                                                                @if($building->lift != null)
                                                                <i class="fas fa-elevator"></i>
                                                                <h6>Lift</h6>
                                                                @endif
                                                            </div>
                                                            <div class="m-2 p-2 amnity_box text-center border">
                                                                @if($building->generator != null)
                                                                <i class="fa-solid fa-car-battery"></i>
                                                                <h6>Generator</h6>
                                                                @endif
                                                            </div>
                                                            <div class="m-2 p-2 amnity_box text-center border">
                                                                @if($building->fire_exit != null)
                                                                <i class="fas fa-door-open"></i>
                                                                <h6>Fire Exit</h6>
                                                                @endif
                                                            </div>
                                                            <div class="m-2 p-2 amnity_box text-center border">
                                                                @if($building->parking != null)
                                                                <i class="fas fa-parking"></i>
                                                                <h6>Parking</h6>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class=" mt-3  border shadow">
                                                            <p class=" p-3"><span class="fw-bold">Floor Size :</span> <span>{{$building->floor_size}}</span></p>
                                                            <p class=" p-3"><span class="fw-bold">No of Floor :</span> <span>{{$building->floor}}</span></p>
                                                            <p class=" p-3"><span class="fw-bold">Road Width :</span> <span>{{$building->floor_size}}</span></p>
                                                            <div class="d-flex p-3">
                                                                <p class="me-3"><span class="fw-bold">Description:</span> </p>
                                                                <textarea readonly name="" id="" cols="50" rows="7">{{$building->description}}</textarea>
                                                            </div>
                                                            <p class="my-2 p-3"><span class="fw-bold">Youtube Link:</span> <span><a href="{{$building->video}}" target="_blank">{{$building->video}}</a></span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 product-div-right">
                                                    <h3>Images</h3>

                                                    <div class="border shadow">
                                                        <img data-fancybox="gallery" class="img-fluid admin_posted_images m-2" src="{{ asset('public/uploads/buildings/'.$building->photo) }}" alt="">
                                                        <img data-fancybox="gallery" class="img-fluid admin_posted_images m-2" src="{{ asset('public/uploads/buildings/'.$building->photo1) }}" alt="">
                                                        <img data-fancybox="gallery" class="img-fluid admin_posted_images m-2" src="{{ asset('public/uploads/buildings/'.$building->photo2) }}" alt="">
                                                        <img data-fancybox="gallery" class="img-fluid admin_posted_images m-2" src="{{ asset('public/uploads/buildings/'.$building->photo3) }}" alt="">
                                                        <img data-fancybox="gallery" class="img-fluid admin_posted_images m-2" src="{{ asset('public/uploads/buildings/'.$building->photo4) }}" alt="">
                                                        <img data-fancybox="gallery" class="img-fluid admin_posted_images m-2" src="{{ asset('public/uploads/buildings/'.$building->photo5) }}" alt="">
                                                        <img data-fancybox="gallery" class="img-fluid admin_posted_images m-2" src="{{ asset('public/uploads/buildings/'.$building->photo6) }}" alt="">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection



@push('custom-scripts')
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<script>
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        autoplay: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        arrows: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },

            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]

    });
</script>
@endpush
