@extends('frontend.master.post_master')

@section('content')
<div class="container post_container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                @if($list->post_type == 'Rent')
                <form method="POST" action="{{ route('office_update',$list->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3 ">
                            <label for="title_rented" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="title" value="{{$list->title}}" type="text" class="form-control" id="title_rented" placeholder="Enter Post Title">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="date_rented" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" type="date" class="form-control" id="date_rented" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="phone_rented" class="form-label me-2 fw-bold">Mobile</label>
                            <select id="phone_rented" class="form-select" name="phone" value="{{$list->phone}}">

                                <option value="{{$list->phone}}">{{$list->phone}}</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="price_rented" class="form-label me-2 fw-bold">Rent</label>
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <div class="input-group mb-3">
                                        <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_rented" placeholder="Enter Price">
                                    </div>
                                </div>
                                <div class="col-1">
                                    <span class="text-light fs-3">/</span>
                                </div>
                                <div class="col-7 ps-0">
                                    <div class="input-group mb-3">
                                        <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="per_price">
                                            <option selected hidden>Choose Rent Type</option>
                                            <option value="hour" {{$list->per_price == "hour" ? 'selected':''}}>Hour</option>
                                            <option value="day" {{$list->per_price == "day" ? 'selected':''}}> Day</option>
                                            <option value="night" {{$list->per_price == "night" ? 'selected':''}}> Only Night</option>
                                            <option value="week" {{$list->per_price == "week" ? 'selected':''}}> Week</option>
                                            <option value="month" {{$list->per_price == "month" ? 'selected':''}}> Month</option>
                                            <option value="year" {{$list->per_price == "year" ? 'selected':''}}> Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="s_charge_rented" class="form-label me-2 fw-bold">Service Charge</label>
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <div class="input-group mb-3">
                                        <input name="s_charge" value="{{$list->s_charge}}" type="number" class="form-control" id="s_charge_rented" placeholder="Enter Service Charge">
                                    </div>
                                </div>
                                <div class="col-1">
                                    <span class="text-light fs-3">/</span>
                                </div>
                                <div class="col-7 ps-0">
                                    <div class="input-group mb-3">
                                        <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="s_per_price">
                                            <option selected hidden>Choose Service Type</option>
                                            <option value="hour" {{$list->s_per_price == "hour" ? 'selected':''}}>Hour</option>
                                            <option value="day" {{$list->s_per_price == "day" ? 'selected':''}}> Day</option>
                                            <option value="night" {{$list->s_per_price == "night" ? 'selected':''}}> Only Night</option>
                                            <option value="week" {{$list->s_per_price == "week" ? 'selected':''}}> Week</option>
                                            <option value="month" {{$list->s_per_price == "month" ? 'selected':''}}> Month</option>
                                            <option value="year" {{$list->s_per_price == "year" ? 'selected':''}}> Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="floor_rented" class="form-label me-2 fw-bold">Floor Level</label>
                            <select id="floor_rented" class="form-select" name="floor_level" required>
                                <option value="">Choose...</option>
                                <option value="1" {{$list->floor_level == "1" ? 'selected':''}}>1</option>
                                <option value="2" {{$list->floor_level == "2" ? 'selected':''}}>2</option>
                                <option value="3" {{$list->floor_level == "3" ? 'selected':''}}>3</option>
                                <option value="4" {{$list->floor_level == "4" ? 'selected':''}}>4</option>
                                <option value="5" {{$list->floor_level == "5" ? 'selected':''}}>5</option>
                                <option value="6" {{$list->floor_level == "6" ? 'selected':''}}>6</option>
                                <option value="7" {{$list->floor_level == "7" ? 'selected':''}}>7</option>
                                <option value="8" {{$list->floor_level == "8" ? 'selected':''}}>8</option>
                                <option value="9" {{$list->floor_level == "9" ? 'selected':''}}>9</option>
                                <option value="10" {{$list->floor_level == "10" ? 'selected':''}}>10</option>
                                <option value="11" {{$list->floor_level == "11" ? 'selected':''}}>11</option>
                                <option value="12" {{$list->floor_level == "12" ? 'selected':''}}>12</option>
                                <option value="13" {{$list->floor_level == "13" ? 'selected':''}}>13</option>
                                <option value="14" {{$list->floor_level == "14" ? 'selected':''}}>14</option>
                                <option value="15" {{$list->floor_level == "15" ? 'selected':''}}>15</option>
                                <option value="15+" {{$list->floor_level == "15+" ? 'selected':''}}>15+</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="interior_rented" class="form-label me-2 fw-bold">Interior Condition</label>
                            <select id="interior_rented" class="form-select" name="interior_condition">
                                <option value="">Choose...</option>
                                <option value="good" {{$list->interior_condition == "good" ? 'selected':''}}>good</option>
                                <option value="moderate" {{$list->interior_condition == "moderate" ? 'selected':''}}>moderate</option>
                                <option value="best" {{$list->interior_condition == "moderate" ? 'selected':''}}>best</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="area_rented" class="form-label me-2 fw-bold">Floor Area</label>
                            <input name="floor_size" value="{{$list->floor_size}}" type="text" class="form-control" id="area_rented" placeholder="Enter Price">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="road_width_rented" class="form-label me-2 fw-bold">Road Width</label>
                            <input name="road_width" value="{{$list->road_width}}" type="text" class="form-control" id="road_width_rented" placeholder="Enter Road Width">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="address_rented" class="form-label me-2 fw-bold">Address</label>
                            <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_rented" placeholder="Enter Address">
                        </div>



                        <div class="col-12 mb-3 ">
                            <label for="description_rented" class="form-label me-2 fw-bold">Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_rented" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-12 mb-3  ">
                            <h2 class="fw-bold mb-3">Amenities</h2>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="elect_rented" name="electricity" {{  ($list->electricity == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="elect_rented">
                                    Electricity
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="gas_rented" name="gas" {{  ($list->gas == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="gas_rented">
                                    Gas
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="water_rented" name="water" {{  ($list->water == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="water_rented">
                                    Water
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="wifi_rented" name="wifi" {{  ($list->wifi == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="wifi_rented">
                                    wifi
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="ac_rented" name="ac" {{  ($list->ac == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="ac_rented">
                                    A.C
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="lift_rented" name="lift" {{  ($list->lift == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="lift_rented">
                                    Lift
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="generator_Rent" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="generator_Rent">
                                    Generator
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="fire_safety_rented" name="fire_safety" {{  ($list->fire_safety == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="fire_safety_rented">
                                    Fire Exit
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="parking_rented" name="parking" {{  ($list->parking == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="parking_rented">
                                    Parking
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                            <h2 class="fw-bold mb-3">Gallery Section</h2>
                            <div class="row">
                                <div class="col">

                                    @if($list->photo == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/offices/'.$list->photo)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between">
                                        <div class="input-group mt-2 update_section_file_input">
                                            <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <!-- <a href="{{route('image_delete',['Office',$list->id,'offices','photo',$list->photo])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a> -->
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
                                    <img src="{{asset('public/uploads/offices/'.$list->photo1)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="input-group mt-2 update_section_file_input">
                                            <input type="file" class="form-control" name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Office',$list->id,'offices','photo1',$list->photo1])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a>
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
                                    <img src="{{asset('public/uploads/offices/'.$list->photo2)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="input-group mt-2 update_section_file_input">
                                            <input type="file" class="form-control" name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Office',$list->id,'offices','photo2',$list->photo2])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a>
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
                                    <img src="{{asset('public/uploads/offices/'.$list->photo3)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="input-group mt-2 update_section_file_input">
                                            <input type="file" class="form-control" name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Office',$list->id,'offices','photo3',$list->photo3])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a>
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
                                    <img src="{{asset('public/uploads/offices/'.$list->photo4)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="input-group mt-2 update_section_file_input">
                                            <input type="file" class="form-control" name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Office',$list->id,'offices','photo4',$list->photo4])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a>
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
                                    <img src="{{asset('public/uploads/offices/'.$list->photo5)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="input-group mt-2 update_section_file_input">
                                            <input type="file" class="form-control" name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Office',$list->id,'offices','photo5',$list->photo5])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a>
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
                                    <img src="{{asset('public/uploads/offices/'.$list->photo6)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="input-group mt-2 update_section_file_input">
                                            <input type="file" class="form-control" name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Office',$list->id,'offices','photo6',$list->photo6])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block"> Photo 7</label>
                                </div>
                            </div>
                        </div>
                        <div class="my-3">
                            <label for="video_rented" class="form-label me-2 fw-bold"> Youtube Link</label>
                            <input type="text" class="form-control" name="video" value="{{$list->video}}" id="video_rented" placeholder="  Youtube Link">
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary  my-2" type="submit">Update Rent Post</button>
                        </div>
                    </div>
                </form>
                @else
                <form method="POST" action="{{ route('office_update',$list->id) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-12 mb-3 ">
                            <label for="title_wanted" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="title" value="{{$list->title}}" type="text" class="form-control" id="title_wanted" placeholder="Enter Post Title">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="date_wanted" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" type="date" class="form-control" id="date_wanted" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="phone_wanted" class="form-label me-2 fw-bold">Mobile</label>
                            <input type="number" name="phone" value="{{$list->phone}}" class="form-control">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="price_rented" class="form-label me-2 fw-bold">Rent</label>
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <div class="input-group mb-3">
                                        <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_rented" placeholder="Enter Price">
                                    </div>
                                </div>
                                <div class="col-1">
                                    <span class="text-light fs-3">/</span>
                                </div>
                                <div class="col-7 ps-0">
                                    <div class="input-group mb-3">
                                        <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="per_price">
                                            <option selected hidden>Choose Rent Type</option>
                                            <option value="hour" {{$list->per_price == "hour" ? 'selected':''}}>Hour</option>
                                            <option value="day" {{$list->per_price == "day" ? 'selected':''}}> Day</option>
                                            <option value="night" {{$list->per_price == "night" ? 'selected':''}}> Only Night</option>
                                            <option value="week" {{$list->per_price == "week" ? 'selected':''}}> Week</option>
                                            <option value="month" {{$list->per_price == "month" ? 'selected':''}}> Month</option>
                                            <option value="year" {{$list->per_price == "year" ? 'selected':''}}> Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="s_charge_rented" class="form-label me-2 fw-bold">Service Charge</label>
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <div class="input-group mb-3">
                                        <input name="s_charge" value="{{$list->s_charge}}" type="number" class="form-control" id="s_charge_rented" placeholder="Enter Service Charge">
                                    </div>
                                </div>
                                <div class="col-1">
                                    <span class="text-light fs-3">/</span>
                                </div>
                                <div class="col-7 ps-0">
                                    <div class="input-group mb-3">
                                        <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="s_per_price">
                                            <option selected hidden>Choose Service Type</option>
                                            <option value="hour" {{$list->s_per_price == "hour" ? 'selected':''}}>Hour</option>
                                            <option value="day" {{$list->s_per_price == "day" ? 'selected':''}}> Day</option>
                                            <option value="night" {{$list->s_per_price == "night" ? 'selected':''}}> Only Night</option>
                                            <option value="week" {{$list->s_per_price == "week" ? 'selected':''}}> Week</option>
                                            <option value="month" {{$list->s_per_price == "month" ? 'selected':''}}> Month</option>
                                            <option value="year" {{$list->s_per_price == "year" ? 'selected':''}}> Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="floor_wanted" class="form-label me-2 fw-bold">Floor Level</label>
                            <select id="floor_wanted" class="form-select" name="floor_level" required>
                                <option value="">Choose...</option>
                                <option value="1" {{$list->floor_level == "1" ? 'selected':''}}>1</option>
                                <option value="2" {{$list->floor_level == "2" ? 'selected':''}}>2</option>
                                <option value="3" {{$list->floor_level == "3" ? 'selected':''}}>3</option>
                                <option value="4" {{$list->floor_level == "4" ? 'selected':''}}>4</option>
                                <option value="5" {{$list->floor_level == "5" ? 'selected':''}}>5</option>
                                <option value="6" {{$list->floor_level == "6" ? 'selected':''}}>6</option>
                                <option value="7" {{$list->floor_level == "7" ? 'selected':''}}>7</option>
                                <option value="8" {{$list->floor_level == "8" ? 'selected':''}}>8</option>
                                <option value="9" {{$list->floor_level == "9" ? 'selected':''}}>9</option>
                                <option value="10" {{$list->floor_level == "10" ? 'selected':''}}>10</option>
                                <option value="11" {{$list->floor_level == "11" ? 'selected':''}}>11</option>
                                <option value="12" {{$list->floor_level == "12" ? 'selected':''}}>12</option>
                                <option value="13" {{$list->floor_level == "13" ? 'selected':''}}>13</option>
                                <option value="14" {{$list->floor_level == "14" ? 'selected':''}}>14</option>
                                <option value="15" {{$list->floor_level == "15" ? 'selected':''}}>15</option>
                                <option value="15+" {{$list->floor_level == "15+" ? 'selected':''}}>15+</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="interior_wanted" class="form-label me-2 fw-bold">Interior Condition</label>
                            <select id="interior_wanted" class="form-select" name="interior_condition">
                                <option selected="">Choose...</option>
                                <option value="good" {{$list->interior_condition == "good" ? 'selected':''}}>good</option>
                                <option value="moderate" {{$list->interior_condition == "moderate" ? 'selected':''}}>moderate</option>
                                <option value="best" {{$list->interior_condition == "moderate" ? 'selected':''}}>best</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="area_wanted" class="form-label me-2 fw-bold">Floor Area</label>
                            <input name="floor_size" value="{{$list->floor_size}}" type="text" class="form-control" id="area_wanted" placeholder="Enter Price">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="road_width_wanted" class="form-label me-2 fw-bold">Road Width</label>
                            <input name="road_width" value="{{$list->road_width}}" type="text" class="form-control" id="road_width_wanted" placeholder="Enter Road Width">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="address_wanted" class="form-label me-2 fw-bold">Address</label>
                            <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_wanted" placeholder="Enter Address">
                        </div>



                        <div class="col-12 mb-3 ">
                            <label for="description_wanted" class="form-label me-2 fw-bold">Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_wanted" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                        </div>
                        <div class="col-12 mb-3 ">
                            <h2 class="fw-bold mb-3">Ameneties</h2>
                            <div class="row ms-5 ">
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="elect_wanted" name="electricity" {{  ($list->electricity == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="elect_wanted">
                                        Electricity
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="gas_wanted" name="gas" {{  ($list->gas == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="gas_wanted">
                                        Gas
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="water_wanted" name="water" {{  ($list->water == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="water_wanted">
                                        Water
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="wifi_wanted" name="wifi" {{  ($list->wifi == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="wifi_wanted">
                                        wifi
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="ac_wanted" name="ac" {{  ($list->ac == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="ac_wanted">
                                        A.C
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="lift_wanted" name="lift" {{  ($list->lift == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="lift_wanted">
                                        Lift
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="generator_want" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="generator_want">
                                        Generator
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="fire_safety_wanted" name="fire_safety" {{  ($list->fire_safety == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="fire_safety_wanted">
                                        Fire Exit
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="parking_wanted" name="parking" {{  ($list->parking == 'on' ? ' checked' : '') }}>
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