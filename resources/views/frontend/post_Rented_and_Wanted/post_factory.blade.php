@extends('frontend.master.post_master')

@section('content')

<div class="container  post_container">
    <div class="row shadow p-4 rounded mb-5 mt-2    ">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Factory</li>
            </ol>
        </nav>
        @include('frontend.include.selector_section')

        <div class="col-12" id="Rent" style="display: {{old('post_type') == 'Rent' ? 'flex' : 'none'}};">
            <form method="POST" action="{{ route('post_factory_rented') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_rent" name="post_type" value="{{old('post_type')}}">
                <div class="row">
                    <div class="col-12 mb-3 ">
                        <label for="title_rented" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="title" type="text" class="form-control" id="title_rented" placeholder="Enter Post Title" value="{{old('title')}}">
                        <span class="text-danger">@error('title') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_rented" class="form-label me-2 fw-bold">Date</label>
                        <input name="date" type="date" class="form-control" id="date_rented" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" value="{{old('date')}}">
                        <span class="text-danger">@error('date') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_rented" class="form-label me-2 fw-bold">Mobile</label>
                        <input name="phone" type="number" class="form-control" id="phone_rented" placeholder="Enter" value="{{$list->phone}}" readonly>
                        <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                    </div>

                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="price_rented" class="form-label me-2 fw-bold">Rent Per Month</label>
                        <input name="price" type="number" class="form-control" id="price_rented" placeholder="Enter Price" value="{{old('price')}}">
                        <span class="text-danger">@error('price') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="area_rented" class="form-label me-2 fw-bold">Floor area</label>
                        <input name="floor_size" type="text" class="form-control" id="area_rented" placeholder="Enter Floor area" value="{{old('floor_size')}}">
                        <span class="text-danger">@error('floor_size') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="height_rented" class="form-label me-2 fw-bold">Floor Height</label>
                        <input name="floor_height" type="text" class="form-control" id="height_rented" placeholder="Enter Floor Height" value="{{old('floor_height')}}">
                        <span class="text-danger">@error('floor_height') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="floor_rented" class="form-label me-2 fw-bold">Floor Level</label>
                        <select id="floor_rented" class="form-select" name="floor_level">
                            <option selected hidden>Choose number</option>
                            <option value="1" @selected(old('floor_level')=="1" )>1</option>
                            <option value="2" @selected(old('floor_level')=="2" )>2</option>
                            <option value="3" @selected(old('floor_level')=="3" )>3</option>
                            <option value="4" @selected(old('floor_level')=="4" )>4</option>
                            <option value="5" @selected(old('floor_level')=="5" )>5</option>
                            <option value="6" @selected(old('floor_level')=="6" )>6</option>
                            <option value="7" @selected(old('floor_level')=="7" )>7</option>
                            <option value="8" @selected(old('floor_level')=="8" )>8</option>
                            <option value="9" @selected(old('floor_level')=="9" )>9</option>
                            <option value="10" @selected(old('floor_level')=="10" )>10</option>
                            <option value="11" @selected(old('floor_level')=="11" )>11</option>
                            <option value="12" @selected(old('floor_level')=="12" )>12</option>
                            <option value="13" @selected(old('floor_level')=="13" )>13</option>
                            <option value="14" @selected(old('floor_level')=="14" )>14</option>
                            <option value="15" @selected(old('floor_level')=="15" )>15</option>
                            <option value="15+" @selected(old('floor_level')=="15+" )>15+</option>
                        </select>
                        <span class="text-danger">@error('floor_level') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="road_rented" class="form-label me-2 fw-bold">Road Width</label>
                        <input name="road_width" type="text" class="form-control" id="road_rented" placeholder="Enter Road Width" value="{{old('road_width')}}">
                        <span class="text-danger">@error('road_width') {{$message}} @enderror</span>
                    </div>

                    <div class="col-12 mb-3 ">
                        <label for="address_rented" class="form-label me-2 fw-bold">Address</label>
                        <input name="address" type="text" class="form-control" placeholder="Enter Address" value="{{old('address')}}">
                        <span class="text-danger">@error('address') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_rented" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="description" type="text" class="form-control" id="description_rented" rows="3" placeholder="Enter Description">{{old('description')}}</textarea>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <h2 class="fw-bold mb-3">Amenities</h2>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="elect_rented" name="electricity" @checked(old('electricity'))>
                            <label class="form-check-label" for="elect_rented">
                                Electricity
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="gas_rented" name="gas" @checked(old('gas'))>
                            <label class="form-check-label" for="gas_rented">
                                Gas
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="water_rented" name="water" @checked(old('water'))>
                            <label class="form-check-label" for="water_rented">
                                Water
                            </label>
                        </div>

                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="ac_rented" name="ac" @checked(old('ac'))>
                            <label class="form-check-label" for="ac_rented">
                                A.C
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="lift_rented" name="lift" @checked(old('lift'))>
                            <label class="form-check-label" for="lift_rented">
                                Lift
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="fire_safety_rented" name="fire_safety" @checked(old('fire_safety'))>
                            <label class="form-check-label" for="fire_safety_rented">
                                Fire Exit
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="gen_rented" name="generator" @checked(old('generator'))>
                            <label class="form-check-label" for="gen_rented">
                                Generator
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="drain_rented" name="drainage_system" @checked(old('drainage_system'))>
                            <label class="form-check-label" for="drain_rented">
                                Drainage System
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="parking_rented" name="parking" @checked(old('parking'))>
                            <label class="form-check-label" for="parking_rented">
                                Parking
                            </label>
                        </div>
                    </div>
                    <div class="col-8">
                        <h2 class="fw-bold mb-3">Gallery Section</h2>
                        <div class="mb-3 ">
                            <label for="photo_rented"> Photo 1</label>
                            <input type="file" class="form-control" name="photo" id="photo_rented" placeholder="asd">
                            <span class="text-danger">@error('photo') {{$message}} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label for="photo1_rented"> Photo 2</label>
                            <input type="file" class="form-control" name="photo1" id="photo1_rented">
                        </div>

                        <div class="mb-3">
                            <label for="photo2_rented"> Photo 3</label>
                            <input type="file" class="form-control" name="photo2" id="photo2_rented">
                        </div>

                        <div class="mb-3">
                            <label for="photo3_rented"> Photo 4</label>
                            <input type="file" class="form-control" name="photo3" id="photo3_rented">
                        </div>

                        <div class="mb-3">
                            <label for="photo4_rented"> Photo 5</label>
                            <input type="file" class="form-control" name="photo4" id="photo4_rented">
                        </div>

                        <div class="mb-3">
                            <label for="photo5_rented"> Photo 6</label>
                            <input type="file" class="form-control" name="photo5" id="photo5_rented">
                        </div>

                        <div class="mb-3">
                            <label for="photo6_rented"> Photo 7</label>
                            <input type="file" class="form-control" name="photo6" id="photo6_rented">
                        </div>

                    </div>

                    <div class="col-12 mb-3 ">
                        <label for="video_rented" class="form-label me-2 fw-bold"> Youtube Link</label>
                        <input type="text" class="form-control" name="video" id="video_rented" placeholder="Youtube Link" value="{{old('video')}}">
                    </div>

                    <button class="btn btn-primary w-25 mx-auto" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-12" id="Want" style="display: {{old('post_type') == 'Want' ? 'flex' : 'none'}};">
            <form method="POST" action="{{ route('post_factory_wanted') }}">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ Auth::user()->id }}" autocomplete="user_id" autofocus>

                    @error('user_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <input class="form-control" type="hidden" id="post_want" name="post_type" value="{{old('post_type')}}">
                <div class="row">
                    <div class="col-12 mb-3 ">
                        <label for="title_wanted" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="w_title" type="text" class="form-control" id="title_wanted" placeholder="Enter Post Title" value="{{old('w_title')}}">
                        <span class="text-danger">@error('w_title') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_wanted" class="form-label me-2 fw-bold">Date</label>
                        <input name="w_date" type="date" class="form-control" id="date_wanted" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" value="{{old('w_date')}}">
                        <span class="text-danger">@error('w_date') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_wanted" class="form-label me-2 fw-bold">Mobile</label>
                        <input name="w_phone" type="number" class="form-control" id="phone_wanted" placeholder="Enter" value="{{$list->phone}}" readonly>
                        <span class="text-danger">@error('w_phone') {{$message}} @enderror</span>
                    </div>

                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="price_wanted" class="form-label me-2 fw-bold">Rent Per Month</label>
                        <input name="w_price" type="number" class="form-control" id="price_wanted" placeholder="Enter Price" value="{{old('w_price')}}">
                        <span class="text-danger">@error('w_price') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="area_wanted" class="form-label me-2 fw-bold">Floor area</label>
                        <input name="w_floor_size" type="text" class="form-control" id="area_wanted" placeholder="Enter Floor area" value="{{old('w_floor_size')}}">
                        <span class="text-danger">@error('w_floor_size') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="height_wanted" class="form-label me-2 fw-bold">Floor Height</label>
                        <input name="w_floor_height" type="text" class="form-control" id="height_wanted" placeholder="Enter Floor Height" value="{{old('w_floor_height')}}">
                        <span class="text-danger">@error('w_floor_height') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="floor_wanted" class="form-label me-2 fw-bold">Floor Level</label>
                        <select id="floor_wanted" class="form-select" name="w_floor_level">
                            <option selected hidden>Choose number</option>
                            <option value="1" @selected(old('w_floor_level')=="1" )>1</option>
                            <option value="2" @selected(old('w_floor_level')=="2" )>2</option>
                            <option value="3" @selected(old('w_floor_level')=="3" )>3</option>
                            <option value="4" @selected(old('w_floor_level')=="4" )>4</option>
                            <option value="5" @selected(old('w_floor_level')=="5" )>5</option>
                            <option value="6" @selected(old('w_floor_level')=="6" )>6</option>
                            <option value="7" @selected(old('w_floor_level')=="7" )>7</option>
                            <option value="8" @selected(old('w_floor_level')=="8" )>8</option>
                            <option value="9" @selected(old('w_floor_level')=="9" )>9</option>
                            <option value="10" @selected(old('w_floor_level')=="10" )>10</option>
                            <option value="11" @selected(old('w_floor_level')=="11" )>11</option>
                            <option value="12" @selected(old('w_floor_level')=="12" )>12</option>
                            <option value="13" @selected(old('w_floor_level')=="13" )>13</option>
                            <option value="14" @selected(old('w_floor_level')=="14" )>14</option>
                            <option value="15" @selected(old('w_floor_level')=="15" )>15</option>
                            <option value="15+" @selected(old('w_floor_level')=="15+" )>15+</option>
                        </select>
                        <span class="text-danger">@error('w_floor_level') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="road_wanted" class="form-label me-2 fw-bold">Road Width</label>
                        <input name="w_road_width" type="text" class="form-control" id="road_wanted" placeholder="Enter Road Width" value="{{old('w_road_width')}}">
                        <span class="text-danger">@error('w_road_width') {{$message}} @enderror</span>
                    </div>

                    <div class="col-12 mb-3 ">
                        <label for="address_wanted" class="form-label me-2 fw-bold">Address</label>
                        <input name="w_address" type="text" class="form-control" placeholder="Enter Address" value="{{old('w_address')}}">
                        <span class="text-danger">@error('w_address') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_wanted" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="w_description" type="text" class="form-control" id="description_wanted" rows="3" placeholder="Enter Description">{{old('w_description')}}</textarea>
                    </div>
                    <div class="col-12 mb-3 ">
                        <h2 class="fw-bold mb-3">Amenities</h2>
                        <div class="row ms-3 ps-2">
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="elect_wanted" name="w_electricity" @checked(old('w_electricity'))>
                                <label class="form-check-label" for="elect_wanted">
                                    Electricity
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="gas_wanted" name="w_gas" @checked(old('w_gas'))>
                                <label class="form-check-label" for="gas_wanted">
                                    Gas
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="water_wanted" name="w_water" @checked(old('w_water'))>
                                <label class="form-check-label" for="water_wanted">
                                    Water
                                </label>
                            </div>

                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="ac_wanted" name="w_ac" @checked(old('w_ac'))>
                                <label class="form-check-label" for="ac_wanted">
                                    A.C
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="lift_wanted" name="w_lift" @checked(old('w_lift'))>
                                <label class="form-check-label" for="lift_wanted">
                                    Lift
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="fire_safety_wanted" name="w_fire_safety" @checked(old('w_fire_safety'))>
                                <label class="form-check-label" for="fire_safety_wanted">
                                    Fire Exit
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="gen_wanted" name="w_generator" @checked(old('w_generator'))>
                                <label class="form-check-label" for="gen_wanted">
                                    Generator
                                </label>
                            </div>

                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="drain_wanted" name="w_drainage_system" @checked(old('w_drainage_system'))>
                                <label class="form-check-label" for="drain_wanted">
                                    Drainage System
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="parking_wanted" name="w_parking" @checked(old('w_parking'))>
                                <label class="form-check-label" for="parking_wanted">
                                    Parking
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary w-25 mx-auto" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection