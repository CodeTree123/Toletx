@extends('frontend.master.post_master')

@section('content')

<div class="container post_container">

    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
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
        <form method="POST" action="{{ route('user_update',$list->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-4">
                    @if (auth()->user()->image == null )
                    @if(auth()->user()->gender == 'Male')
                    <img src="{{asset('/man-dummy.png') }}" alt="" srcset="" width="300" height="300">
                    @else
                    <img src="{{asset('/dummy-female.jpg') }}" alt="" srcset="" width="300" height="300">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{(Auth::user()->image)}}" alt="" srcset="" width="300" height="300">
                    @endif
                    <div class="form-group mt-3">
                        <input type="file" class="form-control" name="photo">
                    </div>
                    <!-- change password -->
                    <div class="form-group">
                        <label class=" col-form-label">For change Password</label>
                        <div class=" col-md-6">
                            <a class="btn btn-primary " href="{{route('change_password_form')}}" class="breadcrumb-item active" aria-current="page">Change Password</a>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class=" col-form-label">Name</label>
                                <input class="form-control" value="{{$list->name}}" name="name" placeholder="Location" type="text">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class=" col-form-label">Email</label>
                                <input class="form-control" value="{{$list->email}}" name="email" placeholder="Email" type="text">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class=" col-form-label">Phone number</label>
                                <input class="form-control" value="{{$list->phone}}" name="phone" placeholder="Enter Phone number" type="number">

                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class=" col-form-label">Gender</label>
                                <select class="form-select" name="gender" aria-label="Default select example">
                                    <option selected>Choose... </option>
                                    <option value="Male" {{$list->gender == "Male" ? 'selected':''}}>Male</option>
                                    <option value="Female" {{$list->gender == "Female" ? 'selected':''}}>Female</option>
                                    <option value="Other" {{$list->gender == "Other" ? 'selected':''}}>Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class=" col-form-label">Father's Name</label>
                                <input type="text" class="form-control" placeholder="Enter your Father's name" name="father_name" value="{{$list->father_name}}">

                            </div>

                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class=" col-form-label">Mother's Name</label>

                                <input type="text" class="form-control" placeholder="Enter your Mother's name" name="mother_name" value="{{$list->mother_name}}">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class=" col-form-label">Nationality</label>
                                <input class="form-control" name="nationality" value="{{$list->nationality}}" placeholder="Enter nationality" type="text">

                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class=" col-form-label">Date of birth</label>
                                <input type="date" value="{{date('Y-m-d', strtotime($list->date_of_birth)) }}" class="form-control" placeholder="Enter Your Date of Birth" name="date_of_birth">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class=" col-form-label">NID front Image</label>
                                <input class="form-control" name="n_photo1" type="file">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class=" col-form-label">NID back Image</label>
                                <input class="form-control" name="n_photo2" type="file">
                            </div>
                        </div>
                    </div>
                    <div class=" ">
                        <label for="user_location">Address</label>
                        <textarea class="form-control" id="user_location" name="address" style="height: 50px">{{$list->address}}</textarea>
                    </div>
                    <div class="my-3 float-end">
                        <button class="btn btn-primary" type="submit">Update</button><br><br>
                    </div>
                </div>
            </div>
        </form>
        <!-- Default Basic Forms End -->
    </div>
    <!-- js -->
</div>
</div>
@endsection