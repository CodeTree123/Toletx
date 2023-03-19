@extends('frontend.master.post_master')
<title>Toletx-Marketing</title>
@section('content')
<!-- Section Start -->
<section class="text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class=" col-lg-8 col-md-12 col-sm-12 ">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                <div class="report-contact-form">
                    <h2>Please fillup this form</h2>
                    <form class="report-form-main  mt-3" action="{{route('Form')}}" method="post">
                        @csrf

                        @if(Auth::user())
                        <div class="input-group mb-3">
                            <span class="input-group-text report-form" id="basic-addon1">
                                <i class="fas fa-user"></i>
                            </span>
                            <input id="x" type="text" class="form-control report_contact_us_form_control" placeholder="Enter Name" aria-label="name" name="name" readonly aria-describedby="basic-addon1" value="{{Auth::user()->name}}">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text report-form" id="basic-addon1">
                                <i class="fas fa-phone"></i>
                            </span>
                            <input type="tel" class="form-control report_contact_us_form_control" placeholder="Enter Contact Number" aria-label="tel" name="phone"  readonly aria-describedby="basic-addon1" value="{{Auth::user()->phone}}">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text report-form" for="inputGroupSelect01">
                                <i class="fas fa-hand-pointer"></i>
                            </span>
                            <select name="package" class="form-select report_contact_us_form_control" id="inputGroupSelect01">
                                <option selected>Choose your prefered Package</option>
                                <option value="1">Basic package</option>
                                <option value="2">Standard package</option>
                                <option value="3">Premium package</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text report-form" for="inputGroupSelect01">
                                <i class="fa-sharp fa-solid fa-building"></i>
                            </span>
                            <input type="text" class="form-control report_contact_us_form_control" placeholder="Organization Name" aria-label="name" name="company_name" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text report-form" for="inputGroupSelect01">
                                <i class="fa-sharp fa-solid fa-building"></i>
                            </span>
                            <input type="text" class="form-control report_contact_us_form_control" placeholder="Organization Address" aria-label="name" name="company_address" aria-describedby="basic-addon1">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="massage" placeholder="Your Message" id="exampleFormControlTextarea1" rows="6" style="height:100px;"></textarea>
                        </div>
                        @else
                        <div class="input-group mb-3">
                            <span class="input-group-text report-form" id="basic-addon1">
                                <i class="fas fa-user"></i>
                            </span>
                            <input id="x" type="text" class="form-control report_contact_us_form_control" placeholder="Enter Name" aria-label="name" name="name" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text report-form" id="basic-addon1">
                                <i class="fas fa-phone"></i>
                            </span>
                            <input type="tel" class="form-control report_contact_us_form_control" placeholder="Enter Contact Number" aria-label="tel" name="phone" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text report-form" for="inputGroupSelect01">
                                <i class="fas fa-hand-pointer"></i>
                            </span>
                            <select name="package" class="form-select report_contact_us_form_control" id="inputGroupSelect01">
                                <option selected>Choose your prefered Package</option>
                                <option value="1">Basic package</option>
                                <option value="2">Standard package</option>
                                <option value="3">Premium package</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text report-form" for="inputGroupSelect01">
                                <i class="fa-sharp fa-solid fa-building"></i>
                            </span>
                            <input type="text" class="form-control report_contact_us_form_control" placeholder="Organization Name" aria-label="name" name="company_name" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text report-form" for="inputGroupSelect01">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <input type="text" class="form-control report_contact_us_form_control" placeholder="Organization Address" aria-label="name" name="company_address" aria-describedby="basic-addon1">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="massage" placeholder="Your Message" id="exampleFormControlTextarea1" rows="6" style="height:100px;"></textarea>
                        </div>
                        @endif
                        <div class="input-group mb-3">
                            <button type="submit" class="btn  w-100 btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section End -->
@endsection