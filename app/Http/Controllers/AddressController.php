<?php

namespace App\Http\Controllers;

use App\Models\country;
use App\Models\Place;
use Illuminate\Http\Request;

class AddressController extends Controller
{
   public function Location(){
    $place = Place::all();
    $country = country::all();
    return view("Address", [
        "locate"=> $place,
        "country"=>$country,
    ]);
   }

   public function place(Request $request){

    $request->validate(
     [
         'location' => 'required',
         'city' => 'required',
         'state' => 'required',
         'country' => 'required',
     ]);
    $table = new Place();
    $table->location = $request->get('location');
    $table->city = $request->get('city');
    $table->state = $request->get('state');
    $table->country = $request->get('country');
    $table->save();

    return redirect()->back();
    }


    public function DeleteData($id){

        $data = Place::find($id);
      $data->delete();
      return redirect()->back();
     }

     public function EditData($id){
        $data = Place::find($id);
        $country = Country::all();
        return view('AddressEdit', [
            "edit" => $data,
            "country"=> $country,
        ]);
    }

    public function UpdateData(Request $request, $id){
        $request->validate(
            [
                'location' => 'required',
                'city' => 'required',
                'state' => 'required',
                'country' => 'required',
            ]);
            // $product = country::find($id);
            // $product->name = $request->get('name');
            // $product->save();

            $product = Place::find($id);
            $product->location = $request->get('location');
            $product->city = $request->get('city');
            $product->state = $request->get('state');
            $product->country = $request->get('country');

            $product->save();

            return redirect()->route('Location');
    }

}
