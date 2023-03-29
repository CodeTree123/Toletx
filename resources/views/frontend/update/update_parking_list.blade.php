@extends('frontend.master.post_master')

@section('content')
<div class="container post_container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                @if($list->post_type == 'Rent')
                <form method="POST" action="{{ route('parking_spot_update',$list->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class=" col-12 mb-3 ">
                            <label for="title_rented" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="title" type="text" value="{{$list->title}}" class="form-control" id="title_rented" placeholder="Enter Post Title">
                        </div>

                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="date_Rent" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" type="date" class="form-control" id="date_Rent" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="phone_Rent" class="form-label me-2 fw-bold">Mobile</label>
                            <input name="phone" value="{{$list->phone}}" type="tel" class="form-control" id="phone_Rent">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="price_Want" class="form-label me-2 fw-bold">Rent</label>
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

                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="level_Rent" class="form-label me-2 fw-bold">Floor Level</label>
                            <select id="level_Rent" class="form-select" name="floor_level" required>
                                <option selected hidden>Choose number</option>
                                <option value="Ground" {{$list->floor_level == "Ground" ? 'selected':''}}>Ground</option>
                                <option value="lavel 1" {{$list->floor_level == "lavel 1" ? 'selected':''}}>lavel 1</option>
                                <option value="lavel 2" {{$list->floor_level == "lavel 2" ? 'selected':''}}>lavel 2</option>
                            </select>
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="floor_height_Rent" class="form-label me-2 fw-bold">Floor Hieght</label>
                            <input name="floor_height" type="text" class="form-control" value="{{$list->floor_height}}" id="floor_height_Rent" placeholder="Enter Floor Height" required>
                        </div>

                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="vehicle_type_Rent" class="form-label me-2 fw-bold">Vehicle type</label>
                            <select id="vehicle_type_Want" class="form-select" name="vehicle_type" required>
                                <option selected hidden>Choose number</option>
                                <option value="Truck" {{$list->vehicle_type == "Truck" ? 'selected':''}}>Truck</option>
                                <option value="Motor bike" {{$list->vehicle_type == "Motor bike" ? 'selected':''}}>Motor bike</option>
                                <option value="Pickup" {{$list->vehicle_type == "Pickup" ? 'selected':''}}>Pickup</option>
                                <option value="Privet car" {{$list->vehicle_type == "Privet car" ? 'selected':''}}>Privet car</option>
                                <option value="Everything" {{$list->vehicle_type == "Everything" ? 'selected':''}}>Everything</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="address_Rent" class="form-label me-2 fw-bold">Address</label>
                            <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_Rent" placeholder="Enter Address">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="description_Rent" class="form-label me-2 fw-bold">Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_Rent" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2 class="fw-bold mb-3">Gallery Section</h2>
                        <div class="row">
                            <div class="col-6 p-2">

                                @if($list->photo == '')
                                <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid img-thumbnail">
                                <div class=" input-group update_section_file_input">
                                    <input type="file" class="form-control " name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <img src="{{asset('public/uploads/garages/'.$list->photo)}}" alt="" srcset="" class="update_section_image img-fluid img-thumbnail">

                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="input-group update_section_file_input">
                                        <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <!-- <a href="{{route('image_delete',['Parking_Spot',$list->id,'garages','photo',$list->photo])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a> -->
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
                                <div class=" input-group update_section_file_input">
                                    <input type="file" class="form-control " name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('public/uploads/garages/'.$list->photo1)}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="input-group update_section_file_input">
                                        <input type="file" class="form-control" name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Parking_Spot',$list->id,'garages','photo1',$list->photo1])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                                @endif
                                <label for="photo1_Rent" class="d-block mt-2 "> Photo 2</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                @if($list->photo2 == '')
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class=" input-group update_section_file_input">
                                    <input type="file" class="form-control " name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('public/uploads/garages/'.$list->photo2)}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="input-group update_section_file_input">
                                        <input type="file" class="form-control" name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Parking_Spot',$list->id,'garages','photo2',$list->photo2])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                                @endif
                                <label for="photo2_Rent" class="d-block mt-2"> Photo 3</label>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                @if($list->photo3 == '')
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class=" input-group update_section_file_input">
                                    <input type="file" class="form-control " name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('public/uploads/garages/'.$list->photo3)}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="input-group update_section_file_input">
                                        <input type="file" class="form-control" name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Parking_Spot',$list->id,'garages','photo3',$list->photo3])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                                @endif
                                <label for="photo2_Rent" class="d-block mt-2"> Photo 4</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                @if($list->photo4 == '')
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class=" input-group update_section_file_input">
                                    <input type="file" class="form-control " name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('public/uploads/garages/'.$list->photo4)}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="input-group update_section_file_input">
                                        <input type="file" class="form-control" name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Parking_Spot',$list->id,'garages','photo4',$list->photo4])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                                @endif
                                <label for="photo2_Rent" class="d-block mt-2"> Photo 5</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                @if($list->photo5 == '')
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class=" input-group update_section_file_input">
                                    <input type="file" class="form-control " name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('public/uploads/garages/'.$list->photo5)}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="input-group update_section_file_input">
                                        <input type="file" class="form-control" name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Parking_Spot',$list->id,'garages','photo5',$list->photo5])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                                @endif
                                <label for="photo2_Rent" class="d-block mt-2"> Photo 6</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                @if($list->photo6 == '')
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class=" input-group update_section_file_input">
                                    <input type="file" class="form-control " name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('public/uploads/garages/'.$list->photo6)}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="input-group update_section_file_input">
                                        <input type="file" class="form-control" name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Parking_Spot',$list->id,'garages','photo6',$list->photo6])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                                @endif
                                <label for="photo2_Rent" class="d-block mt-2"> Photo 7</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary   mx-auto my-2" type="submit">Update Rent Post</button>
                    </div>
                </form>
                @else
                <form method="POST" action="{{ route('parking_spot_update',$list->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class=" col-12 mb-3 ">
                            <label for="title_wanted" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="title" type="text" value="{{$list->title}}" class="form-control" id="title_wanted" placeholder="Enter Post Title">
                        </div>

                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="date_Rent" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" type="date" class="form-control" id="date_Rent" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="phone_Rent" class="form-label me-2 fw-bold">Mobile</label>
                            <input name="phone" value="{{$list->phone}}" type="tel" class="form-control" id="phone_Rent">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="price_Want" class="form-label me-2 fw-bold">Rent</label>
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

                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="level_Rent" class="form-label me-2 fw-bold">Floor Level</label>
                            <select id="level_Rent" class="form-select" name="floor_level" required>
                                <option selected hidden>Choose number</option>
                                <option value="Ground" {{$list->floor_level == "Ground" ? 'selected':''}}>Ground</option>
                                <option value="lavel 1" {{$list->floor_level == "lavel 1" ? 'selected':''}}>lavel 1</option>
                                <option value="lavel 2" {{$list->floor_level == "lavel 2" ? 'selected':''}}>lavel 2</option>
                            </select>
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="floor_height_Rent" class="form-label me-2 fw-bold">Floor Hieght</label>
                            <input name="floor_height" type="text" class="form-control" value="{{$list->floor_height}}" id="floor_height_Rent" placeholder="Enter Floor Height" required>
                        </div>

                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="vehicle_type_Rent" class="form-label me-2 fw-bold">Vehicle type</label>
                            <select id="vehicle_type_Want" class="form-select" name="vehicle_type" required>
                                <option selected hidden>Choose number</option>
                                <option value="Truck" {{$list->vehicle_type == "Truck" ? 'selected':''}}>Truck</option>
                                <option value="Motor bike" {{$list->vehicle_type == "Motor bike" ? 'selected':''}}>Motor bike</option>
                                <option value="Pickup" {{$list->vehicle_type == "Pickup" ? 'selected':''}}>Pickup</option>
                                <option value="Privet car" {{$list->vehicle_type == "Privet car" ? 'selected':''}}>Privet car</option>
                                <option value="Everything" {{$list->vehicle_type == "Everything" ? 'selected':''}}>Everything</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="address_Rent" class="form-label me-2 fw-bold">Address</label>
                            <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_Rent" placeholder="Enter Address">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="description_Rent" class="form-label me-2 fw-bold">Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_Rent" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
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