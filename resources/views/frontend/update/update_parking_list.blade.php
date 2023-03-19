@extends('frontend.master.post_master')

@section('content')
<div class="container post_container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block" id="hello">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if($list->post_type == 'Rent')
                <form method="POST" action="{{ route('parking_spot_update',$list->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                    <div class=" col-12 mb-3 ">
                            <label for="" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="title" type="text" value="" class="form-control" id="" placeholder="Enter Post Title">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="room_name_Rent" class="form-label me-2 fw-bold">Garage Name</label>
                            <input name="title" value="{{$list->title}}" type="text" class="form-control" id="room_name_Rent" placeholder="Enter name">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="date_Rent" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" type="date" class="form-control" id="date_Rent" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="phone_Rent" class="form-label me-2 fw-bold">Mobile</label>
                            <input name="phone" value="{{$list->phone}}" type="tel" class="form-control" id="phone_Rent">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="price_Rent" class="form-label me-2 fw-bold">Rent Per Month</label>
                            <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_Rent" placeholder="Enter Price">
                        </div>

                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="level_Rent" class="form-label me-2 fw-bold">Floor Level</label>
                            <select id="level_Rent" class="form-select" name="floor_level" required>
                                <option value="">Choose...</option>
                                <option value="1" {{$list->floor_level == "1" ? 'selected':''}}>1</option>
                                <option value="2" {{$list->floor_level == "2" ? 'selected':''}}>2</option>
                                <option value="Under Ground" {{$list->floor_level == "Under Ground" ? 'selected':''}}>Under Ground</option>
                            </select>
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="floor_height_Rent" class="form-label me-2 fw-bold">Floor Hieght</label>
                            <select id="" class="form-select" name="floor_height" required>
                                <option value="">Choose...</option>
                                <option value="13" {{$list->floor_height == "13" ? 'selected':''}}>13</option>
                                <option value="14" {{$list->floor_height == "14" ? 'selected':''}}>14</option>
                                <option value="17" {{$list->floor_height == "17" ? 'selected':''}}>17</option>
                            </select>
                        </div>

                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="vehicle_type_Rent" class="form-label me-2 fw-bold">Vehicle type</label>
                            <select id="vehicle_type_Rent" class="form-select" name="vehicle_type" required>
                                <option value="">Choose...</option>
                                <option value="Truck" {{$list->vehicle_type == "Truck" ? 'selected':''}}>ck</option>
                                <option value="Motor bike" {{$list->vehicle_type == "Motor bike" ? 'selected':''}}>Motor bike</option>
                                <option value="Pickup" {{$list->vehicle_type == "Pickup" ? 'selected':''}}>Pickup</option>
                                <option value="Privet car" {{$list->vehicle_type == "Privet car" ? 'selected':''}}>Privet car</option>
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
                            <div class="col">

                                @if($list->photo == '')
                                <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                <div class=" input-group update_section_file_input">
                                    <input type="file" class="form-control " name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <img src="{{asset('public/uploads/garages/'.$list->photo)}}" alt="" srcset="" class="update_section_image img-fluid">
                                
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="input-group update_section_file_input">
                                        <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <!-- <a href="{{route('image_delete',['Parking_Spot',$list->id,'garages','photo',$list->photo])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a> -->
                                </div>
                                
                                @endif

                                <label for="photo_Rent" class="d-block"> Main Image</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                @if($list->photo1 == '')
                                <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                <div class=" input-group update_section_file_input">
                                    <input type="file" class="form-control " name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <img src="{{asset('public/uploads/garages/'.$list->photo1)}}" alt="" srcset="" class="update_section_image img-fluid">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="input-group update_section_file_input">
                                        <input type="file" class="form-control" name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Parking_Spot',$list->id,'garages','photo1',$list->photo1])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                                @endif
                                <label for="photo1_Rent" class="d-block "> Photo 2</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                @if($list->photo2 == '')
                                <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                <div class=" input-group update_section_file_input">
                                    <input type="file" class="form-control " name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <img src="{{asset('public/uploads/garages/'.$list->photo2)}}" alt="" srcset="" class="update_section_image img-fluid">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Parking_Spot',$list->id,'garages','photo2',$list->photo2])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                </div>
                                @endif
                                <label for="photo2_Rent" class="d-block"> Photo 3</label>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                @if($list->photo3 == '')
                                <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                <div class=" input-group update_section_file_input">
                                    <input type="file" class="form-control " name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <img src="{{asset('public/uploads/garages/'.$list->photo3)}}" alt="" srcset="" class="update_section_image img-fluid">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="input-group update_section_file_input">
                                        <input type="file" class="form-control" name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Parking_Spot',$list->id,'garages','photo3',$list->photo3])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                                @endif
                                <label for="photo2_Rent" class="d-block"> Photo 4</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                @if($list->photo4 == '')
                                <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                <div class=" input-group update_section_file_input">
                                    <input type="file" class="form-control " name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <img src="{{asset('public/uploads/garages/'.$list->photo4)}}" alt="" srcset="" class="update_section_image img-fluid">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="input-group update_section_file_input">
                                        <input type="file" class="form-control" name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Parking_Spot',$list->id,'garages','photo4',$list->photo4])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                                @endif
                                <label for="photo2_Rent" class="d-block"> Photo 5</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                @if($list->photo5 == '')
                                <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                <div class=" input-group update_section_file_input">
                                    <input type="file" class="form-control " name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <img src="{{asset('public/uploads/garages/'.$list->photo5)}}" alt="" srcset="" class="update_section_image img-fluid">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="input-group update_section_file_input">
                                        <input type="file" class="form-control" name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Parking_Spot',$list->id,'garages','photo5',$list->photo5])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                                @endif
                                <label for="photo2_Rent" class="d-block"> Photo 6</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                @if($list->photo6 == '')
                                <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                <div class=" input-group update_section_file_input">
                                    <input type="file" class="form-control " name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <img src="{{asset('public/uploads/garages/'.$list->photo6)}}" alt="" srcset="" class="update_section_image img-fluid">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="input-group update_section_file_input">
                                        <input type="file" class="form-control" name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Parking_Spot',$list->id,'garages','photo6',$list->photo6])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                                @endif
                                <label for="photo2_Rent" class="d-block"> Photo 7</label>
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
                            <label for="" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="title" type="text" value="" class="form-control" id="" placeholder="Enter Post Title">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="room_name_Rent" class="form-label me-2 fw-bold">Garage Name</label>
                            <input name="title" value="{{$list->title}}" type="text" class="form-control" id="room_name_Rent" placeholder="Enter name">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="date_Rent" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" type="date" class="form-control" id="date_Rent" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="phone_Rent" class="form-label me-2 fw-bold">Mobile</label>
                            <input name="phone" value="{{$list->phone}}" type="tel" class="form-control" id="phone_Rent">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="price_Rent" class="form-label me-2 fw-bold">Rent Per Month</label>
                            <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_Rent" placeholder="Enter Price">
                        </div>

                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="level_Rent" class="form-label me-2 fw-bold">Floor Level</label>
                            <select id="level_Rent" class="form-select" name="floor_level" required>
                                <option value="">Choose...</option>
                                <option value="1" {{$list->floor_level ==="1" ? 'selected':''}}>1</option>
                                <option value="2" {{$list->floor_level ==="2" ? 'selected':''}}>2</option>
                                <option value="Under Ground" {{$list->floor_level == "Under Ground" ? 'selected':''}}>Under Ground</option>
                            </select>
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="floor_height_Rent" class="form-label me-2 fw-bold">Floor Hieght</label>
                            <select id="" class="form-select" name="floor_height" required>
                                <option value="">Choose...</option>
                                <option value="13" {{$list->floor_height == 13 ? 'selected':''}}>13</option>
                                <option value="14" {{$list->floor_height == 14 ? 'selected':''}}>14</option>
                                <option value="17" {{$list->floor_height == 17 ? 'selected':''}}>17</option>
                            </select>
                        </div>

                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="vehicle_type_Rent" class="form-label me-2 fw-bold">Vehicle type</label>
                            <select id="vehicle_type_Rent" class="form-select" name="vehicle_type" required>
                                <option value="">Choose...</option>
                                <option value="Truck" {{$list->vehicle_type == "Truck" ? 'selected':''}}>Truck</option>
                                <option value="Motor bike" {{$list->vehicle_type == "Motor bike" ? 'selected':''}}>Motor bike</option>
                                <option value="Pickup" {{$list->vehicle_type == "Pickup" ? 'selected':''}}>Pickup</option>
                                <option value="Privet car" {{$list->vehicle_type == "Privet car" ? 'selected':''}}>Privet car</option>
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
                        <div class="col-12 mb-3 ">
                            <label for="video_Rent" class="form-label me-2 fw-bold"> Youtube Link</label>
                            <input type="text" class="form-control" name="video" value="{{$list->video}}" id="video_Rent" placeholder="  Youtube Link">
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

