@extends('frontend.master.post_master')

@section('content')
<div class="container post_container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                @if($list->post_type == 'Rent')
                <form method="POST" action="{{ route('hostel_update',$list->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3 ">
                            <label for="hostel_post_rented" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="" type="text" class="form-control" id="hostel_post_rented" placeholder="Enter Post Title" required>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="hostel_name_rented" class="form-label me-2 fw-bold">Hostel Name</label>
                            <input name="hostel_name" value="{{$list->hostel_name}}" type="text" class="form-control" id="hostel_name_rented" placeholder="Enter Hostel Name">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="date_rented" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" type="date" class="form-control" id="date_rented" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="phone_rented" class="form-label me-2 fw-bold">Mobile</label>
                            <input type="number" name="phone" value="{{$list->phone}}" class="form-control">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="price_rented" class="form-label me-2 fw-bold">Rent</label>
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <div class="input-group">
                                        <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_rented" placeholder="Enter Price">
                                    </div>
                                </div>
                                <div class="col-1">
                                    <span class="text-light fs-3">/</span>
                                </div>
                                <div class="col-7 ps-0">
                                    <div class="input-group">
                                        <select class="form-select form-select-md" aria-label=".form-select-lg example" name="per_price">
                                            <option selected hidden>Choose Rent Type</option>
                                            <option value="hour" @selected(old('per_price',$list->per_price) == "hour")>Hour</option>
                                            <option value="day" @selected(old('per_price',$list->per_price) == "day")> Day</option>
                                            <option value="night" @selected(old('per_price',$list->per_price) == "night")> Only Night</option>
                                            <option value="week" @selected(old('per_price',$list->per_price) == "week")> Week</option>
                                            <option value="month" @selected(old('per_price',$list->per_price) == "month")> Month</option>
                                            <option value="year" @selected(old('per_price',$list->per_price) == "year")> Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="s_charge_rented" class="form-label me-2 fw-bold">Service Charge</label>
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <div class="input-group">
                                        <input name="s_charge" value="{{$list->s_charge}}" type="number" class="form-control" id="s_charge_rented" placeholder="Enter Service Charge">
                                    </div>
                                </div>
                                <div class="col-1">
                                    <span class="text-light fs-3">/</span>
                                </div>
                                <div class="col-7 ps-0">
                                    <div class="input-group">
                                        <select class="form-select form-select-md" aria-label=".form-select-lg example" name="s_per_price">
                                            <option selected hidden>Choose Rent Type</option>
                                            <option value="hour" @selected(old('s_per_price',$list->s_per_price) == "hour")>Hour</option>
                                            <option value="day" @selected(old('s_per_price',$list->s_per_price) == "day")> Day</option>
                                            <option value="night" @selected(old('s_per_price',$list->s_per_price) == "night")> Only Night</option>
                                            <option value="week" @selected(old('s_per_price',$list->s_per_price) == "week")> Week</option>
                                            <option value="month" @selected(old('s_per_price',$list->s_per_price) == "month")> Month</option>
                                            <option value="year" @selected(old('s_per_price',$list->s_per_price) == "year")> Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="room_size_rented" class="form-label me-2 fw-bold">Room Size</label>
                            <input name="room_size" value="{{$list->room_size}}" type="text" class="form-control" id="room_size_rented" placeholder="Enter Room Size">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="room_type_rented" class="form-label me-2 fw-bold">Room Type</label>
                            <select id="room_type_rented" class="form-select" name="room_type" required>
                                <option value="">Choose...</option>
                                <option value="Single bed" {{$list->room_type == "Single bed" ? 'selected':''}}>Single bed</option>
                                <option value="Double bed" {{$list->room_type == "Double bed" ? 'selected':''}}>Double bed</option>
                                <option value="Family bed" {{$list->room_type == "Family bed" ? 'selected':''}}>Family bed</option>
                                <option value="Couple bed" {{$list->room_type == "Couple bed" ? 'selected':''}}>Couple bed</option>
                                <option value="Twin bed" {{$list->room_type == "Twin bed" ? 'selected':''}}>Twin bed</option>
                                <option value="Bunk bed" {{$list->room_type == "Bunk bed" ? 'selected':''}}>Bunk bed</option>
                                <option value="Honeymoon Suite" {{$list->room_type == "Honeymoon Suite" ? 'selected':''}}>Honeymoon Suite</option>
                                <option value="Presidential Suite" {{$list->room_type == "Presidential Suite" ? 'selected':''}}>Presidential Suite</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="address_rented" class="form-label me-2 fw-bold">Address</label>
                            <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_rented" placeholder="Enter Address">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="description_rented" class="form-label me-2 fw-bold">Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_rented" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <h2 class="fw-bold mb-3">Amenities</h2>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="furnished_rented" name="furnished" {{  ($list->furnished == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="furnished_rented">
                                    Furniture
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="attatched_toilet_rented" name="attached_toilet" {{  ($list->attached_toilet == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="attatched_toilet_rented">
                                    Attached Toilet
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="hot_water_rented" name="hot_water" {{  ($list->hot_water == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="hot_water_rented">
                                    Geyser
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="ac_rented" name="ac" {{  ($list->ac == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="ac_rented">
                                    A.C
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="dining_rented" name="dining" {{  ($list->dining == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="dining_rented">
                                    Dining Facilities
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="pool_rented" name="pool" {{  ($list->pool == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="pool_rented">
                                    Swimming Pool
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="generator_rented" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="generator_rented">
                                    Generator
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="gym_rented" name="gym" {{  ($list->gym == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="gym_rented">
                                    Gym
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="spa_rented" name="spa" {{  ($list->spa == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="spa_rented">
                                    Spa
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="sports_rented" name="sports" {{  ($list->sports == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="sports_rented">
                                    Sports Facilities
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="wifi_rented" name="wifi" {{  ($list->wifi == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="wifi_rented">
                                    Wifi
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="laundry_rented" name="laundry" {{  ($list->laundry == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="laundry_rented">
                                    Laundry
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="lift_rented" name="lift" {{  ($list->lift == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="lift_rented">
                                    Lift
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="parking_rented" name="parking" {{  ($list->parking == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="parking_rented">
                                    Parking
                                </label>
                            </div>

                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-12 p-2">
                            <h2 class="fw-bold mb-3">Gallery Section</h2>
                            <div class="row">
                                <div class="col">

                                    @if($list->photo == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/hostels/'.$list->photo)}}" alt="" srcset="" class="update_section_image img-fluid img-fluid">
                                    <div class="d-flex justify-content-between">
                                        <div class="input-group mt-2 update_section_file_input">
                                            <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <!-- <a href="{{route('image_delete',['Hostel',$list->id,'hostels','photo',$list->photo])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a> -->
                                    </div>
                                    @endif

                                    <label for="photo_Rent" class="d-block mt-2"> Main Image</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo1 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/hostels/'.$list->photo1)}}" alt="" srcset="" class="update_section_image img-fluid img-fluid">
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Hostel',$list->id,'hostels','photo1',$list->photo1])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo1_Rent" class="d-block mt-2 "> Photo 2</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo2 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/hostels/'.$list->photo2)}}" alt="" srcset="" class="update_section_image img-fluid img-fluid">
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Hostel',$list->id,'hostels','photo2',$list->photo2])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block mt-2"> Photo 3</label>

                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo3 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/hostels/'.$list->photo3)}}" alt="" srcset="" class="update_section_image img-fluid img-fluid">
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Hostel',$list->id,'hostels','photo3',$list->photo3])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block mt-2"> Photo 4</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo4 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/hostels/'.$list->photo4)}}" alt="" srcset="" class="update_section_image img-fluid img-fluid">
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Hostel',$list->id,'hostels','photo4',$list->photo4])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block mt-2"> Photo 5</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo5 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/hostels/'.$list->photo5)}}" alt="" srcset="" class="update_section_image img-fluid img-fluid">
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Hostel',$list->id,'hostels','photo5',$list->photo5])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block mt-2"> Photo 6</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo6 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/hostels/'.$list->photo6)}}" alt="" srcset="" class="update_section_image img-fluid img-fluid">
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Hostel',$list->id,'hostels','photo6',$list->photo6])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block mt-2"> Photo 7</label>
                                </div>
                            </div>
                        </div>
                        <div class="my-3 ">
                            <label for="video_rented" class="form-label me-2 fw-bold"> Youtube Link</label>
                            <input type="text" class="form-control" name="video" value="{{$list->video}}" id="video_rented" placeholder="  Youtube Link">
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary  my-2" type="submit">Update Rent Post</button>
                        </div>
                    </div>
                </form>
                @else
                <form action="{{route('hostel_update',$list->id)}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3 ">
                            <label for="hostel_post_wanted" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="" type="text" class="form-control" id="hostel_post_wanted" placeholder="Enter Post Title" required>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="hostel_name_wanted" class="form-label me-2 fw-bold">Hostel Name</label>
                            <input name="hostel_name" value="{{$list->hostel_name}}" type="text" class="form-control" id="hostel_name_wanted" placeholder="Enter Hostel Name">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="date_wanted" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" type="date" class="form-control" id="date_wanted" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="phone_wanted" class="form-label me-2 fw-bold">Mobile</label>
                            <input type="number" name="phone" value="{{$list->phone}}" class="form-control">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="price_wanted" class="form-label me-2 fw-bold">Rent</label>
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <div class="input-group">
                                        <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_wanted" placeholder="Enter Price">
                                    </div>
                                </div>
                                <div class="col-1">
                                    <span class="text-light fs-3">/</span>
                                </div>
                                <div class="col-7 ps-0">
                                    <div class="input-group">
                                        <select class="form-select form-select-md" aria-label=".form-select-lg example" name="per_price">
                                            <option selected hidden>Choose Rent Type</option>
                                            <option value="hour" @selected(old('per_price',$list->per_price) == "hour")>Hour</option>
                                            <option value="day" @selected(old('per_price',$list->per_price) == "day")> Day</option>
                                            <option value="night" @selected(old('per_price',$list->per_price) == "night")> Only Night</option>
                                            <option value="week" @selected(old('per_price',$list->per_price) == "week")> Week</option>
                                            <option value="month" @selected(old('per_price',$list->per_price) == "month")> Month</option>
                                            <option value="year" @selected(old('per_price',$list->per_price) == "year")> Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="s_charge_wanted" class="form-label me-2 fw-bold">Service Charge</label>
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <div class="input-group">
                                        <input name="s_charge" value="{{$list->s_charge}}" type="number" class="form-control" id="s_charge_wanted" placeholder="Enter Service Charge">
                                    </div>
                                </div>
                                <div class="col-1">
                                    <span class="text-light fs-3">/</span>
                                </div>
                                <div class="col-7 ps-0">
                                    <div class="input-group">
                                        <select class="form-select form-select-md" aria-label=".form-select-lg example" name="s_per_price">
                                            <option selected hidden>Choose Rent Type</option>
                                            <option value="hour" @selected(old('s_per_price',$list->s_per_price) == "hour")>Hour</option>
                                            <option value="day" @selected(old('s_per_price',$list->s_per_price) == "day")> Day</option>
                                            <option value="night" @selected(old('s_per_price',$list->s_per_price) == "night")> Only Night</option>
                                            <option value="week" @selected(old('s_per_price',$list->s_per_price) == "week")> Week</option>
                                            <option value="month" @selected(old('s_per_price',$list->s_per_price) == "month")> Month</option>
                                            <option value="year" @selected(old('s_per_price',$list->s_per_price) == "year")> Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="room_size_wanted" class="form-label me-2 fw-bold">Room Size</label>
                            <input name="room_size" value="{{$list->room_size}}" type="text" class="form-control" id="room_size_wanted" placeholder="Enter Room Size">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="room_type_wanted" class="form-label me-2 fw-bold">Room Type</label>
                            <select id="room_type_wanted" class="form-select" name="room_type" required>
                                <option value="">Choose...</option>
                                <option value="Single bed" {{$list->room_type == "Single bed" ? 'selected':''}}>Single bed</option>
                                <option value="Double bed" {{$list->room_type == "Double bed" ? 'selected':''}}>Double bed</option>
                                <option value="Family bed" {{$list->room_type == "Family bed" ? 'selected':''}}>Family bed</option>
                                <option value="Couple bed" {{$list->room_type == "Couple bed" ? 'selected':''}}>Couple bed</option>
                                <option value="Twin bed" {{$list->room_type == "Twin bed" ? 'selected':''}}>Twin bed</option>
                                <option value="Bunk bed" {{$list->room_type == "Bunk bed" ? 'selected':''}}>Bunk bed</option>
                                <option value="Honeymoon Suite" {{$list->room_type == "Honeymoon Suite" ? 'selected':''}}>Honeymoon Suite</option>
                                <option value="Presidential Suite" {{$list->room_type == "Presidential Suite" ? 'selected':''}}>Presidential Suite</option>
                            </select>
                        </div>
                        <div class="col-12  ">
                            <label for="address_wanted" class="form-label me-2 fw-bold">Address</label>
                            <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_wanted" placeholder="Enter Address">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="description_wanted" class="form-label me-2 fw-bold">Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_wanted" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                        </div>
                        <div class="col-12 mb-3 ">
                            <h2 class="fw-bold mb-3">Amenities</h2>
                            <div class="row ms-3 ps-2 ">
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="furnished_wanted" name="furnished" {{  ($list->furnished == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="furnished_wanted">
                                        Furniture
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="attatched_toilet_wanted" name="attached_toilet" {{  ($list->attached_toilet == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="attatched_toilet_wanted">
                                        Attached Toilet
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="hot_water_wanted" name="hot_water" {{  ($list->hot_water == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="hot_water_wanted">
                                        Geyser
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="ac_wanted" name="ac" {{  ($list->ac == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="ac_wanted">
                                        A.C
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="dining_wanted" name="dining" {{  ($list->dining == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="dining_wanted">
                                        Dining Facilities
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="pool_wanted" name="pool" {{  ($list->pool == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="pool_wanted">
                                        Swimming Pool
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="generator_wanted" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="generator_wanted">
                                        Generator
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="gym_wanted" name="gym" {{  ($list->gym == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="gym_wanted">
                                        Gym
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="spa_wanted" name="spa" {{  ($list->spa == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="spa_wanted">
                                        Spa
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="sports_wanted" name="sports" {{  ($list->sports == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="sports_wanted">
                                        Sports Facilities
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="wifi_wanted" name="wifi" {{  ($list->wifi == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="wifi_wanted">
                                        Wifi
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="laundry_wanted" name="laundry" {{  ($list->laundry == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="laundry_wanted">
                                        Laundry
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="lift_wanted" name="lift" {{  ($list->lift == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="lift_wanted">
                                        Lift
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="parking_wanted" name="parking" {{ ($list->parking == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="parking_wanted">
                                        Parking
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary  w-25 mx-auto" type="submit">Update Want Post</button>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#hello").slideDown(300).delay(1000).slideUp(300);
    });
</script>
@endsection