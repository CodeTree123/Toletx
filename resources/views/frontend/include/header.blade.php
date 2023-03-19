<div class="body">
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start" tab-index="-1" id="sidebar" aria-labelledby="sidebar-label">
        <div class="offcanvas-header">
            <a href="{{route('index')}}">
                <img src="{{asset('Frontend/assets/img/header/toletx_logo.png')}}" alt="..." width="100" class="logo1">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="input-group mt-3 mb-3">
                <form action="" method="get" class="d-flex my-2">
                    <input class="typeahead main_search form-control" type="search" name="query" placeholder="Search" aria-label="Search" id="offcanvas_search">
                    <div class="input-group-append">
                        <button type="submit" class="btn  btn-lg btn2 btn-search-offcanvas" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="list-group">
                <a href="{{route('package')}}" class="list-group-item list-group-item-action " aria-current="true">
                    Package Information
                </a>
                <!-- <a href="{{route('my_shortlist')}}" class="list-group-item list-group-item-action">My Shortlist {{count(Cart::content())}}</a> -->
            </div>
            <div class="form-check form-switch d-flex align-items-center mt-3">
                <label class="form-check-label lite-mode" id="mode_indicator" for="liteSwitch">Lite Mode</label>
                <input class="form-check-input ms-3 mode-switch" onclick="changeStatus()" type="checkbox" id="liteSwitch">
            </div>
            <script>
                function myFunction() {
                    var x = document.getElementById("mode_indicator");
                    if (x.innerHTML === "Lite Mode") {
                        x.innerHTML = " Dark Mode";
                    } else if (x.innerHTML === "Dark Mode") {
                        x.innerHTML = " Lite Mode";
                    }
                }
                var liteSwitch = document.getElementById("liteSwitch");
                var fullbody = document.body;
                if (localStorage.getItem('dark_switch_activated') === null) {
                    localStorage.setItem('dark_switch_activated', "false");
                }
                checkStatus()

                function checkStatus() {
                    if (localStorage.getItem('dark_switch_activated') === "true") {
                        liteSwitch.checked = true;
                        fullbody.setAttribute("data-theme", "lite");
                    } else {}
                }

                function changeStatus() {
                    if (localStorage.getItem('dark_switch_activated') === "true") {
                        localStorage.setItem('dark_switch_activated', "false");
                        fullbody.removeAttribute("data-theme");
                        myFunction();
                    } else {
                        localStorage.setItem('dark_switch_activated', "true");
                        fullbody.setAttribute("data-theme", "lite");
                        myFunction();
                    }
                }
            </script>
        </div>
    </div>
    <style>
        .icon-hamburger_with_search {
            font-weight: bold !important;
        }

        .icon-hamburger_with_search,
        .notification-icon,
        .setting-icon {
            color: #fff;
        }
    </style>
    <!-- offcanvas end-->
    <div class=" container-fluid">
        <div class="  row px-4 px-xs align-items-center bg-dark  justify-content-lg-between justify-content-md-between justify-content-sm-between  justify-content-xs-between justify-content-between">
            <a class="col-lg-1 col-md-1 col-sm-1 col-1 mt-2" href="#sidebar" data-bs-toggle="offcanvas" role="button" aria-controlls="sidebar">
                <i class="  fas  h3 icon-hamburger_with_search"></i>
            </a>
            <div class="col-lg-2 col-md-2 col-sm-3 col-3">
                <a class="navbar-brand" href="{{route('index')}}">
                    <img src="{{asset('Frontend/assets/img/header/toletx_logo.png')}}" alt="..." class="logo">
                </a>
            </div>
            <div class="col-lg-5 col-md-4 col-sm-4 my-1 searchZ">
                <form action="" method="GET">
                    <div class="input-group ">
                        <input name="query" type="search" class="typeahead main_search form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1" id="autocomplete">
                        <div class="input-group-append">
                            <button type="submit" class="btn  btn-lg btn2 btn-search-offcanvas" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            @if(Auth::user()) 
            <!-- <div class="col-lg-1  col-md-1 col-sm-1 col-2 dropdown ">
                <button class="btn bell px-lg-0 px-md-0 px-sm-0 px-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="Dropstart">
                    <i class="far fa-bell notification-icon "></i>
                </button>
                
            </div> -->
            <!-- Settings -->
            <div class="col-lg-1  col-md-1 col-sm-1 col-2 dropdown ps-0 ">
                <button class="btn setting px-lg-0 px-md-0 px-sm-0 px-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    @if (auth()->user()->image == null )
                    @if(auth()->user()->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="rounded-circle mx-auto img-img" alt="" srcset="" width="32" height="32">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="rounded-circle mx-auto img-img" alt="" srcset="" width="32" height="32">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{(Auth::user()->image)}}" class="rounded-circle mx-auto img-img" alt="" srcset="" width="32" height="32">
                    @endif
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{route('profile')}}">Profile</a></li>
                    <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                </ul>
            </div>
            <!-- Button trigger modal -->
            <div class="col-lg-1  col-md-1 col-sm-1 col-2 post">
                <button type="button" id="post_your_ad" class=" btn btn-primary  btn-toggole-modal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <!-- <i class="fa-solid fa-plus white-text"></i> -->
                    Post
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content  post-modal">
                        <div class="modal-header text-center">
                            <h5 class="modal-title " id="exampleModalLabel">Choose a Service</h5>
                            <button type="button" class="close modal-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fa-solid fa-xmark"></i></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <link rel="stylesheet" href="{{asset('Frontend/assets/css/icon.css')}}">
                            <div class="row m-0 mt-2  justify-content-center service-group-row">
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_room')}}">
                                    <span class="icon-room service_item "></span>
                                    <br>
                                    <span class="service_item_name"> Room</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_flat')}}">
                                    <span class="icon-flat service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Flat</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_building')}}">
                                    <span class="icon-building service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Building</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_parking_spot')}}">
                                    <span class="icon-garage service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Garage</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_hotel')}}">
                                    <span class="icon-hotel service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Hotel</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_hostel')}}">
                                    <span class="icon-hostel service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Hostel</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_resort')}}">
                                    <span class="icon-resort service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Resort</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_office')}}">
                                    <span class="icon-office service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Office</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_shop')}}">
                                    <span class="icon-shop service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Shop</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_community')}}">
                                    <span class="icon-community_hall service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Community Hall</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_factory')}}">
                                    <span class="icon-factory service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Factory</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_warehouse')}}">
                                    <span class="icon-warehouse service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Warehouse</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_land')}}">
                                    <span class="icon-land service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Land</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_pond')}}">
                                    <span class="icon-pond service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Pond</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_ghat')}}">
                                    <span class="icon-ghat service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Ghat</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_swimmingpool')}}">
                                    <span class="icon-swimming_pool service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Swimming Pool</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_playground')}}">
                                    <span class="icon-camping service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Camp Site</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_shooting')}}">
                                    <span class="icon-shooting_spot service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Shooting Spot</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_picnic')}}">
                                    <span class="icon-picnic-spot service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Picnic Spot</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_exhibution')}}">
                                    <span class="icon-exhibition_center service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Exhibition
                                        Center</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_rooftop')}}">
                                    <span class="icon-rooftop service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Rooftop</span>
                                </a>
                                <a class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" href="{{route('post_bilboard')}}">
                                    <span class="icon-bilboard service_item"></span>
                                    <br>
                                    <span class="service_item_name"> Bilboard</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <!-- Button trigger modal -->
            <div class="col-md-2 col-2">
                <button type="button" id="post_your_ad" class="btn btn-primary btn-toggole-modal"> 
                    <!-- <i class="fa-solid fa-plus"></i> -->
                    Post
                </button>
                <!-- Unauthorised Toast Message -->
                <div class="position-fixed top-3 end-0 p-sm-3 p-2" style="z-index: 11">
                    <div id="liveToast" class="toast align-items-center text-white border-0" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="d-flex p-3 toast-background">
                            <div class="toast-body">
                                <h1 class="font-weight-bold"><a href="{{url('/#login')}}"> <i class="fa-solid fa-circle-exclamation me-3"></i> Please login </a></h1>
                            </div>
                            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var toastTrigger = document.getElementById('post_your_ad')
                var toastLiveExample = document.getElementById('liveToast')
                if (toastTrigger) {
                    toastTrigger.addEventListener('click', function() {
                        var toast = new bootstrap.Toast(toastLiveExample)
                        toast.show()
                    })
                }
            </script>
        </div>
        @endif
    </div>
</div>
<!-- auto complete search script -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1RWHRoNiXQ3GbGzMZRuhWsh-t_42R6co&libraries=places&callback=initAutocomplete" async defer></script>

<script>
    let autocomplete;
    let offcanvas_search;
    let user_location;
    let room_search_autocomplete;
    let flat_search_autocomplete;
    let building_search_autocomplete;
    let garage_search_autocomplete;
    let hotel_search_autocomplete;
    let hostel_search_autocomplete;
    let resort_search_autocomplete;
    let office_search_autocomplete;
    let shop_search_autocomplete;
    let community_search_autocomplete;
    let factory_search_autocomplete;
    let warehouse_search_autocomplete;
    let land_search_autocomplete;
    let pond_search_autocomplete;
    let ghat_search_autocomplete;
    let pool_search_autocomplete;
    let camp_search_autocomplete;
    let shooting_search_autocomplete;
    let picnic_search_autocomplete;
    let exhibition_search_autocomplete;
    let roof_search_autocomplete;
    let billboard_search_autocomplete;

    function initAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            let near_place = autocomplete.getPlace();
        });
        offcanvas_search = new google.maps.places.Autocomplete(
            document.getElementById('offcanvas_search'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(offcanvas_search, 'place_changed', function() {
            let near_place = offcanvas_search.getPlace();
        });
        // user_location search
        user_location = new google.maps.places.Autocomplete(
            document.getElementById('user_location'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(user_location, 'place_changed', function() {
            let near_place = user_location.getPlace();
        });
        // Room search
        room_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('room_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(room_search_autocomplete, 'place_changed', function() {
            let near_place = room_search_autocomplete.getPlace();
        });
        // flat search
        flat_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('flat_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(flat_search_autocomplete, 'place_changed', function() {
            let near_place = flat_search_autocomplete.getPlace();
        });
        // building search
        building_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('building_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(building_search_autocomplete, 'place_changed', function() {
            let near_place = building_search_autocomplete.getPlace();
        });
        // garage search
        garage_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('garage_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(garage_search_autocomplete, 'place_changed', function() {
            let near_place = garage_search_autocomplete.getPlace();
        });
        // hotel search
        hotel_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('hotel_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(hotel_search_autocomplete, 'place_changed', function() {
            let near_place = hotel_search_autocomplete.getPlace();
        });
        // hostel search
        hostel_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('hostel_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(hostel_search_autocomplete, 'place_changed', function() {
            let near_place = hostel_search_autocomplete.getPlace();
        });
        // resort search
        resort_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('resort_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(resort_search_autocomplete, 'place_changed', function() {
            let near_place = resort_search_autocomplete.getPlace();
        });
        // office search
        office_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('office_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(office_search_autocomplete, 'place_changed', function() {
            let near_place = office_search_autocomplete.getPlace();
        });
        // shop search
        shop_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('shop_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(shop_search_autocomplete, 'place_changed', function() {
            let near_place = shop_search_autocomplete.getPlace();
        });
        // community search
        community_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('community_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(community_search_autocomplete, 'place_changed', function() {
            let near_place = community_search_autocomplete.getPlace();
        });
        // factory search
        factory_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('factory_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(factory_search_autocomplete, 'place_changed', function() {
            let near_place = factory_search_autocomplete.getPlace();
        });
        // warehouse search
        warehouse_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('warehouse_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(warehouse_search_autocomplete, 'place_changed', function() {
            let near_place = warehouse_search_autocomplete.getPlace();
        });
        // land search
        land_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('land_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(land_search_autocomplete, 'place_changed', function() {
            let near_place = land_search_autocomplete.getPlace();
        });
        // pond search
        pond_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('pond_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(pond_search_autocomplete, 'place_changed', function() {
            let near_place = pond_search_autocomplete.getPlace();
        });
        // ghat search
        ghat_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('ghat_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(ghat_search_autocomplete, 'place_changed', function() {
            let near_place = ghat_search_autocomplete.getPlace();
        });
        // pool search
        pool_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('pool_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(pool_search_autocomplete, 'place_changed', function() {
            let near_place = pool_search_autocomplete.getPlace();
        });
        // camp search
        camp_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('camp_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(camp_search_autocomplete, 'place_changed', function() {
            let near_place = camp_search_autocomplete.getPlace();
        });
        // shooting search
        shooting_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('shooting_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(shooting_search_autocomplete, 'place_changed', function() {
            let near_place = shooting_search_autocomplete.getPlace();
        });
        // picnic search
        picnic_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('picnic_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(picnic_search_autocomplete, 'place_changed', function() {
            let near_place = picnic_search_autocomplete.getPlace();
        });
        // exhibition search
        exhibition_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('exhibition_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(exhibition_search_autocomplete, 'place_changed', function() {
            let near_place = exhibition_search_autocomplete.getPlace();
        });
        // roof search
        roof_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('roof_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(roof_search_autocomplete, 'place_changed', function() {
            let near_place = roof_search_autocomplete.getPlace();
        });
        // billboard search
        billboard_search_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('billboard_search_autocomplete'), {
                types: ['establishment'],
                componentRestrictions: {
                    'country': ['BD']
                },
                fields: ['name']
            });
        google.maps.event.addListener(billboard_search_autocomplete, 'place_changed', function() {
            let near_place = billboard_search_autocomplete.getPlace();
        });
    }
</script>
