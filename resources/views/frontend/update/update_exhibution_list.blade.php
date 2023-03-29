@extends('frontend.master.post_master')

@section('content')
<div class="container post_container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- Default Basic Forms Start -->

            @if($list->post_type == 'Rent')
            <form method="POST" action="{{ route('exibution_center_update',$list->id) }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class=" col-12 mb-3 ">
                        <label for="" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="title" type="text" value="{{$list->title}}" class="form-control" id="" placeholder="Enter Post Title">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="title_rented" class="form-label me-2 fw-bold">Exhibition Center Name</label>
                        <input name="title" value="{{$list->title}}" type="text" class="form-control" id="title_rented" placeholder="Enter Warehouse Name">
                    </div>
                    <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_rented" class="form-label me-2 fw-bold">Date</label>
                        <input name="date" value="{{$list->date}}" type="date" class="form-control" id="date_rented" onfocus="this.showPicker()" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}">
                    </div>
                    <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_rented" class="form-label me-2 fw-bold">Mobile</label>
                        <input type="number" name="phone" value="{{$list->phone}}" class="form-control">
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="price_rented" class="form-label me-2 fw-bold">Rent Per Day</label>
                        <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_rented" placeholder="Enter Price">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label for="interior_rented" class="form-label me-2 fw-bold">Interior Condition</label>
                        <select id="interior_rented" class="form-select" name="interior_condition" required>
                            <option value="">Choose...</option>
                            <option value="good" {{$list->interior_condition == "good" ? 'selected':''}}>good</option>
                            <option value="moderate" {{$list->interior_condition == "moderate" ? 'selected':''}}>moderate</option>
                            <option value="best" {{$list->interior_condition == "best" ? 'selected':''}}>best</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label for="floor_rented" class="form-label me-2 fw-bold">Floor Levels</label>
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
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="Hall_rented" class="form-label me-2 fw-bold">Exhibition Center Area</label>
                        <input name="room_size" value="{{$list->room_size}}" floor_level="text" class="form-control" id="Hall_rented" placeholder="Enter Exhibition Hall Area">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="floor_size_rented" class="form-label me-2 fw-bold">Exhibition Center Height</label>
                        <input name="room_type" value="{{$list->room_type}}" type="text" class="form-control" id="floor_size_rented" placeholder="Enter Exhibition Hall Height">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label for="road_rented" class="form-label me-2 fw-bold">Road Width</label>
                        <input name="road_width" value="{{$list->road_width}}" type="text" class="form-control" id="road_rented" placeholder="Enter Road Width">
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
                        <div class="form-check ms-3 ps-2 mb-2">
                            <input class="form-check-input" type="checkbox" id="Toilet_rented" name="toilet" {{  ($list->toilet == 'on' ? ' checked' : '') }}>
                            <label class="form-check-label" for="Toilet_rented">
                                Toilet
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
                            <input class="form-check-input" type="checkbox" id="gen_rented" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                            <label class="form-check-label" for="gen_rented">
                                Generator
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
                                <div class=" input-group mt-2 update_section_file_input update_section_file_input">
                                    <input type="file" class="form-control " name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <img src="{{asset('public/uploads/exhibutions/'.$list->photo)}}" alt="" srcset="" class="update_section_image img-fluid img-thumbnail">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="input-group mt-2 update_section_file_input update_section_file_input">
                                        <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <!-- <a href="{{route('image_delete',['Exibution_Center',$list->id,'exhibutions','photo',$list->photo])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a> -->
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
                                <div class=" input-group mt-2 update_section_file_input update_section_file_input">
                                    <input type="file" class="form-control " name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('public/uploads/exhibutions/'.$list->photo1)}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="input-group update_section_file_input update_section_file_input">
                                        <input type="file" class="form-control" name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Exibution_Center',$list->id,'exhibutions','photo1',$list->photo1])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                                @endif
                                <label for="photo1_Rent" class="d-block mt-2"> Photo 2</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                @if($list->photo2 == '')
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class=" input-group mt-2 update_section_file_input update_section_file_input">
                                    <input type="file" class="form-control " name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('public/uploads/exhibutions/'.$list->photo2)}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="input-group update_section_file_input update_section_file_input">
                                        <input type="file" class="form-control" name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Exibution_Center',$list->id,'exhibutions','photo2',$list->photo2])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                                @endif
                                <label for="photo2_Rent" class="d-block mt-2"> Photo 3</label>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                @if($list->photo3 == '')
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class=" input-group mt-2 update_section_file_input update_section_file_input">
                                    <input type="file" class="form-control " name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('public/uploads/exhibutions/'.$list->photo3)}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="input-group update_section_file_input update_section_file_input">
                                        <input type="file" class="form-control" name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Exibution_Center',$list->id,'exhibutions','photo3',$list->photo3])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                                @endif
                                <label for="photo2_Rent" class="d-block mt-2"> Photo 4</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                @if($list->photo4 == '')
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class=" input-group mt-2 update_section_file_input update_section_file_input">
                                    <input type="file" class="form-control " name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('public/uploads/exhibutions/'.$list->photo4)}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="input-group update_section_file_input update_section_file_input">
                                        <input type="file" class="form-control" name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Exibution_Center',$list->id,'exhibutions','photo4',$list->photo4])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                                @endif
                                <label for="photo2_Rent" class="d-block mt-2"> Photo 5</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                @if($list->photo5 == '')
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class=" input-group mt-2 update_section_file_input update_section_file_input">
                                    <input type="file" class="form-control " name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('public/uploads/exhibutions/'.$list->photo5)}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="input-group update_section_file_input update_section_file_input">
                                        <input type="file" class="form-control" name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Exibution_Center',$list->id,'exhibutions','photo5',$list->photo5])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                                @endif
                                <label for="photo2_Rent" class="d-block mt-2"> Photo 6</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                @if($list->photo6 == '')
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class=" input-group mt-2 update_section_file_input update_section_file_input">
                                    <input type="file" class="form-control " name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <div class="post_img_update img-thumbnail">
                                    <img src="{{asset('public/uploads/exhibutions/'.$list->photo6)}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="input-group update_section_file_input update_section_file_input">
                                        <input type="file" class="form-control" name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Exibution_Center',$list->id,'exhibutions','photo6',$list->photo6])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
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
            <form method="POST" action="{{ route('exibution_center_update',$list->id) }}">
                @csrf

                <div class="row">
                    <div class=" col-12 mb-3 ">
                        <label for="" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="title" type="text" value="{{$list->title}}" class="form-control" id="" placeholder="Enter Post Title">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="title_wanted" class="form-label me-2 fw-bold">Exhibition Center Name</label>
                        <input name="title" value="{{$list->title}}" type="text" class="form-control" id="title_wanted" placeholder="Enter Warehouse Name">
                    </div>
                    <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_wanted" class="form-label me-2 fw-bold">Date</label>
                        <input name="date" value="{{$list->date}}" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" type="date" class="form-control" id="date_wanted" onfocus="this.showPicker()" min="{{$list->date}}">
                    </div>
                    <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_wanted" class="form-label me-2 fw-bold">Mobile</label>
                        <input type="number" name="phone" value="{{$list->phone}}" class="form-control">
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="price_wanted" class="form-label me-2 fw-bold">Rent Per Day</label>
                        <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_wanted" placeholder="Enter Price">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label for="interior_wanted" class="form-label me-2 fw-bold">Interior Condition</label>
                        <select id="interior_wanted" class="form-select" name="interior_condition" required>
                            <option value="">Choose...</option>
                            <option value="good" {{$list->type == "good" ? 'selected':''}}>good</option>
                            <option value="moderate" {{$list->type == "moderate" ? 'selected':''}}>moderate</option>
                            <option value="best" {{$list->type == "best" ? 'selected':''}}>best</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label for="floor_wanted" class="form-label me-2 fw-bold">Floor Levels</label>
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
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="Hall_wanted" class="form-label me-2 fw-bold">Exhibition Center Area</label>
                        <input name="room_size" value="{{$list->room_size}}" type="text" class="form-control" id="Hall_wanted" placeholder="Enter Exhibition Hall Area">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="floor_size_wanted" class="form-label me-2 fw-bold">Exhibition Center Height</label>
                        <input name="room_type" value="{{$list->room_type}}" type="text" class="form-control" id="floor_size_wanted" placeholder="Enter Exhibition Hall Height">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label for="road_wanted" class="form-label me-2 fw-bold">Road Width</label>
                        <input name="road_width" value="{{$list->road_width}}" type="text" class="form-control" id="road_wanted" placeholder="Enter Road Width">
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
                        <div class="row ms-3 ps-2 ">
                            <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="Toilet_wanted" name="toilet" {{  ($list->toilet == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="Toilet_wanted">
                                    Toilet
                                </label>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="Exit_wanted" name="fire_exit" {{  ($list->fire_exit == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="Exit_wanted">
                                    Fire Exit
                                </label>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="lift_wanted" name="lift" {{  ($list->lift == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="lift_wanted">
                                    Lift
                                </label>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="gen_wanted" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="gen_wanted">
                                    Generator
                                </label>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="parking_wanted" name="parking" value="{{$list->parking}}">
                                <label class="form-check-label" for="parking_wanted">
                                    Parking
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class=" text-center">
                        <button class="btn btn-primary  w-25 mx-auto" type="submit">Update Want Post</button>
                    </div>

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