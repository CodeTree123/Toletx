@extends('frontend.master.post_master')

@section('content')
<div class="container post_container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">

                @if($list->post_type == 'Rent')
                <form method="POST" action="{{ route('flat_update',$list->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12  mb-3 ">
                            <label for="room_name_rented" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="title" value="{{$list->title}}" type="text" class="form-control" id="room_name_rented" placeholder="Enter Post Title">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12  mb-3">
                            <label for="date_rented" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" type="date" class="form-control" id="date_rented" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12  mb-3">
                            <label for="phone_rented" class="form-label me-2 fw-bold">Mobile</label>
                            <input name="phone" value="{{$list->phone}}" type="tel" class="form-control" id="phone_rented">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-12  mb-3 ">
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
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12  mb-3 ">
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


                        <div class="col-lg-4 col-md-4 col-sm-12 col-12  mb-3 ">
                            <label for="floor_level_rented" class="form-label me-2 fw-bold">Floor Level</label>
                            <input name="floor_level" value="{{$list->floor_level}}" type="number" class="form-control" id="floor_level_rented" placeholder="Enter Floor Level">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12  mb-3 ">
                            <label for="bedroom_rented" class="form-label me-2 fw-bold">No. of Bedrooms</label>
                            <input name="bedrooms" value="{{$list->bedrooms}}" type="number" class="form-control" id="bedroom_rented" placeholder="Enter Bedrooms">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12  mb-3 ">
                            <label for="Drawing_rented" class="form-label me-2 fw-bold">No. of Drawing Rooms</label>
                            <input name="drawing" value="{{$list->drawing}}" type="number" class="form-control" id="Drawing_rented" placeholder="Enter Drawing rooms">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12  mb-3 ">
                            <label for="Dining_rented" class="form-label me-2 fw-bold">No. of Dining Rooms</label>
                            <input name="dining" value="{{$list->dining}}" type="number" class="form-control" id="Dining_rented" placeholder="Enter Dining rooms">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12  mb-3 ">
                            <label for="Kitchen_rented" class="form-label me-2 fw-bold">No. of Kitchen Rooms</label>
                            <input name="kitchen" value="{{$list->kitchen}}" type="number" class="form-control" id="Kitchen_rented" placeholder="Enter Kitchen rooms">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12  mb-3 ">
                            <label for="flat_varanda_rented" class="form-label me-2 fw-bold">No. of Veranda</label>
                            <input name="varanda" value="{{$list->varanda}}" type="number" class="form-control" id="flat_varanda_rented" placeholder="Enter No. of Veranda">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12  mb-3 ">
                            <label for="flat_attached_toilet_rented" class="form-label me-2 fw-bold">No. of Toilets</label>
                            <input name="attached_toilet" value="{{$list->attached_toilet}}" type="number" class="form-control" id="flat_attached_toilet_rented" placeholder="Enter No. of Toilets">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12  mb-3 ">
                            <label for="flat_size_rented" class="form-label me-2 fw-bold">Flat Size</label>
                            <input name="flat_size" value="{{$list->flat_size}}" type="text" class="form-control" id="flat_size_rented" placeholder="Enter Flat Size">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="address_rented" class="form-label me-2 fw-bold">Address</label>
                            <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_rented" placeholder="Enter Address">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="description_rented" class="form-label me-2 fw-bold">Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_rented" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-12 mb-3 ">
                            <h2 class="fw-bold mb-3">Amenities</h2>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="electricity_rented" name="electricity" {{  ($list->electricity == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="electricity_rented">
                                    Electricity
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="gas_rented" name="gas" {{  ($list->gas == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="gas_rented">
                                    Gas
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="Water_rented" name="water" {{  ($list->water == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="Water_rented">
                                    Water
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="furnished_rented" name="furnished" {{  ($list->furnished == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="furnished_rented">
                                    Furniture
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
                                <input class="form-check-input" type="checkbox" id="cabel_tv_rented" name="cable_tv" {{  ($list->cable_tv == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="cabel_tv_rented">
                                    Cable Tv
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="gen_rented" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="gen_rented">
                                    Generator
                                </label>
                            </div>

                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="wifi_rented" name="wifi" {{  ($list->wifi == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="wifi_rented">
                                    Wifi
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="Exit_rented" name="fire_exit" {{  ($list->fire_exit == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="Exit_rented">
                                    Fire Exit
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
                        <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                            <h2 class="fw-bold mb-3">Gallery Section</h2>
                            <div class="row">
                                <div class="col-6 p-2">

                                    @if($list->photo == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid img-thumbnail">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/flats/'.$list->photo)}}" alt="" srcset="" class="update_section_image img-fluid img-thumbnail">

                                    <div class="d-flex justify-content-between">
                                        <div class="input-group mt-2 update_section_file_input">
                                            <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <!-- <a href="{{route('image_delete',['Flat',$list->id,'flats','photo',$list->photo])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a> -->
                                    </div>

                                    @endif

                                    <label for="photo_Rent" class="d-block mt-2"> Main Image</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo1 == '')
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('public/uploads/flats/'.$list->photo1)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Flat',$list->id,'flats','photo1',$list->photo1])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo1_Rent" class="d-block mt-2 "> Photo 2</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo2 == '')
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('public/uploads/flats/'.$list->photo2)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Flat',$list->id,'flats','photo2',$list->photo2])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block mt-2"> Photo 3</label>

                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo3 == '')
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('public/uploads/flats/'.$list->photo3)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Flat',$list->id,'flats','photo3',$list->photo3])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block mt-2"> Photo 4</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo4 == '')
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('public/uploads/flats/'.$list->photo4)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Flat',$list->id,'flats','photo4',$list->photo4])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block mt-2"> Photo 5</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo5 == '')
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('public/uploads/flats/'.$list->photo5)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Flat',$list->id,'flats','photo5',$list->photo5])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block mt-2"> Photo 6</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo6 == '')
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('public/uploads/flats/'.$list->photo6)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Flat',$list->id,'flats','photo6',$list->photo6])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
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
                        <button class="btn btn-primary  w-25 mx-auto my-5" type="submit">Submit</button>
                    </div>
                </form>
                @else
                <form method="POST" action="{{ route('flat_update',$list->id)}}">
                    @csrf
                    <div class="row">
                        <div class=" col-12 mb-3 ">
                            <label for="room_name_rented" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="title" value="{{$list->title}}" type="text" class="form-control" id="room_name_rented" placeholder="Enter Post Title">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="date_rented" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" type="date" class="form-control" id="date_rented" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="phone_rented" class="form-label me-2 fw-bold">Mobile</label>
                            <input name="phone" value="{{$list->phone}}" type="tel" class="form-control" id="phone_rented">
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
                            <label for="floor_level_rented" class="form-label me-2 fw-bold">Floor Level</label>
                            <input name="floor_level" value="{{$list->floor_level}}" type="number" class="form-control" id="floor_level_rented" placeholder="Enter Floor Level">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="bedroom_rented" class="form-label me-2 fw-bold">No. of Bedrooms</label>
                            <input name="bedrooms" value="{{$list->bedrooms}}" type="number" class="form-control" id="bedroom_rented" placeholder="Enter Bedrooms">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="Drawing_rented" class="form-label me-2 fw-bold">No. of Drawing Rooms</label>
                            <input name="drawing" value="{{$list->drawing}}" type="number" class="form-control" id="Drawing_rented" placeholder="Enter Drawing rooms">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="Dining_rented" class="form-label me-2 fw-bold">No. of Dining Rooms</label>
                            <input name="dining" value="{{$list->dining}}" type="number" class="form-control" id="Dining_rented" placeholder="Enter Dining rooms">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="Kitchen_rented" class="form-label me-2 fw-bold">No. of Kitchen Rooms</label>
                            <input name="kitchen" value="{{$list->kitchen}}" type="number" class="form-control" id="Kitchen_rented" placeholder="Enter Kitchen rooms">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="flat_varanda_rented" class="form-label me-2 fw-bold">No. of Veranda</label>
                            <input name="varanda" value="{{$list->varanda}}" type="number" class="form-control" id="flat_varanda_rented" placeholder="Enter No. of Veranda">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="flat_attached_toilet_rented" class="form-label me-2 fw-bold">No. of Toilets</label>
                            <input name="attached_toilet" value="{{$list->attached_toilet}}" type="number" class="form-control" id="flat_attached_toilet_rented" placeholder="Enter No. of Toilets">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="flat_size_rented" class="form-label me-2 fw-bold">Flat Size</label>
                            <input name="flat_size" value="{{$list->flat_size}}" type="text" class="form-control" id="flat_size_rented" placeholder="Enter Flat Size">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="address_rented" class="form-label me-2 fw-bold">Address</label>
                            <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_rented" placeholder="Enter Address">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="description_rented" class="form-label me-2 fw-bold">Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_rented" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <h2 class="fw-bold mb-3">Amenities</h2>
                            <div class="row ms-3 ps-2">
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="electricity_rented" name="electricity" {{  ($list->electricity == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="electricity_rented">
                                        Electricity
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="gas_rented" name="gas" {{  ($list->gas == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="gas_rented">
                                        Gas
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="Water_rented" name="water" {{  ($list->water == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="Water_rented">
                                        Water
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="furnished_rented" name="furnished" {{  ($list->furnished == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="furnished_rented">
                                        Furniture
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="hot_water_rented" name="hot_water" {{  ($list->hot_water == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="hot_water_rented">
                                        Geyser
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="ac_rented" name="ac" {{  ($list->ac == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="ac_rented">
                                        A.C
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="cabel_tv_rented" name="cable_tv" {{  ($list->cable_tv == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="cabel_tv_rented">
                                        Cable Tv
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="gen_rented" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="gen_rented">
                                        Generator
                                    </label>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="wifi_rented" name="wifi" {{  ($list->wifi == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="wifi_rented">
                                        Wifi
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="Exit_rented" name="fire_exit" {{  ($list->fire_exit == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="Exit_rented">
                                        Fire Exit
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="lift_rented" name="lift" {{  ($list->lift == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="lift_rented">
                                        Lift
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="parking_rented" name="parking" {{  ($list->parking == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="parking_rented">
                                        Parking
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary  w-25 mx-auto" type="submit">Submit</button>
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