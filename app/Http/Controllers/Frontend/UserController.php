<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Building;
use App\Models\Flat;
use App\Models\Parking_Spot;
use App\Models\Hostel;
use App\Models\Office;
use App\Models\Land;
use App\Models\Community_Center;
use App\Models\Shooting_Spot;
use App\Models\Shop;
use App\Models\Factory;
use App\Models\Warehouse;
use App\Models\Pond;
use App\Models\Swimming_Pool;
use App\Models\Bilboard;
use App\Models\Rooftop;
use App\Models\Restaurant;
use App\Models\Exibution_Center;
use App\Models\Play_ground;
use App\Models\Payment;
use App\Models\Advertise;
use App\Models\Ghat;
use App\Models\marketing;
use App\Models\Picnic_Spot;
use App\Models\report;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Image;
use cart;
use Validator;

class UserController extends Controller
{
    function index()
    {
        $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        // dd($marketing);
        return view('frontend.layouts.service_item', compact('marketing'));
    }
    function registration()
    {
        return view('frontend.layouts.registration');
    }
    function header()
    {

        return view('frontend.include.header');
    }
    function footer()
    {
        return view('frontend.include.footer');
    }
    function faq()
    {
        return view('frontend.layouts.faq');
    }
    function marketing_request()
    {
        return view('frontend.layouts.marketing');
    }
    function advertise()
    {
        return view('frontend.include.advertise');
    }

    function report_contact_us()
    {
        return view('frontend.layouts.report_contact_us');
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
            $market = report::create([
                'name'    => $request->name,
                'mobile'   => $request->mobile,
                'email' => $request->email,
                'topic' => $request->topic,
                'description' => $request->description,
            ]);
            return redirect()->back()->with('massage', 'Thank you For Your Response. we will contact with to you');
        }
    }
   
    public function user_room_edit($id)
    {
        $list = Room::findOrFail($id);
        return view('user.room.single_room_list', compact('list'));
    }
    public function user_bilboard_edit($id)
    {
        $list = Bilboard::findOrFail($id);
        return view('user.bilboard.single_bilboard_list', compact('list'));
    }
    public function user_building_edit($id)
    {
        $list = Building::findOrFail($id);
        return view('user.building.single_building_list', compact('list'));
    }
    public function user_community_edit($id)
    {
        $list = Community_Center::findOrFail($id);
        return view('user.community.single_community_list', compact('list'));
    }
    public function user_exhibution_edit($id)
    {
        $list = Exibution_Center::findOrFail($id);
        return view('user.exhibution.single_exhibution_list', compact('list'));
    }
    public function user_factory_edit($id)
    {
        $list = Factory::findOrFail($id);
        return view('user.factory.single_factory_list', compact('list'));
    }
    public function user_flat_edit($id)
    {
        $list = Flat::findOrFail($id);
        return view('user.flat.single_flat_list', compact('list'));
    }
    public function user_hostel_edit($id)
    {
        $list = Hostel::findOrFail($id);
        return view('user.hostel.single_hostel_list', compact('list'));
    }
    public function user_hotel_edit($id)
    {
        $list = Hotel::findOrFail($id);
        return view('user.hotel.single_hotel_list', compact('list'));
    }
    public function user_office_edit($id)
    {
        $list = Office::findOrFail($id);
        return view('user.office.single_office_list', compact('list'));
    }
    public function user_playground_edit($id)
    {
        $list = Play_ground::findOrFail($id);
        return view('user.playground.single_playground_list', compact('list'));
    }
    public function user_pond_edit($id)
    {
        $list = Pond::findOrFail($id);
        return view('user.pond.single_pond_list', compact('list'));
    }
    public function user_resort_edit($id)
    {
        $list = Restaurant::findOrFail($id);
        return view('user.resort.single_resort_list', compact('list'));
    }
    public function user_rooftop_edit($id)
    {
        $list = Rooftop::findOrFail($id);
        return view('user.rooftop.single_rooftop_list', compact('list'));
    }
    public function user_shooting_edit($id)
    {
        $list = Shooting_Spot::findOrFail($id);
        return view('user.shooting.single_shooting_list', compact('list'));
    }
    public function user_shop_edit($id)
    {
        $list = Shop::findOrFail($id);
        return view('user.shop.single_shop_list', compact('list'));
    }
    public function user_swimming_edit($id)
    {
        $list = Swimming_Pool::findOrFail($id);
        return view('user.swimming.single_swimming_list', compact('list'));
    }
    public function user_land_edit($id)
    {
        $list = Land::findOrFail($id);
        return view('user.land.single_land_list', compact('list'));
    }
    public function user_warehouse_edit($id)
    {
        $list = Warehouse::findOrFail($id);
        return view('user.warehouse.single_warehouse_list', compact('list'));
    }
    public function user_parking_edit($id)
    {
        $list = Parking_Spot::findOrFail($id);
        return view('user.garage.single_parking_list', compact('list'));
    }
    function room()
    {
        $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Room::all();
        return view('frontend.layouts.room', compact('lists','marketing'));
    }
    function flat()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Flat::all();
        return view('frontend.layouts.flat', compact('lists','marketing'));
    }
    function building()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Building::all();
        return view('frontend.layouts.building', compact('lists','marketing'));
    }
    function parking()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Parking_Spot::all();
        return view('frontend.layouts.parking', compact('lists','marketing'));
    }
    function hotel()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Hotel::all();
        return view('frontend.layouts.hotel', compact('lists','marketing'));
    }
    function hostel()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Hostel::all();
        return view('frontend.layouts.hostel', compact('lists','marketing'));
    }
    function resort()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Restaurant::all();
        return view('frontend.layouts.resort', compact('lists','marketing'));
    }
    function office()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Office::all();
        return view('frontend.layouts.office', compact('lists','marketing'));
    }
    function shop()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Shop::all();
        return view('frontend.layouts.shop', compact('lists','marketing'));
    }
    function community_hall()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Community_Center::all();
        return view('frontend.layouts.community_hall', compact('lists','marketing'));
    }
    function factory()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Factory::all();
        return view('frontend.layouts.factory', compact('lists','marketing'));
    }
    function warehouse()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Warehouse::all();
        return view('frontend.layouts.warehouse', compact('lists','marketing'));
    }
    function land()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Land::all();
        return view('frontend.layouts.land', compact('lists','marketing'));
    }
    function pond()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Pond::all();
        return view('frontend.layouts.pond', compact('lists','marketing'));
    }
    function swimming_pool()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Swimming_Pool::all();
        return view('frontend.layouts.swimming_pool', compact('lists','marketing'));
    }
    function playground()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Play_ground::all();
        return view('frontend.layouts.playground', compact('lists','marketing'));
    }
    function shooting_spot()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Shooting_Spot::all();
        return view('frontend.layouts.shooting_spot', compact('lists','marketing'));
    }
    function exhibition_center()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Exibution_Center::all();
        return view('frontend.layouts.exhibition_center', compact('lists','marketing'));
    }
    function rooftop()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Rooftop::all();
        return view('frontend.layouts.rooftop', compact('lists','marketing'));
    }
    function bilboard()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Bilboard::all();
        return view('frontend.layouts.bilboard', compact('lists','marketing'));
    }
    function login_form()
    {
        return view('frontend.layouts.login_form');
    }
    function single_pg()
    {
        return view('frontend.layouts.single_pg');
    }
    function my_shortlist()
    {
        return view('frontend.layouts.my_shortlist');
    }
    function slider_section()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $rooms = Room::all();
        return view('frontend.layouts.include.slider_section', compact('rooms','marketing'));
    }


    function picnic_spot()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Room::all();
        return view('frontend.layouts.picnic_spot', compact('lists','marketing'));
    }
    function ghat()
    {
         $marketing = marketing::where('e_date', '<=', Carbon::today())->get();
        $lists = Room::all();
        return view('frontend.layouts.ghat', compact('lists','marketing'));
    }
    function package()
    {
        return view('frontend.layouts.package');
    }
    function term()
    {
        return view('frontend.layouts.terms');
    }



}
