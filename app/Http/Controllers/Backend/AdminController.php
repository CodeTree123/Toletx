<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bilboard;
use App\Models\Building;
use App\Models\Community_Center;
use App\Models\Exibution_Center;
use App\Models\Factory;
use App\Models\Flat;
use App\Models\forms;
use App\Models\Ghat;
use App\Models\Hostel;
use App\Models\Hotel;
use App\Models\Land;
use App\Models\marketing;
use App\Models\Office;
use App\Models\Parking_Spot;
use App\Models\Picnic_Spot;
use App\Models\Play_ground;
use App\Models\Pond;
use App\Models\report;
use App\Models\Restaurant;
use App\Models\Rooftop;
use App\Models\Room;
use App\Models\Shooting_Spot;
use App\Models\Shop;
use App\Models\Swimming_Pool;
use App\Models\User;
use App\Models\Warehouse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;

class AdminController extends Controller
{
    public function dashboard()
    {
        // user count
        $user = User::where('role_id', 2)->count();
        $user_year = User::where('role_id', 2)
            ->whereYear('created_at', Carbon::now())
            ->count();
        $user_month = User::where('role_id', 2)
            ->whereMonth('created_at', Carbon::now())
            ->count();

        // room count
        $room = Room::all()->count();
        $room_year = Room::whereYear('created_at', Carbon::now())->count();
        $room_month = Room::whereMonth('created_at', Carbon::now())->count();

        // flat count
        $flat = Flat::all()->count();
        $flat_year = Flat::whereYear('created_at', Carbon::now())->count();
        $flat_month = Flat::whereMonth('created_at', Carbon::now())->count();

        // building count
        $building = Building::all()->count();
        $building_year = Building::whereYear('created_at', Carbon::now())->count();
        $building_month = Building::whereMonth('created_at', Carbon::now())->count();


        // garage count
        $garage = Parking_Spot::all()->count();
        $garage_year = Parking_Spot::whereYear('created_at', Carbon::now())->count();
        $garage_month = Parking_Spot::whereMonth('created_at', Carbon::now())->count();

        // hotle count
        $hotel = Hotel::all()->count();
        $hotel_year = Hotel::whereYear('created_at', Carbon::now())->count();
        $hotel_month = Hotel::whereMonth('created_at', Carbon::now())->count();

        // hostel count
        $hostel = Hostel::all()->count();
        $hostel_year = Hostel::whereYear('created_at', Carbon::now())->count();
        $hostel_month = Hostel::whereMonth('created_at', Carbon::now())->count();

        // resort count
        $resort = Restaurant::all()->count();
        $resort_year = Restaurant::whereYear('created_at', Carbon::now())->count();
        $resort_month = Restaurant::whereMonth('created_at', Carbon::now())->count();

        // office count
        $office = Office::all()->count();
        $office_year = Office::whereYear('created_at', Carbon::now())->count();
        $office_month = Office::whereMonth('created_at', Carbon::now())->count();

        // shop count
        $shop = Shop::all()->count();
        $shop_year = Shop::whereYear('created_at', Carbon::now())->count();
        $shop_month = Shop::whereMonth('created_at', Carbon::now())->count();

        // hall count
        $hall = Community_Center::all()->count();
        $hall_year = Community_Center::whereYear('created_at', Carbon::now())->count();
        $hall_month = Community_Center::whereMonth('created_at', Carbon::now())->count();

        // factory count
        $factory = Factory::all()->count();
        $factory_year = Factory::whereYear('created_at', Carbon::now())->count();
        $factory_month = Factory::whereMonth('created_at', Carbon::now())->count();

        // warehouse count
        $warehouse = Warehouse::all()->count();
        $warehouse_year = Warehouse::whereYear('created_at', Carbon::now())->count();
        $warehouse_month = Warehouse::whereMonth('created_at', Carbon::now())->count();

        // land count
        $land = Land::all()->count();
        $land_year = Land::whereYear('created_at', Carbon::now())->count();
        $land_month = Land::whereMonth('created_at', Carbon::now())->count();

        // pond count
        $pond = Pond::all()->count();
        $pond_year = Pond::whereYear('created_at', Carbon::now())->count();
        $pond_month = Pond::whereMonth('created_at', Carbon::now())->count();

        // ghat count
        $ghat = Ghat::all()->count();
        $ghat_year = Ghat::whereYear('created_at', Carbon::now())->count();
        $ghat_month = Ghat::whereMonth('created_at', Carbon::now())->count();

        // pool count
        $pool = Swimming_Pool::all()->count();
        $pool_year = Swimming_Pool::whereYear('created_at', Carbon::now())->count();
        $pool_month = Swimming_Pool::whereMonth('created_at', Carbon::now())->count();

        // camp count
        $camp = Play_ground::all()->count();
        $camp_year = Play_ground::whereYear('created_at', Carbon::now())->count();
        $camp_month = Play_ground::whereMonth('created_at', Carbon::now())->count();

        // shoot count
        $shoot = Shooting_Spot::all()->count();
        $shoot_year = Shooting_Spot::whereYear('created_at', Carbon::now())->count();
        $shoot_month = Shooting_Spot::whereMonth('created_at', Carbon::now())->count();

        // picnic count
        $picnic = Picnic_Spot::all()->count();
        $picnic_year = Picnic_Spot::whereYear('created_at', Carbon::now())->count();
        $picnic_month = Picnic_Spot::whereMonth('created_at', Carbon::now())->count();

        // exhi count
        $exhi = Exibution_Center::all()->count();
        $exhi_year = Exibution_Center::whereYear('created_at', Carbon::now())->count();
        $exhi_month = Exibution_Center::whereMonth('created_at', Carbon::now())->count();

        // roof count
        $roof = Rooftop::all()->count();
        $roof_year = Rooftop::whereYear('created_at', Carbon::now())->count();
        $roof_month = Rooftop::whereMonth('created_at', Carbon::now())->count();

        // bilboard count
        $bilboard = Bilboard::all()->count();
        $bilboard_year = Bilboard::whereYear('created_at', Carbon::now())->count();
        $bilboard_month = Bilboard::whereMonth('created_at', Carbon::now())->count();

        return view(
            'admin.layout.admin_index',
            compact(
                'user',
                'user_year',
                'user_month',
                'room',
                'room_year',
                'room_month',
                'flat',
                'flat_year',
                'flat_month',
                'building',
                'building_year',
                'building_month',
                'garage',
                'garage_year',
                'garage_month',
                'hotel',
                'hotel_year',
                'hotel_month',
                'hostel',
                'hostel_year',
                'hostel_month',
                'resort',
                'resort_year',
                'resort_month',
                'office',
                'office_year',
                'office_month',
                'shop',
                'shop_year',
                'shop_month',
                'hall',
                'hall_year',
                'hall_month',
                'factory',
                'factory_year',
                'factory_month',
                'warehouse',
                'warehouse_year',
                'warehouse_month',
                'land',
                'land_year',
                'land_month',
                'pond',
                'pond_year',
                'pond_month',
                'ghat',
                'ghat_year',
                'ghat_month',
                'pool',
                'pool_year',
                'pool_month',
                'camp',
                'camp_year',
                'camp_month',
                'shoot',
                'shoot_year',
                'shoot_month',
                'picnic',
                'picnic_year',
                'picnic_month',
                'exhi',
                'exhi_year',
                'exhi_month',
                'roof',
                'roof_year',
                'roof_month',
                'bilboard',
                'bilboard_year',
                'bilboard_month'
            )
        );
    }
    public function user_list()
    {
        $users = User::all();
        return view('admin.layout.user_list', compact('users'));
    }
    public function room_list()
    {
        $rooms = Room::all();
        return view('admin.layout.room_list', compact('rooms'));
    }
    public function flat_list()
    {
        $flats = Flat::all();
        return view('admin.layout.flat_list', compact('flats'));
    }
    public function building_list()
    {
        $buildings = Building::all();
        return view('admin.layout.building_list', compact('buildings'));
    }
    public function garage_list()
    {
        $garages = Parking_Spot::all();
        return view('admin.layout.garage_list', compact('garages'));
    }
    public function hotel_list()
    {
        $hotels = Hotel::all();
        return view('admin.layout.hotel_list', compact('hotels'));
    }
    public function hostel_list()
    {
        $hostels = Hostel::all();
        return view('admin.layout.hostel_list', compact('hostels'));
    }
    public function resort_list()
    {
        $resorts = Restaurant::all();
        return view('admin.layout.resort_list', compact('resorts'));
    }
    public function office_list()
    {
        $offices = Office::all();
        return view('admin.layout.office_list', compact('offices'));
    }
    public function shop_list()
    {
        $shops = Shop::all();
        return view('admin.layout.shop_list', compact('shops'));
    }
    public function community_list()
    {
        $communities = Community_Center::all();
        return view('admin.layout.community_list', compact('communities'));
    }
    public function factory_list()
    {
        $factories = Factory::all();
        return view('admin.layout.factory_list', compact('factories'));
    }
    public function warehouse_list()
    {
        $warehouses = Warehouse::all();
        return view('admin.layout.warehouse_list', compact('warehouses'));
    }
    public function land_list()
    {
        $lands = Land::all();
        return view('admin.layout.land_list', compact('lands'));
    }
    public function pond_list()
    {
        $ponds = Pond::all();
        return view('admin.layout.pond_list', compact('ponds'));
    }
    public function ghat_list()
    {
        $ghats = Ghat::all();
        return view('admin.layout.ghat_list', compact('ghats'));
    }
    public function pool_list()
    {
        $pools = Swimming_Pool::all();
        return view('admin.layout.swimming_list', compact('pools'));
    }
    public function camp_list()
    {
        $camps = Play_ground::all();
        return view('admin.layout.playground_list', compact('camps'));
    }
    public function shooting_list()
    {
        $shootings = Shooting_Spot::all();
        return view('admin.layout.shooting_list', compact('shootings'));
    }
    public function picnic_list()
    {
        $picnics = Picnic_Spot::all();
        return view('admin.layout.picnic_list', compact('picnics'));
    }
    public function exhibition_list()
    {
        $exhibitions = Exibution_Center::all();
        return view('admin.layout.exhibition_list', compact('exhibitions'));
    }
    public function rooftop_list()
    {
        $rooftops = Rooftop::all();
        return view('admin.layout.rooftop_list', compact('rooftops'));
    }
    public function bilboard_list()
    {
        $bilboards = Bilboard::all();
        return view('admin.layout.bilboard_list', compact('bilboards'));
    }

    public function user_status($id)
    {

        $getStatus = User::find($id);

        if ($getStatus->admin_verify == 0) {
            $status = 1;
            User::where('id', '=', $id)->update(['admin_verify' => $status]);
        }
        if ($getStatus->admin_verify == 1) {
            $status = 2;
            User::where('id', '=', $id)->update(['admin_verify' => $status]);
        }
        if ($getStatus->admin_verify == 2) {
            $status = 1;
            User::where('id', '=', $id)->update(['admin_verify' => $status]);
        }

        return back();
    }

    public function report_list()
    {
        $reports = report::all();

        return view('admin.layout.request_form', compact('reports'));
    }
    public function form_list()
    {
        $marketing = marketing::where('e_date','>=',Carbon::today())->get();
        $expired = marketing::where('e_date','<',Carbon::today())->get();
        $forms = forms::all();
        return view('admin.layout.marketing', compact('marketing','expired','forms'));
    }
    public function expire_list()
    {
        $marketing = marketing::where('e_date','>=',Carbon::today())->get();
        $expired = marketing::where('e_date','<',Carbon::today())->get();
        $forms = forms::all();
        return view('admin.layout.marketing', compact('marketing','expired','forms'));
    }
    public function marketing_list()
    {
        $marketing = marketing::where('e_date','>=',Carbon::today())->get();
        $expired = marketing::where('e_date','<',Carbon::today())->get();
        $forms = forms::all();
        return view('admin.layout.marketing', compact('marketing','expired','forms'));
    }


    public function marketing_edit($id)
    {
        $market = marketing::find($id);
        return response()->json([
            'status'=> 200,
            'market'=> $market
        ]);
    }
    public function marketing_delete($id)
    {
        $marketing = marketing::find($id)->delete();
        return back();
    }
    public function marketing_post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'    => 'required',
            'phone'   => 'required',
            'company' => 'required',
            'address' => 'required',
            'package' => 'required',
            's_date'  => 'required',
            'e_date'  => 'required',
            'link'    => 'required',
            'image'   => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput()->with('add','sdljvnfsljvn');
        } else {
           $market= marketing::create([
                'name'    => $request->name,
                'phone'   =>$request->phone,
                'company' =>$request->company,
                'address' =>$request->address,
                'package' =>$request->package,
                's_date'  =>$request->s_date,
                'e_date'  =>$request->e_date,
                'link'    =>$request->link,
                'image'   =>$request->image,
            ]);
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('/uploads/marketings/'), $filename);
                $market['image'] = $filename;
            }
            $market->save();
            return redirect()->back()->with('massage','marketing post added Successfully');
        }
    }
    public function marketing_update(Request $request )
    {
        $validator = Validator::make($request->all(), [
            'name'    => 'required',
            'phone'   => 'required',
            'company' => 'required',
            'address' => 'required',
            'package' => 'required',
            's_date'  => 'required',
            'e_date'  => 'required',
            'link'    => 'required',
            'image'   => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput()->with('update','sdljvnfsljvn');
        }else {
            $id=$request->market_id;
            $market=marketing::find($id);
           $market->update([
                'name'    => $request->name,
                'phone'   =>$request->phone,
                'company' =>$request->company,
                'address' =>$request->address,
                'package' =>$request->package,
                's_date'  =>$request->s_date,
                'e_date'  =>$request->e_date,
                'link'    =>$request->link,
                'image'   =>$request->image,
            ]);
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('/uploads/marketings/'), $filename);
                $market['image'] = $filename;
            }
            $market->save();
            return redirect()->back()->with('massage','marketing update Successfully');
        }
    }
}
