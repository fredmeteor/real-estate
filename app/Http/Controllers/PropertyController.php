<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\House;
use Image;
use App\Land;

class PropertyController extends Controller
{
    public function addHouse(Request $request){

        $request->validate([
            'name' => 'required|max:30|min:3',
            'type' => 'required',
            'amount' => 'required',
            'city' => 'required',
            'postalcode' => 'required|integer',
            'province' => 'required',
            'description' => 'required',
            'contactno' => 'required',
            'contactemail' => 'email|required',
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'lat' => 'required',
            'lat' => 'required',
            'rooms' => 'required|integer',
            'kitchen' => 'required|integer',
            'floor' => 'required|integer',
            'washroom' => 'required|integer',
            'size' => 'required|integer',
            'swimming' => 'required',
            'garden' => 'required',
            'nschool' => 'required',
            'nrailway' => 'required',
            'nbus' => 'required'
            
        ]);

        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name= time() . '.' . $image->getClientOriginalExtension();
                //$image->move(public_path().'/uploads/property/house', $name);
                Image::make($image)->resize(1280,876)->save(\public_path('/uploads/property/house/' . $name));  
                $data[] = $name;  
            }
         }

        $property = new Property;
        $property->user_id = auth()->id();
        $property->name = request('name');
        $property->type = request('type');
        $property->amount = request('amount');
        $property->city = request('city');
        $property->postalCode = request('postalcode');
        $property->province = request('province');
        $property->description = request('description');
        $property->contactNo = request('contactno');
        $property->contatctEmail = request('contactemail');
        $property->images =json_encode($data);
        $property->latitude = request('lat');
        $property->longitude = request('lng');
        $property->save();

        $house = new House;
        $house->property()->associate($property);
        $house->noOfRooms = request('rooms');
        $house->noOfKitchen = request('kitchen');
        $house->noOfFloors = request('floor');
        $house->noOfWashrooms = request('washroom');
        $house->size = request('size');
        $house->swimmingPool = request('swimming');
        $house->garden = request('garden');
        $house->nearestSchool = request('nschool');
        $house->nearestRailway = request('nrailway');
        $house->nearestBusStop = request('nbus');
        $house->save();

        return back();

    }

    public function addLand(Request $request){

        $request->validate([
            'name' => 'required|max:30|min:3',
            'type' => 'required',
            'amount' => 'required',
            'city' => 'required',
            'postalcode' => 'required|integer',
            'province' => 'required',
            'description' => 'required',
            'contactno' => 'required',
            'contactemail' => 'email|required',
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'lat' => 'required',
            'lat' => 'required',
            'size' => 'required|integer',
            'electricity' => 'required',
            'tapwater' => 'required',
            'nschool' => 'required',
            'nrailway' => 'required',
            'nbus' => 'required'
            
        ]);

        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name= time() . '.' . $image->getClientOriginalExtension();
                //$image->move(public_path().'/uploads/property/house', $name);
                Image::make($image)->resize(1280,876)->save(\public_path('/uploads/property/house/' . $name));  
                $data[] = $name;  
            }
         }

        $property = new Property;
        $property->user_id = auth()->id();
        $property->name = request('name');
        $property->type = request('type');
        $property->amount = request('amount');
        $property->city = request('city');
        $property->postalCode = request('postalcode');
        $property->province = request('province');
        $property->description = request('description');
        $property->contactNo = request('contactno');
        $property->contatctEmail = request('contactemail');
        $property->images =json_encode($data);
        $property->latitude = request('lat');
        $property->longitude = request('lng');
        $property->save();

        $house = new Land;
        $house->property()->associate($property);
        $house->size = request('size');
        $house->electricity = request('electricity');
        $house->tapwater = request('tapwater');
        $house->nearestSchool = request('nschool');
        $house->nearestRailway = request('nrailway');
        $house->nearestBusStop = request('nbus');
        $house->save();

        return back();

    }
}