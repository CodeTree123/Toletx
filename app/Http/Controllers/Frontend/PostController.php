<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Building;
use App\Models\forms;
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
use App\Models\Ghat;
use App\Models\marketing;
use App\Models\Play_ground;
use App\Models\Payment;
use App\Models\Picnic_Spot;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;
use File;
use Validator;

class PostController extends Controller
{
    function user_update(Request $request, $id)
    {
        // dd($request->all());
        $auth_image = User::findOrFail($id)->update([

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
            $photoName = $request->id . '.' . $photo->getClientOriginalExtension();
            if (User::findOrFail($request->id)) {
                image::make($photo)->save(base_path("public/uploads/registers/" . $photoName), 100);
                User::findOrFail($request->id)->update([
                    'image' => $photoName,
                ]);
            } else {
                (base_path("/uploads/auths/" . $photoName));
                Image::make($photo)->save(base_path("/uploads/registers/" . $photoName), 100);
            }
        }
        if ($request->hasFile('n_photo1')) {
            $photo1 = $request->n_photo1;
            $photo1Name = $request->id . '.' . $photo1->getClientOriginalExtension();
            if (User::findOrFail($request->id)) {
                image::make($photo1)->save(base_path("public/uploads/registers/" . $photo1Name), 100);
                User::findOrFail($request->id)->update([
                    'n_photo1' => $photo1Name,
                ]);
            } else {
                (base_path("/uploads/auths/" . $photo1Name));
                Image::make($photo1)->save(base_path("/uploads/registers/" . $photo1Name), 100);
            }
        }


        if ($request->hasFile('n_photo2')) {
            $photo2 = $request->n_photo2;
            $photo2Name = $request->id . '.' . $photo2->getClientOriginalExtension();
            if (User::findOrFail($request->id)) {
                image::make($photo2)->save(base_path("public/uploads/registers/" . $photo2Name), 100);
                User::findOrFail($request->id)->update([
                    'n_photo2' => $photo2Name,
                ]);
            } else {
                (base_path("/uploads/auths/" . $photo2Name));
                Image::make($photo2)->save(base_path("/uploads/registers/" . $photo2Name), 100);
            }
        }

        return redirect()->route('profile')->with('success', 'User information have been successfully Updated.');
    }
    public function profile()
    {
        $users = User::where('id', auth()->id())->get();
        $rooms = Room::where('user_id', auth()->id())->get();
        $flats = Flat::where('user_id', auth()->id())->get();
        $buildings = Building::where('user_id', auth()->id())->get();
        $parkings = Parking_Spot::where('user_id', auth()->id())->get();
        $hostels = Hostel::where('user_id', auth()->id())->get();
        $hotels = Hotel::where('user_id', auth()->id())->get();
        $retaurants = Restaurant::where('user_id', auth()->id())->get();
        $offices = Office::where('user_id', auth()->id())->get();
        $shops = Shop::where('user_id', auth()->id())->get();
        $communities = Community_Center::where('user_id', auth()->id())->get();
        $factories = Factory::where('user_id', auth()->id())->get();
        $warehouses = Warehouse::where('user_id', auth()->id())->get();
        $lands = Land::where('user_id', auth()->id())->get();
        $ponds = Pond::where('user_id', auth()->id())->get();
        $ghats = Ghat::where('user_id', auth()->id())->get();
        $swimmings = Swimming_Pool::where('user_id', auth()->id())->get();
        $playgrounds = Play_ground::where('user_id', auth()->id())->get();
        $shootings = Shooting_Spot::where('user_id', auth()->id())->get();
        $picnics = Picnic_Spot::where('user_id', auth()->id())->get();
        $exibutions = Exibution_Center::where('user_id', auth()->id())->get();
        $rooftops = Rooftop::where('user_id', auth()->id())->get();
        $bilboards = Bilboard::where('user_id', auth()->id())->get();
        $marketing = marketing::where('e_date', '<=', Carbon::today())->get();


        return view('frontend.layouts.profile', compact('users', 'rooms', 'bilboards', 'ghats', 'buildings', 'communities', 'exibutions', 'factories', 'flats', 'hostels', 'hotels', 'offices', 'playgrounds', 'ponds', 'retaurants', 'rooftops', 'shootings', 'shops', 'swimmings', 'lands', 'warehouses', 'parkings', 'picnics', 'marketing'));
    }
    function post_ghat()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_ghat', compact('list'));
    }
    function post_picnic()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_picnicspot', compact('list'));
    }
    function post_building()
    {

        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_building', compact('list'));
    }
    function post_bilboard()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_bilboard', compact('list'));
    }

    function post_room()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_room', compact('list'));
    }

    function post_hostel()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_hostel', compact('list'));
    }

    function post_hotel()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_hotel', compact('list'));
    }

    function post_flat()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_flat', compact('list'));
    }

    function post_resort()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_resort', compact('list'));
    }

    function post_parking_spot()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_parking_spot', compact('list'));
    }

    function post_office()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_office', compact('list'));
    }

    function post_community()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_community', compact('list'));
    }

    function post_warehouse()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_warehouse', compact('list'));
    }

    function post_land()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_land', compact('list'));
    }

    function post_pond()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_pond', compact('list'));
    }

    function post_swimmingpool()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_swimmingpool', compact('list'));
    }

    function post_playground()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_playground', compact('list'));
    }

    function post_shooting()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_shooting', compact('list'));
    }

    function post_exhibution()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_exhibution', compact('list'));
    }

    function post_rooftop()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_rooftop', compact('list'));
    }

    function post_factory()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_factory', compact('list'));
    }

    function post_shop()
    {
        $list = User::where('id', auth()->id())->first();
        return view('frontend.post_Rented_and_Wanted.post_shop', compact('list'));
    }

    function user_edit($id)
    {
        $list = User::findOrFail($id);
        return view('frontend.user.user_edit', compact('list'));
    }
    //ghat
    function post_ghat_rented(Request $request)
    {

        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/ghats/';
            $filename =  "ghat-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/ghats/';
            $filename1 =  "ghat-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/ghats/';
            $filename2 =  "ghat-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/ghats/';
            $filename3 =  "ghat-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/ghats/';
            $filename4 =  "ghat-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/ghats/';
            $filename5 =  "ghat-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/ghats/';
            $filename6 =  "ghat-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }

        Ghat::create([
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Ghat information have been successfully Added.');
    }
    function post_ghat_wanted(Request $request)
    {


        $ghat = Ghat::create([
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
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Ghat information have been successfully Added.');
    }
    //end ghat

    //picnic
    function post_picnic_rented(Request $request)
    {

        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/picnics/';
            $filename =  "picnic-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/picnics/';
            $filename1 =  "picnic-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/picnics/';
            $filename2 =  "picnic-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/picnics/';
            $filename3 =  "picnic-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/picnics/';
            $filename4 =  "picnic-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/picnics/';
            $filename5 =  "picnic-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/picnics/';
            $filename6 =  "picnic-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }

        Picnic_Spot::create([
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Picnic information have been successfully Added.');
    }
    function post_picnic_wanted(Request $request)
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
            'generator' => $request->generator,
            'price' => $request->price,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'shed' => $request->shed,
            'dining' => $request->dining,
            'toilet' => $request->toilet,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'change_room' => $request->change_room,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Picnic information have been successfully Added.');
    }
    //end picnic
    function post_hotel_rented(Request $request)
    {

        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/hotels/';
            $filename =  "hotel-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/hotels/';
            $filename1 =  "hotel-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/hotels/';
            $filename2 =  "hotel-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/hotels/';
            $filename3 =  "hotel-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/hotels/';
            $filename4 =  "hotel-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/hotels/';
            $filename5 =  "hotel-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/hotels/';
            $filename6 =  "hotel-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }
        Hotel::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'date' => $request->date,
            'phone' => $request->phone,
            's_charge' => $request->s_charge,
            'description' => $request->description,
            'hotel_name' => $request->hotel_name,
            'location' => $request->location,
            'room_type' => $request->room_type,
            'bathroom' => $request->bathroom,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'hot_water' => $request->hot_water,
            'generator' => $request->generator,
            'parking' => $request->parking,
            'ac' => $request->ac,
            'laundry' => $request->laundry,
            'price' => $request->price,
            'gym' => $request->gym,
            'sports' => $request->sports,
            'dining' => $request->dining,
            'fire_exit' => $request->fire_exit,
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Hotel information have been successfully Added.');
    }

    function post_hotel_wanted(Request $request)
    {
        $hotel = Hotel::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'date' => $request->date,
            'phone' => $request->phone,
            's_charge' => $request->s_charge,
            'description' => $request->description,
            'hotel_name' => $request->hotel_name,
            'location' => $request->location,
            'hot_water' => $request->hot_water,
            'generator' => $request->generator,
            'room_type' => $request->room_type,
            'bathroom' => $request->bathroom,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'ac' => $request->ac,
            'laundry' => $request->laundry,
            'price' => $request->price,
            'gym' => $request->gym,
            'sports' => $request->sports,
            'dining' => $request->dining,
            'fire_exit' => $request->fire_exit,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Hotel information have been successfully Added.');
    }
    //building
    function post_building_rented(Request $request)
    {
        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/buildings/';
            $filename =  "building-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/buildings/';
            $filename1 =  "building-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/buildings/';
            $filename2 =  "building-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/buildings/';
            $filename3 =  "building-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/buildings/';
            $filename4 =  "building-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/buildings/';
            $filename5 =  "building-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/buildings/';
            $filename6 =  "building-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }

        Building::create([
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Building information have been successfully Added.');
    }
    function post_building_wanted(Request $request)
    {
        $building = Building::create([
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
            't_build' => $request->t_build,
            'generator' => $request->generator,
            'road_width' => $request->road_width,
            'description' => $request->description,
            'address' => $request->address,
            'gas' => $request->gas,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'fire_exit' => $request->fire_exit,
            'address' => $request->address,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Building Wanted post successfully Added.');
    }
    //end building
    function post_flat_rented(Request $request)
    {

        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/flats/';
            $filename =  "flat-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/flats/';
            $filename1 =  "flat-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/flats/';
            $filename2 =  "flat-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/flats/';
            $filename3 =  "flat-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/flats/';
            $filename4 =  "flat-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/flats/';
            $filename5 =  "flat-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/flats/';
            $filename6 =  "flat-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }

        Flat::create([
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
            'varanda' => $request->varanda,
            'attached_toilet' => $request->attached_toilet,
            'ac' => $request->ac,
            'hot_water' => $request->hot_water,
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Flat information have been successfully Added.');
    }
    function post_flat_wanted(Request $request)
    {
        $flat = Flat::create([
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
            'varanda' => $request->varanda,
            'attached_toilet' => $request->attached_toilet,
            'ac' => $request->ac,
            'hot_water' => $request->hot_water,
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
            'active' => 1,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Flat information have been successfully Added.');
    }

    function post_parking_spot_rented(Request $request)
    {

        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/garages/';
            $filename =  "garage-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/garages/';
            $filename1 =  "garage-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/garages/';
            $filename2 =  "garage-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/garages/';
            $filename3 =  "garage-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/garages/';
            $filename4 =  "garage-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/garages/';
            $filename5 =  "garage-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/garages/';
            $filename6 =  "garage-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }

        Parking_Spot::create([
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Garage information have been successfully Added.');
    }
    function post_parking_spot_wanted(Request $request)
    {

        $parking = Parking_Spot::create([
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
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        return back()->with('success', 'Garage information have been successfully Added.');
    }
    function post_room_rented(Request $request)
    {
        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/rooms/';
            $filename =  "room-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/rooms/';
            $filename1 =  "room-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/rooms/';
            $filename2 =  "room-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/rooms/';
            $filename3 =  "room-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/rooms/';
            $filename4 =  "room-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/rooms/';
            $filename5 =  "room-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/rooms/';
            $filename6 =  "room-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }
        Room::create([
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Room information have been successfully Added.');
    }
    function post_room_wanted(Request $request)
    {
        $parking = Room::create([
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
            'generator' => $request->generator,
            'ac' => $request->ac,
            'wifi' => $request->wifi,
            'cable_tv' => $request->cable_tv,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Room information have been successfully Added.');
    }



    function post_hostel_rented(Request $request)
    {

        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/hostels/';
            $filename =  "hostel-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/hostels/';
            $filename1 =  "hostel-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/hostels/';
            $filename2 =  "hostel-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/hostels/';
            $filename3 =  "hostel-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/hostels/';
            $filename4 =  "hostel-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/hostels/';
            $filename5 =  "hostel-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/hostels/';
            $filename6 =  "hostel-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }
        Hostel::create([
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        return back()->with('success', 'Hostel Rented post successfully Added.');
    }
    public function post_hostel_wanted(Request $request)
    {

        $hostel = Hostel::create([
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
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        return back()->with('success', 'Hostel Wanted post successfully Added.');
    }
    function post_office_rented(Request $request)
    {

        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/offices/';
            $filename =  "office-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/offices/';
            $filename1 =  "office-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/offices/';
            $filename2 =  "office-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/offices/';
            $filename3 =  "office-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/offices/';
            $filename4 =  "office-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/offices/';
            $filename5 =  "office-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/offices/';
            $filename6 =  "office-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }

        Office::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);


        return back()->with('success', 'office information have been successfully Added.');
    }
    function post_office_wanted(Request $request)
    {
        $office = Office::create([
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
            's_charge' => $request->s_charge,
            'generator' => $request->generator,
            'interior_condition' => $request->interior_condition,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'office information have been successfully Added.');
    }

    function post_land_rented(Request $request)
    {

        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/lands/';
            $filename =  "land-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/lands/';
            $filename1 =  "land-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/lands/';
            $filename2 =  "land-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/lands/';
            $filename3 =  "land-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/lands/';
            $filename4 =  "land-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/lands/';
            $filename5 =  "land-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/lands/';
            $filename6 =  "land-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }

        Land::create([
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Land information have been successfully Added.');
    }
    function post_land_wanted(Request $request)
    {
        $land = Land::create([
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
            'y_price' => $request->y_price,
            'water' => $request->water,
            'drainage_system' => $request->drainage_system,
            'parking' => $request->parking,
            'road_width' => $request->road_width,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Land information have been successfully Added.');
    }
    function post_exibution_center_rented(Request $request)
    {
        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/exhibutions/';
            $filename =  "exhibution-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/exhibutions/';
            $filename1 =  "exhibution-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/exhibutions/';
            $filename2 =  "exhibution-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/exhibutions/';
            $filename3 =  "exhibution-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/exhibutions/';
            $filename4 =  "exhibution-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/exhibutions/';
            $filename5 =  "exhibution-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/exhibutions/';
            $filename6 =  "exhibution-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }

        Exibution_Center::create([
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
            'road_width' => $request->road_width,
            'generator' => $request->generator,
            'floor_level' => $request->floor_level,
            'toilet' => $request->toilet,
            'lift' => $request->lift,
            'fire_exit' => $request->fire_exit,
            'parking' => $request->parking,
            'price' => $request->price,
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);


        return back()->with('success', 'exibution_center information have been successfully Added.');
    }

    function post_exibution_center_wanted(Request $request)
    {
        $exibution_center = Exibution_Center::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'generator' => $request->generator,
            'interior_condition' => $request->interior_condition,
            'room_size' => $request->room_size,
            'room_type' => $request->room_type,
            'road_width' => $request->road_width,
            'floor_level' => $request->floor_level,
            'toilet' => $request->toilet,
            'lift' => $request->lift,
            'fire_exit' => $request->fire_exit,
            'parking' => $request->parking,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'exibution_center information have been successfully Added.');
    }
    function post_playground_rented(Request $request)
    {
        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/playgrounds/';
            $filename =  "playground-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/playgrounds/';
            $filename1 =  "playground-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/playgrounds/';
            $filename2 =  "playground-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/playgrounds/';
            $filename3 =  "playground-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/playgrounds/';
            $filename4 =  "playground-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/playgrounds/';
            $filename5 =  "playground-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/playgrounds/';
            $filename6 =  "playground-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }

        Play_ground::create([
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Camp Site information have been successfully Added.');
    }

    function post_playground_wanted(Request $request)
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
            'generator' => $request->generator,
            'change_room' => $request->change_room,
            'gym' => $request->gym,
            'parking' => $request->parking,
            'sports' => $request->sports,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Camp Site information have been successfully Added.');
    }
    function post_restuarant_rented(Request $request)
    {

        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/resturents/';
            $filename =  "resturent-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/resturents/';
            $filename1 =  "resturent-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/resturents/';
            $filename2 =  "resturent-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/resturents/';
            $filename3 =  "resturent-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/resturents/';
            $filename4 =  "resturent-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/resturents/';
            $filename5 =  "resturent-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/resturents/';
            $filename6 =  "resturent-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }

        Restaurant::create([
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Resort information have been successfully Added.');
    }
    function post_restuarant_wanted(Request $request)
    {
        $restaurant = Restaurant::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'resort_name' => $request->resort_name,
            'address' => $request->address,
            'room_type' => $request->room_type,
            'generator' => $request->generator,
            'attached_toilet' => $request->attached_toilet,
            'hot_water' => $request->hot_water,
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
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Resort information have been successfully Added.');
    }
    function post_rooftop_rented(Request $request)
    {
        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/rooftops/';
            $filename =  "rooftop-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/rooftops/';
            $filename1 =  "rooftop-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/rooftops/';
            $filename2 =  "rooftop-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/rooftops/';
            $filename3 =  "rooftop-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/rooftops/';
            $filename4 =  "rooftop-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/rooftops/';
            $filename5 =  "rooftop-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/rooftops/';
            $filename6 =  "rooftop-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }

        Rooftop::create([
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Rooftop information have been successfully Added.');
    }

    function post_rooftop_wanted(Request $request)
    {
        $rooftop = Rooftop::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'generator' => $request->generator,
            'address' => $request->address,
            'floor_area' => $request->floor_area,
            'toilet' => $request->toilet,
            'shed' => $request->shed,
            'p_protection' => $request->p_protection,
            'lift' => $request->lift,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'parking' => $request->parking,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Rooftop information have been successfully Added.');
    }
    function post_bilboard_rented(Request $request)
    {

        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/bilboards/';
            $filename =  "bilboard-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/bilboards/';
            $filename1 =  "bilboard-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/bilboards/';
            $filename2 =  "bilboard-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/bilboards/';
            $filename3 =  "bilboard-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/bilboards/';
            $filename4 =  "bilboard-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/bilboards/';
            $filename5 =  "bilboard-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/bilboards/';
            $filename6 =  "bilboard-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }

        Bilboard::create([
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Billboard rented Post successfully Added.');
    }
    public function post_bilboard_wanted(Request $request)
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
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        return back()->with('success', 'Billboard Wanted Post successfully Added.');
    }
    function post_swimmingpool_rented(Request $request)
    {

        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/swimmingpools/';
            $filename =  "swimmingpool-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/swimmingpools/';
            $filename1 =  "swimmingpool-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/swimmingpools/';
            $filename2 =  "swimmingpool-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/swimmingpools/';
            $filename3 =  "swimmingpool-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/swimmingpools/';
            $filename4 =  "swimmingpool-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/swimmingpools/';
            $filename5 =  "swimmingpool-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/swimmingpools/';
            $filename6 =  "swimmingpool-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }

        Swimming_Pool::create([
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);


        return back()->with('success', 'swimmingpool Rented successfully Added.');
    }
    public function post_swimmingpool_wanted(Request $request)
    {

        $swimmingpool = Swimming_Pool::create([
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
            'generator' => $request->generator,
            'laundry' => $request->laundry,
            'change_room' => $request->change_room,
            'parking' => $request->parking,
            'laundry' => $request->laundry,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        return back()->with('success', 'swimmingpool Wanted Post successfully Added.');
    }
    function post_pond_rented(Request $request)
    {

        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/ponds/';
            $filename =  "pond-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/ponds/';
            $filename1 =  "pond-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/ponds/';
            $filename2 =  "pond-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/ponds/';
            $filename3 =  "pond-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/ponds/';
            $filename4 =  "pond-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/ponds/';
            $filename5 =  "pond-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/ponds/';
            $filename6 =  "pond-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }


        Pond::create([
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);


        return back()->with('success', 'Pond information have been successfully Added.');
    }

    function post_pond_wanted(Request $request)
    {

        $pond = Pond::create([
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
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Pond information have been successfully Added.');
    }
    function post_warehouse_rented(Request $request)
    {

        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/warehouses/';
            $filename =  "warehouse-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/warehouses/';
            $filename1 =  "warehouse-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/warehouses/';
            $filename2 =  "warehouse-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/warehouses/';
            $filename3 =  "warehouse-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/warehouses/';
            $filename4 =  "warehouse-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/warehouses/';
            $filename5 =  "warehouse-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/warehouses/';
            $filename6 =  "warehouse-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }

        Warehouse::create([
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'warehouse Rent Post successfully Added.');
    }
    function post_warehouse_wanted(Request $request)
    {

        $warehouse = Warehouse::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'description' => $request->description,
            'type' => $request->type,
            'ac' => $request->ac,
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
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'warehouse Wanted Post successfully Added.');
    }
    function post_factory_rented(Request $request)
    {

        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/factories/';
            $filename =  "factorie-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/factories/';
            $filename1 =  "factorie-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/factories/';
            $filename2 =  "factorie-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/factories/';
            $filename3 =  "factorie-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/factories/';
            $filename4 =  "factorie-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/factories/';
            $filename5 =  "factorie-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/factories/';
            $filename6 =  "factorie-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }

        Factory::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Factory information have been successfully Added.');
    }

    function post_factory_wanted(Request $request)
    {

        $factory = Factory::create([
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
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Factory information have been successfully Added.');
    }

    function post_shop_rented(Request $request)
    {

        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/shops/';
            $filename =  "shop-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/shops/';
            $filename1 =  "shop-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/shops/';
            $filename2 =  "shop-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/shops/';
            $filename3 =  "shop-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/shops/';
            $filename4 =  "shop-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/shops/';
            $filename5 =  "shop-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/shops/';
            $filename6 =  "shop-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }
        Shop::create([
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Shop information have been successfully Added.');
    }
    function post_shop_wanted(Request $request)
    {

        $shop = Shop::create([

            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'generator' => $request->generator,
            'road_width' => $request->road_width,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);


        return back()->with('success', 'Shop information have been successfully Added.');
    }
    function post_shooting_rented(Request $request)
    {

        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/shootings/';
            $filename =  "shooting-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/shootings/';
            $filename1 =  "shooting-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/shootings/';
            $filename2 =  "shooting-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/shootings/';
            $filename3 =  "shooting-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/shootings/';
            $filename4 =  "shooting-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/shootings/';
            $filename5 =  "shooting-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/shootings/';
            $filename6 =  "shooting-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }

        Shooting_Spot::create([
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Shooting Spot information have been successfully Added.');
    }



    function post_shooting_wanted(Request $request)
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
            'shed' => $request->shed,
            'generator' => $request->generator,
            'gas' => $request->gas,
            'toilet' => $request->toilet,
            'electricity' => $request->electricity,
            'change_room' => $request->change_room,
            'parking' => $request->parking,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Shooting Spot information have been successfully Added.');
    }
    function post_community_rented(Request $request)
    {

        $filename = '';
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        // store photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/communities/';
            $filename =  "community-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/communities/';
            $filename1 =  "community-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
        }
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/communities/';
            $filename2 =  "community-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
        }
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/communities/';
            $filename3 =  "community-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
        }
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/communities/';
            $filename4 =  "community-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
        }
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/communities/';
            $filename5 =  "community-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
        }
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/communities/';
            $filename6 =  "community-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
        }
        Community_Center::create([
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
            'photo' => $filename,
            'photo1' => $filename1,
            'photo2' => $filename2,
            'photo3' => $filename3,
            'photo4' => $filename4,
            'photo5' => $filename5,
            'photo6' => $filename6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Community Center information have been successfully Added.');
    }

    function post_community_wanted(Request $request)
    {

        $community = Community_Center::create([
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
            'seat' => $request->seat,
            'interior_condition' => $request->interior_condition,
            'fire_safety' => $request->fire_safety,
            'generator' => $request->generator,
            'lift' => $request->lift,
            'wifi' => $request->wifi,
            'parking' => $request->parking,
            'gas' => $request->gas,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'ac' => $request->ac,
            'price' => $request->price,
            's_charge' => $request->s_charge,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Community Center information have been successfully Added.');
    }


    //post delete method
    function image_delete($model, $id, $path, $image_col, $image_name)
    {
        // $t = strtolower($model);
        // $tt = $t."s";
        // $destination = 'public/uploads/'.$tt.'/'.$image_name;
        // $image_Path = public_path("\uploads\\{$path}\\").$image_name;
        // dd($t,$tt,$destination,$image_Path);
        $modal_name = "App\Models\\{$model}";
        $list = $modal_name::find($id);
        $image_Path = public_path("\uploads\\{$path}\\") . $image_name;
        if (File::exists($image_Path)) {
            File::delete($image_Path);
        }
        $list->update([
            $image_col => null
        ]);
        return back();
    }


    function picnic_delete($id)
    {
        $list = Picnic_Spot::findOrFail($id)->delete();
        return back();
    }
    function ghat_delete($id)
    {
        $list = Ghat::findOrFail($id)->delete();
        return back();
    }
    function pond_delete($id)
    {
        $list = Pond::findOrFail($id)->delete();
        return back();
    }
    function building_delete($id)
    {
        $list = Building::findOrFail($id)->delete();
        return back();
    }
    function swimmingpool_delete($id)
    {
        $list = Swimming_Pool::findOrFail($id)->delete();
        return back();
    }
    function bilboard_delete($id)
    {
        $list = Bilboard::findOrFail($id)->delete();
        return back();
    }
    function rooftop_delete($id)
    {
        $list = Rooftop::findOrFail($id)->delete();
        return back();
    }
    function restuarant_delete($id)
    {
        $list = Restaurant::findOrFail($id)->delete();
        return back();
    }
    function exibution_center_delete($id)
    {
        $list = Exibution_Center::findOrFail($id)->delete();
        return back();
    }
    function playground_delete($id)
    {
        $list = Play_ground::findOrFail($id)->delete();
        return back();
    }
    function shop_delete($id)
    {
        $list = Shop::findOrFail($id)->delete();
        return back();
    }

    function shooting_delete($id)
    {
        $list = Shooting_Spot::findOrFail($id)->delete();
        return back();
    }
    function community_delete($id)
    {
        $list = Community_Center::findOrFail($id)->delete();
        return back();
    }
    function land_delete($id)
    {
        $list = Land::findOrFail($id)->delete();
        return back();
    }
    function office_delete($id)
    {
        $list = Office::findOrFail($id)->delete();
        return back();
    }

    function hostel_delete($id)
    {
        $list = Hostel::findOrFail($id)->delete();
        return back();
    }
    function parking_spot_delete($id)
    {
        $list = Parking_Spot::findOrFail($id)->delete();
        return back();
    }
    function flat_delete($id)
    {
        $list = Flat::findOrFail($id)->delete();
        return back();
    }
    function room_delete($id)
    {
        $list = Room::findOrFail($id)->delete();
        return back();
    }
    function hotel_delete($id)
    {
        $list = Hotel::findOrFail($id)->delete();
        return back();
    }
    function factory_delete($id)
    {
        $list = Factory::findOrFail($id)->delete();
        return back();
    }
    function warehouse_delete($id)
    {
        $list = Warehouse::findOrFail($id)->delete();
        return back();
    }
    public function Form(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'package' => 'required',
            'company_name' => 'required',
            'company_address' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput()->with('error', 'Fillup the form Correctly.');
        } else {
            forms::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'package' => $request->package,
                'company_name' => $request->company_name,
                'massage' => $request->massage,
                'company_address' => $request->company_address,
            ]);
            return redirect()->back()->with('success', 'Form Submited. Authority Will contact with you.');
        }
    }
}
