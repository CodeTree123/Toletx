@extends('frontend.master.post_master')
@section('content')
<div class="container post_container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                @if($list->post_type == 'Rent')
                <form method="POST" action="{{ route('hotel_update',$list->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3 ">
                            <label for="post_title_Rent" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="post_title" type="text" value="{{$list->post_title}}" class="form-control" id="post_title_Rent" placeholder="Enter Post Title" required>
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="hostel_name_Rent" class="form-label me-2 fw-bold">Hotel Name</label>
                            <input name="hotel_name" value="{{$list->hotel_name}}" type="text" class="form-control" id="hostel_name_Rent" placeholder="Enter Hotel Name">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="date_Rent" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" type="date" class="form-control" id="date_Rent" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="phone_Rent" class="form-label me-2 fw-bold">Mobile</label>
                            <input name="phone" value="{{$list->phone}}" type="tel" class="form-control" id="phone_Rent">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="room_type_Rent" class="form-label me-2 fw-bold">Room Type</label>
                            <select id="room_type_Rent" class="form-select" name="room_type" required>
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
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="price_Rent" class="form-label me-2 fw-bold">Rent</label>
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <div class="input-group">
                                        <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_Rent" placeholder="Enter Price">
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
                            <label for="s_charge_Rent" class="form-label me-2 fw-bold">Service Charge</label>
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <div class="input-group">
                                        <input name="s_charge" value="{{$list->s_charge}}" type="number" class="form-control" id="s_charge_Rent" placeholder="Enter Service Charge">
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
                            <label for="guest_Rent" class="form-label me-2 fw-bold">Guest</label>
                            <input name="guest_count" value="{{$list->guest_count}}" type="number" class="form-control" id="guest_Rent" placeholder="Enter Guest">
                        </div>

                        <div class="col-12 mb-3 ">
                            <label for="address_Rent" class="form-label me-2 fw-bold">Location</label>
                            <input name="location" value="{{$list->location}}" type="text" class="form-control" id="address_Rent" placeholder="Enter Address">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="description_Rent" class="form-label me-2 fw-bold">Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_Rent" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <h2 class="fw-bold mb-3">Amenities</h2>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="attatched_toilet_Rent" name="bathroom" {{  ($list->bathroom == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="attatched_toilet_Rent">
                                    Bathroom
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="hot_water_Rent" name="hot_water" {{  ($list->hot_water == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="hot_water_Rent">
                                    Geyser
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="ac_Rent" name="ac">
                                <label class="form-check-label" for="ac_Rent">
                                    A.C
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="dining_Rent" name="dining" {{  ($list->dining == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="dining_Rent">
                                    Dining Facilities
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="gym_Rent" name="gym" {{  ($list->gym == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="gym_Rent">
                                    Gym
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="generator_Rent" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="generator_Rent">
                                    Generator
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="sports_Rent" name="sports" {{  ($list->sports == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="sports_Rent">
                                    Sports Facilities
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="wifi_Rent" name="wifi" {{  ($list->wifi == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="wifi_Rent">
                                    Wifi
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="laundry_Rent" name="laundry" {{  ($list->laundry == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="laundry_Rent">
                                    Laundry
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="lift_Rent" name="lift" {{  ($list->lift == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="lift_Rent">
                                    Lift
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="Exit_Rent" name="fire_exit" {{  ($list->fire_exit == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="Exit_Rent">
                                    Fire Exit
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="parking_Rent" name="parking" {{  ($list->parking == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="parking_Rent">
                                    Parking
                                </label>
                            </div>

                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                            <h2 class="fw-bold mb-3">Gallery Section</h2>
                            <div class="row">
                                <div class="col p-2">

                                    @if($list->photo == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/hotels/'.$list->photo)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between">
                                        <div class="input-group mt-2 update_section_file_input">
                                            <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <!-- <a href="{{route('image_delete',['Hotel',$list->id,'hotels','photo',$list->photo])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a> -->
                                    </div>
                                    @endif

                                    <label for="photo_Rent" class="d-block"> Main Image</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo1 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/hotels/'.$list->photo1)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Hotel',$list->id,'hotels','photo1',$list->photo1])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo1_Rent" class="d-block "> Photo 2</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo2 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/hotels/'.$list->photo2)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Hotel',$list->id,'hotels','photo2',$list->photo2])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block"> Photo 3</label>

                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo3 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/hotels/'.$list->photo3)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Hotel',$list->id,'hotels','photo3',$list->photo3])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block"> Photo 4</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo4 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/hotels/'.$list->photo4)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Hotel',$list->id,'hotels','photo4',$list->photo4])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block"> Photo 5</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo5 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/hotels/'.$list->photo5)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Hotel',$list->id,'hotels','photo5',$list->photo5])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block"> Photo 6</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo6 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/hotels/'.$list->photo6)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Hotel',$list->id,'hotels','photo6',$list->photo6])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block"> Photo 7</label>
                                </div>
                            </div>
                        </div>
                        <div class="my-3 ">
                            <label for="video_Rent" class="form-label me-2 fw-bold"> Youtube Link</label>
                            <input type="text" class="form-control" name="video" value="{{$list->video}}" id="video_Rent" placeholder="  Youtube Link">
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary  my-2" type="submit">Update Rent Post</button>
                        </div>
                    </div>
                </form>
                @else
                <form method="POST" action="{{ route('hotel_update',$list->id) }}">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3 ">
                            <label for="post_title_Want" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="post_title" type="text" value="{{$list->post_title}}" class="form-control" id="post_title_Want" placeholder="Enter Post Title" required>
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="hostel_name_Rent" class="form-label me-2 fw-bold">Hotel Name</label>
                            <input name="hotel_name" value="{{$list->hotel_name}}" type="text" class="form-control" id="hostel_name_Rent" placeholder="Enter Hotel Name">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="date_Rent" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" type="date" class="form-control" id="date_Rent" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="phone_Rent" class="form-label me-2 fw-bold">Mobile</label>
                            <input name="phone" value="{{$list->phone}}" type="tel" class="form-control" id="phone_Rent">

                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="room_type_Rent" class="form-label me-2 fw-bold">Room Type</label>
                            <select id="room_type_Rent" class="form-select" name="room_type" required>
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
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="price_Rent" class="form-label me-2 fw-bold">Rent</label>
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <div class="input-group">
                                        <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_Rent" placeholder="Enter Price">
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
                            <label for="s_charge_Rent" class="form-label me-2 fw-bold">Service Charge</label>
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <div class="input-group">
                                        <input name="s_charge" value="{{$list->s_charge}}" type="number" class="form-control" id="s_charge_Rent" placeholder="Enter Service Charge">
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
                            <label for="guest_Rent" class="form-label me-2 fw-bold">Guest</label>
                            <input name="guest_count" value="{{$list->guest_count}}" type="number" class="form-control" id="guest_Rent" placeholder="Enter Guest">
                        </div>

                        <div class="col-12 mb-3 ">
                            <label for="address_Rent" class="form-label me-2 fw-bold">Location</label>
                            <input name="location" value="{{$list->location}}" type="text" class="form-control" id="address_Rent" placeholder="Enter Address">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="description_Rent" class="form-label me-2 fw-bold">Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_Rent" rows="3" placeholder="Enter Description"> {{$list->description}}</textarea>
                        </div>
                        <div class="col-12 mb-3 ">
                            <h2 class="fw-bold mb-3">Amenities</h2>
                            <div class="row ms-3 ps-2 ">
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="attatched_toilet_Want" name="attatched_toilet" {{  ($list->attatched_toilet == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="attatched_toilet_Want">
                                        Attached Toilet
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="hot_water_Want" name="hot_water" {{  ($list->hot_water == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="hot_water_Want">
                                        Geyser
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="ac_Want" name="ac" {{  ($list->ac == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="ac_Want">
                                        A.C
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="dining_Want" name="dining" {{  ($list->dining == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="dining_Want">
                                        Dining Facilities
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="gym_Want" name="gym" {{  ($list->gym == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="gym_Want">
                                        Gym
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="generator_Want" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="generator_Want">
                                        Generator
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="sports_Want" name="sports" {{  ($list->sports == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="sports_Want">
                                        Sports Facilities
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="wifi_Want" name="wifi" {{  ($list->wifi == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="wifi_Want">
                                        Wifi
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="laundry_Want" name="laundry" {{  ($list->laundry == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="laundry_Want">
                                        Laundry
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="lift_Want" name="lift" {{  ($list->lift == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="lift_Want">
                                        Lift
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="Exit_Want" name="fire_exit" {{  ($list->fire_exit == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="Exit_Want">
                                        Fire Exit
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="parking_Want" name="parking" {{  ($list->parking == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="parking_Want">
                                        Parking
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
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