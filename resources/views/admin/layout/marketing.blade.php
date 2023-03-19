@extends('admin.admin_master')
@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Marketing</h2>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Marketing post
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Marketing </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" method="POST" action="{{route('marketing_post')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <label for="marketingName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="marketingName" name="name">
                            <span class="text-danger mt-3">@error('name') {{$message}} @enderror</span>
                        </div>
                        <div class="col-md-6">
                            <label for="marketingMobile" class="form-label">Mobile No.</label>
                            <input type="tel" class="form-control" id="marketingMobile" name="phone">
                            <span class="text-danger mt-3">@error('phone') {{$message}} @enderror</span>
                        </div>
                        <div class="col-12">
                            <label for="marketingCompany" class="form-label">Company</label>
                            <input type="text" class="form-control" id="marketingCompany" name="company">
                            <span class="text-danger mt-3">@error('company') {{$message}} @enderror</span>
                        </div>
                        <div class="col-12">
                            <label for="marketingAddress" class="form-label">Address </label>
                            <input type="text" class="form-control" id="marketingAddress" name="address">
                            <span class="text-danger mt-3">@error('address') {{$message}} @enderror</span>
                        </div>
                        <div class="col-md-6">
                            <label for="marketingPackage" class="form-label">Package</label>
                            <select name="package" class="form-select report_contact_us_form_control" id="marketingPackage">
                                <option selected>Choose Package ...</option>
                                <option value="1">Basic </option>
                                <option value="2">Standard </option>
                                <option value="3">Premium </option>
                            </select>
                            <span class="text-danger mt-3">@error('package') {{$message}} @enderror</span>
                        </div>
                        <div class="col-md-6">
                            <label for="marketingSiteLink" class="form-label">Site Link</label>
                            <input type="text" class="form-control" id="marketingSiteLink" name="link">
                            <span class="text-danger mt-3">@error('link') {{$message}} @enderror</span>
                        </div>
                        <div class="col-md-6">
                            <label for="marketingStarted" class="form-label">Started</label>
                            <input type="date" class="form-control" id="marketingStarted" onfocus="this.showPicker()" name="s_date">
                            <span class="text-danger mt-3">@error('s_date') {{$message}} @enderror</span>
                        </div>
                        <div class="col-md-6">
                            <label for="marketingExpired" class="form-label">Expired</label>
                            <input type="date" class="form-control" id="marketingExpired" onfocus="this.showPicker()" name="e_date">
                            <span class="text-danger mt-3">@error('e_date') {{$message}} @enderror</span>
                        </div>
                        <div class="col-md-6">
                            <label for="marketingImage" class="form-label">Choose Image</label>
                            <input name="image" class="form-control" type="file" id="marketingImage">
                            <span class="text-danger mt-3">@error('image') {{$message}} @enderror</span>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Marketing Post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" method="POST" action="{{route('marketing_update')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="market_id" id="market_id">
                        <div class="col-md-6">
                            <label for="marketingName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                            <span class="text-danger mt-3">@error('name') {{$message}} @enderror</span>
                        </div>
                        <div class="col-md-6">
                            <label for="marketingMobile" class="form-label">Mobile No.</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                            <span class="text-danger mt-3">@error('phone') {{$message}} @enderror</span>
                        </div>
                        <div class="col-12">
                            <label for="marketingCompany" class="form-label">Company</label>
                            <input type="text" class="form-control" id="company" name="company">
                            <span class="text-danger mt-3">@error('company') {{$message}} @enderror</span>
                        </div>
                        <div class="col-12">
                            <label for="marketingAddress" class="form-label">Address </label>
                            <input type="text" class="form-control" id="address" name="address">
                            <span class="text-danger mt-3">@error('address') {{$message}} @enderror</span>
                        </div>
                        <div class="col-md-6">
                            <label for="marketingPackage" class="form-label">Package</label>
                            <select name="package" class="form-select report_contact_us_form_control" id="package">
                                <option selected>Choose...</option>
                                <option value="1">Basic</option>
                                <option value="2">Standard</option>
                                <option value="3">Premium</option>
                            </select>
                            <span class="text-danger mt-3">@error('package') {{$message}} @enderror</span>
                        </div>
                        <div class="col-md-6">
                            <label for="marketingSiteLink" class="form-label">Site Link</label>
                            <input type="text" class="form-control" id="link" name="link">
                            <span class="text-danger mt-3">@error('link') {{$message}} @enderror</span>
                        </div>
                        <div class="col-md-6">
                            <label for="marketingStarted" class="form-label">Started</label>
                            <input type="date" class="form-control" id="s_date" onfocus="this.showPicker()" name="s_date">
                            <span class="text-danger mt-3">@error('s_date') {{$message}} @enderror</span>
                        </div>
                        <div class="col-md-6">
                            <label for="marketingExpired" class="form-label">Expired</label>
                            <input type="date" class="form-control" id="e_date" onfocus="this.showPicker()" name="e_date">
                            <span class="text-danger mt-3">@error('e_date') {{$message}} @enderror</span>
                        </div>
                        <div class="col-md-6">
                            <label for="marketingImage" class="form-label">Choose Image</label>
                            <input name="image" class="form-control" type="file" id="image">
                            <span class="text-danger mt-3">@error('image') {{$message}} @enderror</span>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.include.errors')

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link {{request()->is('marketing') ? 'active': '' }} " href="{{url('/marketing')}}" role="tab" aria-controls="home" aria-selected="true">Post list</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link {{request()->is('expire') ? 'active': '' }}" href="{{url('/expire')}}" role="tab" aria-controls="profile" aria-selected="false">Expired Ad</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link {{request()->is('form') ? 'active': '' }}" href="{{url('/form')}}" role="tab" aria-controls="contact" aria-selected="false">Request Ad</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane {{request()->is('marketing') ? 'active': '' }} table-responsive" id="{{url('/marketing')}}" role="tabpanel" aria-labelledby="home-tab">
        <table id="example" class="table table-striped-center" style="width:100%">
            <thead>
                <tr>
                    <th>SL.</th>
                    <th>Name</th>
                    <th>Mobile no.</th>
                    <th>Image</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>Package</th>
                    <th>Site Link</th>
                    <th>Started</th>
                    <th>Expired</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($marketing as $key => $market)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$market->name}}</td>
                    <td>{{$market->phone}}</td>
                    <td>
                        <img src="{{url('public/uploads/marketings/'.$market->image)}}" alt="img" srcset="" width="100" height="100">
                    </td>
                    <td style="line-break: anywhere;">{{$market->company}}</td>
                    <td style="line-break: anywhere;">{{$market->address}}</td>
                    <td>
                        @if($market->package == 1)
                        Basic
                        @endif
                        @if($market->package == 2)
                        Standard
                        @endif
                        @if($market->package == 3)
                        Premium
                        @endif

                    </td>
                    <td>
                        <a class="btn btn-info" href="{{$market->link}}" target="_blank">Preview</a>
                    </td>
                    <td>{{$market->s_date}}</td>
                    <td>{{$market->e_date}}</td>
                    <td>
                        <button type="button" class="btn btn-primary editbtn" value="{{$market->id}}">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </button>

                        <a class="btn btn-danger" href="{{route('marketing_delete',$market->id)}}">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                </tr>

                @endforeach
            </tbody>

        </table>
    </div>
    <div class="tab-pane {{request()->is('expire') ? 'active': '' }} table-responsive" id="{{url('/expire')}}" role="tabpanel" aria-labelledby="profile-tab">
        <table id="example" class="table table-striped " style="width:100%">
            <thead>
                <tr>
                    <th>SL.</th>
                    <th>Name</th>
                    <th>Mobile no.</th>
                    <th>Image</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>Package</th>
                    <th>Site Link</th>
                    <th>Started</th>
                    <th>Expired</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($expired as $key => $expire)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$expire->name}}</td>
                    <td>{{$expire->phone}}</td>
                    <td>
                        <img src="{{url('public/uploads/marketings/'.$expire->image)}}" alt="img" srcset="" width="100" height="100">
                    </td>
                    <td style="line-break: anywhere;">{{$expire->company}}</td>
                    <td style="line-break: anywhere;">{{$expire->address}}</td>
                    <td>
                        @if($expire->package == 1)
                        Basic
                        @endif
                        @if($expire->package == 2)
                        Standard
                        @endif
                        @if($expire->package == 3)
                        Premium
                        @endif

                    </td>
                    <td>
                        <a class="btn btn-info" href="{{$expire->link}}" target="_blank">Preview</a>
                    </td>
                    <td>{{$expire->s_date}}</td>
                    <td>{{$expire->e_date}}</td>
                    <td>
                    <button type="button" class="btn btn-primary editbtn" value="{{$expire->id}}">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </button>

                        <a class="btn btn-danger" href="{{route('marketing_delete',$expire->id)}}">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="tab-pane {{request()->is('form') ? 'active': '' }}" table-responsive" id="{{url('/form')}}" role="tabpanel" aria-labelledby="contact-tab">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>SL.</th>
                    <th>Name</th>
                    <th>Mobile no.</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>wanted Package</th>
                    <th>Massage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($forms as $key => $form)
                    <td>{{$key+1}}</td>
                    <td>{{$form->name}}</td>
                    <td>{{$form->phone}}</td>
                    <td>{{$form->company_name}}</td>
                    <td>{{$form->company_address}}</td>
                    <td>
                        @if($form->package == 1)
                        Basic
                        @endif

                        @if($form->package == 2)
                        Standard
                        @endif

                        @if($form->package == 3)
                        Premium
                        @endif
                    </td>
                    <td style="line-break: anywhere;">{{$form->massage}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
@push('custom-scripts')
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();

        @if(Session::has('add') && count($errors) > 0)
        $('#exampleModal').modal('show');
        @endif

        @if(Session::has('update') && count($errors) > 0)
        $('#editmodal').modal('show');
        @endif


        $(document).on('click', '.editbtn', function() {
            var market_id = $(this).val();
            $('#editmodal').modal('show');
            $.ajax({
                tyoe: "GET",
                url: "/marketing/edit/" + market_id,
                success: function(response) {
                    // console.log(response.market.name);
                    $('#name').val(response.market.name);
                    $('#phone').val(response.market.phone);
                    $('#company').val(response.market.company);
                    $('#address').val(response.market.address);
                    $('#package').val(response.market.package);
                    $('#link').val(response.market.link);
                    $('#s_date').val(response.market.s_date);
                    $('#e_date').val(response.market.e_date);
                    $('#market_id').val(market_id);
                }

            });
        });
    });
</script>
@endpush
