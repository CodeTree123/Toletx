<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Bilboard;
use App\Models\Building;
use App\Models\Community_Center;
use App\Models\Exibution_Center;
use App\Models\Factory;
use App\Models\Flat;
use App\Models\Ghat;
use App\Models\Hostel;
use App\Models\Hotel;
use App\Models\Land;
use App\Models\Office;
use App\Models\Parking_Spot;
use App\Models\Picnic_Spot;
use App\Models\Play_ground;
use App\Models\Pond;
use App\Models\Restaurant;
use App\Models\Rooftop;
use App\Models\Room;
use App\Models\marketing;
use App\Models\Shooting_Spot;
use App\Models\Shop;
use App\Models\Swimming_Pool;
use App\Models\Warehouse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class SearchController extends Controller
{
    function room_search(Request $request)
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();

        // dd($request->all());
        // Get the search value from the request
        $min_price = 0;
        $max_price = 0;
        $min_size = 0;
        $max_size = 0;
        if ($request->has('min_price')) {
            $min_price = $request->get('min_price');
        }

        if ($request->has('max_price')) {
            $max_price = $request->get('max_price');
        }

        //dd($max_price);
        if ($request->has('min_size')) {
            $min_size = $request->get('min_size');
        }

        if ($request->has('max_size')) {
            $max_size = $request->get('max_size');
        }


        $array = QueryBuilder::for(Room::class)
            ->allowedFilters([
                'address', 'date','price','room_size','guest_count','wifi','attached_toilet','varanda','gas','water','electricity','lift','furnished','hot_water','ac','cable_tv','parking','generator'])->get();


        // Return the search view with the resluts compacted


        if (($min_price) && ($max_price)) {
            $array->whereBetween('price', [$min_price, $max_price]);
        } elseif (!is_null($min_price)) {
            $array->where('price', '>=', $min_price);
        } elseif (!is_null($max_price)) {
            $array->where('price', '<=', $max_price);
        }

        //room_size

        if (($min_size) && ($max_size)) {
            $array->whereBetween('room_size', [$min_size, $max_size]);
        } elseif (!is_null($min_size)) {
            $array->where('room_size', '>=', $min_size);
        } elseif (!is_null($max_size)) {
            $array->where('room_size', '<=', $max_size);
        }

        // Return the search view with the resluts compacted

        return view('frontend.search.custom_room_search', compact('array','marketing'));
    }

    function building_search()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        // Get the search value from the request

        $array = QueryBuilder::for(Building::class)
            ->allowedFilters(['address', 'date', 'price', 'building_size', 'gas', 'water', 'electricity', 'lift', 'generator', 'parking', 'fire_exit'])
            ->get();

        // Return the search view with the resluts compacted

        return view('frontend.search.custom_building_search', compact('array','marketing'));
    }

    function flat_search()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        // Get the search value from the request
        $array = QueryBuilder::for(Flat::class)
            ->allowedFilters([
                'address', 'date', 'price', 'flat_size', 'bedrooms','fire_exit','wifi','attached_toilet','kitchen','drawing','varanda',
                'dining','lift','furnished','generator','hot_water','ac','cable_tv','gas','water','electricity','parking'
                ])->get();

        // Return the search view with the resluts compacted

        return view('frontend.search.custom_flat_search', compact('array','marketing'));
    }



    function hotel_search()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        // Get the search value from the request
        $array = QueryBuilder::for(Hotel::class)
            ->allowedFilters([
                'address','date','price','location','wifi','bathroom','lift','parking','ac','laundry','dining',
                'fire_exit','generator','gym','sports'
            ])->get();

        // Return the search view with the resluts compacted

        return view('frontend.search.custom_hotel_search', compact('array','marketing'));
    }
    function bilboard_search()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        // Get the search value from the request
        $array = QueryBuilder::for(Bilboard::class)
            ->allowedFilters(['address', 'date', 'price', 'electricity',  'size'])
            ->get();

        // Return the search view with the resluts compacted

        return view('frontend.search.custom_bilboard_search', compact('array','marketing'));
    }


    function exibution_search()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();

        $array = QueryBuilder::for(Exibution_Center::class)
            ->allowedFilters([
                'address', 'date', 'price', 'address','room_size','toilet','lift','fire_exit','generator','parking'
            ])->get();

        return view('frontend.search.custom_exibution_search', compact('array','marketing'));
    }

    function pond_search()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();

        $array = QueryBuilder::for(Pond::class)
            ->allowedFilters([
                'address', 'date', 'price','drainage_system','price','y_price','pond_area'
            ])->get();

        return view('frontend.search.custom_pond_search', compact('array','marketing'));
    }

    function warehouse_search()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();

        $array = QueryBuilder::for(Warehouse::class)
            ->allowedFilters([
                'address', 'date', 'price', 'floor_size', 'fire_safety','generator','lift','parking','drainage_system','gas',
                'water','electricity','ac'
            ])->get();

        return view('frontend.search.custom_warehouse_search', compact('array','marketing'));
    }

    function swimmingpool_search()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();

        $array = QueryBuilder::for(Swimming_Pool::class)
            ->allowedFilters([
                'address', 'date', 'price', 'size', 'wifi','shed','laundry','change_room','generator','toilet','parking'
            ])->get();

        return view('frontend.search.custom_swimmingpool_search', compact('array','marketing'));
    }

    function shop_search()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();

        $array = QueryBuilder::for(Shop::class)
            ->allowedFilters([
                'address', 'date', 'price', 'floor_size','fire_safety','lift','parking','electricity','generator','gas','water'
            ])->get();

        return view('frontend.search.custom_shop_search', compact('array','marketing'));
    }

    function shootingspot_search()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();

        $array = QueryBuilder::for(Shooting_Spot::class)
            ->allowedFilters([
                'address', 'date', 'price', 'floor_area','lift','parking','dining','electricity','toilet','shed','generator','gas',
                'water','change_room'
            ])->get();

        return view('frontend.search.custom_shootingspot_search', compact('array','marketing'));
    }

    function ghat_search(Request $request)
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();

        // Get the search value from the request

        $array = QueryBuilder::for(Ghat::class)
            ->allowedFilters([
                'address', 'date', 'price', 'toilet','parking'
            ])->get();

        // Return the search view with the resluts compacted

        return view('frontend.search.custom_ghat_search', compact('array','marketing'));
    }

    function picnic_search(Request $request)
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();

        // Get the search value from the request

        $array = QueryBuilder::for(Picnic_Spot::class)
            ->allowedFilters([
                'address', 'date', 'price', 'land_area','electricity','gas','water','dining','shed','toilet','lift','parking',
                'generator','change_room'
            ])->get();

        // Return the search view with the resluts compacted

        return view('frontend.search.custom_picnic_search', compact('array','marketing'));
    }

    function rooftop_search()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();

        $array = QueryBuilder::for(Rooftop::class)
            ->allowedFilters([
                'address', 'date', 'price', 'floor_area', 'toilet','p_protection','generator','lift','parking','water',
                'electricity','shed'
            ])->get();

        return view('frontend.search.custom_rooftop_search', compact('array','marketing'));
    }

    function restaurant_search()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $array = QueryBuilder::for(Restaurant::class)
            ->allowedFilters([
                'address', 'date', 'price', 'wifi','attached_toilet','generator','lift','hot_water','laundry','ac','spa','parking','dining','gym','sports','swimmingpool'
            ])->get();

        return view('frontend.search.custom_restaurant_search', compact('array','marketing'));
    }

    function playground_search()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();

        $array = QueryBuilder::for(Play_ground::class)
            ->allowedFilters([
                'address', 'date', 'price', 'area','shed','toilet','change_room','parking','gym','generator','sports'
            ])->get();

        return view('frontend.search.custom_playground_search', compact('array','marketing'));
    }

    function office_search()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $array = QueryBuilder::for(Office::class)
            ->allowedFilters([
                'address', 'date', 'price','floor_size', 'interior_condition','fire_safety','lift','ac','parking','generator',
                'electricity','gas','water'
            ])->get();

        return view('frontend.search.custom_office_search', compact('array','marketing'));
    }

    function land_search()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();

        $array = QueryBuilder::for(Land::class)
            ->allowedFilters([
                'address', 'date', 'price', 'y_price', 'land_area','electricity','gas','water','drainage_system','parking'
            ])->get();

        return view('frontend.search.custom_land_search', compact('array','marketing'));
    }

    function factory_search()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();

        $array = QueryBuilder::for(Factory::class)
            ->allowedFilters([
                'address', 'date', 'price', 'floor_size','fire_safety','lift','parking','drainage_system','gas','water',
                'generator','electricity','ac'
            ])->get();

        return view('frontend.search.custom_factory_search', compact('array','marketing'));
    }

    function community_search()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();

        $array = QueryBuilder::for(Community_Center::class)
            ->allowedFilters([
                'address', 'date', 'price', 'floor_size','interior_condition','fire_safety','generator','lift','parking','seat',
                'wifi','gas','electricity','water','ac'
            ])->get();

        return view('frontend.search.custom_community_search', compact('array','marketing'));
    }

    function hostel_search(Request $request)
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();

        // Get the search value from the request

        $array = QueryBuilder::for(Hostel::class)
            ->allowedFilters([
                'address', 'date', 'price', 'title', 'room_size', 'wifi','attached_toilet','generator','lift','furnished',
                'hot_water','laundry','ac','pool','parking','dining','gym','spa','sports',
            ])->get();

        // Return the search view with the resluts compacted

        return view('frontend.search.custom_hostel_search', compact('array','marketing'));
    }

    function parking_spot_search()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $array = QueryBuilder::for(Parking_Spot::class)
            ->allowedFilters(['address','date','price','vehicle_type'])
            ->get();
        return view('frontend.search.custom_parking_search', compact('array','marketing'));
    }
}
