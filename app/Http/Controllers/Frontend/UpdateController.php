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
use App\Models\Shooting_Spot;
use App\Models\Shop;
use App\Models\Swimming_Pool;
use App\Models\Warehouse;
use Illuminate\Http\Request;


class UpdateController extends Controller
{
    function room_update(Request $request, $id)
    {
        // finding id
        $room = Room::find($id);
        // photo update
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/rooms/';
            $filename =  "room-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $room['photo'] = $filename;
            $room->update(['photo' => $filename]);
        } else {
            unset($room['photo']);
        }


        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/rooms/';
            $filename1 =  "room-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $room['photo1'] = $filename1;
            $room->update(['photo1' => $filename1]);
        } else {
            unset($room['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/rooms/';
            $filename2 =  "room-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $room['photo2'] = $filename2;
            $room->update(['photo2' => $filename2]);
        } else {
            unset($room['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/rooms/';
            $filename3 =  "room-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $room['photo3'] = $filename3;
            $room->update(['photo3' => $filename3]);
        } else {
            unset($room['photo3']);
        }


        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/rooms/';
            $filename4 =  "room-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $room['photo4'] = $filename4;
            $room->update(['photo4' => $filename4]);
        } else {
            unset($room['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/rooms/';
            $filename5 =  "room-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $room['photo5'] = $filename5;
            $room->update(['photo5' => $filename5]);
        } else {
            unset($room['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/rooms/';
            $filename6 =  "room-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $room['photo6'] = $filename6;
            $room->update(['photo6' => $filename6]);
        } else {
            unset($room['photo6']);
        }


        // update full row based on id
        $room->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            's_charge' => $request->s_charge,
            'description' => $request->description,
            'address' => $request->address,
            'room_size' => $request->room_size,
            'price' => $request->price,
            'guest_count' => $request->guest_count,
            'wifi' => $request->wifi,
            'attached_toilet' => $request->attached_toilet,
            'varanda' => $request->varanda,
            'gas' => $request->gas,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'lift' => $request->lift,
            'furnished' => $request->furnished,
            'hot_water' => $request->hot_water,
            'ac' => $request->ac,
            'cable_tv' => $request->cable_tv,
            'parking' => $request->parking,
            'generator' => $request->generator,
            'video' => $request->video,
        ]);

        return back()->with('success', 'Room information have been successfully Updated.');
    }

    function flat_update(Request $request, $id)
    {
        $flat = Flat::find($id);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/flats/';
            $filename =  "flat-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $flat['photo'] = $filename;
            $flat->update(['photo' => $filename]);
        } else {
            unset($flat['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/flats/';
            $filename1 =  "flat-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $flat['photo1'] = $filename1;
            $flat->update(['photo1' => $filename1]);
        } else {
            unset($flat['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/flats/';
            $filename2 =  "flat-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $flat['photo2'] = $filename2;
            $flat->update(['photo2' => $filename2]);
        } else {
            unset($flat['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/flats/';
            $filename3 =  "flat-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $flat['photo3'] = $filename3;
            $flat->update(['photo3' => $filename3]);
        } else {
            unset($flat['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/flats/';
            $filename4 =  "flat-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $flat['photo4'] = $filename4;
            $flat->update(['photo4' => $filename4]);
        } else {
            unset($flat['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/flats/';
            $filename5 =  "flat-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $flat['photo5'] = $filename5;
            $flat->update(['photo5' => $filename5]);
        } else {
            unset($flat['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/flats/';
            $filename6 =  "flat-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $flat['photo6'] = $filename6;
            $flat->update(['photo6' => $filename6]);
        } else {
            unset($flat['photo6']);
        }

        $flat->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            's_charge' => $request->s_charge,
            's_per_charge' => $request->s_per_charge,
            'price' => $request->price,
            'per_price' => $request->per_price,
            'description' => $request->description,
            'address' => $request->address,
            'flat_size' => $request->flat_size,
            'floor_level' => $request->floor_level,
            'bedrooms' => $request->bedrooms,
            'fire_exit' => $request->fire_exit,
            'wifi' => $request->wifi,
            'attached_toilet' => $request->attached_toilet,
            'kitchen' => $request->kitchen,
            'drawing' => $request->drawing,
            'varanda' => $request->varanda,
            'dining' => $request->dining,
            'lift' => $request->lift,
            'furnished' => $request->furnished,
            'generator' => $request->generator,
            'hot_water' => $request->hot_water,
            'ac' => $request->ac,
            'cable_tv' => $request->cable_tv,
            'gas' => $request->gas,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'parking' => $request->parking,
            'video' => $request->video,
        ]);

        return back()->with('success', 'Flat information have been successfully Updated.');
    }


    function building_update(Request $request, $id)
    {
        $building = Building::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/buildings/';
            $filename =  "building-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $building['photo'] = $filename;
            $building->update(['photo' => $filename]);
        } else {
            unset($building['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/buildings/';
            $filename1 =  "building-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $building['photo1'] = $filename1;
            $building->update(['photo1' => $filename1]);
        } else {
            unset($building['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/buildings/';
            $filename2 =  "building-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $building['photo2'] = $filename2;
            $building->update(['photo2' => $filename2]);
        } else {
            unset($building['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/buildings/';
            $filename3 =  "building-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $building['photo3'] = $filename3;
            $building->update(['photo3' => $filename3]);
        } else {
            unset($building['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/buildings/';
            $filename4 =  "building-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $building['photo4'] = $filename4;
            $building->update(['photo4' => $filename4]);
        } else {
            unset($building['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/buildings/';
            $filename5 =  "building-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $building['photo5'] = $filename5;
            $building->update(['photo5' => $filename5]);
        } else {
            unset($building['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/buildings/';
            $filename6 =  "building-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $building['photo6'] = $filename6;
            $building->update(['photo6' => $filename6]);
        } else {
            unset($building['photo6']);
        }

        $building->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'building_name' => $request->building_name,
            'date' => $request->date,
            'phone' => $request->phone,
            'price' => $request->price,
            'per_price' => $request->per_price,
            's_charge' => $request->s_charge,
            's_per_charge' => $request->s_per_charge,
            'building_size' => $request->building_size,
            'floor' => $request->floor,
            'floor_size' => $request->floor_size,
            't_build' => $request->t_build,
            'road_width' => $request->road_width,
            'description' => $request->description,
            'address' => $request->address,
            'gas' => $request->gas,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'lift' => $request->lift,
            'generator' => $request->generator,
            'parking' => $request->parking,
            'fire_exit' => $request->fire_exit,
            'video' => $request->video,
        ]);

        return back()->with('success', 'Building information have been successfully Updated.');
    }

    function parking_spot_update(Request $request, $id)
    {
        $garage = Parking_Spot::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/garages/';
            $filename =  "garages-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $garage['photo'] = $filename;
            $garage->update(['photo' => $filename]);
        } else {
            unset($garage['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/garages/';
            $filename1 =  "garage-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $garage['photo1'] = $filename1;
            $garage->update(['photo1' => $filename1]);
        } else {
            unset($garage['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/garages/';
            $filename2 =  "garage-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $garage['photo2'] = $filename2;
            $garage->update(['photo2' => $filename2]);
        } else {
            unset($garage['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/garages/';
            $filename3 =  "garage-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $garage['photo3'] = $filename3;
            $garage->update(['photo3' => $filename3]);
        } else {
            unset($garage['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/garages/';
            $filename4 =  "garage-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $garage['photo4'] = $filename4;
            $garage->update(['photo4' => $filename4]);
        } else {
            unset($garage['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/garages/';
            $filename5 =  "garage-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $garage['photo5'] = $filename5;
            $garage->update(['photo5' => $filename5]);
        } else {
            unset($garage['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/garages/';
            $filename6 =  "garage-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $garage['photo6'] = $filename6;
            $garage->update(['photo6' => $filename6]);
        } else {
            unset($garage['photo6']);
        }

        $garage->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'address' => $request->address,
            'description' => $request->description,
            'price' => $request->price,
            'per_price' => $request->per_price,
            'floor_level' => $request->floor_level,
            'floor_height' => $request->floor_height,
            'vehicle_type' => $request->vehicle_type,
            'video' => $request->video,
        ]);

        return back()->with('success', 'Building information have been successfully Updated.');
    }

    function hotel_update(Request $request, $id)
    {
        $hotel = Hotel::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/hotels/';
            $filename =  "hotel-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $hotel['photo'] = $filename;
            $hotel->update(['photo' => $filename]);
        } else {
            unset($hotel['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/hotels/';
            $filename1 =  "hotel-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $hotel['photo1'] = $filename1;
            $hotel->update(['photo1' => $filename1]);
        } else {
            unset($hotel['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/hotels/';
            $filename2 =  "hotel-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $hotel['photo2'] = $filename2;
            $hotel->update(['photo2' => $filename2]);
        } else {
            unset($hotel['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/hotels/';
            $filename3 =  "hotel-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $hotel['photo3'] = $filename3;
            $hotel->update(['photo3' => $filename3]);
        } else {
            unset($hotel['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/hotels/';
            $filename4 =  "hotel-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $hotel['photo4'] = $filename4;
            $hotel->update(['photo4' => $filename4]);
        } else {
            unset($hotel['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/hotels/';
            $filename5 =  "hotel-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $hotel['photo5'] = $filename5;
            $hotel->update(['photo5' => $filename5]);
        } else {
            unset($hotel['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/hotels/';
            $filename6 =  "hotel-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $hotel['photo6'] = $filename6;
            $hotel->update(['photo6' => $filename6]);
        } else {
            unset($hotel['photo6']);
        }

        $hotel->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'post_title' => $request->post_title,
            'date' => $request->date,
            'phone' => $request->phone,
            'price' => $request->price,
            'per_price' => $request->per_price,
            's_charge' => $request->s_charge,
            's_per_price' => $request->s_per_price,
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
            'gym' => $request->gym,
            'sports' => $request->sports,
            'dining' => $request->dining,
            'fire_exit' => $request->fire_exit,
            'video' => $request->video,
        ]);
        return back()->with('success', 'Hotel information have been successfully Updated.');
    }
    function hostel_update(Request $request, $id)
    {
        $hostel = Hostel::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/hostels/';
            $filename =  "hostel-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $hostel['photo'] = $filename;
            $hostel->update(['photo' => $filename]);
        } else {
            unset($hostel['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/hostels/';
            $filename1 =  "hostel-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $hostel['photo1'] = $filename1;
            $hostel->update(['photo1' => $filename1]);
        } else {
            unset($hostel['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/hostels/';
            $filename2 =  "hostel-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $hostel['photo2'] = $filename2;
            $hostel->update(['photo2' => $filename2]);
        } else {
            unset($hostel['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/hostels/';
            $filename3 =  "hostel-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $hostel['photo3'] = $filename3;
            $hostel->update(['photo3' => $filename3]);
        } else {
            unset($hostel['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/hostels/';
            $filename4 =  "hostel-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $hostel['photo4'] = $filename4;
            $hostel->update(['photo4' => $filename4]);
        } else {
            unset($hostel['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/hostels/';
            $filename5 =  "hostel-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $hostel['photo5'] = $filename5;
            $hostel->update(['photo5' => $filename5]);
        } else {
            unset($hostel['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/hostels/';
            $filename6 =  "hostel-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $hostel['photo6'] = $filename6;
            $hostel->update(['photo6' => $filename6]);
        } else {
            unset($hostel['photo6']);
        }

        $hostel->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'date' => $request->date,
            'phone' => $request->phone,
            's_charge' => $request->s_charge,
            's_per_price' => $request->s_per_price,
            'description' => $request->description,
            'hostel_name' => $request->hostel_name,
            'address' => $request->address,
            'room_size' => $request->room_size,
            'room_type' => $request->room_type,
            'price' => $request->price,
            'per_price' => $request->per_price,
            'wifi' => $request->wifi,
            'attached_toilet' => $request->attached_toilet,
            'generator' => $request->generator,
            'lift' => $request->lift,
            'furnished' => $request->furnished,
            'hot_water' => $request->hot_water,
            'laundry' => $request->laundry,
            'ac' => $request->ac,
            'pool' => $request->pool,
            'parking' => $request->parking,
            'dining' => $request->dining,
            'gym' => $request->gym,
            'spa' => $request->spa,
            'sports' => $request->sports,
            'video' => $request->video,

        ]);
        return back()->with('success', 'Hostel Rented post successfully Updated.');
    }
    function restuarant_update(Request $request, $id)
    {
        $restuarant = Restaurant::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/resturents/';
            $filename =  "restuarant-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $restuarant['photo'] = $filename;
            $restuarant->update(['photo' => $filename]);
        } else {
            unset($restuarant['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/resturents/';
            $filename1 =  "restuarant-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $restuarant['photo1'] = $filename1;
            $restuarant->update(['photo1' => $filename1]);
        } else {
            unset($restuarant['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/resturents/';
            $filename2 =  "restuarant-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $restuarant['photo2'] = $filename2;
            $restuarant->update(['photo2' => $filename2]);
        } else {
            unset($restuarant['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/resturents/';
            $filename3 =  "restuarant-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $restuarant['photo3'] = $filename3;
            $restuarant->update(['photo3' => $filename3]);
        } else {
            unset($restuarant['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/resturents/';
            $filename4 =  "restuarant-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $restuarant['photo4'] = $filename4;
            $restuarant->update(['photo4' => $filename4]);
        } else {
            unset($restuarant['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/resturents/';
            $filename5 =  "restuarant-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $restuarant['photo5'] = $filename5;
            $restuarant->update(['photo5' => $filename5]);
        } else {
            unset($restuarant['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/resturents/';
            $filename6 =  "restuarant-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $restuarant['photo6'] = $filename6;
            $restuarant->update(['photo6' => $filename6]);
        } else {
            unset($restuarant['photo6']);
        }

        $restuarant->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'post_title' => $request->post_title,
            'date' => $request->date,
            'phone' => $request->phone,
            's_charge' => $request->s_charge,
            's_per_price' => $request->s_per_price,
            'description' => $request->description,
            'resort_name' => $request->resort_name,
            'address' => $request->address,
            'room_type' => $request->room_type,
            'price' => $request->price,
            'per_price' => $request->per_price,
            'wifi' => $request->wifi,
            'attached_toilet' => $request->attached_toilet,
            'generator' => $request->generator,
            'lift' => $request->lift,
            'hot_water' => $request->hot_water,
            'laundry' => $request->laundry,
            'ac' => $request->ac,
            'spa' => $request->spa,
            'parking' => $request->parking,
            'dining' => $request->dining,
            'gym' => $request->gym,
            'sports' => $request->sports,
            'swimmingpool' => $request->swimmingpool,
            'video' => $request->video,

        ]);

        return back()->with('success', 'Resort information have been successfully Updated.');
    }
    function office_update(Request $request, $id)
    {
        $office = Office::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/offices/';
            $filename =  "office-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $office['photo'] = $filename;
            $office->update(['photo' => $filename]);
        } else {
            unset($office['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/offices/';
            $filename1 =  "office-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $office['photo1'] = $filename1;
            $office->update(['photo1' => $filename1]);
        } else {
            unset($office['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/offices/';
            $filename2 =  "office-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $office['photo2'] = $filename2;
            $office->update(['photo2' => $filename2]);
        } else {
            unset($office['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/offices/';
            $filename3 =  "office-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $office['photo3'] = $filename3;
            $office->update(['photo3' => $filename3]);
        } else {
            unset($office['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/offices/';
            $filename4 =  "office-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $office['photo4'] = $filename4;
            $office->update(['photo4' => $filename4]);
        } else {
            unset($office['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/offices/';
            $filename5 =  "office-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $office['photo5'] = $filename5;
            $office->update(['photo5' => $filename5]);
        } else {
            unset($office['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/offices/';
            $filename6 =  "office-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $office['photo6'] = $filename6;
            $office->update(['photo6' => $filename6]);
        } else {
            unset($office['photo6']);
        }

        $office->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            's_charge' => $request->s_charge,
            's_per_price' => $request->s_per_price,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'interior_condition' => $request->interior_condition,
            'price' => $request->price,
            'per_price' => $request->per_price,
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


        return back()->with('success', 'office information have been successfully Updated.');
    }
    function shop_update(Request $request, $id)
    {
        $shop = Shop::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/shops/';
            $filename =  "shop-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $shop['photo'] = $filename;
            $shop->update(['photo' => $filename]);
        } else {
            unset($shop['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/shops/';
            $filename1 =  "shop-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $shop['photo1'] = $filename1;
            $shop->update(['photo1' => $filename1]);
        } else {
            unset($shop['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/shops/';
            $filename2 =  "shop-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $shop['photo2'] = $filename2;
            $shop->update(['photo2' => $filename2]);
        } else {
            unset($shop['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/shops/';
            $filename3 =  "shop-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $shop['photo3'] = $filename3;
            $shop->update(['photo3' => $filename3]);
        } else {
            unset($shop['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/shops/';
            $filename4 =  "shop-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $shop['photo4'] = $filename4;
            $shop->update(['photo4' => $filename4]);
        } else {
            unset($shop['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/shops/';
            $filename5 =  "shop-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $shop['photo5'] = $filename5;
            $shop->update(['photo5' => $filename5]);
        } else {
            unset($shop['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/shops/';
            $filename6 =  "shop-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $shop['photo6'] = $filename6;
            $shop->update(['photo6' => $filename6]);
        } else {
            unset($shop['photo6']);
        }

        $shop->update([
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
            'video' => $request->video,
        ]);

        return back()->with('success', 'Shop information have been successfully Updated.');
    }
    function community_update(Request $request, $id)
    {
        $communitie = Community_Center::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/communities/';
            $filename =  "communitie-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $communitie['photo'] = $filename;
            $communitie->update(['photo' => $filename]);
        } else {
            unset($communitie['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/communities/';
            $filename1 =  "communitie-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $communitie['photo1'] = $filename1;
            $communitie->update(['photo1' => $filename1]);
        } else {
            unset($communitie['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/communities/';
            $filename2 =  "communitie-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $communitie['photo2'] = $filename2;
            $communitie->update(['photo2' => $filename2]);
        } else {
            unset($communitie['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/communities/';
            $filename3 =  "communitie-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $communitie['photo3'] = $filename3;
            $communitie->update(['photo3' => $filename3]);
        } else {
            unset($communitie['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/communities/';
            $filename4 =  "communitie-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $communitie['photo4'] = $filename4;
            $communitie->update(['photo4' => $filename4]);
        } else {
            unset($communitie['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/communities/';
            $filename5 =  "communitie-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $communitie['photo5'] = $filename5;
            $communitie->update(['photo5' => $filename5]);
        } else {
            unset($communitie['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/communities/';
            $filename6 =  "communitie-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $communitie['photo6'] = $filename6;
            $communitie->update(['photo6' => $filename6]);
        } else {
            unset($communitie['photo6']);
        }

        $communitie->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'c_name' => $request->c_name,
            'date' => $request->date,
            'phone' => $request->phone,
            's_charge' => $request->s_charge,
            's_per_price' => $request->s_per_price,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'interior_condition' => $request->interior_condition,
            'price' => $request->price,
            'per_price' => $request->per_price,
            'fire_safety' => $request->fire_safety,
            'generator' => $request->generator,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'seat' => $request->seat,
            'wifi' => $request->wifi,
            'gas' => $request->gas,
            'electricity' => $request->electricity,
            'water' => $request->water,
            'ac' => $request->ac,
            'video' => $request->video,
        ]);

        return back()->with('success', 'Community Center information have been successfully Updated.');
    }
    function factory_update(Request $request, $id)
    {
        $factorie = Factory::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/factories/';
            $filename =  "factorie-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $factorie['photo'] = $filename;
            $factorie->update(['photo' => $filename]);
        } else {
            unset($factorie['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/factories/';
            $filename1 =  "factorie-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $factorie['photo1'] = $filename1;
            $factorie->update(['photo1' => $filename1]);
        } else {
            unset($factorie['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/factories/';
            $filename2 =  "factorie-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $factorie['photo2'] = $filename2;
            $factorie->update(['photo2' => $filename2]);
        } else {
            unset($factorie['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/factories/';
            $filename3 =  "factorie-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $factorie['photo3'] = $filename3;
            $factorie->update(['photo3' => $filename3]);
        } else {
            unset($factorie['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/factories/';
            $filename4 =  "factorie-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $factorie['photo4'] = $filename4;
            $factorie->update(['photo4' => $filename4]);
        } else {
            unset($factorie['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/factories/';
            $filename5 =  "factorie-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $factorie['photo5'] = $filename5;
            $factorie->update(['photo5' => $filename5]);
        } else {
            unset($factorie['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/factories/';
            $filename6 =  "factorie-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $factorie['photo6'] = $filename6;
            $factorie->update(['photo6' => $filename6]);
        } else {
            unset($factorie['photo6']);
        }

        $factorie->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_height' => $request->floor_height,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'price' => $request->price,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'drainage_system' => $request->drainage_system,
            'gas' => $request->gas,
            'water' => $request->water,
            'generator' => $request->generator,
            'electricity' => $request->electricity,
            'ac' => $request->ac,
            'video' => $request->video,
        ]);

        return back()->with('success', 'Factory information have been successfully Updated.');
    }
    function warehouse_update(Request $request, $id)
    {
        $warehouse = Warehouse::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/warehouses/';
            $filename =  "warehouse-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $warehouse['photo'] = $filename;
            $warehouse->update(['photo' => $filename]);
        } else {
            unset($warehouse['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/warehouses/';
            $filename1 =  "warehouse-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $warehouse['photo1'] = $filename1;
            $warehouse->update(['photo1' => $filename1]);
        } else {
            unset($warehouse['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/warehouses/';
            $filename2 =  "warehouse-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $warehouse['photo2'] = $filename2;
            $warehouse->update(['photo2' => $filename2]);
        } else {
            unset($warehouse['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/warehouses/';
            $filename3 =  "warehouse-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $warehouse['photo3'] = $filename3;
            $warehouse->update(['photo3' => $filename3]);
        } else {
            unset($warehouse['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/warehouses/';
            $filename4 =  "warehouse-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $warehouse['photo4'] = $filename4;
            $warehouse->update(['photo4' => $filename4]);
        } else {
            unset($warehouse['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/warehouses/';
            $filename5 =  "warehouse-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $warehouse['photo5'] = $filename5;
            $warehouse->update(['photo5' => $filename5]);
        } else {
            unset($warehouse['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/warehouses/';
            $filename6 =  "warehouse-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $warehouse['photo6'] = $filename6;
            $warehouse->update(['photo6' => $filename6]);
        } else {
            unset($warehouse['photo6']);
        }

        $warehouse->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'type' => $request->type,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'building_condition' => $request->building_condition,
            'price' => $request->price,
            'fire_safety' => $request->fire_safety,
            'generator' => $request->generator,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'drainage_system' => $request->drainage_system,
            'gas' => $request->gas,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'ac' => $request->ac,
            'video' => $request->video
        ]);

        return back()->with('success', 'Warehouse information have been successfully Updated.');
    }
    function pond_update(Request $request, $id)
    {
        $pond = Pond::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/ponds/';
            $filename =  "pond-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $pond['photo'] = $filename;
            $pond->update(['photo' => $filename]);
        } else {
            unset($pond['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/ponds/';
            $filename1 =  "pond-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $pond['photo1'] = $filename1;
            $pond->update(['photo1' => $filename1]);
        } else {
            unset($pond['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/ponds/';
            $filename2 =  "pond-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $pond['photo2'] = $filename2;
            $pond->update(['photo2' => $filename2]);
        } else {
            unset($pond['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/ponds/';
            $filename3 =  "pond-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $pond['photo3'] = $filename3;
            $pond->update(['photo3' => $filename3]);
        } else {
            unset($pond['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/ponds/';
            $filename4 =  "pond-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $pond['photo4'] = $filename4;
            $pond->update(['photo4' => $filename4]);
        } else {
            unset($pond['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/ponds/';
            $filename5 =  "pond-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $pond['photo5'] = $filename5;
            $pond->update(['photo5' => $filename5]);
        } else {
            unset($pond['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/ponds/';
            $filename6 =  "pond-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $pond['photo6'] = $filename6;
            $pond->update(['photo6' => $filename6]);
        } else {
            unset($pond['photo6']);
        }
        $pond->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'road_width' => $request->road_width,
            'water_level' => $request->water_level,
            'pond_area' => $request->pond_area,
            'price' => $request->price,
            'per_price' => $request->per_price,
            'video' => $request->video,
        ]);

        return back()->with('success', 'pond information have been successfully Updated.');
    }
    function land_update(Request $request, $id)
    {
        $land = Land::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/lands/';
            $filename =  "land-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $land['photo'] = $filename;
            $land->update(['photo' => $filename]);
        } else {
            unset($land['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/lands/';
            $filename1 =  "land-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $land['photo1'] = $filename1;
            $land->update(['photo1' => $filename1]);
        } else {
            unset($land['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/lands/';
            $filename2 =  "land-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $land['photo2'] = $filename2;
            $land->update(['photo2' => $filename2]);
        } else {
            unset($land['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/lands/';
            $filename3 =  "land-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $land['photo3'] = $filename3;
            $land->update(['photo3' => $filename3]);
        } else {
            unset($land['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/lands/';
            $filename4 =  "land-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $land['photo4'] = $filename4;
            $land->update(['photo4' => $filename4]);
        } else {
            unset($land['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/lands/';
            $filename5 =  "land-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $land['photo5'] = $filename5;
            $land->update(['photo5' => $filename5]);
        } else {
            unset($land['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/lands/';
            $filename6 =  "land-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $land['photo6'] = $filename6;
            $land->update(['photo6' => $filename6]);
        } else {
            unset($land['photo6']);
        }
        $land->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'land_area' => $request->land_area,
            'land_height' => $request->land_height,
            'road_width' => $request->road_width,
            'price' => $request->price,
            'per_price' => $request->per_price,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'drainage_system' => $request->drainage_system,
            'parking' => $request->parking,
            'video' => $request->video,
        ]);

        return back()->with('success', 'land information have been successfully Updated.');
    }
    function ghat_update(Request $request, $id)
    {
        $ghat = Ghat::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/ghats/';
            $filename =  "ghat-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $ghat['photo'] = $filename;
            $ghat->update(['photo' => $filename]);
        } else {
            unset($ghat['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/ghats/';
            $filename1 =  "ghat-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $ghat['photo1'] = $filename1;
            $ghat->update(['photo1' => $filename1]);
        } else {
            unset($ghat['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/ghats/';
            $filename2 =  "ghat-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $ghat['photo2'] = $filename2;
            $ghat->update(['photo2' => $filename2]);
        } else {
            unset($ghat['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/ghats/';
            $filename3 =  "ghat-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $ghat['photo3'] = $filename3;
            $ghat->update(['photo3' => $filename3]);
        } else {
            unset($ghat['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/ghats/';
            $filename4 =  "ghat-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $ghat['photo4'] = $filename4;
            $ghat->update(['photo4' => $filename4]);
        } else {
            unset($ghat['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/ghats/';
            $filename5 =  "ghat-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $ghat['photo5'] = $filename5;
            $ghat->update(['photo5' => $filename5]);
        } else {
            unset($ghat['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/ghats/';
            $filename6 =  "ghat-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $ghat['photo6'] = $filename6;
            $ghat->update(['photo6' => $filename6]);
        } else {
            unset($ghat['photo6']);
        }
        $ghat->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'price' => $request->price,
            'per_price' => $request->per_price,
            'description' => $request->description,
            'address' => $request->address,
            'toilet' => $request->toilet,
            'parking' => $request->parking,
            'video' => $request->video,
        ]);

        return back()->with('success', 'Ghat information have been successfully Updated.');
    }
    function swimmingpool_update(Request $request, $id)
    {
        $swimmingpool = Swimming_Pool::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/swimmingpools/';
            $filename =  "swimmingpool-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $swimmingpool['photo'] = $filename;
            $swimmingpool->update(['photo' => $filename]);
        } else {
            unset($swimmingpool['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/swimmingpools/';
            $filename1 =  "swimmingpool-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $swimmingpool['photo1'] = $filename1;
            $swimmingpool->update(['photo1' => $filename1]);
        } else {
            unset($swimmingpool['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/swimmingpools/';
            $filename2 =  "swimmingpool-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $swimmingpool['photo2'] = $filename2;
            $swimmingpool->update(['photo2' => $filename2]);
        } else {
            unset($swimmingpool['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/swimmingpools/';
            $filename3 =  "swimmingpool-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $swimmingpool['photo3'] = $filename3;
            $swimmingpool->update(['photo3' => $filename3]);
        } else {
            unset($swimmingpool['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/swimmingpools/';
            $filename4 =  "swimmingpool-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $swimmingpool['photo4'] = $filename4;
            $swimmingpool->update(['photo4' => $filename4]);
        } else {
            unset($swimmingpool['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/swimmingpools/';
            $filename5 =  "swimmingpool-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $swimmingpool['photo5'] = $filename5;
            $swimmingpool->update(['photo5' => $filename5]);
        } else {
            unset($swimmingpool['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/swimmingpools/';
            $filename6 =  "swimmingpool-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $swimmingpool['photo6'] = $filename6;
            $swimmingpool->update(['photo6' => $filename6]);
        } else {
            unset($swimmingpool['photo6']);
        }

        $swimmingpool->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'type' => $request->type,
            'size' => $request->size,
            'price' => $request->price,
            'per_price' => $request->per_price,
            'wifi' => $request->wifi,
            'shed' => $request->shed,
            'laundry' => $request->laundry,
            'change_room' => $request->change_room,
            'generator' => $request->generator,
            'toilet' => $request->toilet,
            'parking' => $request->parking,
            'video' => $request->video,
        ]);

        return back()->with('success', 'Swimming Pool information have been successfully Updated.');
    }
    function playground_update(Request $request, $id)
    {
        $playground = Play_ground::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/playgrounds/';
            $filename =  "playground-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $playground['photo'] = $filename;
            $playground->update(['photo' => $filename]);
        } else {
            unset($playground['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/playgrounds/';
            $filename1 =  "playground-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $playground['photo1'] = $filename1;
            $playground->update(['photo1' => $filename1]);
        } else {
            unset($playground['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/playgrounds/';
            $filename2 =  "playground-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $playground['photo2'] = $filename2;
            $playground->update(['photo2' => $filename2]);
        } else {
            unset($playground['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/playgrounds/';
            $filename3 =  "playground-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $playground['photo3'] = $filename3;
            $playground->update(['photo3' => $filename3]);
        } else {
            unset($playground['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/playgrounds/';
            $filename4 =  "playground-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $playground['photo4'] = $filename4;
            $playground->update(['photo4' => $filename4]);
        } else {
            unset($playground['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/playgrounds/';
            $filename5 =  "playground-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $playground['photo5'] = $filename5;
            $playground->update(['photo5' => $filename5]);
        } else {
            unset($playground['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/playgrounds/';
            $filename6 =  "playground-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $playground['photo6'] = $filename6;
            $playground->update(['photo6' => $filename6]);
        } else {
            unset($playground['photo6']);
        }

        $playground->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'c_name' => $request->c_name,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'area' => $request->area,
            'price' => $request->price,
            'per_price' => $request->per_price,
            'shed' => $request->shed,
            'toilet' => $request->toilet,
            'change_room' => $request->change_room,
            'parking' => $request->parking,
            'gym' => $request->gym,
            'generator' => $request->generator,
            'sports' => $request->sports,
            'video' => $request->video,
        ]);

        return back()->with('success', 'Camp site information have been successfully Updated.');
    }
    function shooting_update(Request $request, $id)
    {
        $shooting = Shooting_Spot::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/shootings/';
            $filename =  "shooting-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $shooting['photo'] = $filename;
            $shooting->update(['photo' => $filename]);
        } else {
            unset($shooting['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/shootings/';
            $filename1 =  "shooting-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $shooting['photo1'] = $filename1;
            $shooting->update(['photo1' => $filename1]);
        } else {
            unset($shooting['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/shootings/';
            $filename2 =  "shooting-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $shooting['photo2'] = $filename2;
            $shooting->update(['photo2' => $filename2]);
        } else {
            unset($shooting['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/shootings/';
            $filename3 =  "shooting-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $shooting['photo3'] = $filename3;
            $shooting->update(['photo3' => $filename3]);
        } else {
            unset($shooting['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/shootings/';
            $filename4 =  "shooting-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $shooting['photo4'] = $filename4;
            $shooting->update(['photo4' => $filename4]);
        } else {
            unset($shooting['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/shootings/';
            $filename5 =  "shooting-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $shooting['photo5'] = $filename5;
            $shooting->update(['photo5' => $filename5]);
        } else {
            unset($shooting['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/shootings/';
            $filename6 =  "shooting-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $shooting['photo6'] = $filename6;
            $shooting->update(['photo6' => $filename6]);
        } else {
            unset($shooting['photo6']);
        }

        $shooting->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'c_name' => $request->c_name,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_area' => $request->floor_area,
            'road_width' => $request->road_width,
            'price' => $request->price,
            'per_price' => $request->per_price,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'dining' => $request->dining,
            'electricity' => $request->electricity,
            'toilet' => $request->toilet,
            'shed' => $request->shed,
            'generator' => $request->generator,
            'gas' => $request->gas,
            'water' => $request->water,
            'change_room' => $request->change_room,
            'video' => $request->video,
        ]);
        return back()->with('success', 'Shooting Spot information have been successfully Updated.');
    }
    function picnic_update(Request $request, $id)
    {
        $picnic = Picnic_Spot::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/picnics/';
            $filename =  "picnic-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $picnic['photo'] = $filename;
            $picnic->update(['photo' => $filename]);
        } else {
            unset($picnic['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/picnics/';
            $filename1 =  "picnic-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $picnic['photo1'] = $filename1;
            $picnic->update(['photo1' => $filename1]);
        } else {
            unset($picnic['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/picnics/';
            $filename2 =  "picnic-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $picnic['photo2'] = $filename2;
            $picnic->update(['photo2' => $filename2]);
        } else {
            unset($picnic['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/picnics/';
            $filename3 =  "picnic-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $picnic['photo3'] = $filename3;
            $picnic->update(['photo3' => $filename3]);
        } else {
            unset($picnic['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/picnics/';
            $filename4 =  "picnic-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $picnic['photo4'] = $filename4;
            $picnic->update(['photo4' => $filename4]);
        } else {
            unset($picnic['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/picnics/';
            $filename5 =  "picnic-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $picnic['photo5'] = $filename5;
            $picnic->update(['photo5' => $filename5]);
        } else {
            unset($picnic['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/picnics/';
            $filename6 =  "picnic-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $picnic['photo6'] = $filename6;
            $picnic->update(['photo6' => $filename6]);
        } else {
            unset($picnic['photo6']);
        }
        $picnic->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'c_name' => $request->c_name,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'land_area' => $request->land_area,
            'address' => $request->address,
            'price' => $request->price,
            'per_price' => $request->per_price,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'dining' => $request->dining,
            'shed' => $request->shed,
            'toilet' => $request->toilet,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'generator' => $request->generator,
            'change_room' => $request->change_room,
            'video' => $request->video,
        ]);
        return back()->with('success', 'Picnic Spot information have been successfully Updated.');
    }
    function exibution_center_update(Request $request, $id)
    {
        $exhibution = Exibution_Center::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/exhibutions/';
            $filename =  "exhibution-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $exhibution['photo'] = $filename;
            $exhibution->update(['photo' => $filename]);
        } else {
            unset($exhibution['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/exhibutions/';
            $filename1 =  "exhibution-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $exhibution['photo1'] = $filename1;
            $exhibution->update(['photo1' => $filename1]);
        } else {
            unset($exhibution['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/exhibutions/';
            $filename2 =  "exhibution-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $exhibution['photo2'] = $filename2;
            $exhibution->update(['photo2' => $filename2]);
        } else {
            unset($exhibution['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/exhibutions/';
            $filename3 =  "exhibution-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $exhibution['photo3'] = $filename3;
            $exhibution->update(['photo3' => $filename3]);
        } else {
            unset($exhibution['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/exhibutions/';
            $filename4 =  "exhibution-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $exhibution['photo4'] = $filename4;
            $exhibution->update(['photo4' => $filename4]);
        } else {
            unset($exhibution['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/exhibutions/';
            $filename5 =  "exhibution-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $exhibution['photo5'] = $filename5;
            $exhibution->update(['photo5' => $filename5]);
        } else {
            unset($exhibution['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/exhibutions/';
            $filename6 =  "exhibution-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $exhibution['photo6'] = $filename6;
            $exhibution->update(['photo6' => $filename6]);
        } else {
            unset($exhibution['photo6']);
        }
        $exhibution->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'c_name' => $request->c_name,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'room_size'   => $request->room_size,
            'interior_condition' => $request->interior_condition,
            'floor_level' => $request->floor_level,
            'room_type' => $request->room_type,
            'road_width' => $request->road_width,
            'price' => $request->price,
            'toilet' => $request->toilet,
            'lift' => $request->lift,
            'fire_exit' => $request->fire_exit,
            'generator' => $request->generator,
            'parking' => $request->parking,
            'video' => $request->video,
        ]);
        return back()->with('success', 'Exibution Center information have been successfully Updated.');
    }

    function rooftop_update(Request $request, $id)
    {
        $rooftop = Rooftop::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/rooftops/';
            $filename =  "rooftop-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $rooftop['photo'] = $filename;
            $rooftop->update(['photo' => $filename]);
        } else {
            unset($rooftop['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/rooftops/';
            $filename1 =  "rooftop-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $rooftop['photo1'] = $filename1;
            $rooftop->update(['photo1' => $filename1]);
        } else {
            unset($rooftop['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/rooftops/';
            $filename2 =  "rooftop-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $rooftop['photo2'] = $filename2;
            $rooftop->update(['photo2' => $filename2]);
        } else {
            unset($rooftop['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/rooftops/';
            $filename3 =  "rooftop-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $rooftop['photo3'] = $filename3;
            $rooftop->update(['photo3' => $filename3]);
        } else {
            unset($rooftop['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/rooftops/';
            $filename4 =  "rooftop-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $rooftop['photo4'] = $filename4;
            $rooftop->update(['photo4' => $filename4]);
        } else {
            unset($rooftop['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/rooftops/';
            $filename5 =  "rooftop-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $rooftop['photo5'] = $filename5;
            $rooftop->update(['photo5' => $filename5]);
        } else {
            unset($rooftop['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/rooftops/';
            $filename6 =  "rooftop-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $rooftop['photo6'] = $filename6;
            $rooftop->update(['photo6' => $filename6]);
        } else {
            unset($rooftop['photo6']);
        }

        $rooftop->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'c_name' => $request->c_name,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_area' => $request->floor_area,
            'price' => $request->price,
            'per_price' => $request->per_price,
            'toilet' => $request->toilet,
            'p_protection' => $request->p_protection,
            'generator' => $request->generator,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'shed' => $request->shed,
            'video' => $request->video,
        ]);
        return back()->with('success', 'Rooftop information have been successfully Updated.');
    }
    function bilboard_update(Request $request, $id)
    {
        $bilboard = Bilboard::find($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $destinationPath = 'public/uploads/bilboards/';
            $filename =  "bilboard-1-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $bilboard['photo'] = $filename;
            $bilboard->update(['photo' => $filename]);
        } else {
            unset($bilboard['photo']);
        }

        // photo1 update
        if ($request->hasFile('photo1')) {
            $file = $request->file('photo1');
            $destinationPath = 'public/uploads/bilboards/';
            $filename1 =  "bilboard-2-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename1);
            $bilboard['photo1'] = $filename1;
            $bilboard->update(['photo1' => $filename1]);
        } else {
            unset($bilboard['photo1']);
        }

        // photo2 update
        if ($request->hasFile('photo2')) {
            $file = $request->file('photo2');
            $destinationPath = 'public/uploads/bilboards/';
            $filename2 =  "bilboard-3-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename2);
            $bilboard['photo2'] = $filename2;
            $bilboard->update(['photo2' => $filename2]);
        } else {
            unset($bilboard['photo2']);
        }

        // photo3 update
        if ($request->hasFile('photo3')) {
            $file = $request->file('photo3');
            $destinationPath = 'public/uploads/bilboards/';
            $filename3 =  "bilboard-4-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename3);
            $bilboard['photo3'] = $filename3;
            $bilboard->update(['photo3' => $filename3]);
        } else {
            unset($bilboard['photo3']);
        }

        // photo4 update
        if ($request->hasFile('photo4')) {
            $file = $request->file('photo4');
            $destinationPath = 'public/uploads/bilboards/';
            $filename4 =  "bilboard-5-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename4);
            $bilboard['photo4'] = $filename4;
            $bilboard->update(['photo4' => $filename4]);
        } else {
            unset($bilboard['photo4']);
        }

        // photo5 update
        if ($request->hasFile('photo5')) {
            $file = $request->file('photo5');
            $destinationPath = 'public/uploads/bilboards/';
            $filename5 =  "bilboard-6-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename5);
            $bilboard['photo5'] = $filename5;
            $bilboard->update(['photo5' => $filename5]);
        } else {
            unset($bilboard['photo5']);
        }

        // photo6 update
        if ($request->hasFile('photo6')) {
            $file = $request->file('photo6');
            $destinationPath = 'public/uploads/bilboards/';
            $filename6 =  "bilboard-7-" . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename6);
            $bilboard['photo6'] = $filename6;
            $bilboard->update(['photo6' => $filename6]);
        } else {
            unset($bilboard['photo6']);
        }

        $bilboard->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'price' => $request->price,
            'per_price' => $request->per_price,
            'size' => $request->size,
            'height' => $request->height,
            'type' => $request->type,
            'description' => $request->description,
            'address' => $request->address,
            'electricity' => $request->electricity,
            'video' => $request->video
        ]);
        return back()->with('success', 'Billboard information have been successfully Updated.');
    }
}
