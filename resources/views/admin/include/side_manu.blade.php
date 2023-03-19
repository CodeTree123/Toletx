<nav class="navbar navbar-expand d-flex flex-column align-item-start p-0" id="sidebar">
    <a href="{{route('admin_index')}}" class=" my-3  text-dark text-decoration-none ">
        <img class="logo mx-auto d-block" src="{{ asset('Frontend/assets/img/header/toletxLogo_Black.png') }}" alt="" width="150">
    </a>
    <ul class="navbar-nav text-center d-flex flex-column w-100 mb-5 ">
        <hr>
        <li class="nav-item w-100 ">
            <a href="{{route('admin_index')}}" class=" nav-link text-dark pl-4  {{ Request::routeIs('admin_index') ? 'custom_active' : '' }}">
                Dashboard
            </a>
        </li>
        <li class="nav-item  mt-1 w-100">
            <a href="{{route('marketing_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('marketing_list') ? 'custom_active' : '' }}">
                Marketing
            </a>
        </li>

        <li class="nav-item mt-1 w-100">
            <a href="{{route('report_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('report_list') ? 'custom_active' : '' }}">
                Report List
            </a>
        </li>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('user_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('user_list') ? 'custom_active' : '' }}">
                User List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('room_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('room_list') ? 'custom_active' : '' }}">
                Room List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('flat_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('flat_list') ? 'custom_active' : '' }}">
                flat List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('building_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('building_list') ? 'custom_active' : '' }}">
                building List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('garage_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('garage_list') ? 'custom_active' : '' }}">
                garage List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('hotel_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('hotel_list') ? 'custom_active' : '' }}">
                hotel List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('hostel_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('hostel_list') ? 'custom_active' : '' }}">
                hostel List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('resort_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('resort_list') ? 'custom_active' : '' }}">
                resort List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('office_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('office_list') ? 'custom_active' : '' }}">
                office List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('shop_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('shop_list') ? 'custom_active' : '' }}">
                shop List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('community_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('community_list') ? 'custom_active' : '' }}">
                community List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('factory_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('factory_list') ? 'custom_active' : '' }}">
                factory List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('warehouse_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('warehouse_list') ? 'custom_active' : '' }}">
                warehouse List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('land_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('land_list') ? 'custom_active' : '' }}">
                land List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('pond_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('pond_list') ? 'custom_active' : '' }}">
                pond List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('ghat_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('ghat_list') ? 'custom_active' : '' }}">
                ghat List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('pool_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('pool_list') ? 'custom_active' : '' }}">
                pool List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('camp_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('camp_list') ? 'custom_active' : '' }}">
                camp List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('shooting_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('shooting_list') ? 'custom_active' : '' }}">
                shooting List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('picnic_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('picnic_list') ? 'custom_active' : '' }}">
                picnic List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('exhibition_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('exhibition_list') ? 'custom_active' : '' }}">
                exhibition List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('rooftop_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('rooftop_list') ? 'custom_active' : '' }}">
                rooftop List
            </a>
        </li>
        <li class="nav-item mt-1 w-100">
            <a href="{{route('bilboard_list')}}" class="nav-link text-dark pl-4 {{ Request::routeIs('bilboard_list') ? 'custom_active' : '' }}">
                bilboard List
            </a>
        </li>
        <hr>
        <li class="nav-item w-100 mb-2">
            <a href="{{route('logout')}}" class="nav-link text-danger pl-4">Logout</a>
        </li>
    </ul>
</nav>
<!-- <div class="b-example-divider" id="sidebar_shade"></div> -->