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
    <h2>User list</h2>
    <!-- Button trigger modal -->
</div>

@include('admin.include.errors')

<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Unique Id</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Mobile</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
            <th scope="col">View</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $key=>$user)
        @if($user->role_id == 2)
        <tr>
            <th scope="row">{{$key ++}}</th>
            <th scope="row">{{$user->unique_id}}</th>
            <td>
                @if ($user->photo == null )
                @if($user->gender == 'Male' )
                <img src="{{asset('/man-dummy.png') }}" class="rounded-circle mx-auto img-img" alt="" srcset="" width="32" height="32">
                @else
                <img src="{{asset('/dummy-female.jpg') }}" class="rounded-circle mx-auto img-img" alt="" srcset="" width="32" height="32">
                @endif
                @else
                <img src="{{asset('public/uploads/registers/'.$user->photo)}}" class="rounded-circle mx-auto img-img" alt="" srcset="" width="32" height="32">
                @endif
            </td>
            <td>{{$user->name}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->gender}}</td>
            <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$user->id}}">
                    Details
                </button>

                <!-- Modal -->
                <div class="modal fade userListModal" id="exampleModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    User Info (
                                    @if($user->admin_verify == 0)
                                    <span class="text-warning">
                                        Not Verified
                                    </span>
                                    @endif
                                    @if($user->admin_verify == 1)
                                    <span class="text-success">
                                        Verified
                                    </span>
                                    @endif
                                    @if($user->admin_verify == 2)
                                    <span class="text-danger">
                                        Suspended
                                    </span>
                                    @endif )
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row ">
                                    <div class="col-6">
                                        <p class="">
                                            <span class="fw-bold">
                                                Father Name:
                                            </span>
                                            @if($user->father_name != null)
                                            <span class="fw-regular">
                                                {{$user->father_name}}
                                            </span>
                                            @else
                                            <span class="fw-regular">
                                                N/A
                                            </span>
                                            @endif
                                        </p>
                                        <p class="">
                                            <span class="fw-bold">
                                                Mother Name:
                                            </span>
                                            @if($user->mother_name != null)
                                            <span class="fw-regular">
                                                {{$user->mother_name}}
                                            </span>
                                            @else
                                            <span class="fw-regular">
                                                N/A
                                            </span>
                                            @endif
                                        </p>
                                        <p class="">
                                            <span class="fw-bold">
                                                Birth:
                                            </span>
                                            @if($user->date_of_birth != null)
                                            <span class="fw-regular">
                                                {{$user->date_of_birth}}
                                            </span>
                                            @else
                                            <span class="fw-regular">
                                                N/A
                                            </span>
                                            @endif
                                        </p>
                                        <p class="">
                                            <span class="fw-bold">
                                                Nationality:
                                            </span>
                                            @if($user->nationality != null)
                                            <span class="fw-regular">
                                                {{$user->nationality}}
                                            </span>
                                            @else
                                            <span class="fw-regular">
                                                N/A
                                            </span>
                                            @endif
                                        </p>
                                        <p class="">
                                            <span class="fw-bold">
                                                Address:
                                            </span>
                                            @if($user->address != null)
                                            <span class="fw-regular">
                                                {{$user->address}}
                                            </span>
                                            @else
                                            <span class="fw-regular">
                                                N/A
                                            </span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="col-6 d-flex justify-content-around">
                                        <div class="admin_nid">
                                            <p class="fw-bold">NID Front:</p>
                                            @if($user->n_photo1 != null)
                                            <a href="{{asset('public/uploads/registers/'.$user->n_photo1)}}" data-fancybox="demo">
                                                <img width="200" height="200" src="{{asset('public/uploads/registers/'.$user->n_photo1)}}" data-bs-dismiss="modal" alt="">
                                            </a>
                                            @else
                                            <span class="fw-regular">
                                                N/A
                                            </span>
                                            @endif
                                        </div>
                                        <div class="admin_nid">
                                            <p class="fw-bold">NID Back:</p>
                                            @if($user->n_photo2 != null)
                                            <a href="{{asset('public/uploads/registers/'.$user->n_photo2)}}" data-fancybox="demo">
                                                <img width="200" height="200" src="{{asset('public/uploads/registers/'.$user->n_photo2)}} " data-bs-dismiss="modal" alt="">
                                            </a>
                                            @else
                                            <span class="fw-regular">
                                                N/A
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                @if($user->admin_verify == 0)
                                want to make him/her <a class="btn btn btn-success" href="{{route('user_status',[$user->id])}}" role="button">Verify ?</a>
                                @endif
                                @if($user->admin_verify == 1)
                                want to make him/her <a class="btn btn btn-danger" href="{{route('user_status',[$user->id])}}" role="button">Suspended ?</a>
                                @endif
                                @if($user->admin_verify == 2)
                                want to make him/her <a class="btn btn btn-success" href="{{route('user_status',[$user->id])}}" role="button">Verify ?</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                @if($user->admin_verify == 0)
                <span class="text-warning">
                    Not Verfied
                </span>
                @endif
                @if($user->admin_verify == 1)
                <span class="text-success">
                    Verfied
                </span>
                @endif
                @if($user->admin_verify == 2)
                <span class="text-danger">
                    Suspended
                </span>
                @endif
            </td>
        </tr>
        @endif
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
