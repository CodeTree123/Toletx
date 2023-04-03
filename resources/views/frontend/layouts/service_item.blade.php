@extends('frontend.master.master')
@section('content')
<link rel="stylesheet" href="{{asset('Frontend/assets/css/icon.css')}}">
<!-- <link rel="stylesheet" href="{{asset('Frontend/assets/css/service_item.css')}}">       -->
<style>
    .test {

        border-radius: 20px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        transition: all .2s;
    }

    .test:hover {

        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        -ms-transform: scale(1.5);
        /* IE 9 */
        -webkit-transform: scale(1.5);
        /* Safari 3-8 */
        transform: scale(1.05);
    }
</style>

<div class="row m-0 mt-2   service-group-row">
    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('room')}}">
        <div class="py-3 test">
            <span class="icon-room service_item "></span>
            <br>
            <span class="service_item_name"> Room</span>
        </div>
    </a>

    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('flat')}}">
        <div class="py-3 test">
            <span class="icon-flat service_item"></span>
            <br>
            <span class="service_item_name"> Flat</span>
        </div>
    </a>

    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('building')}}">
        <div class="py-3 test">
            <span class="icon-building service_item"></span>
            <br>
            <span class="service_item_name"> Building</span>
        </div>
    </a>

    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('parking')}}">
        <div class="py-3 test">
            <span class="icon-garage service_item"></span>
            <br>
            <span class="service_item_name"> Garage</span>
        </div>
    </a>


    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('hotel')}}">
        <div class="py-3 test">
            <span class="icon-hotel service_item"></span>
            <br>
            <span class="service_item_name"> Hotel</span>
        </div>
    </a>

    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('hostel')}}">
        <div class="py-3 test">
            <span class="icon-hostel service_item"></span>
            <br>
            <span class="service_item_name"> Hostel</span>
        </div>
    </a>

    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('resort')}}">
        <div class="py-3 test">
            <span class="icon-resort service_item"></span>
            <br>
            <span class="service_item_name"> Resort</span>
        </div>
    </a>

    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('office')}}">
        <div class="py-3 test">
            <span class="icon-office service_item"></span>
            <br>
            <span class="service_item_name"> Office</span>
        </div>
    </a>


    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('shop')}}">
        <div class="py-3 test">
            <span class="icon-shop service_item"></span>
            <br>
            <span class="service_item_name"> Shop</span>
        </div>
    </a>

    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('community_hall')}}">
        <div class="py-3 test">
            <span class="icon-community_hall service_item"></span>
            <br>
            <span class="service_item_name"> Community Hall</span>
        </div>
    </a>

    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('factory')}}">
        <div class="py-3 test">
            <span class="icon-factory service_item"></span>
            <br>
            <span class="service_item_name"> Factory</span>
        </div>
    </a>

    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('warehouse')}}">
        <div class="py-3 test">
            <span class="icon-warehouse service_item"></span>
            <br>
            <span class="service_item_name"> Warehouse</span>
        </div>
    </a>

    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('land')}}">
        <div class="py-3 test">
            <span class="icon-land service_item"></span>
            <br>
            <span class="service_item_name"> Land</span>
        </div>
    </a>

    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('pond')}}">
        <div class="py-3 test">
            <span class="icon-pond service_item"></span>
            <br>
            <span class="service_item_name"> Pond</span>
        </div>
    </a>

    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('ghat')}}">
        <div class="py-3 test">
            <span class="icon-ghat service_item"></span>
            <br>
            <span class="service_item_name"> Ghat</span>
        </div>
    </a>

    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('swimming_pool')}}">
        <div class="py-3 test">
            <span class="icon-swimming_pool service_item"></span>
            <br>
            <span class="service_item_name"> Swimming Pool</span>
        </div>
    </a>

    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('playground')}}">
        <div class="py-3 test">
            <span class="icon-camping service_item"></span>
            <br>
            <span class="service_item_name"> Camp Site</span>
        </div>
    </a>

    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('shooting_spot')}}">
        <div class="py-3 test">
            <span class="icon-shooting_spot service_item"></span>
            <br>
            <span class="service_item_name"> Shooting Spot</span>
        </div>
    </a>
    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('picnic_spot')}}">
        <div class="py-3 test">
            <span class="icon-picnic-spot service_item"></span>
            <br>
            <span class="service_item_name"> Picnic Spot</span>
        </div>
    </a>

    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('exhibition_center')}}">
        <div class="py-3 test">
            <span class="icon-exhibition_center service_item"></span>
            <br>
            <span class="service_item_name"> Exhibition Center</span>
        </div>

    </a>

    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('rooftop')}}">
        <div class="py-3 test">
            <span class="icon-rooftop service_item"></span>
            <br>
            <span class="service_item_name"> Rooftop</span>
        </div>
    </a>

    <a class="col-lg-3 col-md-3 col-sm-3 col-3 px-1 mb-2 text-center " href="{{route('bilboard')}}">
        <div class="py-3 test">
            <span class="icon-bilboard service_item"></span>
            <br>
            <span class="service_item_name"> Bilboard</span>
        </div>
    </a>


</div>
<script>
    $(document).ready(function() {
        $("#hello").slideDown(300).delay(1000).slideUp(300);
    });
</script>
@endsection