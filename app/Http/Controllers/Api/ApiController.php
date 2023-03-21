<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseApiController as BaseController;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Room;
use App\Models\Hotel;
use App\Models\Hostel;
use App\Models\Bilboard;
use App\Models\Flat;
use App\Models\Parking_Spot;
use App\Models\Community_Center;
use App\Models\Office;
use App\Models\Factory;
use App\Models\Warehouse;
use App\Models\Exibution_Center;
use App\Models\Pond;
use App\Models\Rooftop;
use App\Models\Shooting_Spot;
use App\Models\Play_ground;
use App\Models\Swimming_Pool;
use App\Models\Restaurant;
use App\Models\Shop;
use App\Models\Land;
use App\Models\Building;
use App\Models\Ghat;
use App\Models\Payment;
use App\Models\Picnic_Spot;
use App\Models\report;
use App\Models\forms;
use App\Models\marketing;
use Validator;

use Carbon\Carbon;
use Image;
use Illuminate\Support\Facades\Hash;
use Spatie\QueryBuilder\QueryBuilder;

class ApiController extends BaseController
{
    //
    function service_profile($id)
    {

        // $payments = Payment::where('user_id', $id)->get()->toArray();
        $users = User::where('id', $id)->get()->toArray();


        $rooms = Room::where('user_id', $id)->get()->toArray();
        $flats = Flat::where('user_id', $id)->get()->toArray();
        $buildings = Building::where('user_id', $id)->get()->toArray();
        $parkings = Parking_Spot::where('user_id', $id)->get()->toArray();
        $hotels = Hotel::where('user_id', $id)->get()->toArray();
        $hostels = Hostel::where('user_id', $id)->get()->toArray();
        $retaurants = Restaurant::where('user_id', $id)->get()->toArray();
        $offices = Office::where('user_id', $id)->get()->toArray();
        $shops = Shop::where('user_id', $id)->get()->toArray();
        $communities = Community_Center::where('user_id', $id)->get()->toArray();
        $factories = Factory::where('user_id', $id)->get()->toArray();
        $warehouses = Warehouse::where('user_id', $id)->get()->toArray();
        $lands = Land::where('user_id', $id)->get()->toArray();
        $ponds = Pond::where('user_id', $id)->get()->toArray();
        $ghats = Ghat::where('user_id', $id)->get()->toArray();
        $swimmings = Swimming_Pool::where('user_id', $id)->get()->toArray();
        $playgrounds = Play_ground::where('user_id', $id)->get()->toArray();
        $shootings = Shooting_Spot::where('user_id', $id)->get()->toArray();
        $picnics = Picnic_Spot::where('user_id', $id)->get()->toArray();
        $exhibutions = Exibution_Center::where('user_id', $id)->get()->toArray();
        $rooftops = Rooftop::where('user_id', $id)->get()->toArray();
        $bilboards = Bilboard::where('user_id', $id)->get()->toArray();
        if ($id == null) {
            return $this->sendError($error, 'no data found');
        } else {
            $success = array_merge(
                $rooms,
                $flats,
                $buildings,
                $parkings,
                $hotels,
                $hostels,
                $retaurants,
                $offices,
                $shops,
                $communities,
                $factories,
                $warehouses,
                $lands,
                $ponds,
                $ghats,
                $swimmings,
                $playgrounds,
                $shootings,
                $picnics,
                $exhibutions,
                $rooftops,
                $bilboards,
            );
            return $this->sendResponse($success, 'successful');
        }
    }




    function api_parking_edit($id)
    {
        $list = Parking_Spot::findOrFail($id);
        return $list;
    }
    function api_building_edit($id)
    {
        $list = Building::findOrFail($id);
        return $list;
    }
    function api_room_edit($id)
    {
        $list = Room::findOrFail($id);
        return $list;
    }
    function api_hotel_edit($id)
    {
        $list = Hotel::findOrFail($id);
        return $list;
    }
    function api_bilboard_edit($id)
    {
        $list = Bilboard::findOrFail($id);
        return $list;
    }
    function api_community_edit($id)
    {
        $list = Community_Center::findOrFail($id);
        return $list;
    }
    function api_exhibution_edit($id)
    {
        $list = Exibution_Center::findOrFail($id);
        return $list;
    }
    function api_factory_edit($id)
    {
        $list = Factory::findOrFail($id);
        return $list;
    }
    function api_hostel_edit($id)
    {
        $list = Hostel::findOrFail($id);
        return $list;
    }
    function api_office_edit($id)
    {
        $list = Office::findOrFail($id);
        return $list;
    }
    function api_playground_edit($id)
    {
        $list = Play_ground::findOrFail($id);
        return $list;
    }
    function api_pond_edit($id)
    {
        $list = Pond::findOrFail($id);
        return $list;
    }
    function api_resort_edit($id)
    {
        $list = Restaurant::findOrFail($id);
        return $list;
    }
    function api_rooftop_edit($id)
    {
        $list = Rooftop::findOrFail($id);
        return $list;
    }
    function api_shooting_edit($id)
    {
        $list = Shooting_Spot::findOrFail($id);
        return $list;
    }
    function api_shop_edit($id)
    {
        $list = Shop::findOrFail($id);
        return $list;
    }
    function api_swimming_edit($id)
    {
        $list = Swimming_Pool::findOrFail($id);
        return $list;
    }
    function api_land_edit($id)
    {
        $list = Land::findOrFail($id);
        return $list;
    }
    function api_warehouse_edit($id)
    {
        $list = Warehouse::findOrFail($id);
        return $list;
    }
    function api_flat_edit($id)
    {
        $list = Flat::findOrFail($id);
        return $list;
    }
    function api_picnic_edit($id)
    {
        $list = Picnic_Spot::findOrFail($id);
        return $list;
    }
    function api_ghat_edit($id)
    {
        $list = Ghat::findOrFail($id);
        return $list;
    }



    function parking_single($id)
    {
        $success = Parking_Spot::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function building_single($id)
    {
        $success = Building::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function room_single($id)
    {
        $success = Room::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function hotel_single($id)
    {
        $success = Hotel::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function bilboard_single($id)
    {
        $success = Bilboard::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function community_single($id)
    {
        $success = Community_Center::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function exhibution_single($id)
    {
        $success = Exibution_Center::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function factory_single($id)
    {
        $success = Factory::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function hostel_single($id)
    {
        $success = Hostel::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function office_single($id)
    {
        $success = Office::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function playground_single($id)
    {
        $success = Play_ground::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function pond_single($id)
    {
        $success = Pond::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function resort_single($id)
    {
        $success = Restaurant::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function rooftop_single($id)
    {
        $success = Rooftop::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function shooting_single($id)
    {
        $success = Shooting_Spot::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function shop_single($id)
    {
        $success = Shop::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function swimming_single($id)
    {
        $success = Swimming_Pool::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function land_single($id)
    {
        $success = Land::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function warehouse_single($id)
    {
        $success = Warehouse::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function flat_single($id)
    {
        $success = Flat::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function picnic_single($id)
    {
        $success = Picnic_Spot::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }
    function ghat_single($id)
    {
        $success = Ghat::find($id);
        if ($success == null) {
            return $this->sendResponse($success, 'no data found');
        } else {
            return $this->sendResponse($success, 'successful');
        }
    }










    public function createapi_user_registration()
    {
        $user = user::all();
        return $user;
    }

    public function createapi_room()
    {
        
         $success = User::rightJoin('rooms', 'users.id', '=', 'rooms.user_id')->get(['rooms.*', 'users.image']);


        return $this->sendResponse($success, 'room information get successfully.');
    }

    public function createapi_hotel()
    {
        
        $success = User::rightJoin('hotels', 'users.id', '=', 'hotels.user_id')->get(['hotels.*', 'users.image']);

        return $this->sendResponse($success, 'Hotel information get successfully.');
    }
    public function createapi_building()
    {
        $success = User::rightJoin('buildings', 'users.id', '=', 'buildings.user_id')->get(['buildings.*', 'users.image']);

        return $this->sendResponse($success, 'Building information get successfully.');
    }
    public function createapi_hostel()
    {
        $success = User::rightJoin('hostels', 'users.id', '=', 'hostels.user_id')->get(['hostels.*', 'users.image']);


        return $this->sendResponse($success, 'Hostel information get successfully.');
    }

    public function createapi_bilboard()
    {
        $success = User::rightJoin('bilboards', 'users.id', '=', 'bilboards.user_id')->get(['bilboards.*', 'users.image']);


        return $this->sendResponse($success, 'Bilboard information get successfully.');
    }

    public function createapi_community()
    {
        $success = User::rightJoin('community__centers', 'users.id', '=', 'community__centers.user_id')->get(['community__centers.*', 'users.image']);


        return $this->sendResponse($success, 'Community Center information get successfully.');
    }

    public function createapi_flat()
    {
        $success = User::rightJoin('flats', 'users.id', '=', 'flats.user_id')->get(['flats.*', 'users.image']);


        return $this->sendResponse($success, 'Flat information get successfully.');
    }

    public function createapi_parking()
    {
        $success = User::rightJoin('picnic__spots', 'users.id', '=', 'picnic__spots.user_id')->get(['picnic__spots.*', 'users.image']);


        return $this->sendResponse($success, 'parking Spot information get successfully.');
    }

    public function createapi_factory()
    {
        $success = User::rightJoin('factories', 'users.id', '=', 'factories.user_id')->get(['factories.*', 'users.image']);


        return $this->sendResponse($success, 'factory  information get successfully.');
    }

    public function createapi_warehouse()
    {
        $success = User::rightJoin('warehouses', 'users.id', '=', 'warehouses.user_id')->get(['warehouses.*', 'users.image']);


        return $this->sendResponse($success, 'Warehouse information get successfully.');
    }

    public function createapi_exhibution()
    {
        $success = User::rightJoin('exibution__centers', 'users.id', '=', 'exibution__centers.user_id')->get(['exibution__centers.*', 'users.image']);


        return $this->sendResponse($success, 'Exibution_Center information get successfully.');
    }

    public function createapi_pond()
    {
        $success = User::rightJoin('ponds', 'users.id', '=', 'ponds.user_id')->get(['ponds.*', 'users.image']);


        return $this->sendResponse($success, 'pond information get successfully.');
    }

    public function createapi_rooftop()
    {
        $success = User::rightJoin('rooftops', 'users.id', '=', 'rooftops.user_id')->get(['rooftops.*', 'users.image']);


        return $this->sendResponse($success, 'Rooftop information get successfully.');
    }

    public function createapi_shooting()
    {
        $success = User::rightJoin('shooting__spots', 'users.id', '=', 'shooting__spots.user_id')->get(['shooting__spots.*', 'users.image']);


        return $this->sendResponse($success, 'Shooting_Spot information get successfully.');
    }
    public function createapi_picnic()
    {
        $success = User::rightJoin('picnic__spots', 'users.id', '=', 'picnic__spots.user_id')->get(['picnic__spots.*', 'users.image']);


        return $this->sendResponse($success, 'Picnic Spot information get successfully.');
    }

    public function createapi_playground()
    {
        $success = User::rightJoin('play_grounds', 'users.id', '=', 'play_grounds.user_id')->get(['play_grounds.*', 'users.image']);


        return $this->sendResponse($success, 'Play_ground information get successfully.');
    }
    public function createapi_ghat()
    {
        $success = User::rightJoin('ghats', 'users.id', '=', 'ghats.user_id')->get(['ghats.*', 'users.image']);


        return $this->sendResponse($success, 'Ghat information get successfully.');
    }

    public function createapi_swimmingpool()
    {
        $success = User::rightJoin('swimming__pools', 'users.id', '=', 'swimming__pools.user_id')->get(['swimming__pools.*', 'users.image']);


        return $this->sendResponse($success, 'Swimming_Pool information get successfully.');
    }


    public function createapi_shop()
    {
        $success = User::rightJoin('shops', 'users.id', '=', 'shops.user_id')->get(['shops.*', 'users.image']);


        return $this->sendResponse($success, 'Shop information get successfully.');
    }

    public function createapi_office()
    {
        $success = User::rightJoin('offices', 'users.id', '=', 'offices.user_id')->get(['offices.*', 'users.image']);


        return $this->sendResponse($success, 'Office information get successfully.');
    }

    public function createapi_land()
    {
        $success = User::rightJoin('lands', 'users.id', '=', 'lands.user_id')->get(['lands.*', 'users.image']);


        return $this->sendResponse($success, 'Land information get successfully.');
    }

    public function createapi_resort()
    {
        $success = User::rightJoin('restaurants', 'users.id', '=', 'restaurants.user_id')->get(['restaurants.*', 'users.image']);

        return $this->sendResponse($success, 'Restaurant information get successfully.');
    }
    public function marketing()
    {
        $success =  marketing::all();
        return $this->sendResponse($success, 'marketing information get successfully.');
    }

    public function api_list_user($id)
    {
        $success = User::find($id);
        if($success)
        {
            return $this->sendResponse($success, 'User information.');
        }
        else{
            return $this->sendError('User not found.');
        }

    }

    public function api_user_service_list($id)
    {
        $success = Room::where('user_id', $id)->get();
        return $this->sendResponse($success, 'User room service list get successfully.');
    }

    //search

    //room
    function room_search(Request $request)
    {
        // Get the search value from the request

        $success = QueryBuilder::for(Room::class)
            ->allowedFilters([
                'address', 'date', 'price', 'room_size', 'guest_count', 'wifi', 'attached_toilet', 'varanda', 'gas', 'water', 'electricity', 'lift', 'furnished', 'hot_water', 'ac', 'cable_tv', 'parking', 'generator'
            ])->get();
        return $this->sendResponse($success, 'room Search information get successfully.');
    }
    //end room
    function building_search(Request $request)
    {
        // Get the search value from the request

        $success = QueryBuilder::for(Building::class)
            ->allowedFilters(['address', 'date', 'price', 'building_size', 'gas', 'water', 'electricity', 'lift', 'generator', 'parking', 'fire_exit'])
            ->get();

        // Return the search view with the resluts compacted

        return $this->sendResponse($success, 'building Search information get successfully.');
    }

    function flat_search(Request $request)
    {
        // Get the search value from the request
        $success = QueryBuilder::for(Flat::class)
            ->allowedFilters([
                'address', 'date', 'price', 'flat_size', 'bedrooms',
                'fire_exit',
                'wifi',
                'attached_toilet',
                'kitchen',
                'drawing',
                'varanda',
                'dining',
                'lift',
                'furnished',
                'generator',
                'hot_water',
                'ac',
                'cable_tv',
                'gas',
                'water',
                'electricity',
                'parking'
            ])
            ->get();

        // Return the search view with the resluts compacted

        return $this->sendResponse($success, 'flat Search information get successfully.');
    }



    function hotel_search(Request $request)
    {
        // Get the search value from the request
        $success = QueryBuilder::for(Hotel::class)
            ->allowedFilters([
                'address', 'date', 'price', 'location',
                'wifi',
                'bathroom',
                'lift',
                'parking',
                'ac',
                'laundry',
                'dining',
                'fire_exit',
                'generator',
                'gym',
                'sports'
            ])
            ->get();

        // Return the search view with the resluts compacted

        return $this->sendResponse($success, 'hotel Search information get successfully.');
    }
    function bilboard_search(Request $request)
    {
        // Get the search value from the request
        $success = QueryBuilder::for(Bilboard::class)
            ->allowedFilters(['address', 'date', 'price', 'electricity',  'size'])
            ->get();

        // Return the search view with the resluts compacted

        return $this->sendResponse($success, 'bilboard Search information get successfully.');
    }


    function exibution_search()
    {

        $success = QueryBuilder::for(Exibution_Center::class)
            ->allowedFilters([
                'address', 'date', 'price', 'address',
                'room_size',
                'toilet',
                'lift',
                'fire_exit',
                'generator',
                'parking'
            ])
            ->get();

        return $this->sendResponse($success, 'exibution center Search information get successfully.');
    }

    function pond_search()
    {

        $success = QueryBuilder::for(Pond::class)
            ->allowedFilters([
                'address', 'date', 'price',
                'drainage_system',
                'price',
                'y_price'
            ])
            ->get();

        return $this->sendResponse($success, 'pond Search information get successfully.');
    }

    function warehouse_search()
    {

        $success = QueryBuilder::for(Warehouse::class)
            ->allowedFilters([
                'address', 'date', 'price', 'floor_size', 'fire_safety',
                'generator',
                'lift',
                'parking',
                'drainage_system',
                'gas',
                'water',
                'electricity',
                'ac'
            ])
            ->get();

        return $this->sendResponse($success, 'warehouse Search information get successfully.');
    }

    function swimmingpool_search()
    {

        $success = QueryBuilder::for(Swimming_Pool::class)
            ->allowedFilters([
                'address', 'date', 'price', 'size', 'wifi',
                'shed',
                'laundry',
                'change_room',
                'generator',
                'toilet',
                'parking'
            ])
            ->get();

        return $this->sendResponse($success, 'swimming pool Search information get successfully.');
    }

    function shop_search()
    {

        $success = QueryBuilder::for(Shop::class)
            ->allowedFilters([
                'address', 'date', 'price', 'floor_size',
                'fire_safety',
                'lift',
                'parking',
                'electricity',
                'generator',
                'gas',
                'water'
            ])
            ->get();

        return $this->sendResponse($success, 'shop Search information get successfully.');
    }

    function shootingspot_search()
    {

        $success = QueryBuilder::for(Shooting_Spot::class)
            ->allowedFilters([
                'address', 'date', 'price', 'floor_area',
                'lift',
                'parking',
                'dining',
                'electricity',
                'toilet',
                'shed',
                'generator',
                'gas',
                'water',
                'change_room'
            ])
            ->get();

        return $this->sendResponse($success, 'shooting spot Search information get successfully.');
    }

    function ghat_search(Request $request)
    {
        // Get the search value from the request

        $success = QueryBuilder::for(Ghat::class)
            ->allowedFilters([
                'address', 'date', 'price', 'toilet',
                'parking'
            ])
            ->get();

        // Return the search view with the resluts compacted

        return $this->sendResponse($success, 'ghat Search information get successfully.');
    }

    function picnic_search(Request $request)
    {
        // Get the search value from the request

        $success = QueryBuilder::for(Picnic_Spot::class)
            ->allowedFilters([
                'address', 'date', 'price', 'land_area',
                'electricity',
                'gas',
                'water',
                'dining',
                'shed',
                'toilet',
                'lift',
                'parking',
                'generator',
                'change_room'
            ])
            ->get();

        // Return the search view with the resluts compacted

        return $this->sendResponse($success, 'picnic Search information get successfully.');
    }

    function rooftop_search()
    {

        $success = QueryBuilder::for(Rooftop::class)
            ->allowedFilters([
                'address', 'date', 'price', 'floor_area', 'toilet',
                'p_protection',
                'generator',
                'lift',
                'parking',
                'water',
                'electricity',
                'shed'
            ])
            ->get();

        return $this->sendResponse($success, 'rooftop Search information get successfully.');
    }

    function restaurant_search()
    {
        $success = QueryBuilder::for(Restaurant::class)
            ->allowedFilters([
                'address', 'date', 'price', 'wifi',
                'attached_toilet',
                'generator',
                'lift',
                'hot_water',
                'laundry',
                'ac',
                'spa',
                'parking',
                'dining',
                'gym',
                'sports',
                'swimmingpool'
            ])
            ->get();

        return $this->sendResponse($success, 'restaurant Search information get successfully.');
    }

    function playground_search()
    {

        $success = QueryBuilder::for(Play_ground::class)
            ->allowedFilters([
                'address', 'date', 'price', 'area',
                'shed',
                'toilet',
                'change_room',
                'parking',
                'gym',
                'generator',
                'sports'
            ])
            ->get();

        return $this->sendResponse($success, 'playground Search information get successfully.');
    }

    function office_search()
    {
        $success = QueryBuilder::for(Office::class)
            ->allowedFilters([
                'address', 'date', 'price', 'floor_size', 'interior_condition',
                'fire_safety',
                'lift',
                'ac',
                'parking',
                'generator',
                'electricity',
                'gas',
                'water'
            ])
            ->get();

        return $this->sendResponse($success, 'office Search information get successfully.');
    }

    function land_search()
    {

        $success = QueryBuilder::for(land::class)
            ->allowedFilters([
                'address', 'date', 'price', 'y_price', 'land_area',
                'electricity',
                'gas',
                'water',
                'drainage_system',
                'parking'
            ])
            ->get();

        return $this->sendResponse($success, 'land Search information get successfully.');
    }

    function factory_search()
    {

        $success = QueryBuilder::for(Factory::class)
            ->allowedFilters([
                'address', 'date', 'price', 'floor_size',
                'fire_safety',
                'lift',
                'parking',
                'drainage_system',
                'gas',
                'water',
                'generator',
                'electricity',
                'ac'
            ])
            ->get();

        return $this->sendResponse($success, 'factory Search information get successfully.');
    }

    function community_search()
    {

        $success = QueryBuilder::for(Community_Center::class)
            ->allowedFilters([
                'address', 'date', 'price', 'floor_size',
                'interior_condition',
                'fire_safety',
                'generator',
                'lift',
                'parking',
                'seat',
                'wifi',
                'gas',
                'electricity',
                'water',
                'ac'
            ])
            ->get();

        return $this->sendResponse($success, 'community Search information get successfully.');
    }

    function hostel_search(Request $request)
    {
        // Get the search value from the request

        $success = QueryBuilder::for(Hostel::class)
            ->allowedFilters([
                'address', 'date', 'price', 'title', 'room_size', 'wifi',
                'attached_toilet',
                'generator',
                'lift',
                'furnished',
                'hot_water',
                'laundry',
                'ac',
                'pool',
                'parking',
                'dining',
                'gym',
                'spa',
                'sports',
            ])
            ->get();

        // Return the search view with the resluts compacted

        return $this->sendResponse($success, 'hostel Search information get successfully.');
    }

    function parking_spot_search()
    {
        $success = QueryBuilder::for(Parking_Spot::class)
            ->allowedFilters(['vehicle_type',  'address', 'date', 'price',])
            ->get();
        return $this->sendResponse($success, 'parking spot Search information get successfully.');
    }










    function exibution_center_delete($id)
    {
        $hello =  Exibution_Center::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function playground_delete($id)
    {
        $hello =  Play_ground::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function rooftop_delete($id)
    {
        $hello =  Rooftop::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function bilboard_delete($id)
    {
        $hello =  Bilboard::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function warehouse_delete($id)
    {
        $hello =  Warehouse::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function factory_delete($id)
    {
        $hello =  Factory::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function shop_delete($id)
    {
        $hello =  Shop::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function shooting_delete($id)
    {
        $hello =  Shooting_Spot::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function community_delete($id)
    {
        $hello =  Community_Center::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function land_delete($id)
    {
        $hello =  Land::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function office_delete($id)
    {
        $hello =  Office::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function parking_spot_delete($id)
    {
        $hello =  Parking_Spot::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function picnic_delete($id)
    {
        $hello =  Picnic_Spot::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function building_delete($id)
    {
        $hello =  Building::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function hotel_delete($id)
    {
        $hello =  Hotel::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function room_delete($id)
    {
        $hello =  Room::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function flat_delete($id)
    {
        $hello =  Flat::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function ghat_delete($id)
    {
        $hello =  Ghat::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function hostel_delete($id)
    {
        $hello =  Hostel::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function pond_delete($id)
    {
        $hello =  Pond::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function swimmingpool_delete($id)
    {
        $hello =  Swimming_Pool::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }
    function restuarant_delete($id)
    {
        $hello =  Restaurant::find($id);

        if ($hello != null) {
            $hello->delete();
            return ['message' => 'Successfully deleted!!'];
        } else {
            return ["message" => "ID does not exist"];
        }
    }


    function api_post_land(Request $request)
    {

        $success = Land::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'land_area' => $request->land_area,
            'land_height' => $request->land_height,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'y_price' => $request->y_price,
            'drainage_system' => $request->drainage_system,
            'parking' => $request->parking,
            'road_width' => $request->road_width,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/lands/'), $filename);
            $success['photo'] = $filename;
        }
        $success->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/lands/'), $filename);
            $success['photo1'] = $filename;
        }
        $success->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/lands/'), $filename);
            $success['photo2'] = $filename;
        }
        $success->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/lands/'), $filename);
            $success['photo3'] = $filename;
        }
        $success->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/lands/'), $filename);
            $success['photo4'] = $filename;
        }
        $success->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/lands/'), $filename);
            $success['photo5'] = $filename;
        }
        $success->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/lands/'), $filename);
            $success['photo6'] = $filename;
        }
        $success->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/lands/videos'), $filename);
            $success['video'] = $filename;
        }
        $success->save();

        return $this->sendResponse($success, 'Land post successfully.');
    }

    //end land

    function api_post_community(Request $request)
    {

        $success = Community_Center::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'generator' => $request->generator,
            'seat' => $request->seat,
            'interior_condition' => $request->interior_condition,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'wifi' => $request->wifi,
            'parking' => $request->parking,
            'gas' => $request->gas,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'ac' => $request->ac,
            'price' => $request->price,
            's_charge' => $request->s_charge,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/communities/'), $filename);
            $success['photo'] = $filename;
        }
        $success->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/communities/'), $filename);
            $success['photo1'] = $filename;
        }
        $success->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/communities/'), $filename);
            $success['photo2'] = $filename;
        }
        $success->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/communities/'), $filename);
            $success['photo3'] = $filename;
        }
        $success->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/communities/'), $filename);
            $success['photo4'] = $filename;
        }
        $success->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/communities/'), $filename);
            $success['photo5'] = $filename;
        }
        $success->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/communities/'), $filename);
            $success['photo6'] = $filename;
        }
        $success->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/communities/videos'), $filename);
            $success['video'] = $filename;
        }
        $success->save();

        return $this->sendResponse($success, 'community post successfully.');
    }
    //end community
    function api_post_shooting(Request $request)
    {

        $shooting = Shooting_Spot::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_area' => $request->floor_area,
            'road_width' => $request->road_width,
            'dining' => $request->dining,
            'water' => $request->water,
            'lift' => $request->lift,
            'generator' => $request->generator,
            'shed' => $request->shed,
            'gas' => $request->gas,
            'toilet' => $request->toilet,
            'electricity' => $request->electricity,
            'change_room' => $request->change_room,
            'parking' => $request->parking,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/shootings/'), $filename);
            $shooting['photo'] = $filename;
        }
        $shooting->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/shootings/'), $filename);
            $shooting['photo1'] = $filename;
        }
        $shooting->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/shootings/'), $filename);
            $shooting['photo2'] = $filename;
        }
        $shooting->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/shootings/'), $filename);
            $shooting['photo3'] = $filename;
        }
        $shooting->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/shootings/'), $filename);
            $shooting['photo4'] = $filename;
        }
        $shooting->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/shootings/'), $filename);
            $shooting['photo5'] = $filename;
        }
        $shooting->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/shootings/'), $filename);
            $shooting['photo6'] = $filename;
        }
        $shooting->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/shootings/videos'), $filename);
            $shooting['video'] = $filename;
        }
        $shooting->save();

        return $this->sendResponse($shooting, 'shooting post successfully.');
    }


    function api_post_picnic(Request $request)
    {

        $picnic = Picnic_Spot::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'address' => $request->address,
            'description' => $request->description,
            'land_area' => $request->land_area,
            'price' => $request->price,
            'generator' => $request->generator,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'shed' => $request->shed,
            'dining' => $request->dining,
            'toilet' => $request->toilet,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'change_room' => $request->change_room,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/picnics/'), $filename);
            $picnic['photo'] = $filename;
        }
        $picnic->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/picnics/'), $filename);
            $picnic['photo1'] = $filename;
        }
        $picnic->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/picnics/'), $filename);
            $picnic['photo2'] = $filename;
        }
        $picnic->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/picnics/'), $filename);
            $picnic['photo3'] = $filename;
        }
        $picnic->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/picnics/'), $filename);
            $picnic['photo4'] = $filename;
        }
        $picnic->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/picnics/'), $filename);
            $picnic['photo5'] = $filename;
        }
        $picnic->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/picnics/'), $filename);
            $picnic['photo6'] = $filename;
        }
        $picnic->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/picnics/videos'), $filename);
            $picnic['video'] = $filename;
        }
        $picnic->save();

        return $this->sendResponse($picnic, 'Picnic Spot post successfully.');
    }
    //end shooting

    function api_post_shop(Request $request)
    {

        $success = Shop::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'fire_safety' => $request->fire_safety,
            'generator' => $request->generator,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/shops/'), $filename);
            $success['photo'] = $filename;
        }
        $success->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/shops/'), $filename);
            $success['photo1'] = $filename;
        }
        $success->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/shops/'), $filename);
            $success['photo2'] = $filename;
        }
        $success->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/shops/'), $filename);
            $success['photo3'] = $filename;
        }
        $success->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/shops/'), $filename);
            $success['photo4'] = $filename;
        }
        $success->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/shops/'), $filename);
            $success['photo5'] = $filename;
        }
        $success->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/shops/'), $filename);
            $success['photo6'] = $filename;
        }
        $success->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/shops/videos'), $filename);
            $success['video'] = $filename;
        }
        $success->save();

        return $this->sendResponse($success, 'shop post successfully.');
    }
    //end shop

    function api_post_factory(Request $request)
    {

        $success = Factory::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'generator' => $request->generator,
            'fire_safety' => $request->fire_safety,
            'electricity' => $request->electricity,
            'ac' => $request->ac,
            'floor_height' => $request->floor_height,
            'gas' => $request->gas,
            'water' => $request->water,
            'lift' => $request->lift,
            'drainage_system' => $request->drainage_system,
            'parking' => $request->parking,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/factories/'), $filename);
            $success['photo'] = $filename;
        }
        $success->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/factories/'), $filename);
            $success['photo1'] = $filename;
        }
        $success->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/factories/'), $filename);
            $success['photo2'] = $filename;
        }
        $success->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/factories/'), $filename);
            $success['photo3'] = $filename;
        }
        $success->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/factories/'), $filename);
            $success['photo4'] = $filename;
        }
        $success->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/factories/'), $filename);
            $success['photo5'] = $filename;
        }
        $success->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/factories/'), $filename);
            $success['photo6'] = $filename;
        }
        $success->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/factories/videos'), $filename);
            $success['video'] = $filename;
        }
        $success->save();

        return $this->sendResponse($success, 'factory post successfully.');
    }
    //end factory

    function api_post_warehouse(Request $request)
    {

        $success = Warehouse::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'description' => $request->description,
            'ac' => $request->ac,
            'type' => $request->type,
            'generator' => $request->generator,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'building_condition' => $request->building_condition,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'drainage_system' => $request->drainage_system,
            'parking' => $request->parking,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/warehouses/'), $filename);
            $success['photo'] = $filename;
        }
        $success->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/warehouses/'), $filename);
            $success['photo1'] = $filename;
        }
        $success->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/warehouses/'), $filename);
            $success['photo2'] = $filename;
        }
        $success->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/warehouses/'), $filename);
            $success['photo3'] = $filename;
        }
        $success->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/warehouses/'), $filename);
            $success['photo4'] = $filename;
        }
        $success->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/warehouses/'), $filename);
            $success['photo5'] = $filename;
        }
        $success->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/warehouses/'), $filename);
            $success['photo6'] = $filename;
        }
        $success->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/warehouses/videos'), $filename);
            $success['video'] = $filename;
        }
        $success->save();

        return $this->sendResponse($success, 'warehouse post successfully.');
    }

    //end warehouse

    function api_post_pond(Request $request)
    {

        $success = Pond::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'pond_area' => $request->pond_area,
            'water_level' => $request->water_level,
            'road_width' => $request->road_width,
            'y_price' => $request->y_price,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/ponds/'), $filename);
            $success['photo'] = $filename;
        }
        $success->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/ponds/'), $filename);
            $success['photo1'] = $filename;
        }
        $success->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/ponds/'), $filename);
            $success['photo2'] = $filename;
        }
        $success->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/ponds/'), $filename);
            $success['photo3'] = $filename;
        }
        $success->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/ponds/'), $filename);
            $success['photo4'] = $filename;
        }
        $success->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/ponds/'), $filename);
            $success['photo5'] = $filename;
        }
        $success->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/ponds/'), $filename);
            $success['photo6'] = $filename;
        }
        $success->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/ponds/videos'), $filename);
            $success['video'] = $filename;
        }
        $success->save();

        return $this->sendResponse($success, 'ponds post successfully.');
    }


    function api_post_ghat(Request $request)
    {

        $success = Ghat::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'price' => $request->price,
            'description' => $request->description,
            'y_price' => $request->y_price,
            'address' => $request->address,
            'toilet' => $request->toilet,
            'parking' => $request->parking,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/ghats/'), $filename);
            $success['photo'] = $filename;
        }
        $success->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/ghats/'), $filename);
            $success['photo1'] = $filename;
        }
        $success->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/ghats/'), $filename);
            $success['photo2'] = $filename;
        }
        $success->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/ghats/'), $filename);
            $success['photo3'] = $filename;
        }
        $success->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/ghats/'), $filename);
            $success['photo4'] = $filename;
        }
        $success->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/ghats/'), $filename);
            $success['photo5'] = $filename;
        }
        $success->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/ghats/'), $filename);
            $success['photo6'] = $filename;
        }
        $success->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/ghats/videos'), $filename);
            $success['video'] = $filename;
        }
        $success->save();


        return $this->sendResponse($success, 'Ghat post successfully.');
    }
    //end pond

    function api_post_swimmingpool(Request $request)
    {

        $success = Swimming_Pool::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'type' => $request->type,
            'address' => $request->address,
            'size' => $request->size,
            'toilet' => $request->toilet,
            'wifi' => $request->wifi,
            'shed' => $request->shed,
            'laundry' => $request->laundry,
            'change_room' => $request->change_room,
            'generator' => $request->generator,
            'parking' => $request->parking,
            'laundry' => $request->laundry,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
        ]);

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/swimmingpools/'), $filename);
            $success['photo'] = $filename;
        }
        $success->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/swimmingpools/'), $filename);
            $success['photo1'] = $filename;
        }
        $success->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/swimmingpools/'), $filename);
            $success['photo2'] = $filename;
        }
        $success->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/swimmingpools/'), $filename);
            $success['photo3'] = $filename;
        }
        $success->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/swimmingpools/'), $filename);
            $success['photo4'] = $filename;
        }
        $success->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/swimmingpools/'), $filename);
            $success['photo5'] = $filename;
        }
        $success->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/swimmingpools/'), $filename);
            $success['photo6'] = $filename;
        }
        $success->save();

        return $this->sendResponse($success, 'swimmingpool post successfully.');
    }
    //end swimmingpool

    function api_post_bilboard(Request $request)
    {

        $bilboard = Bilboard::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'type' => $request->type,
            'address' => $request->address,
            'size' => $request->size,
            'hieght' => $request->hieght,
            'electricity' => $request->electricity,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/billboards/'), $filename);
            $bilboard['photo'] = $filename;
        }
        $bilboard->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/billboards/'), $filename);
            $bilboard['photo1'] = $filename;
        }
        $bilboard->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/billboards/'), $filename);
            $bilboard['photo2'] = $filename;
        }
        $bilboard->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/billboards/'), $filename);
            $bilboard['photo3'] = $filename;
        }
        $bilboard->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/billboards/'), $filename);
            $bilboard['photo4'] = $filename;
        }
        $bilboard->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/billboards/'), $filename);
            $bilboard['photo5'] = $filename;
        }
        $bilboard->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/billboards/'), $filename);
            $bilboard['photo6'] = $filename;
        }
        $bilboard->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/billboards/videos'), $filename);
            $bilboard['video'] = $filename;
        }
        $bilboard->save();

        return $this->sendResponse($bilboard, 'bilboard post successfully.');
    }
    //end bilboard

    function api_post_rooftop(Request $request)
    {

        $rooftop = Rooftop::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_area' => $request->floor_area,
            'generator' => $request->generator,
            'toilet' => $request->toilet,
            'shed' => $request->shed,
            'p_protection' => $request->p_protection,
            'lift' => $request->lift,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'parking' => $request->parking,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/rooftops/'), $filename);
            $rooftop['photo'] = $filename;
        }
        $rooftop->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/rooftops/'), $filename);
            $rooftop['photo1'] = $filename;
        }
        $rooftop->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/rooftops/'), $filename);
            $rooftop['photo2'] = $filename;
        }
        $rooftop->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/rooftops/'), $filename);
            $rooftop['photo3'] = $filename;
        }
        $rooftop->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/rooftops/'), $filename);
            $rooftop['photo4'] = $filename;
        }
        $rooftop->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/rooftops/'), $filename);
            $rooftop['photo5'] = $filename;
        }
        $rooftop->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/rooftops/'), $filename);
            $rooftop['photo6'] = $filename;
        }
        $rooftop->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/rooftops/videos'), $filename);
            $rooftop['video'] = $filename;
        }
        $rooftop->save();

        return $this->sendResponse($rooftop, 'rooftop post successfully.');
    }
    //end rooftop


    function api_post_exibution(Request $request)
    {

        $exibution_center = Exibution_Center::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'interior_condition' => $request->interior_condition,
            'room_size' => $request->room_size,
            'room_type' => $request->room_type,
            'generator' => $request->generator,
            'floor_level' => $request->floor_level,
            'road_width' => $request->road_width,
            'toilet' => $request->toilet,
            'lift' => $request->lift,
            'fire_exit' => $request->fire_exit,
            'parking' => $request->parking,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/exhibutions/'), $filename);
            $exibution_center['photo'] = $filename;
        }
        $exibution_center->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/exhibutions/'), $filename);
            $exibution_center['photo1'] = $filename;
        }
        $exibution_center->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/exhibutions/'), $filename);
            $exibution_center['photo2'] = $filename;
        }
        $exibution_center->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/exhibutions/'), $filename);
            $exibution_center['photo3'] = $filename;
        }
        $exibution_center->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/exhibutions/'), $filename);
            $exibution_center['photo4'] = $filename;
        }
        $exibution_center->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/exhibutions/'), $filename);
            $exibution_center['photo5'] = $filename;
        }
        $exibution_center->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/exhibutions/'), $filename);
            $exibution_center['photo6'] = $filename;
        }
        $exibution_center->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/exhibutions/videos'), $filename);
            $exibution_center['video'] = $filename;
        }
        $exibution_center->save();

        return $this->sendResponse($exibution_center, 'exibution_center post successfully.');
    }
    //end exhibution

    function api_post_playground(Request $request)
    {

        $playground = Play_ground::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'area' => $request->area,
            'description' => $request->description,
            'address' => $request->address,
            'shed' => $request->shed,
            'toilet' => $request->toilet,
            'change_room' => $request->change_room,
            'generator' => $request->generator,
            'gym' => $request->gym,
            'parking' => $request->parking,
            'sports' => $request->sports,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/playgrounds/'), $filename);
            $playground['photo'] = $filename;
        }
        $playground->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/playgrounds/'), $filename);
            $playground['photo1'] = $filename;
        }
        $playground->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/playgrounds/'), $filename);
            $playground['photo2'] = $filename;
        }
        $playground->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/playgrounds/'), $filename);
            $playground['photo3'] = $filename;
        }
        $playground->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/playgrounds/'), $filename);
            $playground['photo4'] = $filename;
        }
        $playground->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/playgrounds/'), $filename);
            $playground['photo5'] = $filename;
        }
        $playground->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/playgrounds/'), $filename);
            $playground['photo6'] = $filename;
        }
        $playground->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/playgrounds/videos'), $filename);
            $playground['video'] = $filename;
        }
        $playground->save();

        return $this->sendResponse($playground, 'playground post successfully.');
    }
    //end playground

    //hotel

    function api_post_hotel(Request $request)
    {

        $success = Hotel::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'date' => $request->date,
            'phone' => $request->phone,
            's_charge' => $request->s_charge,
            'description' => $request->description,
            'hotel_name' => $request->hotel_name,
            'location' => $request->location,
            'room_type' => $request->room_type,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'generator' => $request->generator,
            'bathroom' => $request->bathroom,
            'hot_water' => $request->hot_water,
            'parking' => $request->parking,
            'ac' => $request->ac,
            'laundry' => $request->laundry,
            'price' => $request->price,
            'gym' => $request->gym,
            'sports' => $request->sports,
            'dining' => $request->dining,
            'fire_exit' => $request->fire_exit,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/hotels/'), $filename);
            $success['photo'] = $filename;
        }
        $success->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/hotels/'), $filename);
            $success['photo1'] = $filename;
        }
        $success->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/hotels/'), $filename);
            $success['photo2'] = $filename;
        }
        $success->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/hotels/'), $filename);
            $success['photo3'] = $filename;
        }
        $success->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/hotels/'), $filename);
            $success['photo4'] = $filename;
        }
        $success->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/hotels/'), $filename);
            $success['photo5'] = $filename;
        }
        $success->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/hotels/'), $filename);
            $success['photo6'] = $filename;
        }
        $success->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/hotels/videos'), $filename);
            $success['video'] = $filename;
        }
        $success->save();

        return $this->sendResponse($success, 'hotel post successfully.');
    }
    //end hotel

    public function api_post_room(Request $request)

    {
        $success = Room::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'price' => $request->price,
            's_charge' => $request->s_charge,
            'room_size' => $request->room_size,
            'furnished' => $request->furnished,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'attached_toilet' => $request->attached_toilet,
            'hot_water' => $request->hot_water,
            'varanda' => $request->varanda,
            'generator' => $request->generator,
            'guest_count' => $request->guest_count,
            'ac' => $request->ac,
            'wifi' => $request->wifi,
            'cable_tv' => $request->cable_tv,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/rooms/'), $filename);
            $success['photo'] = $filename;
        }
        $success->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/rooms/'), $filename);
            $success['photo1'] = $filename;
        }
        $success->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/rooms/'), $filename);
            $success['photo2'] = $filename;
        }
        $success->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/rooms/'), $filename);
            $success['photo3'] = $filename;
        }
        $success->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/rooms/'), $filename);
            $success['photo4'] = $filename;
        }
        $success->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/rooms/'), $filename);
            $success['photo5'] = $filename;
        }
        $success->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/rooms/'), $filename);
            $success['photo6'] = $filename;
        }
        $success->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/rooms/videos'), $filename);
            $success['video'] = $filename;
        }
        $success->save();


        return $this->sendResponse($success, 'Room information added successfully.');
    }

    //end room

    function api_post_flat(Request $request)
    {

        $success = Flat::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            's_charge' => $request->s_charge,
            'description' => $request->description,
            'address' => $request->address,
            'flat_size' => $request->flat_size,
            'floor_level' => $request->floor_level,
            'bedrooms' => $request->bedrooms,
            'fire_exit' => $request->fire_exit,
            'description' => $request->description,
            'generator' => $request->generator,
            'drawing' => $request->drawing,
            'dining' => $request->dining,
            'attached_toilet' => $request->attached_toilet,
            'hot_water' => $request->hot_water,
            'ac' => $request->ac,
            'cable_tv' => $request->cable_tv,
            'kitchen' => $request->kitchen,
            'varanda' => $request->varanda,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'furnished' => $request->furnished,
            'parking' => $request->parking,
            'gas' => $request->gas,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/flats/'), $filename);
            $success['photo'] = $filename;
        }
        $success->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/flats/'), $filename);
            $success['photo1'] = $filename;
        }
        $success->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/flats/'), $filename);
            $success['photo2'] = $filename;
        }
        $success->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/flats/'), $filename);
            $success['photo3'] = $filename;
        }
        $success->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/flats/'), $filename);
            $success['photo4'] = $filename;
        }
        $success->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/flats/'), $filename);
            $success['photo5'] = $filename;
        }
        $success->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/flats/'), $filename);
            $success['photo6'] = $filename;
        }
        $success->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/flats/videos'), $filename);
            $success['video'] = $filename;
        }
        $success->save();

        return $this->sendResponse($success, 'flat post successfully.');
    }
    //end flat

    //Garage

    function api_post_parking(Request $request)
    {

        $success = Parking_Spot::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'price' => $request->price,
            'floor_level' => $request->floor_level,
            'floor_height' => $request->floor_height,
            'vehicle_type' => $request->vehicle_type,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/garages/'), $filename);
            $success['photo'] = $filename;
        }
        $success->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/garages/'), $filename);
            $success['photo1'] = $filename;
        }
        $success->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/garages/'), $filename);
            $success['photo2'] = $filename;
        }
        $success->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/garages/'), $filename);
            $success['photo3'] = $filename;
        }
        $success->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/garages/'), $filename);
            $success['photo4'] = $filename;
        }
        $success->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/garages/'), $filename);
            $success['photo5'] = $filename;
        }
        $success->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/garages/'), $filename);
            $success['photo6'] = $filename;
        }
        $success->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/garages/videos'), $filename);
            $success['video'] = $filename;
        }
        $success->save();

        return $this->sendResponse($success, 'parking post successfully.');
    }
    //end garage

    function api_post_hostel(Request $request)
    {

        $success = Hostel::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'hostel_name' => $request->hostel_name,
            'address' => $request->address,
            'room_size' => $request->room_size,
            'room_type' => $request->room_type,
            'generator' => $request->generator,
            'attached_toilet' => $request->attached_toilet,
            'hot_water' => $request->hot_water,
            'laundry' => $request->laundry,
            'ac' => $request->ac,
            'pool' => $request->pool,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'spa' => $request->spa,
            'furnished' => $request->furnished,
            'parking' => $request->parking,
            'gym' => $request->gym,
            'sports' => $request->sports,
            'dining' => $request->dining,
            'price' => $request->price,
            's_charge' => $request->s_charge,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/hostels/'), $filename);
            $success['photo'] = $filename;
        }
        $success->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/hostels/'), $filename);
            $success['photo1'] = $filename;
        }
        $success->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/hostels/'), $filename);
            $success['photo2'] = $filename;
        }
        $success->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/hostels/'), $filename);
            $success['photo3'] = $filename;
        }
        $success->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/hostels/'), $filename);
            $success['photo4'] = $filename;
        }
        $success->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/hostels/'), $filename);
            $success['photo5'] = $filename;
        }
        $success->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/hostels/'), $filename);
            $success['photo6'] = $filename;
        }
        $success->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/hostels/videos'), $filename);
            $success['video'] = $filename;
        }
        $success->save();

        return $this->sendResponse($success, 'hostel post successfully.');
    }

    function api_post_office(Request $request)
    {

        $success = Office::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'interior_condition' => $request->interior_condition,
            'fire_safety' => $request->fire_safety,
            'generator' => $request->generator,
            's_charge' => $request->s_charge,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'ac' => $request->ac,
            'price' => $request->price,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'interior_condition' => $request->interior_condition,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/offices/'), $filename);
            $success['photo'] = $filename;
        }
        $success->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/offices/'), $filename);
            $success['photo1'] = $filename;
        }
        $success->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/offices/'), $filename);
            $success['photo2'] = $filename;
        }
        $success->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/offices/'), $filename);
            $success['photo3'] = $filename;
        }
        $success->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/offices/'), $filename);
            $success['photo4'] = $filename;
        }
        $success->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/offices/'), $filename);
            $success['photo5'] = $filename;
        }
        $success->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/offices/'), $filename);
            $success['photo6'] = $filename;
        }
        $success->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/offices/videos'), $filename);
            $success['video'] = $filename;
        }
        $success->save();

        return $this->sendResponse($success, 'office post successfully.');
    }

    function api_post_resort(Request $request)
    {

        $success = Restaurant::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'resort_name' => $request->resort_name,
            'address' => $request->address,
            'room_type' => $request->room_type,
            'attached_toilet' => $request->attached_toilet,
            'hot_water' => $request->hot_water,
            'generator' => $request->generator,
            'laundry' => $request->laundry,
            'ac' => $request->ac,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'dining' => $request->dining,
            'sports' => $request->sports,
            'gym' => $request->gym,
            'spa' => $request->spa,
            'swimmingpool' => $request->swimmingpool,
            'price' => $request->price,
            's_charge' => $request->s_charge,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/restaurants/'), $filename);
            $success['photo'] = $filename;
        }
        $success->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/restaurants/'), $filename);
            $success['photo1'] = $filename;
        }
        $success->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/restaurants/'), $filename);
            $success['photo2'] = $filename;
        }
        $success->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/restaurants/'), $filename);
            $success['photo3'] = $filename;
        }
        $success->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/restaurants/'), $filename);
            $success['photo4'] = $filename;
        }
        $success->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/restaurants/'), $filename);
            $success['photo5'] = $filename;
        }
        $success->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/restaurants/'), $filename);
            $success['photo6'] = $filename;
        }
        $success->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/restaurants/videos'), $filename);
            $success['video'] = $filename;
        }
        $success->save();

        return $this->sendResponse($success, 'resort post successfully.');
    }



    public function api_post_building(Request $request)
    {
        $success = Building::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'date' => $request->date,
            'phone' => $request->phone,
            'price' => $request->price,
            'building_name' => $request->building_name,
            'building_size' => $request->building_size,
            'floor' => $request->floor,
            'floor_size' => $request->floor_size,
            's_charge' => $request->s_charge,
            'generator' => $request->generator,
            'road_width' => $request->road_width,
            'description' => $request->description,
            't_build' => $request->t_build,
            'address' => $request->address,
            'gas' => $request->gas,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'fire_exit' => $request->fire_exit,
            'address' => $request->address,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/buildings/'), $filename);
            $success['photo'] = $filename;
        }
        $success->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/buildings/'), $filename);
            $success['photo1'] = $filename;
        }
        $success->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/buildings/'), $filename);
            $success['photo2'] = $filename;
        }
        $success->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/buildings/'), $filename);
            $success['photo3'] = $filename;
        }
        $success->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/buildings/'), $filename);
            $success['photo4'] = $filename;
        }
        $success->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/buildings/'), $filename);
            $success['photo5'] = $filename;
        }
        $success->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/buildings/'), $filename);
            $success['photo6'] = $filename;
        }
        $success->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/buildings/videos'), $filename);
            $success['video'] = $filename;
        }
        $success->save();

        return $this->sendResponse($success, 'Building information added successfully.');
    }


    function exibution_center_update(Request $request, $id)
    {
        $hello = Exibution_Center::find($id);
        $success = Exibution_Center::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'interior_condition' => $request->interior_condition,
            'room_size' => $request->room_size,
            'room_type' => $request->room_type,
            'road_width' => $request->road_width,
            'generator' => $request->generator,
            'floor_level' => $request->floor_level,
            'toilet' => $request->toilet,
            'lift' => $request->lift,
            'fire_exit' => $request->fire_exit,
            'parking' => $request->parking,
            'price' => $request->price,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Exibution_Center::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
                Exibution_Center::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/exhibutions/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Exibution_Center::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
                Exibution_Center::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/exhibutions/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Exibution_Center::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
                Exibution_Center::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/exhibutions/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Exibution_Center::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
                Exibution_Center::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/exhibutions/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Exibution_Center::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
                Exibution_Center::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/exhibutions/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Exibution_Center::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
                Exibution_Center::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/exhibutions/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Exibution_Center::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
                Exibution_Center::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/exhibutions/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Exibution center Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function playground_update(Request $request, $id)
    {
        $hello = Play_ground::find($id);
        $success = Play_ground::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'area' => $request->area,
            'description' => $request->description,
            'address' => $request->address,
            'shed' => $request->shed,
            'toilet' => $request->toilet,
            'change_room' => $request->change_room,
            'generator' => $request->generator,
            'gym' => $request->gym,
            'parking' => $request->parking,
            'sports' => $request->sports,
            'price' => $request->price,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Play_ground::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
                Play_ground::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/playgrounds/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Play_ground::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
                Play_ground::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/playgrounds/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Play_ground::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
                Play_ground::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/playgrounds/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Play_ground::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
                Play_ground::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/playgrounds/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Play_ground::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
                Play_ground::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/playgrounds/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Play_ground::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
                Play_ground::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/playgrounds/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Play_ground::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
                Play_ground::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/playgrounds/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Playground Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function restuarant_update(Request $request, $id)
    {
        $hello = Restaurant::find($id);
        $success = Restaurant::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'resort_name' => $request->resort_name,
            'address' => $request->address,
            'room_type' => $request->room_type,
            'attached_toilet' => $request->attached_toilet,
            'hot_water' => $request->hot_water,
            'generator' => $request->generator,
            'laundry' => $request->laundry,
            'ac' => $request->ac,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'dining' => $request->dining,
            'sports' => $request->sports,
            'gym' => $request->gym,
            'spa' => $request->spa,
            'swimmingpool' => $request->swimmingpool,
            'price' => $request->price,
            's_charge' => $request->s_charge,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Restaurant::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/resturents/" . $photoName), 100);
                Restaurant::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/resturents/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/resturents/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Restaurant::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/resturents/" . $photoName), 100);
                Restaurant::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/resturents/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/resturents/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Restaurant::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/resturents/" . $photoName), 100);
                Restaurant::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/resturents/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/resturents/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Restaurant::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/resturents/" . $photoName), 100);
                Restaurant::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/resturents/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/resturents/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Restaurant::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/resturents/" . $photoName), 100);
                Restaurant::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/resturents/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/resturents/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Restaurant::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/resturents/" . $photoName), 100);
                Restaurant::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/resturents/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/resturents/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Restaurant::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/resturents/" . $photoName), 100);
                Restaurant::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/resturents/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/resturents/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Resturent Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function rooftop_update(Request $request, $id)
    {
        $hello = Rooftop::find($id);
        $success = Rooftop::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_area' => $request->floor_area,
            'generator' => $request->generator,
            'toilet' => $request->toilet,
            'shed' => $request->shed,
            'p_protection' => $request->p_protection,
            'lift' => $request->lift,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'parking' => $request->parking,
            'price' => $request->price,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Rooftop::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
                Rooftop::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooftops/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Rooftop::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
                Rooftop::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooftops/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Rooftop::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
                Rooftop::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooftops/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Rooftop::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
                Rooftop::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooftops/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Rooftop::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
                Rooftop::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooftops/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Rooftop::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
                Rooftop::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooftops/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Rooftop::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
                Rooftop::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooftops/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Rooftop Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function bilboard_update(Request $request, $id)
    {
        $hello = Bilboard::find($id);
        $success = Bilboard::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'title'     => $request->title,
            'date'      => $request->date,
            'phone'     => $request->phone,
            'description' => $request->description,
            'type' => $request->type,
            'address' => $request->address,
            'size' => $request->size,
            'hieght' => $request->hieght,
            'electricity' => $request->electricity,
            'price' => $request->price,
            'video' => $request->video
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/bilboards/" . $photoName), 100);
                Bilboard::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/bilboards/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/bilboards/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/bilboards/" . $photoName), 100);
                Bilboard::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/bilboards/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/bilboards/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/bilboards/" . $photoName), 100);
                Bilboard::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/bilboards/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/bilboards/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/bilboards/" . $photoName), 100);
                Bilboard::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/bilboards/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/bilboards/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/bilboards/" . $photoName), 100);
                Bilboard::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/bilboards/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/bilboards/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/bilboards/" . $photoName), 100);
                Bilboard::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/bilboards/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/bilboards/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/bilboards/" . $photoName), 100);
                Bilboard::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/bilboards/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/bilboards/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Bilboard Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function swimmingpool_update(Request $request, $id)
    {
        $hello = Swimming_Pool::find($id);
        $success = Swimming_Pool::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'type' => $request->type,
            'address' => $request->address,
            'size' => $request->size,
            'toilet' => $request->toilet,
            'wifi' => $request->wifi,
            'shed' => $request->shed,
            'laundry' => $request->laundry,
            'change_room' => $request->change_room,
            'generator' => $request->generator,
            'parking' => $request->parking,
            'laundry' => $request->laundry,
            'price' => $request->price,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Swimming_Pool::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
                Swimming_Pool::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/swimmingpools/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Swimming_Pool::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
                Swimming_Pool::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/swimmingpools/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Swimming_Pool::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
                Swimming_Pool::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/swimmingpools/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Swimming_Pool::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
                Swimming_Pool::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/swimmingpools/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Swimming_Pool::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
                Swimming_Pool::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/swimmingpools/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Swimming_Pool::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
                Swimming_Pool::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/swimmingpools/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Swimming_Pool::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
                Swimming_Pool::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/swimmingpools/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Swimming Pool Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function pond_update(Request $request, $id)
    {
        $hello = Pond::find($id);
        $success = Pond::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'land_area' => $request->land_area,
            'land_height' => $request->land_height,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'y_price' => $request->y_price,
            'drainage_system' => $request->drainage_system,
            'parking' => $request->parking,
            'road_width' => $request->road_width,
            'price' => $request->price,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Pond::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/ponds/" . $photoName), 100);
                Pond::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ponds/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/ponds/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Pond::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/ponds/" . $photoName), 100);
                Pond::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ponds/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/ponds/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Pond::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/ponds/" . $photoName), 100);
                Pond::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ponds/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/ponds/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Pond::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/ponds/" . $photoName), 100);
                Pond::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ponds/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/ponds/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Pond::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/ponds/" . $photoName), 100);
                Pond::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ponds/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/ponds/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Pond::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/ponds/" . $photoName), 100);
                Pond::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ponds/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/ponds/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Pond::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/ponds/" . $photoName), 100);
                Pond::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ponds/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/ponds/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Pond Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function warehouse_update(Request $request, $id)
    {
        $hello = Warehouse::find($id);
        $success = Warehouse::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'description' => $request->description,
            'ac' => $request->ac,
            'type' => $request->type,
            'generator' => $request->generator,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'building_condition' => $request->building_condition,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'drainage_system' => $request->drainage_system,
            'parking' => $request->parking,
            'price' => $request->price,
            'video' => $request->video
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Warehouse::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
                Warehouse::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/warehouses/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Warehouse::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
                Warehouse::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/warehouses/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Warehouse::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
                Warehouse::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/warehouses/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Warehouse::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
                Warehouse::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/warehouses/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Warehouse::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
                Warehouse::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/warehouses/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Warehouse::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
                Warehouse::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/warehouses/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Warehouse::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
                Warehouse::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/warehouses/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Warehouse Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function shop_update(Request $request, $id)
    {
        $hello = Shop::find($id);
        $success = Shop::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'fire_safety' => $request->fire_safety,
            'generator' => $request->generator,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'price' => $request->price,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Shop::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/shops/" . $photoName), 100);
                Shop::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shops/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/shops/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Shop::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/shops/" . $photoName), 100);
                Shop::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shops/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/shops/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Shop::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/shops/" . $photoName), 100);
                Shop::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shops/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/shops/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Shop::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/shops/" . $photoName), 100);
                Shop::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shops/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/shops/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Shop::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/shops/" . $photoName), 100);
                Shop::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shops/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/shops/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Shop::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/shops/" . $photoName), 100);
                Shop::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shops/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/shops/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Shop::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/shops/" . $photoName), 100);
                Shop::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shops/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/shops/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Shop Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function shooting_update(Request $request, $id)
    {
        $hello = Shooting_Spot::find($id);
        $success = Shooting_Spot::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_area' => $request->floor_area,
            'road_width' => $request->road_width,
            'dining' => $request->dining,
            'water' => $request->water,
            'lift' => $request->lift,
            'generator' => $request->generator,
            'shed' => $request->shed,
            'gas' => $request->gas,
            'toilet' => $request->toilet,
            'electricity' => $request->electricity,
            'change_room' => $request->change_room,
            'parking' => $request->parking,
            'price' => $request->price,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Shooting_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/shootings/" . $photoName), 100);
                Shooting_Spot::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shootings/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/shootings/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Shooting_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/shootings/" . $photoName), 100);
                Shooting_Spot::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shootings/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/shootings/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Shooting_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/shootings/" . $photoName), 100);
                Shooting_Spot::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shootings/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/shootings/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Shooting_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/shootings/" . $photoName), 100);
                Shooting_Spot::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shootings/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/shootings/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Shooting_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/shootings/" . $photoName), 100);
                Shooting_Spot::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shootings/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/shootings/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Shooting_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/shootings/" . $photoName), 100);
                Shooting_Spot::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shootings/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/shootings/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Shooting_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/shootings/" . $photoName), 100);
                Shooting_Spot::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shootings/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/shootings/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Shooting spot Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function community_update(Request $request, $id)
    {
        $hello = Community_Center::find($id);
        $success = Community_Center::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'fire_safety' => $request->fire_safety,
            'generator' => $request->generator,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'price' => $request->price,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Community_Center::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/communities/" . $photoName), 100);
                Community_Center::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/communities/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/communities/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Community_Center::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/communities/" . $photoName), 100);
                Community_Center::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/communities/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/communities/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Community_Center::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/communities/" . $photoName), 100);
                Community_Center::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/communities/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/communities/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Community_Center::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/communities/" . $photoName), 100);
                Community_Center::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/communities/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/communities/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Community_Center::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/communities/" . $photoName), 100);
                Community_Center::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/communities/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/communities/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Community_Center::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/communities/" . $photoName), 100);
                Community_Center::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/communities/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/communities/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Community_Center::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/communities/" . $photoName), 100);
                Community_Center::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/communities/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/communities/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Community center Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function land_update(Request $request, $id)
    {
        $hello = Land::find($id);
        $success = Land::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'land_area' => $request->land_area,
            'land_height' => $request->land_height,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'y_price' => $request->y_price,
            'drainage_system' => $request->drainage_system,
            'parking' => $request->parking,
            'road_width' => $request->road_width,
            'price' => $request->price,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Land::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/lands/" . $photoName), 100);
                Land::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/lands/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/lands/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Land::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/lands/" . $photoName), 100);
                Land::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/lands/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/lands/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Land::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/lands/" . $photoName), 100);
                Land::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/lands/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/lands/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Land::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/lands/" . $photoName), 100);
                Land::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/lands/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/lands/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Land::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/lands/" . $photoName), 100);
                Land::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/lands/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/lands/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Land::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/lands/" . $photoName), 100);
                Land::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/lands/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/lands/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Land::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/lands/" . $photoName), 100);
                Land::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/lands/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/lands/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Land Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function hostel_update(Request $request, $id)
    {
        $hello = Hostel::find($id);
        $success = Hostel::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'hostel_name' => $request->hostel_name,
            'address' => $request->address,
            'room_size' => $request->room_size,
            'room_type' => $request->room_type,
            'generator' => $request->generator,
            'attached_toilet' => $request->attached_toilet,
            'hot_water' => $request->hot_water,
            'laundry' => $request->laundry,
            'ac' => $request->ac,
            'pool' => $request->pool,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'spa' => $request->spa,
            'furnished' => $request->furnished,
            'parking' => $request->parking,
            'gym' => $request->gym,
            'sports' => $request->sports,
            'dining' => $request->dining,
            'price' => $request->price,
            's_charge' => $request->s_charge,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Hostel::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/hostels/" . $photoName), 100);
                Hostel::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hostels/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/hostels/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Hostel::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/hostels/" . $photoName), 100);
                Hostel::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hostels/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/hostels/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Hostel::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/hostels/" . $photoName), 100);
                Hostel::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hostels/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/hostels/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Hostel::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/hostels/" . $photoName), 100);
                Hostel::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hostels/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/hostels/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Hostel::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/hostels/" . $photoName), 100);
                Hostel::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hostels/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/hostels/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Hostel::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/hostels/" . $photoName), 100);
                Hostel::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hostels/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/hostels/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Hostel::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/hostels/" . $photoName), 100);
                Hostel::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hostels/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/hostels/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Hostel Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function picnic_update(Request $request, $id)
    {
        $hello = Picnic_Spot::find($id);
        $success = Picnic_Spot::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'address' => $request->address,
            'description' => $request->description,
            'land_area' => $request->land_area,
            'price' => $request->price,
            'generator' => $request->generator,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'shed' => $request->shed,
            'dining' => $request->dining,
            'toilet' => $request->toilet,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'change_room' => $request->change_room,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Picnic_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/picnics/" . $photoName), 100);
                Picnic_Spot::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/picnics/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/picnics/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Picnic_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/picnics/" . $photoName), 100);
                Picnic_Spot::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/picnics/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/picnics/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Picnic_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/picnics/" . $photoName), 100);
                Picnic_Spot::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/picnics/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/picnics/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Picnic_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/picnics/" . $photoName), 100);
                Picnic_Spot::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/picnics/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/picnics/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Picnic_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/picnics/" . $photoName), 100);
                Picnic_Spot::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/picnics/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/picnics/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Picnic_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/picnics/" . $photoName), 100);
                Picnic_Spot::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/picnics/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/picnics/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Picnic_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/picnics/" . $photoName), 100);
                Picnic_Spot::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/picnics/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/picnics/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Picnic Spot Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function hotel_update(Request $request, $id)
    {
        $hello = Hotel::find($id);
        $success = Hotel::find($id)->update([
            'post_type' => $hello->post_type,
            'post_type' => $request->post_type,
            'date' => $request->date,
            'phone' => $request->phone,
            's_charge' => $request->s_charge,
            'description' => $request->description,
            'hotel_name' => $request->hotel_name,
            'location' => $request->location,
            'room_type' => $request->room_type,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'generator' => $request->generator,
            'bathroom' => $request->bathroom,
            'hot_water' => $request->hot_water,
            'parking' => $request->parking,
            'ac' => $request->ac,
            'laundry' => $request->laundry,
            'price' => $request->price,
            'gym' => $request->gym,
            'sports' => $request->sports,
            'dining' => $request->dining,
            'fire_exit' => $request->fire_exit,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Hotel::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/hotels/" . $photoName), 100);
                Hotel::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hotels/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/hotels/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Hotel::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/hotels/" . $photoName), 100);
                Hotel::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hotels/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/hotels/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Hotel::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/hotels/" . $photoName), 100);
                Hotel::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hotels/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/hotels/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Hotel::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/hotels/" . $photoName), 100);
                Hotel::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hotels/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/hotels/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Hotel::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/hotels/" . $photoName), 100);
                Hotel::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hotels/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/hotels/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Hotel::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/hotels/" . $photoName), 100);
                Hotel::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hotels/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/hotels/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Hotel::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/hotels/" . $photoName), 100);
                Hotel::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hotels/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/hotels/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Hotel Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function ghat_update(Request $request, $id)
    {
        $hello = Ghat::find($id);
        $success = Ghat::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'price' => $request->price,
            'description' => $request->description,
            'y_price' => $request->y_price,
            'address' => $request->address,
            'toilet' => $request->toilet,
            'parking' => $request->parking,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Ghat::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/ghats/" . $photoName), 100);
                Ghat::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ghats/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/ghats/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Ghat::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/ghats/" . $photoName), 100);
                Ghat::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ghats/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/ghats/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Ghat::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/ghats/" . $photoName), 100);
                Ghat::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ghats/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/ghats/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Ghat::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/ghats/" . $photoName), 100);
                Ghat::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ghats/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/ghats/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Ghat::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/ghats/" . $photoName), 100);
                Ghat::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ghats/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/ghats/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Ghat::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/ghats/" . $photoName), 100);
                Ghat::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ghats/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/ghats/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Ghat::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/ghats/" . $photoName), 100);
                Ghat::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ghats/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/ghats/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Ghat Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function office_update(Request $request, $id)
    {
        $hello = Office::find($id);
        $success = Office::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            's_charge' => $request->s_charge,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'interior_condition' => $request->interior_condition,
            'price' => $request->price,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'ac' => $request->ac,
            'parking' => $request->parking,
            'generator' => $request->generator,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Office::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/offices/" . $photoName), 100);
                Office::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/offices/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/offices/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Office::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/offices/" . $photoName), 100);
                Office::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/offices/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/offices/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Office::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/offices/" . $photoName), 100);
                Office::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/offices/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/offices/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Office::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/offices/" . $photoName), 100);
                Office::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/offices/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/offices/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Office::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/offices/" . $photoName), 100);
                Office::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/offices/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/offices/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Office::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/offices/" . $photoName), 100);
                Office::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/offices/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/offices/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Office::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/offices/" . $photoName), 100);
                Office::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/offices/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/offices/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Office Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function factory_update(Request $request, $id)
    {
        $hello = Factory::find($id);
        $success = Factory::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'floor_height' => $request->floor_height,
            'road_width' => $request->road_width,
            'generator' => $request->generator,
            'fire_safety' => $request->fire_safety,
            'electricity' => $request->electricity,
            'ac' => $request->ac,
            'gas' => $request->gas,
            'water' => $request->water,
            'lift' => $request->lift,
            'drainage_system' => $request->drainage_system,
            'parking' => $request->parking,
            'price' => $request->price,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Factory::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/factories/" . $photoName), 100);
                Factory::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/factories/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/factories/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Factory::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/factories/" . $photoName), 100);
                Factory::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/factories/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/factories/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Factory::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/factories/" . $photoName), 100);
                Factory::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/factories/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/factories/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Factory::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/factories/" . $photoName), 100);
                Factory::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/factories/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/factories/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Factory::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/factories/" . $photoName), 100);
                Factory::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/factories/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/factories/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Factory::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/factories/" . $photoName), 100);
                Factory::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/factories/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/factories/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Factory::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/factories/" . $photoName), 100);
                Factory::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/factories/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/factories/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Factory Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function building_update(Request $request, $id)
    {
        $hello = Building::find($id);
        $success = Building::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'date' => $request->date,
            'phone' => $request->phone,
            'price' => $request->price,
            'building_name' => $request->building_name,
            'building_size' => $request->building_size,
            'floor' => $request->floor,
            'floor_size' => $request->floor_size,
            's_charge' => $request->s_charge,
            'generator' => $request->generator,
            'road_width' => $request->road_width,
            'description' => $request->description,
            't_build' => $request->t_build,
            'address' => $request->address,
            'gas' => $request->gas,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'fire_exit' => $request->fire_exit,
            'address' => $request->address,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Building::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/buildings/" . $photoName), 100);
                Building::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/buildings/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/buildings/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Building::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/buildings/" . $photoName), 100);
                Building::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/buildings/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/buildings/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Building::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/buildings/" . $photoName), 100);
                Building::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/buildings/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/buildings/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Building::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/buildings/" . $photoName), 100);
                Building::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/buildings/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/buildings/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Building::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/buildings/" . $photoName), 100);
                Building::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/buildings/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/buildings/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Building::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/buildings/" . $photoName), 100);
                Building::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/buildings/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/buildings/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Building::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/buildings/" . $photoName), 100);
                Building::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/buildings/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/buildings/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Building Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function room_update(Request $request, $id)
    {
        $hello = Room::find($id);
        $success = Room::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'price' => $request->price,
            's_charge' => $request->s_charge,
            'room_size' => $request->room_size,
            'furnished' => $request->furnished,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'attached_toilet' => $request->attached_toilet,
            'hot_water' => $request->hot_water,
            'varanda' => $request->varanda,
            'generator' => $request->generator,
            'guest_count' => $request->guest_count,
            'ac' => $request->ac,
            'wifi' => $request->wifi,
            'cable_tv' => $request->cable_tv,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Room::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/rooms/" . $photoName), 100);
                Room::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooms/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/rooms/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Room::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/rooms/" . $photoName), 100);
                Room::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooms/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/rooms/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Room::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/rooms/" . $photoName), 100);
                Room::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooms/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/rooms/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Room::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/rooms/" . $photoName), 100);
                Room::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooms/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/rooms/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Room::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/rooms/" . $photoName), 100);
                Room::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooms/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/rooms/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Room::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/rooms/" . $photoName), 100);
                Room::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooms/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/rooms/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Room::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/rooms/" . $photoName), 100);
                Room::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooms/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/rooms/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Room Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function parking_spot_update(Request $request, $id)
    {
        $hello = Parking_Spot::find($id);
        $success = Parking_Spot::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'price' => $request->price,
            'floor_level' => $request->floor_level,
            'floor_height' => $request->floor_height,
            'vehicle_type' => $request->vehicle_type,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Parking_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/garages/" . $photoName), 100);
                Parking_Spot::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/garages/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/garages/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Parking_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/garages/" . $photoName), 100);
                Parking_Spot::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/garages/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/garages/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Parking_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/garages/" . $photoName), 100);
                Parking_Spot::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/garages/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/garages/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Parking_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/garages/" . $photoName), 100);
                Parking_Spot::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/garages/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/garages/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Parking_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/garages/" . $photoName), 100);
                Parking_Spot::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/garages/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/garages/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Parking_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/garages/" . $photoName), 100);
                Parking_Spot::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/garages/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/garages/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Parking_Spot::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/garages/" . $photoName), 100);
                Parking_Spot::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/garages/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/garages/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Garage Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }
    function flat_update(Request $request, $id)
    {
        $hello = Flat::find($id);
        $success = Flat::find($id)->update([
            'post_type' => $hello->post_type,
            'user_id' => $hello->user_id,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            's_charge' => $request->s_charge,
            'description' => $request->description,
            'address' => $request->address,
            'flat_size' => $request->flat_size,
            'floor_level' => $request->floor_level,
            'bedrooms' => $request->bedrooms,
            'fire_exit' => $request->fire_exit,
            'description' => $request->description,
            'generator' => $request->generator,
            'drawing' => $request->drawing,
            'dining' => $request->dining,
            'attached_toilet' => $request->attached_toilet,
            'ac' => $request->ac,
            'cable_tv' => $request->cable_tv,
            'kitchen' => $request->kitchen,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'furnished' => $request->furnished,
            'parking' => $request->parking,
            'gas' => $request->gas,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'price' => $request->price,
            'video' => $request->video,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Flat::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/flats/" . $photoName), 100);
                Flat::findOrFail($hello->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/flats/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/flats/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo1')) {
            $photo = $request->photo1;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Flat::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/flats/" . $photoName), 100);
                Flat::findOrFail($hello->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/flats/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/flats/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->photo2;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Flat::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/flats/" . $photoName), 100);
                Flat::findOrFail($hello->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/flats/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/flats/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->photo3;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Flat::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/flats/" . $photoName), 100);
                Flat::findOrFail($hello->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/flats/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/flats/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo4')) {
            $photo = $request->photo4;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Flat::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/flats/" . $photoName), 100);
                Flat::findOrFail($hello->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/flats/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/flats/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo5')) {
            $photo = $request->photo5;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Flat::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/flats/" . $photoName), 100);
                Flat::findOrFail($hello->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/flats/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/flats/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo6')) {
            $photo = $request->photo6;
            $photoName = date('YmdHi') .  $photo->getClientOriginalExtension();
            if (Flat::findOrFail($hello->id)) {
                Image::make($photo)->save(base_path("public/uploads/flats/" . $photoName), 100);
                Flat::findOrFail($hello->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/flats/" . $photoName));
                Image::make($photo)->save(base_path("public/uploads/flats/" . $photoName), 100);
            }
        }
        if ($success) {

            return $this->sendResponse($success, 'Flat Information have been successfully Updated.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }






    function user_update(Request $request, $id)
    {
        $hello = User::find($id);


        $success = $hello->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'nationality' => $request->nationality,
            'date_of_birth' => $request->date_of_birth,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'gender' => $request->gender,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = date('YmdHi') . $request->id . '.' . $photo->getClientOriginalExtension();
            if (User::findOrFail($request->id)) {
                image::make($photo)->save(base_path("public/uploads/registers/" . $photoName), 100);
                $hello->update([
                    'photo' => $photoName,
                ]);
            } else {
                (base_path("/uploads/auths/" . $photoName));
                Image::make($photo)->save(base_path("/uploads/registers/" . $photoName), 100);
            }
        }
        if ($request->hasFile('n_photo1')) {
            $photo1 = $request->n_photo1;
            $photo1Name = date('YmdHi') . $request->id . '.' . $photo1->getClientOriginalExtension();
            if (User::findOrFail($request->id)) {
                image::make($photo1)->save(base_path("public/uploads/registers/" . $photo1Name), 100);
                $hello->update([
                    'n_photo1' => $photo1Name,
                ]);
            } else {
                (base_path("/uploads/auths/" . $photo1Name));
                Image::make($photo1)->save(base_path("public/uploads/registers/" . $photo1Name), 100);
            }
        }


        if ($request->hasFile('n_photo2')) {
            $photo2 = $request->n_photo2;
            $photo2Name = date('YmdHi') . $request->id . '.' . $photo2->getClientOriginalExtension();
            if (User::findOrFail($request->id)) {
                image::make($photo2)->save(base_path("public/uploads/registers/" . $photo2Name), 100);
                $hello->update([
                    'n_photo2' => $photo2Name,
                ]);
            } else {
                (base_path("/uploads/auths/" . $photo2Name));
                Image::make($photo2)->save(base_path("public/uploads/registers/" . $photo2Name), 100);
            }
        }
        if ($success) {
            return $this->sendResponse($success, 'User updated successfully.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }


    public function update_password(Request $request, $id)
    {
        $profile = User::find($id);

        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        if (Hash::check($request->current_password, $profile->password)) {
            // dd("hello");
            $success = User::find($id)->update([
                'password' => Hash::make($request->new_password)
            ]);
            if ($success) {
                return $this->sendResponse($success, 'password Changed successfully.');
            } else {
                return $this->sendError($success, 'Something went Wrong');
            }
        }
    }

    public function forgot_password(Request $request, $mobile)
    {
        $profile = User::where('phone', $mobile)->get();
        $validate = $request->validate([
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        $success = User::where('phone', $mobile)->update([
            'password' => Hash::make($request->new_confirm_password)
        ]);
        if ($success) {
            return $this->sendResponse($success, 'password Changed successfully.');
        } else {
            return $this->sendError($success, 'Something went Wrong');
        }
    }

    function report_post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'    => 'required',
            'mobile'   => 'required',
            'email' => 'required',
            'topic' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        } else {
            $success =  report::create([
                'name'    => $request->name,
                'mobile'   => $request->mobile,
                'email' => $request->email,
                'topic' => $request->topic,
                'description' => $request->description,
            ]);
            return $this->sendResponse($success, 'Thank you For Your Response. we will contact with to you');
        }
    }

    public function Form_post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'package' => 'required',
            'company_name' => 'required',
            'company_address' => 'required',
        ]);
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        } else {
            $success = forms::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'package' => $request->package,
                'company_name' => $request->company_name,
                'massage' => $request->massage,
                'company_address' => $request->company_address,
            ]);
            return $this->sendResponse($success, 'Form Submited. Authority Will contact with you.');
        }
    }
}
