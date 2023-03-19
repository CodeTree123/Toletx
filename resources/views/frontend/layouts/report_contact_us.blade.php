@extends('frontend.master.post_master')
<title>Toletx-Report/contact us</title>
@section('content')
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class=" col-lg-8 col-md-12 col-sm-12 ">
                <div class="report-contact-form">
                    <h2>Customer Form</h2>
                    <form class="report-form-main" method="POST" action="{{route('report_post')}}">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text report-form" id="basic-addon1">
                                <i class="fas fa-user"></i>
                            </span>
                            <input id="x" type="text" name="name" class="form-control report_contact_us_form_control" placeholder="Enter Name" aria-label="name" aria-describedby="basic-addon1" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text report-form" id="basic-addon1">
                                <i class="fas fa-phone"></i>
                            </span>
                            <input type="number" name="mobile" class="form-control report_contact_us_form_control" placeholder="Enter mobile no" aria-label="mobile" aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text report-form" id="basic-addon1">
                                <i class="fas fa-at"></i>
                            </span>
                            <input type="email" name="email" class="form-control report_contact_us_form_control" placeholder="Enter Email" aria-label="email" aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text report-form" for="inputGroupSelect01">
                                <i class="fas fa-hand-pointer"></i>
                            </span>
                            <select name="topic" class="form-select report_contact_us_form_control" id="inputGroupSelect01">
                                <option selected>Choose Subject</option>
                                <option value="inquiry">Inquiry</option>
                                <option value="claim">Claim</option>
                                <option value="complain">Complain</option>
                                <option value="others">Others</option>
                            </select>
                        </div>

                        <div class="  mb-3">
                            <textarea name="description" class="form-control" placeholder="Your Message" id="exampleFormControlTextarea1" rows="6" style="height:100px;"></textarea>
                        </div>
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