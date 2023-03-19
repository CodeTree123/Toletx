@extends('admin.admin_master')
@section('content')
<style>
    body {
        margin-top: 20px;
        background: #FAFAFA;
    }

    .row {
        line-height: 0.05rem;
    }

    .order-card {
        color: #fff;
    }

    .bg-c-blue {
        background: linear-gradient(45deg, #4099ff, #73b4ff);
    }

    .bg-c-green {
        background: linear-gradient(45deg, #2ed8b6, #59e0c5);
    }

    .bg-c-yellow {
        background: linear-gradient(45deg, #FFB64D, #ffcb80);
    }

    .bg-c-pink {
        background: linear-gradient(45deg, #FF5370, #ff869a);
    }


    .card {
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
        box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
        border: none;
        margin-bottom: 30px;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .card .card-block {
        padding: 25px;
    }

    .order-card i {
        font-size: 63px;
    }

    .f-left {

        font-size: 63px;
    }

    .f-right {
        float: right;
        font-size: 32px;
    }
</style>
<link rel="stylesheet" href="{{asset('Frontend/assets/css/icon.css')}}">

<div class="container">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6>
                    <i class="fa-solid fa-user-plus"></i>
                        <span class="f-right">{{$user}}</span>
                    </h6>
                    <p class=" text-end">This Year {{ $user_year }}</p>
                    <p class=" text-end">This Month {{ $user_month }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-room service_item f-left"></i>
                       <span class="f-right">{{$room}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $room_year }}</p>
                    <p class=" text-end">Monthly Post {{ $room_month }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-flat service_item f-left"></i>
                       <span class="f-right">{{$flat}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $flat_year }}</p>
                    <p class=" text-end">Monthly Post {{ $flat_month }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-building service_item f-left"></i>
                       <span class="f-right">{{$building}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $building_year }}</p>
                    <p class=" text-end">Monthly Post {{ $building_month }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-garage service_item f-left"></i>
                       <span class="f-right">{{$garage}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $garage_year }}</p>
                    <p class=" text-end">Monthly Post {{ $garage_month }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-hotel service_item f-left"></i>
                       <span class="f-right">{{$hotel}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $hotel_year }}</p>
                    <p class=" text-end">Monthly Post {{ $hotel_month }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-hostel service_item f-left"></i>
                       <span class="f-right">{{$hostel}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $hostel_year }}</p>
                    <p class=" text-end">Monthly Post {{ $hostel_month }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-resort service_item f-left"></i>
                       <span class="f-right">{{$resort}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $resort_year }}</p>
                    <p class=" text-end">Monthly Post {{ $resort_month }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-office service_item f-left"></i>
                       <span class="f-right">{{$office}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $office_year }}</p>
                    <p class=" text-end">Monthly Post {{ $office_month }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-shop service_item f-left"></i>
                       <span class="f-right">{{$shop}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $shop_year }}</p>
                    <p class=" text-end">Monthly Post {{ $shop_month }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-community_hall service_item f-left"></i>
                       <span class="f-right">{{$hall}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $hall_year }}</p>
                    <p class=" text-end">Monthly Post {{ $hall_month }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-factory service_item f-left"></i>
                       <span class="f-right">{{$factory}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $factory_year }}</p>
                    <p class=" text-end">Monthly Post {{ $factory_month }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-warehouse service_item f-left"></i>
                       <span class="f-right">{{$warehouse}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $warehouse_year }}</p>
                    <p class=" text-end">Monthly Post {{ $warehouse_month }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-land service_item f-left"></i>
                       <span class="f-right">{{$land}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $land_year }}</p>
                    <p class=" text-end">Monthly Post {{ $land_month }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-pond service_item f-left"></i>
                       <span class="f-right">{{$pond}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $pond_year }}</p>
                    <p class=" text-end">Monthly Post {{ $pond_month }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-ghat service_item f-left"></i>
                       <span class="f-right">{{$ghat}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $ghat_year }}</p>
                    <p class=" text-end">Monthly Post {{ $ghat_month }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-camping service_item f-left"></i>
                       <span class="f-right">{{$pool}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $pool_year }}</p>
                    <p class=" text-end">Monthly Post {{ $pool_month }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-shooting_spot service_item f-left"></i>
                       <span class="f-right">{{$camp}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $camp_year }}</p>
                    <p class=" text-end">Monthly Post {{ $camp_month }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-picnic-spot service_item f-left"></i>
                       <span class="f-right">{{$shoot}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $shoot_year }}</p>
                    <p class=" text-end">Monthly Post {{ $shoot_month }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-exhibition_center service_item f-left"></i>
                       <span class="f-right">{{$picnic}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $picnic_year }}</p>
                    <p class=" text-end">Monthly Post {{ $picnic_month }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-rooftop service_item f-left"></i>
                       <span class="f-right">{{$exhi}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $exhi_year }}</p>
                    <p class=" text-end">Monthly Post {{ $exhi_month }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-bilboard service_item f-left"></i>
                       <span class="f-right">{{$roof}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $roof_year }}</p>
                    <p class=" text-end">Monthly Post {{ $roof_month }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-room service_item f-left"></i>
                       <span class="f-right">{{$bilboard}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $bilboard_year }}</p>
                    <p class=" text-end">Monthly Post {{ $bilboard_month }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6>
                        <i class="icon-room service_item f-left"></i>
                       <span class="f-right">{{$user}}</span>
                    </h6>
                    <p class=" text-end">Yearly post {{ $user_year }}</p>
                    <p class=" text-end">Monthly Post {{ $user_month }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
