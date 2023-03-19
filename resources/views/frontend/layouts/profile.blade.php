@extends('frontend.master.master')
@section('content')
<title>Profile</title>
<!-- Header Start -->
<header class="mt-4">
    <div class="container-fluid">
        <div class="row main-search">
        </div>
        <div class="row">
            <div class="col-md-12 ">

                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">My
                            Information</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="customer_need-tab" data-bs-toggle="tab" data-bs-target="#customer_need" type="button" role="tab" aria-controls="customer_need" aria-selected="false">Post List
                        </button>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane profile-tab-pane mt-2 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <table class="table table-bordered">

                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $list)
                                    <tr>
                                        <td>{{$list->name}}</td>
                                        <td>{{$list->phone}}</td>
                                        <td>{{$list->email}}</td>
                                        <td>{{$list->gender}}</td>
                                        <td>
                                            <a href="{{route('user_edit',$list->id)}}" class="btn btn-sm btn-primary mt-3">Update</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane profile-tab-pane mt-2 fade" id="customer_need" role="tabpanel" aria-labelledby="customer_need-tab">
                        <div class="row mt-5 ">
                            <div class="post_list ">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Post Title</th>
                                            <th>Post Type</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($rooms as $room)
                                        <tr>
                                            <td>
                                            <a href="{{ url('/room/details') }}/{{ $room->id }}"> 
                                                    {{$room->title}}
                                                </a>
                                            </td>
                                            @if($room->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($room->created_at)->format('d/m/Y')}}</td>
                                            <td> 
                                                <a href="{{route('user_room_edit',$room->id)}}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('room_delete',$room->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($bilboards as $bilboard)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/bilboard/details') }}/{{ $bilboard->id }}"> 
                                                    {{$bilboard->title}}
                                                </a>
                                            </td>
                                            @if($bilboard->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($bilboard->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="{{ route('user_bilboard_edit',$bilboard->id)}}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('bilboard_delete',$bilboard->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($communities as $community)
                                        <tr>
                                            <td>
                                            <a href="{{ url('/community/details') }}/{{ $community->id }}"> 
                                                    {{$community->title}}
                                                </a>
                                            </td>
                                            @if($community->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($community->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                                
                                                <a href="{{ route('user_community_edit',$community->id)}}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('community_delete',$community->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($picnics as $picnic)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/picnic/details') }}/{{ $picnic->id }}"> 
                                                    {{$picnic->title}}
                                                </a>
                                            </td>
                                            @if($picnic->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($picnic->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="{{ route('user_picnic_edit',$picnic->id)  }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('picnic_delete',$picnic->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($ghats as $ghat)
                                        <tr>
                                            <td>
                                                 <a href="{{ url('/ghat/details') }}/{{ $ghat->id }}" > 
                                                    {{$ghat->title}}
                                                </a>
                                            </td>
                                            @if($ghat->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($ghat->created_at)->format('d/m/Y')}}</td>
                                            <td> 
                                                <a href="{{ route('user_ghat_edit',$ghat->id)  }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('ghat_delete',$ghat->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($swimmings as $swimming)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/swimming/details') }}/{{ $swimming->id }}"> 
                                                    {{$swimming->title}}
                                                </a>
                                            </td>
                                            @if($swimming->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($swimming->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="{{ route('user_swimming_edit',$swimming->id)  }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('swimmingpool_delete',$swimming->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($exibutions as $exibution)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/exibution/details') }}/{{ $exibution->id }}"> 
                                                    {{$exibution->title}}
                                                </a>
                                            </td>
                                            @if($exibution->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($exibution->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="{{ route('user_exhibution_edit',$exibution->id)  }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('exibution_center_delete',$exibution->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($factories as $factory)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/factory/details') }}/{{ $factory->id }}"> 
                                                    {{$factory->title}}
                                                </a>
                                            </td>
                                            @if($factory->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($factory->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="{{ route('user_factory_edit',$factory->id)  }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('factory_delete',$factory->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($flats as $flat)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/flat/details') }}/{{ $flat->id }}">
                                                    {{$flat->title}} 
                                                </a>
                                            </td>
                                            @if($flat->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($flat->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="{{ route('user_flat_edit',$flat->id)  }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('flat_delete',$flat->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($hostels as $hostel)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/hostel/details') }}/{{ $hostel->id }}"> 
                                                    {{$hostel->hostel_name}}
                                                </a>
                                            </td>
                                            @if($hostel->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($hostel->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="{{ route('user_hostel_edit',$hostel->id)  }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('hostel_delete',$hostel->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($hotels as $hotel)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/hotel/details') }}/{{ $hotel->id }}">
                                                    {{$hotel->hotel_name}} 
                                                </a>
                                            </td>
                                            @if($hotel->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($hotel->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="{{ route('user_hotel_edit',$hotel->id)  }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('hotel_delete',$hotel->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($offices as $office)
                                        <tr>
                                            <td>
                                                
                                            <a href="{{ url('/office/details') }}/{{ $office->id }}"> 
                                                    {{$office->title}}
                                                </a>
                                            </td>
                                            @if($office->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($office->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="{{ route('user_office_edit',$office->id)  }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('office_delete',$office->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($playgrounds as $playground)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/playground/details') }}/{{ $playground->id }}">
                                                    {{$playground->title}} 
                                                </a>
                                            </td>
                                            @if($playground->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($playground->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="{{ route('user_playground_edit',$playground->id)  }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('playground_delete',$playground->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($ponds as $pond)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/pond/details') }}/{{ $pond->id }}">
                                                    {{$pond->title}} 
                                                </a>
                                            </td>
                                            @if($pond->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($pond->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="{{ route('user_pond_edit',$pond->id)  }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('pond_delete',$pond->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($retaurants as $retaurant)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/restaurant/details/') }}/{{ $retaurant->id }}">
                                                    {{$retaurant->resort_name}} 
                                                </a> 
                                            </td>
                                            @if($retaurant->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($retaurant->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                                
                                                <a href="{{ route('user_resort_edit',$retaurant->id)}}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('restuarant_delete',$retaurant->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($rooftops as $rooftop)
                                        <tr>
                                            <td>
                                                
                                                <a href="{{ url('/rooftop/details') }}/{{ $rooftop->id }}">
                                                {{$rooftop->title}} 
                                                </a>
                                            </td>
                                            @if($rooftop->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($rooftop->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="{{ route('user_rooftop_edit',$rooftop->id)  }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('rooftop_delete',$rooftop->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($shootings as $shooting)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/shooting/details') }}/{{ $shooting->id }}">
                                                    {{$shooting->title}} 
                                                </a>
                                            </td>
                                            @if($shooting->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($shooting->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="{{ route('user_shooting_edit',$shooting->id)  }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('shooting_delete',$shooting->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($shops as $shop)
                                        <tr>
                                            <td>
                                            <a href="{{ url('/shop/details') }}/{{ $shop->id }}"> 
                                                    {{$shop->title}}
                                                </a>
                                            </td>
                                            @if($shop->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($shop->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                               
                                                <a href="{{ route('user_shop_edit',$shop->id)  }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('shop_delete',$shop->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($lands as $land)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/land/details') }}/{{ $land->id }}">
                                                    {{$land->title}} 
                                                </a>
                                            </td>
                                            @if($land->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($land->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="{{ route('user_land_edit',$land->id)  }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('land_delete',$land->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($warehouses as $warehouse)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/warehouse/details') }}/{{ $warehouse->id }}">
                                                    {{$warehouse->title}} 
                                                </a>
                                            </td>
                                            @if($warehouse->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($warehouse->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="{{ route('user_warehouse_edit',$warehouse->id)  }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('warehouse_delete',$warehouse->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($parkings as $parking)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/parking/details') }}/{{ $parking->id }}">
                                                    {{$parking->title}} 
                                                </a>
                                            </td>
                                            @if($parking->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($parking->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="{{ route('user_parking_edit',$parking->id)  }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('parking_spot_delete',$parking->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($buildings as $building)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/building/details') }}/{{ $building->id }}">
                                                    {{$building->building_name}} 
                                                </a>
                                            </td>
                                            @if($building->post_type == 'Rent')
                                            <td>Rent</td>
                                            @else
                                            <td>Want</td>
                                            @endif
                                            <td>{{ \Carbon\Carbon::parse($building->created_at)->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="{{ route('user_building_edit',$building->id)  }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{route('building_delete',$building->id)}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</header>
<!-- Header End -->

<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection