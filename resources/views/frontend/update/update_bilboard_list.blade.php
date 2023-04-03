@extends('frontend.master.post_master')

@section('content')
<div class="container post_container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- Default Basic Forms Start -->
            @if($list->post_type == 'Rent')
            <form action="{{route('bilboard_update',$list->id)}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 mb-3 ">
                        <label for="billboard_rented" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="title" value="{{$list->title}}" type="text" class="form-control" id="billboard_rented" placeholder="Enter Post Title">
                        <span class="text-danger">@error('title') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_rented" class="form-label me-2 fw-bold">Date</label>
                        <input name="date" value="{{$list->date}}" type="date" class="form-control" id="date_rented" onfocus="this.showPicker()">
                        <span class="text-danger">@error('date') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_rented" class="form-label me-2 fw-bold">Mobile</label>
                        <input type="number" name="phone" value="{{$list->phone}}" class="form-control">
                        <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="price_rented" class="form-label me-2 fw-bold"> Rent Per Month</label>
                        <input name="price" type="number" value="{{$list->price}}" class="form-control" id="price_Rent" placeholder="Enter Rent">
                        <span class="text-danger">@error('price') {{$message}} @enderror</span>
                    </div>


                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="size_rented" class="form-label me-2 fw-bold">Billboard Size</label>
                        <input name="size" value="{{$list->size}}" type="text" class="form-control" id="size_rented" placeholder="Enter Billboard Size">
                        <span class="text-danger">@error('size') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="height_rented" class="form-label me-2 fw-bold">Billboard Height</label>
                        <input name="hieght" type="text" class="form-control" id="height_rented" placeholder="Enter Billboard Height">
                        <span class="text-danger">@error('hieght') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label for="type_rented" class="form-label me-2 fw-bold">Billboard Type</label>
                        <input name="type" type="text" class="form-control" id="type_rented" placeholder="Enter Billboard Type" value="{{$list->type}}" required>
                        <span class="text-danger">@error('type') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="address_rented" class="form-label me-2 fw-bold">Address</label>
                        <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_rented" placeholder="Enter Address">
                        <span class="text-danger">@error('address') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_rented" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="description" type="text" class="form-control" id="description_rented" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12 mb-3  ">
                        <h2 class="fw-bold mb-3">Amenities</h2>
                        <div class="form-check ms-3 ps-2 mb-2">
                            <input class="form-check-input" type="checkbox" id="electricity_rented" name="electricity" {{  ($list->electricity == 'on' ? ' checked' : '') }}>
                            <label class="form-check-label" for="electricity_rented">
                                Electricity
                            </label>
                        </div>

                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                        <h2 class="fw-bold mb-3">Gallery Section</h2>
                        <div class="row">
                            <div class="col-6 p-2">

                                @if($list->photo == '')
                                <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid img-thumbnail">
                                <div class=" input-group mt-2 ">
                                    <input type="file" class="form-control " name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @else
                                <img src="{{asset('public/uploads/bilboards/'.$list->photo)}}" alt="" srcset="" class="update_section_image img-fluid img-thumbnail">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        <span class="text-danger">@error('photo') {{$message}} @enderror</span>

                                    </div>
                                    <!-- <a href="{{route('image_delete',['Bilboard',$list->id,'bilboards','photo',$list->photo])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a> -->
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
                                    <img src="{{asset('public/uploads/bilboards/'.$list->photo1)}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="input-group update_section_file_input">
                                        <input type="file" class="form-control" name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Bilboard',$list->id,'bilboards','photo1',$list->photo1])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
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
                                    <img src="{{asset('public/uploads/bilboards/'.$list->photo2)}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="input-group update_section_file_input">
                                        <input type="file" class="form-control" name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Bilboard',$list->id,'bilboards','photo2',$list->photo2])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
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
                                    <img src="{{asset('public/uploads/bilboards/'.$list->photo3)}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="input-group update_section_file_input">
                                        <input type="file" class="form-control" name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Bilboard',$list->id,'bilboards','photo3',$list->photo3])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
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
                                    <img src="{{asset('public/uploads/bilboards/'.$list->photo4)}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="input-group update_section_file_input">
                                        <input type="file" class="form-control" name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Bilboard',$list->id,'bilboards','photo4',$list->photo4])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
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
                                    <img src="{{asset('public/uploads/bilboards/'.$list->photo5)}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="input-group update_section_file_input">
                                        <input type="file" class="form-control" name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Bilboard',$list->id,'bilboards','photo5',$list->photo5])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
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
                                    <img src="{{asset('public/uploads/bilboards/'.$list->photo6)}}" alt="" srcset="" class="update_section_image img-fluid">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="input-group update_section_file_input">
                                        <input type="file" class="form-control" name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Bilboard',$list->id,'bilboards','photo6',$list->photo6])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
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
            <form action="{{route('bilboard_update',$list->id)}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 mb-3 ">
                        <label for="billboard_wanted" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="title" value="{{$list->title}}" type="text" class="form-control" id="billboard_wanted" placeholder="Enter Post Title">
                        <span class="text-danger">@error('title') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_wanted" class="form-label me-2 fw-bold">Date</label>
                        <input name="date" value="{{$list->date}}" type="date" class="form-control" id="date_wanted" onfocus="this.showPicker()">
                        <span class="text-danger">@error('date') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_wanted" class="form-label me-2 fw-bold">Mobile</label>
                        <input type="number" name="phone" value="{{$list->phone}}" class="form-control">
                        <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="price_wanted" class="form-label me-2 fw-bold"> Rent Per Price</label>
                        <input name="price" type="number" value="{{$list->price}}" class="form-control" id="price_wanted" placeholder="Enter Rent">
                        <span class="text-danger">@error('price') {{$message}} @enderror</span>
                    </div>


                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="size_wanted" class="form-label me-2 fw-bold">Billboard Size</label>
                        <input name="size" value="{{$list->size}}" type="text" class="form-control" id="size_wanted" placeholder="Enter Billboard Size">
                        <span class="text-danger">@error('size') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="height_wanted" class="form-label me-2 fw-bold">Billboard Height</label>
                        <input name="hieght" value="{{$list->hieght}}" type="text" class="form-control" id="height_wanted" placeholder="Enter Billboard Height">
                        <span class="text-danger">@error('hieght') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label for="type_wanted" class="form-label me-2 fw-bold">Billboard Type</label>
                        <input name="type" type="text" class="form-control" id="type_wanted" value="{{$list->type}}" placeholder="Enter Billboard Type" required>
                        <span class="text-danger">@error('type') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="address_wanted" class="form-label me-2 fw-bold">Address</label>
                        <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_wanted" placeholder="Enter Address">
                        <span class="text-danger">@error('address') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_wanted" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="description" type="text" class="form-control" id="description_wanted" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                    </div>
                    <div class="col-12 mb-3 ">
                        <h2 class="fw-bold mb-3">Amenities</h2>
                        <div class="row ms-3 ps-2 ">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="electricity_wanted" name="electricity" {{  ($list->electricity == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="electricity_wanted">
                                    Electricity
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