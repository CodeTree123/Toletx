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
                <form method="POST" action="{{ route('playground_update',$list->id) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                    <div class=" col-12 mb-3 ">
                            <label for="" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="title" type="text" value="" class="form-control" id="" placeholder="Enter Post Title">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="title_Want" class="form-label me-2 fw-bold">Camp Site Name</label>
                            <input name="title" value="{{$list->title}}" type="text" class="form-control" id="title_Rent" placeholder="Enter Camp Site Name">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="date_Rent" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" type="date" class="form-control" id="date_Rent" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="phone_Rent" class="form-label me-2 fw-bold">Mobile</label>
                            <input type="number" name="phone" value="{{$list->phone}}" class="form-control">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="price_Rent" class="form-label me-2 fw-bold">Rent Per Month</label>
                            <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_Rent" placeholder="Enter Price">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="area_Rent" class="form-label me-2 fw-bold">Camp area</label>
                            <input name="area" value="{{$list->area}}" type="number" class="form-control" id="area_Rent" placeholder="Enter Camp area">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="address_Rent" class="form-label me-2 fw-bold">Address</label>
                            <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_Rent" placeholder="Enter Address">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="description_Rent" class="form-label me-2 fw-bold"> Description </label>
                            <textarea name="description" type="text" class="form-control" id="description_Rent" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-12 mb-3  ">
                            <h2 class="fw-bold mb-3">Ameneties</h2>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="shed_Rent" name="shed" {{  ($list->shed == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="shed_Rent">
                                    Shed
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="change_room_Rent" name="change_room" {{  ($list->change_room == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="change_room_Rent">
                                    Changing Room
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="Toilet_Rent" name="toilet" {{  ($list->toilet == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="Toilet_Rent">
                                    Toilet
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="sports_Rent" name="sports" {{  ($list->sports == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="sports_Rent">
                                    sports Failities
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="Gym_Rent" name="gym" {{  ($list->gym == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="Gym_Rent">
                                    Gym
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="generator_Rent" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="generator_Rent">
                                    Genarator
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="Parking_Rent" name="parking" {{  ($list->parking == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="Parking_Rent">
                                    Parking
                                </label>
                            </div>
                           
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                            <h2 class="fw-bold mb-3">Gallery Section</h2>
                            <div class="row">
                                <div class="col">
                                    
                                    @if($list->photo == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset=""  class="update_section_image img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/playgrounds/'.$list->photo)}}" alt="" srcset=""  class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="input-group mt-2 update_section_file_input">
                                            <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <!-- <a href="{{route('image_delete',['Play_ground',$list->id,'playgrounds','photo',$list->photo])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a> -->
                                    </div>
                                    @endif

                                    <label for="photo_Rent" class="d-block"> Main Image</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                @if($list->photo1 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset=""  class="update_section_image img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/playgrounds/'.$list->photo1)}}" alt="" srcset=""  class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="input-group mt-2 update_section_file_input">
                                            <input type="file" class="form-control" name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Play_ground',$list->id,'playgrounds','photo1',$list->photo1])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo1_Rent" class="d-block "> Photo 2</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                @if($list->photo2 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset=""  class="update_section_image img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/playgrounds/'.$list->photo2)}}" alt="" srcset=""  class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="input-group mt-2 update_section_file_input">
                                            <input type="file" class="form-control" name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Play_ground',$list->id,'playgrounds','photo2',$list->photo2])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block"> Photo 3</label>
                                    
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                @if($list->photo3 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset=""  class="update_section_image img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/playgrounds/'.$list->photo3)}}" alt="" srcset=""  class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="input-group mt-2 update_section_file_input">
                                            <input type="file" class="form-control" name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Play_ground',$list->id,'playgrounds','photo3',$list->photo3])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block"> Photo 4</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                @if($list->photo4 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset=""  class="update_section_image img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/playgrounds/'.$list->photo4)}}" alt="" srcset=""  class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="input-group mt-2 update_section_file_input">
                                            <input type="file" class="form-control" name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Play_ground',$list->id,'playgrounds','photo4',$list->photo4])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block"> Photo 5</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                @if($list->photo5 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset=""  class="update_section_image img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/playgrounds/'.$list->photo5)}}" alt="" srcset=""  class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="input-group mt-2 update_section_file_input">
                                            <input type="file" class="form-control" name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Play_ground',$list->id,'playgrounds','photo5',$list->photo5])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block"> Photo 6</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                @if($list->photo6 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset=""  class="update_section_image img-fluid">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/playgrounds/'.$list->photo6)}}" alt="" srcset=""  class="update_section_image img-fluid">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="input-group mt-2 update_section_file_input">
                                            <input type="file" class="form-control" name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Play_ground',$list->id,'playgrounds','photo6',$list->photo6])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-2"><i class="fa-solid fa-trash-can"></i></a>
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
                <form method="POST" action="{{ route('playground_update',$list->id) }}">
                    @csrf

                    <div class="row">
                        <div class="row">
                        <div class=" col-12 mb-3 ">
                            <label for="" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="title" type="text" value="" class="form-control" id="" placeholder="Enter Post Title">
                        </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                                <label for="title_Want" class="form-label me-2 fw-bold">Camp Site Name</label>
                                <input name="title" value="{{$list->title}}" type="text" class="form-control" id="title_Want" placeholder="Enter Camp Site Name">
                            </div>
                            <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                                <label for="date_Want" class="form-label me-2 fw-bold">Date</label>
                                <input name="date" value="{{$list->date}}" type="date" class="form-control" id="date_Want" onfocus="this.showPicker()">
                            </div>
                            <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                                <label for="phone_Want" class="form-label me-2 fw-bold">Mobile</label>
                                <input type="number" name="phone" value="{{$list->phone}}" class="form-control">
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                                <label for="price_Want" class="form-label me-2 fw-bold">Rent Per Month</label>
                                <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_Want" placeholder="Enter Price">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                                <label for="area_Want" class="form-label me-2 fw-bold">Camp area</label>
                                <input name="area" value="{{$list->area}}" type="number" class="form-control" id="area_Want" placeholder="Enter Camp area">
                            </div>
                            <div class="col-12 mb-3 ">
                                <label for="address_Want" class="form-label me-2 fw-bold">Address</label>
                                <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_Want" placeholder="Enter Address">
                            </div>
                            <div class="col-12 mb-3 ">
                                <label for="description_Want" class="form-label me-2 fw-bold"> Description </label>
                                <textarea name="description" type="text" class="form-control" id="description_Want" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                            </div>
                            <div class="col-12 mb-3 ">
                                <h2 class="fw-bold mb-3">Ameneties</h2>
                                <div class="row ms-5 ">
                                    <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="shed_Want" name="shed" {{  ($list->shed == 'on' ? ' checked' : '') }}>
                                        <label class="form-check-label" for="shed_Want">
                                            Shed
                                        </label>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="change_room_Want" name="change_room" {{  ($list->change_room == 'on' ? ' checked' : '') }}>
                                        <label class="form-check-label" for="change_room_Want">
                                            Changing Room
                                        </label>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="Toilet_Want" name="toilet" {{  ($list->toilet == 'on' ? ' checked' : '') }}>
                                        <label class="form-check-label" for="Toilet_Want">
                                            Toilet
                                        </label>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="sports_Want" name="sports" {{  ($list->sports == 'on' ? ' checked' : '') }}>
                                        <label class="form-check-label" for="sports_Want">
                                            sports Failities
                                        </label>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="Gym_Want" name="gym" {{  ($list->gym == 'on' ? ' checked' : '') }}>
                                        <label class="form-check-label" for="Gym_Want">
                                            Gym
                                        </label>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="generator_Want" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                                        <label class="form-check-label" for="generator_Want">
                                            Genarator
                                        </label>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="Parking_Want" name="parking" {{  ($list->parking == 'on' ? ' checked' : '') }}>
                                        <label class="form-check-label" for="Parking_Want">
                                            Parking
                                        </label>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <label for="video_Rent" class="form-label me-2 fw-bold"> Youtube Link</label>
                                    <input type="text" class="form-control" name="video" value="{{$list->video}}" id="video_Rent" placeholder="  Youtube Link">
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
