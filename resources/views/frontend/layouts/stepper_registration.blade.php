<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('Frontend/assets/img/header/favicon_io/android-chrome-192x192.png')}}">


    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{asset('Frontend/assets/img/header/TOLETX-LOGO-2.ai')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Custom CSS for header  -->

    <link rel="stylesheet" href="{{asset('Frontend/assets/css/icon.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/lite.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/dark.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/responsive.css')}}">
    <!-- jQuery CDN -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



    <script>
        // Render blocking JS:
        if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
    </script>


    <title>Toletx-Registration</title>
</head>

<body>
    @include('frontend.include.header')

    <!-- Section Start -->
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row regirstration-row">
                <div class="container-fluid" id=" ">
                    <div class="row justify-content-center mt-0">
                        <div class="registration-form-card-body col-11 col-sm-9 col-md-7 col-lg-6 p-0 mt-3 mb-2">
                            <div class="registration-form-card card px-0 pt-4 pb-0 mt-3 mb-3">
                                <h2 class="text-center"><strong>Sign Up Your User Account</strong></h2>
                                <p class="text-center">Fill all form field to go to next step</p>
                                <div class="row m-0">
                                    <div class="col-md-12 mx-0 px-0">
                                        <style>
                                            .progress-bar {
                                                margin: 25px 0;
                                                padding: 0;
                                                overflow: hidden;
                                                /* counter-reset: step; */
                                                display: flex;
                                                flex-direction: row;
                                                align-items: center;
                                                position: relative;
                                                background-color: transparent;
                                            }

                                            .progress-bar li {
                                                list-style-type: none;
                                                width: 100%;
                                                font-size: 13px;
                                                font-weight: 500;
                                                text-align: center;
                                                position: relative;
                                                color: #fff;
                                            }

                                            #step1::before {
                                                font-family: FontAwesome;
                                                content: "\f023";
                                                color: #fff;
                                            }

                                            #step2::before {
                                                font-family: FontAwesome;
                                                content: "\f007";
                                                color: #fff;
                                            }

                                            #step3::before {
                                                font-family: FontAwesome;
                                                content: "\f00c";
                                                color: #fff;
                                            }

                                            .progress-bar li::before {
                                                position: relative;
                                                z-index: 2;
                                                content: counter(step);
                                                /* counter-increment: step; */
                                                width: 40px;
                                                height: 40px;
                                                line-height: 40px;
                                                display: block;
                                                font-size: 1.2rem;
                                                font-weight: 600;
                                                text-align: center;
                                                border-radius: 100px;
                                                margin: 0 auto 10px auto;
                                                background-color: #191919;
                                                color: #f5f5f5;
                                            }

                                            .progress-bar li:after {
                                                content: '';
                                                width: 100%;
                                                height: 6px;
                                                position: absolute;
                                                left: -50%;
                                                top: 17px;
                                                z-index: 1;
                                                background-color: #191919;
                                            }

                                            .progress-bar li:first-child:after {
                                                content: none;
                                            }

                                            .progress-bar li.active::before,
                                            .progress-bar li.active::after {
                                                /* background: linear-gradient(to right, #FF1046 20%, #E01660 40%, #E01660 60%, #FF1046 80%); */
                                                background: #ff00bf;
                                                background-size: 200% auto;
                                                /* -webkit-animation: effect 1s linear infinite;
                                                animation: effect 1s linear infinite; */
                                                color: #111111;
                                            }

                                            @keyframes effect {
                                                to {
                                                    background-position: -200% center;
                                                }
                                            }
                                        </style>

                                        <ul class="progress-bar">
                                            <li id="step1" class="active">Account</li>
                                            <li id="step2">Personal</li>
                                            <li id="step3">Finish</li>
                                        </ul>

                                    </div>
                                    <div class="col-md-12 mx-0">
                                        <style>
                                            .formSteps .form-label,
                                            .formSteps .custom-file-label,
                                            .formSteps .password_toggler,
                                            .formSteps .form-check-label {
                                                color: #fff;
                                            }

                                            .formSteps .action-button {
                                                width: 130px;
                                                background: #ff00bf;
                                                font-weight: bold;
                                                color: white;
                                                border: 0 none;
                                                border-radius: 25px;
                                                cursor: pointer;
                                                padding: 10px 5px;
                                                margin: 10px 5px
                                            }

                                            .formSteps .action-previous {
                                                background: #00ffff;
                                                color: #111111;
                                            }

                                            .formSteps .step_img_input {
                                                width: 65%;
                                            }
                                        </style>
                                        <form action="{{route('stepper_1')}}" method="POST" enctype="multipart/form" id="formStep1" class="mx-4 formSteps">
                                            @csrf
                                            <input type="hidden" class="new_id" name="new_uID" value="">
                                            <div class="mb-3">
                                                <label for="userName" class="form-label">User Name</label>
                                                <input type="text" name="name" class="form-control " id="userName">
                                                <span class="text-danger name_error clean_error"></span>
                                            </div>

                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Phone No.</label>
                                                <input type="tel" name="phone" value="1" class="form-control " id="phone" readonly>
                                                <span class="text-danger phone_error clean_error"></span>
                                            </div>

                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email (Optional)</label>
                                                <input type="email" name="email" class="form-control " id="email">
                                                <span class="text-danger email_error clean_error"></span>
                                            </div>

                                            <div class="mb-3">
                                                <label for="profilePicture" class="form-label">Add Profile Picture (Optional)</label>
                                                <input class="form-control" type="file" id="profilePicture" name="photo">
                                                <span class="text-danger photo_error clean_error"></span>

                                            </div>

                                            <div class="mb-3">
                                                <label for="password-field" class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control " id="password-field">
                                                <span class="text-danger password_error clean_error"></span>
                                            </div>

                                            <div class="mb-3">
                                                <label for="password-field" class="form-label">Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="form-control  " id="password-field-confirm">
                                                <span class="text-danger password_confirmation_error clean_error"></span>
                                            </div>

                                            <div class="my-3 password_toggler" style="cursor: pointer;">
                                                <i class="fa fa-eye-slash" id="eye_icon" aria-hidden="true"></i>
                                                <span id="show_hide_password" class="">
                                                    Show Password
                                                </span>
                                            </div>

                                            <div class="mb-3 text-center">
                                                <button type="submit" class="my-0 next action-button">Next Step</button>
                                            </div>

                                        </form>
                                        <form action="{{route('stepper_2')}}" method="POST" enctype="multipart/form" id="formStep2" class="mx-4 formSteps">
                                            @csrf
                                            <h2 class="fs-title mb-3">Personal Information</h2>
                                            <input type="hidden" class="new_id" name="new_uID" value="">
                                            <div class="mb-3">
                                                <label for="fName" class="form-label">Father's Name (Optional)</label>
                                                <input type="text" name="father_name" class="form-control" id="fName" placeholder="">
                                                <span class="text-danger father_name_error clean_error"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="mName" class="form-label">Mother's Name (Optional)</label>
                                                <input type="text" name="mother_name" class="form-control" id="mName" placeholder="">
                                                <span class="text-danger mother_name_error clean_error"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="mName" class="form-label">Date of Birth </label>
                                                <input class="form-control" name="date_of_birth" type="date" name="dob" placeholder=" " />
                                                <span class="text-danger date_of_birth_error clean_error"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="address" class="form-label">Address (Optional)</label>
                                                <input type="text" class="form-control" name="address" id="user_location" name="address" />
                                                <span class="text-danger address_error clean_error"></span>
                                            </div>

                                            <div class="mb-3">
                                                <label for="nationality" class="form-label">Nationality (Optional)</label>
                                                <input type="text" name="nationality" class="form-control" id="nationality">
                                                <span class="text-danger nationality_error clean_error"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputGender" class="form-label">Gender</label>
                                                <select id="inputGender" name="gender" class="form-select">
                                                    <option selected>Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female"> Female</option>
                                                    <option value="Other"> Other</option>
                                                </select>
                                                <span class="text-danger gender_error clean_error"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputQus" class="form-label">Choose Security Question (Optional)</label>
                                                <select id="inputQus" name="security_question" class="form-select">
                                                    <option value="" selected>Choose Security Question</option>
                                                    <option value="favourite_color">Your Favourite Color?</option>
                                                    <option value="favourite_pet"> Your Favourite Pet?</option>
                                                    <option value="favourite_place"> Your Favourite Place?</option>
                                                </select>
                                                <span class="text-danger security_question_error clean_error"></span>
                                            </div>
                                            <div class="inputAns mb-3 d-none">
                                                <label for="favourite_ans" class="form-label">Type Your Answer</label>
                                                <input type="text" name="favourite_ans" class="form-control" id="favourite_ans">
                                                <span class="text-danger favourite_ans_error clean_error"></span>
                                            </div>

                                            <div class="mt-4 mb-3 text-center">
                                                <div class="d-flex justify-content-between align-items-center" data-toggle="tooltip" data-placement="top" title="Upload Scanned Copy of your Birth Certificate/NID/Driving License/Passport">
                                                    <label class="form-label" for="inputGroupFile03">Add Photo ID Front</label>
                                                    <input type="file" name="n_photo1" class="form-control step_img_input" id="inputGroupFile03">
                                                </div>
                                                <span class="text-danger n_photo1_error clean_error"></span>
                                            </div>
                                            <div class="mt-4 mb-3 text-center">
                                                <div class="d-flex justify-content-between align-items-center" data-toggle="tooltip" data-placement="top" title="Upload Scanned Copy of your Birth Certificate/NID/Driving License/Passport">
                                                    <label class="form-label" for="inputGroupFile04">Add Photo ID Back</label>
                                                    <input type="file" name="n_photo2" class="form-control step_img_input" id="inputGroupFile04">
                                                </div>
                                                <span class="text-danger n_photo2_error clean_error"></span>
                                            </div>

                                            <div class="d-flex flex-column mb-3">
                                                <div class="form-check ps-4">
                                                    <input class="form-check-input" type="checkbox" name="trems" value="1" id="terms">
                                                    <label class="form-check-label" for="terms">
                                                        Agree to our <a href="#" class="text-decoration-underline">terms & conditions</a>
                                                    </label>
                                                </div>
                                                <span class="text-danger trems_error clean_error"></span>
                                            </div>

                                            <div class="mb-3 text-center">
                                                <button type="button" class="my-0 previous action-button action-previous">Previous</button>
                                                <button type="button" class="my-0 inactive_submit action-button" data-toggle="tooltip" data-placement="top" title="Please Agreed With Our Terms & Conditions" class="red-tooltip">Confirm</button>
                                                <button type="submit" class="my-0 submit action-button d-none">Submit</button>
                                            </div>

                                        </form>
                                        <div id="formStep3" class="mx-4 formSteps">
                                            <h2 class="fs-title mb-3">Congratulations!</h2>
                                            <div class="text-center my-3">
                                                <img src="{{asset('Frontend/assets/img/success-35-512.png')}}" alt="" width="100" height="100" class="text-center">
                                                <p class="mt-3 mx-3 text-success">Your Registration Is Complete.Now You Can Go Home By
                                                    <a href="{{route('index')}}" class="text-decoration-underline">Clicking Here</a> Or Below Button.
                                                </p>
                                            </div>

                                            <div class="mb-3 text-center">
                                                <a href="{{route('index')}}" class="btn my-0 action-button">Home</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('frontend.include.footer')

    <!-- Option 2: Separate Popper and Bootstrap JS -->


    <!-- <script src="{{asset('Frontend/assets/js/stepper-form.js')}}"></script> -->

    <script>
        // $(function() {
        //     $('[data-toggle="tooltip"]').tooltip()
        // })
    </script>


    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();

            $('#formStep1').hide();
            $('#formStep3').hide();
            $(".password_toggler").on("click", function(event) {
                // event.preventDefault();
                if ($("#password-field").attr("type") == "text") {

                    $("#password-field").attr("type", "password");
                    $("#password-field-confirm ").attr("type", "password");
                    $("#eye_icon").removeClass("fa-eye");
                    $("#eye_icon").addClass("fa-eye-slash");
                    $("#show_hide_password").text("Show Password");

                } else if ($("#password-field").attr("type") == "password") {

                    $("#password-field").attr("type", "text");
                    $("#password-field-confirm ").attr("type", "text");
                    $("#eye_icon").removeClass("fa-eye-slash");
                    $("#eye_icon").addClass("fa-eye");
                    $("#show_hide_password").text("Hide Password");

                }
            });

            $(document).on("change", '#inputQus', function() {
                let check = $(this).val();
                // alert(check);
                if (!check) {
                    $('.inputAns').addClass('d-none');
                } else {
                    $('.inputAns').removeClass('d-none');
                }
            });

            $(document).on("click", '#terms', function() {
                if ($(this).prop("checked") == true) {

                    $('.inactive_submit').addClass('d-none');
                    $('.submit').removeClass('d-none');

                } else if ($(this).prop("checked") == false) {

                    $('.inactive_submit').removeClass('d-none');
                    $('.submit').addClass('d-none');

                }
            });



            $(document).on('submit', '#formStep1', function(e) {
                e.preventDefault();
                var url = $(this).attr('action');

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        if (data.status == 200) {
                            $('.clean_error').text("");
                            $('.new_id').val(data.newUser_id);
                            $('#formStep1').hide();
                            $('#step2').addClass('active');
                            $('#formStep2').show();
                            window.scrollTo(0, 0);
                        } else {
                            $('.clean_error').text("");
                            $.each(data.error, function(key, value) {
                                $('.' + key + '_error').text(value);
                            });
                            window.scrollTo(0, 0);
                        }
                    },
                });
            });
            $(document).on('submit', '#formStep2', function(e) {
                e.preventDefault();
                var url = $(this).attr('action');
                // alert(url);

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        if (data.status == 200) {
                            $('#formStep1').hide();
                            $('#formStep2').hide();
                            $('#step2').addClass('active');
                            $('#step3').addClass('active');
                            $('#formStep3').show();
                            window.scrollTo(0, 0);
                        } else {
                            $('.clean_error').text("");
                            $.each(data.error, function(key, value) {
                                $('.' + key + '_error').text(value);
                            });
                            window.scrollTo(0, 0);
                        }
                    },
                });
            });

            $(document).on("click", '.previous', function() {
                $('#formStep2').hide();
                $('#step2').removeClass('active');
                $('#formStep1').show();
                window.scrollTo(0, 0);
            });
        });
    </script>



</body>

</html>